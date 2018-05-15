<?php

    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);
    
    //fetall
    $sql = "SELECT * FROM messages ORDER BY create_at DESC";
    $stt = $pdo->prepare($sql);
    $stt->execute();
    $row = $stt->fetchAll(PDO::FETCH_ASSOC);


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
    <body>
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
            <h1>メッセージ一覧</h1>
            <table class = "table table-striped">
                <tr>
                    <th>id</th>
                    <th>
                        title
                    </th>
                    <th>
                        message
                    </th>
                </tr>
                    <?php 
                        foreach ($row as $key=>$value) {
                            $id = $value['id'];
                            echo "<tr>";
                            echo "<td><a href='detailMessage.php?id=$id'>".$value['id']."</td>";
                            echo "<td>".$value['title']."</td>";
                            echo "<td>".$value['message']."</td>";
                            echo "</tr>";
                        }
                     
                    ?>
             
            </table>
    </body>
    
</html>