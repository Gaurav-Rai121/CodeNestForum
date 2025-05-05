<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $id=$_SESSION['sno'];
    $name= $_SESSION['username'];
    include('../../components/database.php');

    $currentpassword = $_POST['current-password'];
    $newpassword = $_POST['new-password'];
    $confirmpassword = $_POST['confirm-password'];

    $select="SELECT * FROM `signup_page` WHERE `sno`='$id' ";
    $querry1=mysqli_query($myconnect,$select);
    $rows=mysqli_fetch_assoc($querry1);
    $savedpassword=$rows['password'];

    if(password_verify($currentpassword,$savedpassword))
    {
        if($confirmpassword==$newpassword)
        {
            if(!(password_verify($newpassword,$savedpassword)))
            {
                $passHash = password_hash($newpassword, PASSWORD_DEFAULT);
                $update="UPDATE `signup_page` SET `password`='$passHash' WHERE `sno`='$id'";
                $querry2=mysqli_query($myconnect,$update);
                if($querry2)
                {
                session_unset();
                session_destroy();
                header('location:../../login.php');
                }
            }

            else{
                $error = "The new password cannot be the same as the current password.";
                header('location:../../pages/userSetting/updatepassword.php?error='.urldecode($error).'');
            }
        }

        else{
            $error = "The new password and confirmation password do not match.";
            header('location:../../pages/userSetting/updatepassword.php?error='.urldecode($error).'');
        }
    }
   else{
    $error = "The current password you entered is incorrect. Please try again.";
    header('location:../../pages/userSetting/updatepassword.php?error='.urldecode($error).'');
   }








}
else{
    $error = "An error occurred while updating your password. Please try again later";
    header('location:../../pages/userSetting/updatepassword.php?error='.urldecode($error).'');
}


?>