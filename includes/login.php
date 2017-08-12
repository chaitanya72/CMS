<?php
session_start();
include 'con_z.php';

if(isset($_REQUEST['login']))
{$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);

$query="select * from user where username='$username'";
$check_username=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($check_username))
{
	$user_id=$row['user_id'];
    $userole=$row['user_role'];
    $user_password=$row['user_password'];
}
if(password_verify($password,$user_password))
{
    $_SESSION['user_id']=$user_id;
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['user_role']=$userole;
    header("Location:../admin/index.php");
}
else
{
    header("Location:../index.php");
}
 
 
//if(mysqli_num_rows($check_username)==0)
//{
//    header("Location:../index.php");
//}
//else
//{
//    $_SESSION['username']=$username;
//    $_SESSION['password']=$password;
//    $_SESSION['user_role']=$userole;
//    header("Location:../admin/index.php");
//}

}
?>