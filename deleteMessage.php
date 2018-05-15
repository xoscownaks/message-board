<?php

    $id         = $_GET['messageid'];
    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);
    
    //fetchall
    $sql = "DELETE FROM messages where id=:id";
    $stt = $pdo->prepare($sql);
    $stt->bindParam(':id',$id);
    $stt->execute();
    echo '<script type="text/javascript">alert("success");</script>';
    echo "<script>location.replace('/message-board-noframe/index.php');</script>"; 
?>
