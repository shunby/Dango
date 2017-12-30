<?php
require "../bbs/access/access.php";
session_start();
?>
<!DOCTYPE html>
<!--テンプレート-->
<html>
  <head>
    <title>だんご三兄弟</title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <?php
      $webroot = $_SERVER['DOCUMENT_ROOT'];
      include $webroot."/template/analytics.html"
     ?>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/main.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
    $msg = "";

    function login(){
      global $msg;
      if(isset($_POST['login'])){
        if(empty($_POST['name'])){
          $msg =  "※ユーザー名が未入力です！";
          return;
        }else if(empty($_POST['password'])){
          $msg =  "※パスワードが未入力です！";
          return;
        }
        //入力確認完了

        $name = $_POST['name'];
        $password = $_POST['password'];

        $pdo;
        $ac = new Access("bbs");
        if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
        else $pdo = new PDO($ac->dsn, $ac->username);

        $statement = $pdo->query("select * from user WHERE name='".$name."'");

        if($row = $statement->fetch(PDO::FETCH_ASSOC)){//ユーザー名が合致したか
          if(password_verify($password, $row['pass'])){
            session_regenerate_id(true);
            $_SESSION['name'] = $name;
            $_SESSION['userid'] = $row['id'];
            header("Location: ../dango.php");
            return;
          }
        }
        $msg =  "※ユーザー名またはパスワードが間違っています！";
        return;
      }
    }
    login();


    ?>

    <div id="content">
      <div id="content">
        <?php include $webroot."/template/header.html" ?>
        <?php include $webroot."/template/navi.html" ?>
        <article id="main">
          <section>
            <h1>ログイン</h1>
            <span style="color:red;"><?php echo $msg; ?></span>
            <form id="login" name="login" action=" " method="POST">
              <label for="name">ユーザ名</label><br><input type="text" name='name'></input><br><br>
              <label for="password">パスワード</label><br><input type="password" name='password'></input><br>
              <input type="submit" name="login"></input>
            </form>

          </section>
        </article>

        <?php include $webroot."/template/footer.html" ?>

      </div>

    </div>
  </body>

</html>
