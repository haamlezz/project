<?php require 'header.php'; ?>
<h1>Register</h1>
<form action="register-process.php" method="POST">
    <div>
        <label>User ID: </label>
        <input type="text" name="userid" placeholder="Enter your user id">
    </div>
    <div>
        <label>Password:</label>
        <input type="text" name="password" placeholder="Enter your password">
    </div>
    
</form>

<?php require 'footer.php'; ?>