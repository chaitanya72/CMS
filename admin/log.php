<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['user_role']);
//$_SESSION['username']=null;
//session_unset();
//session_destroy();
header("Location:../index.php");
?>