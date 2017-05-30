<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <h1>Register</h1>
    <?php
        //check error
        if(isset($_GET['error'])){
            switch ($_GET['error']){
                case 1: echo '<p>Please complete form</p>';
                    break;
                case 2: echo '<p>Duplicate userid.</p>';
                    break;
            }
        }
    ?>
    <form action="register-process.php" method="POST">
        <div>
            <label>User ID: </label>
            <input type="text" name="userid"  placeholder="Enter your user id">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" value="" name="password" placeholder="Enter your password">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>

    </form>

    <?php require 'footer.php'; ?>