
<?php
//ສ້າງ post-process.php
require 'header.php';//ດຶງຟາຍ header.php ມາໃຊ້ງານ

$error = 0;

//ກວດສອບຫາຄ່າເປົ່າ
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //ຖ້າວ່າ ຄຳຮ້ອງຂໍມາໃນຮູບແບບ POST
    
    if(empty($_POST['title'])){
        // ຖ້າວ່າ POST title ວ່າງ ກໍຈະກຳນົດ error = 1
        $error = 1;
    }
    
    if(empty($_POST['body'])){
    $error = 1;
    }
    
    if($error == 1){
        header('Location: post.php');
    }
    
    //ຮັບຂໍ້ມູນຈາກຟອມ post
    //ມີ title, body
    
    //ຮັບຄ່າ title
    $title = mysqli_real_escape_string($con,$_POST['title']);
    //ຮັບຄ່າ body
    $body = mysqli_real_escape_string($con,$_POST['body']);
    //ຮັບຄ່າ userid ຈາກ session
    session_start();
    $userid = $_SESSION['userid'];
    
    //ສ້າງquery
    $qry = "INSERT INTO topic VALUES('','$title', '$body', CURRENT_TIMESTAMP, 1, '$userid')";
    
    //ກວດຜົນການ query
    if(mysqli_query($con, $qry)){
       //ສະແດງຂໍ້ຄວ່າມວ່າ ບັນທຶກສຳເລັດ
        echo '<h3>ບັນທຶກສຳເລັດ</h3>';
    }else{
        echo '<h3>ບັກທຶກບໍ່ສຳເລັດ<h3>';
        echo mysqli_error($con);
    }
    
}

require 'footer.php';//ດຶງ footer.php ມາໃຊ້ງານ
