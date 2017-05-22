<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'project1';

$con = mysqli_connect($host, $user, $password) or die('No Connection');

mysqli_select_db($con, $database) or die('No Database');

mysqli_set_charset($con, 'utf8');