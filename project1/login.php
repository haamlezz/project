<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
<h1>Login</h1>
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