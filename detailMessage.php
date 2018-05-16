<?php
    $messageId = $_GET['id'];

    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $pdo = new PDO('mysql:host=localhost;dbname=message-board;charset=UTF8;', $username, $password);
    
    //fetchall
    $sql = "SELECT * FROM messages where id=$messageId";
    $stt = $pdo->prepare($sql);
    //$stt->bindParam(':messageId',$messageId);
    $stt->execute();
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    $id         = $row['id'];
    $title      = $row['title'];
    $message    = $row['message'];
    $img_path   = $row['img'];
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
        <h1>ID = <?php echo $row['id'];?>のメッセージ詳細ページ</h1>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>
                    <?php
                        echo $id
                    ?>
                </td>
            </tr>
            <tr>
                <td>title</td>
                <td>
                    <?php
                        echo $title  
                    ?>
                </td>
            </tr>
            <tr>
                <td>message</td>
                <td>
                    <?php
                        echo $message
                    ?>
                </td>
            </tr>
            <tr>
                <td>image</td>
                <td>
                    <img src=
                        <?php
                            echo $img_path;
                        ?>
                    ></img>
                </td>
            </tr>
        </table>
        <?php
            echo "<a href='/editMessage.php?messageid=$id' class='btn btn-default'>";
            echo "Edit Message";
            echo "</a>";
            
            echo "<a class='btn btn-default' data-target='#myModal' data-toggle='modal'>";
            echo "Delete Message";
            echo "</a>";
        ?>
        
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
              </div>
              <div class="modal-body">
                <p>Do you want really Delete this TEXT?</p>
              </div>
              <div class="modal-footer">
                <!--<input type="submit" class="btn btn-default"  data-dismiss="modal" value="Delete"/>-->
                <a href="/deleteMessage.php?messageid=<?php echo $id ?>">Delete</a>
                <a class="btn btn-default" data-dismiss="modal">Cancle</a>
              </div>
            </div>

          </div>
        </div>
    </body>
</html>