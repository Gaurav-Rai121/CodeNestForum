<?php


session_start();

$loggedin =$_SESSION['LoggedIN'];
$user=$_SESSION['username'];
$pass=$_SESSION['email'];
echo $loggedin;
echo $user;
echo $pass;

?>