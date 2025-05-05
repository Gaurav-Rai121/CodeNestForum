<?php
session_start();

    include('../../components/database.php');
    $followuserId=$_POST['userId'];
    $action=$_POST['follow'];
    $userId=$_SESSION['sno'];

    $check="SELECT * FROM `userfollowing` WHERE  `LoginuserId`='$userId' AND `FollwinguserId`='$followuserId' ";
    $querry10=mysqli_query($myconnect,$check);


    if(mysqli_num_rows($querry10)==0)
    {
        $insert="INSERT INTO `userfollowing`(`FollwinguserId`, `LoginuserId`, `follow`) VALUES ('$followuserId','$userId','$action')";
        $querry11=mysqli_query($myconnect,$insert);
    }

    else{
        $extingVote=mysqli_fetch_assoc($querry10);
        $deleteTwo= "DELETE FROM `userfollowing` WHERE `LoginuserId`='$userId' AND `FollwinguserId`='$followuserId'";
       $querry13=mysqli_query($myconnect,$deleteTwo);
         
     }
     header("Location: " . $_SERVER['HTTP_REFERER']);
     exit;
 


?>