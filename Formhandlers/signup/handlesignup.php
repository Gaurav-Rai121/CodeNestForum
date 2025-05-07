    <?php

        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        header('Referrer-Policy: no-referrer');
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
        header("Content-Security-Policy: default-src 'self'; script-src 'self' https://www.google.com https://www.recaptcha.net https://www.gstatic.com; frame-src 'self' https://www.google.com https://www.recaptcha.net; style-src 'self'; img-src 'self';");




        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_strict_mode', 1);
        ini_set('session.cookie_samesite', 'Lax');

        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
            ini_set('session.cookie_secure', 1);
        }
        
    session_start();

    require_once __DIR__.'/../../vendor/autoload.php';
    include('../../components/db/database.php');
    define('USERNAME_MIN_LEN', 4);
    define('USERNAME_MAX_LEN', 10);
    define('PASSWORD_MIN_LEN', 8);
    define('PASSWORD_MAX_LEN', 64);
    define('ATTEMPTS_MAX', 5);




    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = (string)$_POST['username'];
        $email = (string)$_POST['email'];
        $password = (string)$_POST['password'];
        $confirm_password = (string)$_POST['confirm-password'];
        $gender = $_POST['gender'];
    


         $ip=$_SERVER['REMOTE_ADDR'];

         // Count recent attempts
         $stmt = $myconnect->prepare("SELECT COUNT(*) FROM signup_attempts WHERE ip_address = ? AND attempt_time > NOW() - INTERVAL 15 MINUTE");
         $stmt->bind_param('s', $ip); // 's' = string
         $stmt->execute();
         $stmt->bind_result($attempts);
         $stmt->fetch();
         $stmt->close();
         
         if ($attempts >= ATTEMPTS_MAX) {
             $error = 'Too many signup attempts. Please try again after 15 minutes.';
             header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
             exit;
         }
         
         if ($attempts >= 3) {
            sleep(3); // slow down brute-force attempts
        }



        $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);
        $verify = curl_exec($ch);
        $responseData = json_decode($verify);
        curl_close($ch);
        

        if (!$responseData->success) {
     
            $error = 'reCAPTCHA failed.Please try again.';
            header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
            exit;
        }




        $stmt = $myconnect->prepare("INSERT INTO signup_attempts (ip_address, attempt_time) VALUES (?, NOW())");
        $stmt->bind_param('s', $ip); // 's' = string
        $stmt->execute();
        $stmt->close();




        if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $error = 'There is a problem submitting the form. Please try again.';
            header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
            exit;
        }

    
        if(!isset($username) || empty($username)){

            $error='Please write a username';
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;

        }

    if(!isset($email) || empty($email)){
        $error="Please enter the email";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }

    if(!isset($gender) || empty($gender)){
        $error="Please select your gender";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit;   
    }

    if(!isset($password) || empty($password)){
        $error="Please enter a password";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }

    if(!isset($confirm_password) || empty($confirm_password)){
        $error="Please enter your password again in confirm password field";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }

    $stmt=$myconnect->prepare('SELECT 1 FROM signup_page WHERE username=? OR email=? LIMIT 1');
    $stmt->bind_param('ss',$username,$email);
    $result=$stmt->execute();
    $resultTwo=$stmt->get_result();
    $isHaveRow=$resultTwo->num_rows;
    
    if($isHaveRow>0){
        $error='Signup failed. Please try a different username or email.';
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit;

    }

    else{
        
        $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
        $Actualuser=trim($username); 
        $Actualusername=strlen(trim($username));

        if($Actualusername<USERNAME_MIN_LEN){

            $error='Your username is too small. Use atleast '.USERNAME_MIN_LEN.' words ';
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;

        }

        if( $Actualusername>USERNAME_MAX_LEN){

            $error='Your username exceeds the limit of '.USERNAME_MAX_LEN.' characters';
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;

        }
    
        if(ctype_digit($Actualuser[0]))
        {
            $error="username does not start with number";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;
        }

        if(strpos($specialCharacters , $Actualuser[0])!==false)
        {
            $error="username does not start with special character";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;
        }

        if (!preg_match('/^[A-Za-z][A-Za-z0-9_]{3,9}$/', $username)) {
            $error = "Username must start with a letter and only contain letters, numbers, or underscores.";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;
        }
        


        //Handle email input field
        $userEmail= trim($email);

        if(strlen($userEmail) > 100){
            $error = "Email is too long.";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;
        }

        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $error="Email is not valid";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit; 
        }

        //Handle gender input
        $genderType = ['Male', 'Female', 'Non-binary', 'Other'];
        $searchGender = array_search($gender, $genderType);
        
        if ($searchGender === false) {
            $error = "Please select a valid gender";
            header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
            exit;
        }


    
    //handle password field
    
    $userPass=trim($password);
    $userPassword=strlen($userPass);
    $userConfirmPassword=strlen(trim($confirm_password));

    
        
    if(strpos($specialCharacters , $userPass[0])!==false)
    {
        $error="Password does not start with special character.";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit;
    }




    if($userPassword< PASSWORD_MIN_LEN){
        $error="Your password is too small";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }

    if($userPassword>PASSWORD_MAX_LEN){
        $error="Your password exceeds the limit of ".PASSWORD_MAX_LEN."charcter";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }

    if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,64}$/', $userPass)) {
        $error = "Password must contain at least one uppercase letter, one lowercase letter, one number.";
        header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
        exit;
    }

    if(trim($password)!==trim($confirm_password))
    {
        $error="Your password fields does not match.";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit; 
    }


    else{
        try {
            $passwordHash=password_hash($password,PASSWORD_ARGON2ID);
        
            $stmt=$myconnect-> prepare("INSERT INTO `signup_page`(`username`, `email`, `password`, `gender`) VALUES(?,?,?,?)");
            $stmt->bind_param('ssss',$username,$email,$passwordHash,$gender);
            $result=$stmt->execute();
            

            if($result){
                    // Get the auto-incremented user ID
                $user_id = $stmt->insert_id;


                $_SESSION['LoggedIN'] = true;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;

                session_regenerate_id(true);     // 🔒 Secure against fixation
                unset($_SESSION['csrf_token']);
                
                header("Location: ../../pages/public/home.php");
                exit;
                
            }
            else {
                error_log("Database error during signup insert: " . $stmt->error);
                $error = "Your form is not submitted. Please try again later.";
                header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
                exit;
            }
        } catch (Exception $e) {
            // $error=  $e->getMessage();
            $error=  $e->getMessage();
            error_log($e->getMessage()); // Log the detailed error
            $error=" An error occurred. Please try again later.";
            header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
            exit;
        }
    }





    }
    //Handle Username input field
    
    }
    else {
    
        $error= "An unexpected error occurred. Please try again later.";
        header('location:../../pages/auth/signup.php?error='.urlencode($error).'');
        exit;
    }






    ?> 
