<?php

include 'dbconfig.php';
$error = 0;
//check if empty
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['userid'])) {
        $error = 1;
    }
    if (empty($_POST['password'])) {
        $error = 1;
    }
}
if($error == 1){
    header("Location:register.php?error=1");
    exit();
}

//get data
$userid = mysqli_real_escape_string($con, $_POST['userid']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password_md5 = md5($password);

//check userid if exist
$qry = "SELECT userid FROM users WHERE userid = '$userid'";
$result = mysqli_query($con, $qry);
echo mysqli_error($con);
if (mysqli_num_rows($result) >= 1) {
    // if result >= 1 means userid is existed
    header("Location:register.php?error=2");
    exit();
} else {
    // if result < 1 means userid is NOT existed
    //insert data
    $qry = "INSERT INTO users VALUES('$userid', '$password_md5',2)";
    $result = mysqli_query($con, $qry);
    echo mysqli_error($con);
    if ($result) {
        header("Location:login.php?error=3");
    }
}