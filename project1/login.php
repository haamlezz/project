<html>
    <head>
        <title>Login Page</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<h1>Login</h1>
<?php
    if(isset($_GET['error'])){
        switch($_GET['error']){
            case 1: echo '<p class="error">Invalid User ID or Password</p>';
                    break;
            case 2: echo '<p class="error">You are NOT logged in</p>';
                    break;
        }
        
        
    }
?>
<form action="login-process.php" method="POST">
    <div>
        <input type="text" name="userid" placeholder="Enter User ID">
    </div>
    <div>
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <div>
        <input type="submit" value="LOGIN">
    </div>
</form>
<?php require 'footer.php';?>