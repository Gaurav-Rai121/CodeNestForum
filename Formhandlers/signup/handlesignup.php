    <?php


    require_once __DIR__.'/../../vendor/autoload.php';
    include('../../components/db/database.php');
    define('USERNAME_MIN_LEN', 4);
    define('USERNAME_MAX_LEN', 10);
    define('PASSWORD_MIN_LEN', 5);
    define('PASSWORD_MAX_LEN', 10);


    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = (string)$_POST['username'];
        $email = (string)$_POST['email'];
        $password = (string)$_POST['password'];
        $confirm_password = (string)$_POST['confirm-password'];
        $gender = $_POST['gender'];
    
        $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptchaSecret . "&response=" . $recaptchaResponse);
        $responseData = json_decode($verify);

        if (!$responseData->success) {
     
            $error = 'reCAPTCHA failed.Please try again.';
            header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
            exit;
        }




        if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $error = 'There is a problem submitting the form. Please try again.';
            header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
            exit;
        }

    
    if(!isset($username) || empty($username)){

        $error='Please write a username';
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit;

    }

    if(!isset($email) || empty($email)){
        $error="Please enter the email";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }

    if(!isset($gender) || empty($gender)){
        $error="Please select your gender";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit;   
    }

    if(!isset($password) || empty($password)){
        $error="Please enter a password";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }

    if(!isset($confirm_password) || empty($confirm_password)){
        $error="Please enter your password again in confirm password field";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }

    $stmt=$myconnect->prepare('SELECT * FROM signup_page WHERE username=? OR email=?');
    $stmt->bind_param('ss',$username,$email);
    $result=$stmt->execute();
    $resultTwo=$stmt->get_result();
    $isHaveRow=$resultTwo->num_rows;
    
    if($isHaveRow>0){
        $error='Signup failed. Please try a different username or email.';
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit;

    }

    else{
        
        $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
        $Actualuser=trim($username); 
        $Actualusername=strlen(trim($username));

        if($Actualusername<USERNAME_MIN_LEN){

            $error='Your username is too small. Use atleast 4 words ';
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;

        }

        if( $Actualusername>USERNAME_MAX_LEN){

            $error='Your username exceeds the limit of 10 characters';
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;

        }
    
        if(ctype_digit($Actualuser[0]))
        {
            $error="username does not start with number";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;
        }

        if(strpos($specialCharacters , $Actualuser[0])!==false)
        {
            $error="username does not start with special character";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;
        }

        //Handle email input field
        $userEmail= trim($email);

        if(strlen($userEmail) > 100){
            $error = "Email is too long.";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;
        }

        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $error="Email is not valid";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
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
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit;
    }




    if($userPassword<=PASSWORD_MIN_LEN){
        $error="Your password is too small";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }

    if($userPassword>PASSWORD_MAX_LEN){
        $error="Your password exceeds the limit of 10 charcter";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }

    if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{5,10}$/', $userPass)) {
        $error = "Password must contain at least one uppercase letter, one lowercase letter, one number.";
        header('Location: ../../pages/auth/signup.php?error=' . urlencode($error));
        exit;
    }

    if(trim($password)!==trim($confirm_password))
    {
        $error="Your password fields does not match.";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit; 
    }


    else{
        try {
            $passwordHash=password_hash($password,PASSWORD_DEFAULT);
        
            $stmt=$myconnect-> prepare("INSERT INTO `signup_page`(`username`, `email`, `password`, `gender`) VALUES(?,?,?,?)");
            $stmt->bind_param('ssss',$username,$email,$passwordHash,$gender);
            $result=$stmt->execute();
            

            if($result){
                    // Get the auto-incremented user ID
                $user_id = $stmt->insert_id;

                // Store in session
                $_SESSION['LoggedIN'] = true;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;

                session_regenerate_id(true);     // 🔒 Secure against fixation
                unset($_SESSION['csrf_token']);
                
                header("Location: ../../pages/public/home.php");
                
            }
            else {
                $error= "Your form is not submitted.Please try agin later.";
                header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
                exit;
            }
        } catch (Exception $e) {
            // $error=  $e->getMessage();
        
            $error=  $e->getMessage();
            error_log($e->getMessage()); // Log the detailed error
            $error=" An error occurred. Please try again later.";
            header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
            exit;
        }
    }





    }
    //Handle Username input field
    
    }
    else {
    
        $error= "An unexpected error occurred. Please try again later.";
        header('location:../../pages/auth/signup.php?error='.urldecode($error).'');
        exit;
    }






    ?> 
