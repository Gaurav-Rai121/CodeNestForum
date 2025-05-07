<?php

session_start();
session_unset();
session_destroy();
header("location:../../pages/public/home.php")

?>