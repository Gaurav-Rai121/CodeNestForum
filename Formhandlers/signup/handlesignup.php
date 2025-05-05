<?php






require_once __DIR__.'/../../vendor/autoload.php';
include('../../components/db/database.php');



use Cloudinary\Cloudinary;
use Mailgun\Api\EmailValidation;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
        'api_key'    => $_ENV['CLOUDINARY_API_KEY'],
        'api_secret' => $_ENV['CLOUDINARY_API_SECRET'],
    ],
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = (string)$_POST['username'];
    $email = (string)$_POST['email'];
    $password = (string)$_POST['password'];
    $confirm_password = (string)$_POST['confirm-password'];
    $fullname = (string)$_POST['full-name'];
    $mobile = (int)$_POST['phone'];
    $gender = (string)$_POST['gender'];
    $experience=(string)$_POST['experience'];
    $languages= (string)$_POST['languages'];
    $interests= (string)$_POST['interests'];
    $bio =      (string)$_POST['bio'];
    $file = $_FILES['image'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    

    if(empty($_POST['csrf_token'])|| isset($_POST['csrf_token'])){
        errorMessage('Invalid CSRF token. Please try again.');
        header('location:../../pages/auth/signup.php');
        exit;

    }


    // Image validation parameters
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes


 //Handle Username input field
    $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
    $actualuser=trim($thread); 
    $Actualusername=strlen(trim($username));

    if($Actualusername<04){

        $error='Your username is too small. Use atleast 5 words ';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($Actualusername<=0){

        $error='Please write a username';
        header('location:../../pages/auth/signup.php');
        exit;

    }

     if( $Actualusername>10){

        $error='Your username exceeds the limit of 10 characters';
        header('location:../../pages/auth/signup.php');
        exit;

    }
  
    if(ctype_digit($Actualuser[0]))
    {
        $error="username does not start with number";
        header('location:../../pages/auth/signup.php');
        exit;
    }

    if(strpos($specialCharacters , $Actualuser[0])!==false)
    {
        $error="username does not start with special character";
        header('location:../../pages/auth/signup.php');
        exit;
    }

//Handle email input field
    $userEmail= strlen(trim($userEmail));

    if($userEmail==0){
        $error="Please enter the email";
        header('location:../../pages/auth/signup.php');
        exit; 
    }

    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $error="Email is not valid";
        header('location:../../pages/auth/signup.php');
        exit; 
    }

//Handle Full Name

     //Handle Username input field
     $UserFullName=trim($thread); 
     $ActualuserFullName=strlen(trim($UserFullName));
 
     if($ActualuserFullName<5){
 
         $error='Your Full name is too small. Use atleast 5 words ';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
 
     if($ActualuserFullName<=0){
 
         $error='Please write your username';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
 
      if( $ActualuserFullName>10){
 
         $error='Your Full Name exceeds the limit of 10 characters';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
   
     if(ctype_digit($ActualuserFullName[0]))
     {
         $error="Full name does not start with number";
         header('location:../../pages/auth/signup.php');
         exit;
     }
 
     if(strpos($specialCharacters , $ActualuserFullName[0])!==false)
     {
         $error="Full name does not start with special character";
         header('location:../../pages/auth/signup.php');
         exit;
     }
 

     //handle phone no
    $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
    $number=(string)$mobile;
    $userNumber=trim($number); 
    $ActualuserNumber=strlen(trim($userNumber));

    if($ActualuserNumber<=0){

        $error='Please write a mobile number';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($ActualuserNumber<10){

        $error='Invalid mobile number mobile number';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($ActualuserNumber>10){

        $error='Your mobile number exceeds the limit of 10';
        header('location:../../pages/auth/signup.php');
        exit;

    }

  
    if(!ctype_digit($userNumber))
    {
        $error="Invalid mobile number";
        header('location:../../pages/auth/signup.php');
        exit;
    }















    if(!isset($_FILES['image'])){
        errorMessage("Please add a image");
        header('location:../../pages/auth/signup.php');
        exit;
    }

    if (!isset($_FILES['image']) || $_FILES['image']['error'] === 4) {
        errorMessage("Please upload an image.");
        header('location:../../pages/auth/signup.php');
        exit;
    }

  
   

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK ){
      $imageCheck = getimagesize($file['tmp_name']);
        // Validate file size
        if ($fileSize > $maxFileSize) {
            errorMessage(" File size exceeds the maximum limit of 2 MB.");
            header('location:../../pages/auth/signup.php');
            exit;
        }  

        
        elseif ($imageCheck === false) {
            errorMessage("Uploaded file is not a valid image.");
            header('location:../../pages/auth/signup.php');
            exit;
        }

            
        elseif (!in_array($fileType, $allowedTypes)) {
            errorMessage("Invalid file type. Only JPG, PNG, and GIF types are allowed.");
            header('location:../../pages/auth/signup.php');
            exit;
        }


        else{
            try {
                // Upload image to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                    'folder' => 'UserPostImages', // replace with your desired Cloudinary folder
                ]);

                $imageUrl = $uploadResult['secure_url']; 
               
                $stmt=$myconnect-> prepare("INSERT INTO userimagespost( `postContent`, `postImage`, `PostTags`, `PostType`, `userId`) VALUES (?,?,?,?,?)");
                $stmt->bind_param('ssssi',$thread,$imageUrl,$tags,$anonymous,$LoginUserId);
                $result=$stmt->execute();
                 

                if($result){
                    sucessMessage("Yor post is uploaded.");
                     header('location:../../pages/auth/signup.php');
                     exit;
                }
                else {
                    errorMessage(" Your post image is not uploaded. Please try again");
                     header('location:../../pages/auth/signup.php');
                     exit;
                }
            } catch (Exception $e) {
                // $error=  $e->getMessage();
               
                $error=  $e->getMessage();
                error_log($e->getMessage()); // Log the detailed error
                errorMessage(" An error occurred. Please try again later.");
                header('location:../../pages/auth/signup.php');
                exit;
            }
        }


    }
  


}
else {
   
     errorMessage( "An unexpected error occurred. Please try again later.");
     header('location:../../pages/auth/signup.php');
     exit;
}






?> 
