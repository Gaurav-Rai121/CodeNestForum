<?php
session_start();

    include('../../components/database.php');
    $answerId=$_POST['answerId'];
    $action=$_POST['save'];
    $userId=$_SESSION['sno'];

    $check="SELECT * FROM `savedcommnets` WHERE `userId`='$userId' AND `answerId`='$answerId' ";
    $querry10=mysqli_query($myconnect,$check);


    if(mysqli_num_rows($querry10)==0)
    {
        $insert="INSERT INTO `savedcommnets`( `userId`, `answerId`, `action`) VALUES ('$userId','$answerId','$action')";
        $querry11=mysqli_query($myconnect,$insert);
    }

    else{
        $extingVote=mysqli_fetch_assoc($querry10);
        $deleteTwo= "DELETE FROM `savedcommnets` WHERE `userId`='$userId' AND `answerId`='$answerId'";
       $querry13=mysqli_query($myconnect,$deleteTwo);
         
     }
     header("Location: " . $_SERVER['HTTP_REFERER']);
     exit;
 


?>