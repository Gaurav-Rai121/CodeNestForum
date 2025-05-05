<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('../../components/database.php');
    $answerId=$_POST['answerId'];
    $action=$_POST['action'];
    $userId=$_SESSION['sno'];

    $check="SELECT * FROM `like&dislike` WHERE `userId`='$userId' AND `answerId`='$answerId' ";
    $querry6=mysqli_query($myconnect,$check);
   
    if(mysqli_num_rows($querry6)==0)
    {
        $insert="INSERT INTO `like&dislike`( `userId`, `answerId`, `action`) VALUES ('$userId','$answerId','$action')";
        $querry7=mysqli_query($myconnect,$insert);
    }

    else{
        $extingVote=mysqli_fetch_assoc($querry6);
        if($extingVote['action']!=$action){
        $update="UPDATE `like&dislike` SET `action`='$action' WHERE `userId`='$userId' AND `answerId`='$answerId'";
        $querry7=mysqli_query($myconnect,$update);
        }

        else{
           $delete= "DELETE FROM `like&dislike` WHERE `userId`='$userId' AND `answerId`='$answerId'";
           $querry8=mysqli_query($myconnect,$delete);
        }
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}


?>