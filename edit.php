<?php
    $id         = $_GET['id'];
    $title      = $_POST['title'];
    $message    = $_POST['message'];
    
    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);
    
    $sql = "UPDATE messages SET title=:title, message=:message WHERE id=:id";
    $stt = $pdo->prepare($sql);
    $stt->bindParam(':title',$title);
    $stt->bindParam(':message',$message);
    $stt->bindParam(':id',$id);
    $stt->execute();
    echo '<script type="text/javascript">alert("success");</script>';
    echo "<script>location.replace('/index.php');</script>"; 

?>