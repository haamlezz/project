<?php
require 'header.php';

session_start();

if(!$_SESSION['login']){
    header('Location:login.php?error=2');
}

require 'footer.php';