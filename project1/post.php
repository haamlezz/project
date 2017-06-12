<?php
require 'header.php';
session_start();
if(!$_SESSION['login']){
    header('location:login.php?error=2');
}
?>

<form action="post-process.php" method="POST" enctype="multipart/form-data">
    <p>
        <input required type="text" name="title" value="" size="100" style="width: 800px;" placeholder="Enter Title" />
    </p>
    <p>
        <textarea required name="body" rows="0" cols="0" style="width: 800px; height: 300px"></textarea>
    </p>
    <p>
        <input type="submit" value="POST" style="width: 100px; background: #33ff33;">
    </p>
</form>

<?php

require 'footer.php';
?>