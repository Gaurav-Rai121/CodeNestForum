<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $id=$_SESSION['sno'];
    $name= $_SESSION['username'];
    include('../../components/database.php');

    $username = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
  
    $select="SELECT * FROM `signup_page` WHERE `sno`='$id' ";
    $querry1=mysqli_query($myconnect,$select);
    $rows=mysqli_fetch_assoc($querry1);
    $savedemail=$rows['email'];

    if($savedemail==$email)
    {
        $update= "UPDATE `signup_page` SET `email`='$email',`mobile no`='$mobile',`dob`='$dob',`gender`='$gender' WHERE `sno`='$id'";
        $querry2=mysqli_query($myconnect,$update);
        header('location:../../pages/userProfile/userProfile.php');
    }

    if($savedemail!=$email)
    {
        $selecttwo="SELECT * FROM `signup_page` WHERE `email`='$email' ";
        $querry3=mysqli_query($myconnect,$selecttwo);
        $anyrow= mysqli_num_rows($querry3);
        if($anyrow>0)
        {
            $error = "This email is already in use by another account.";
            header('location:../../pages/userSetting/usersetting.php?edit='.urldecode($error).'');
        }

        else{
            $updatethree= "UPDATE `signup_page` SET `email`='$email',`mobile no`='$mobile',`dob`='$dob',`gender`='$gender' WHERE `sno`='$id'";
            $querry4=mysqli_query($myconnect,$updatethree);
            header('location:../../pages/userProfile/userProfile.php');
        }
    }


}




?>