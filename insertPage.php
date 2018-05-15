<?php

    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);

    if(isset($_POST['title'])){
  
        $sql = "INSERT INTO messages(title,message) VALUES (:title, :message)";
        $stt = $pdo->prepare($sql);
        $stt->bindParam(':title', $_POST['title']);
        $stt->bindParam(':message', $_POST['message']);
        $stt->execute();
        echo '<script type="text/javascript">alert("success");</script>';
        echo "<script>location.replace('/message-board-noframe/index.php');</script>"; 
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            MessageBoard
        </title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    </head>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/message-board-noframe/index.php">MessageBoard</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/message-board-noframe/insertPage.php">新規メッセージの投稿</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    <h1>新規メッセージ</h1>
    <div class="row">
        <div class="col-xs-6">
            <form method="POST" action="/message-board-noframe/insertPage.php" accept-charset="UTF-8">
            
                <div class="form-group">
                    <label for="title">タイトル:</label>
                    <input class="form-control" name="title" type="text" id="title">
                </div>
                    
                <div class="form-group">
                    <label for="content">メッセージ:</label>
                    <input class="form-control" name="message" type="text" id="content">
                </div>
                
                <input class="btn btn-primary" type="submit" value="投稿">
        
            </form>
        </div>
    </div>
</html>
