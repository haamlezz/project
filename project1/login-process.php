<?php
include 'dbconfig.php';

$userid = mysqli_real_escape_string($con, $_POST['userid']);

$password = mysqli_real_escape_string($con,$_POST['password']);
$password_md5 = md5($password);

//check userid & password in database

$sql = "SELECT * FROM users WHERE userid = '$userid' AND password = '$password_md5'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1)
{
    session_start();
    
    $_SESSION['login'] = TRUE;
            
            
            
    header("location:index.php");
}else{
    header("location:login.php?error=1");
}