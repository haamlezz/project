<?php
require 'header.php';

session_start();

if(!$_SESSION['login']){
    header("Location:login.php?error=2");
}

//ສະແດງຊື່ userid
echo $_SESSION['userid'];

require 'footer.php';