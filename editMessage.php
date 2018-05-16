<?php
    $id = $_GET['messageid'];
    
    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);
    
    //fetall
    $sql = "SELECT * FROM messages where id=$id";
    $stt = $pdo->prepare($sql);
    //$stt->bindParam(':messageId',$id);
    $stt->execute();
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    $id         = $row['id'];
    $title      = $row['title'];
    $message    = $row['message'];
    $pdo = null;
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
                    <a class="navbar-brand" href="/index.php">MessageBoard</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/insertPage.php">新規メッセージの投稿</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    
    
    <form action="/edit.php?id=<?php echo $id ?>" method="post">
        
        <div class="form-group">
            <label for="title">タイトル:</label>
            <input class="form-control" type="text" name="title" value=
            <?php
                echo $title;
            ?> >
            </div>
            
        
        <div class="form-group">
            <label for="title">メッセージ:</label>
            <input class="form-control"　type="text" name="message" value=
            <?php
                echo $message;
            ?>>
        </div>    
        <input type="submit" value="change" class="btn btn-default"/>
        
    </form>
    </body>
</html>