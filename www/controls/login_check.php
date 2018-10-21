<?php
session_start();
$username=$_POST['username'];
$pwd=$_POST['pwd'];
if($username=='jesus' && $pwd=='jesus' || 1==1)
{
    $_SESSION['usrname']=$username;
     $_SESSION['login_error']='';
    header('location:../home.php');
}
else{
    $_SESSION['login_error']='Invalid Username/Password.';
    header('location:../index.php');
}

?>