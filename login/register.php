<?php
  require "../bbs/access/access.php";

  session_start();?>
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
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <article id="main">
        <section>
          <h1>ユーザー登録</h1>
          <form id="register" name="register" action=" " method="POST">
            <label for="name">ユーザ名</label><br><input type="text" name='name'></input><br><br>
            <label for="password">パスワード</label><br><input type="password" name='password'></input><br>
            <label for="re_password">パスワード(再入力)</label><br><input type="password" name='re_password'></input><br>
            <input type="submit" name="signup"></input>
          </form>
        </section>
      </article>

      <?php include $webroot."/template/footer.html" ?>

    </div>
  </body>
  <?php

    if(isset($_POST['signup'])){
      if(empty($_POST['name'])){
        echo "※ユーザー名が未入力です！";
        exit();
      }else if(empty($_POST['password'])){
        echo "※パスワードが未入力です！";
        exit;
      }else if(empty($_POST['re_password'])){
        echo "※パスワードは二回入力してください！";
        exit;
      }

      if($_POST['password'] !== $_POST['re_password']){
        echo "※パスワードは二度とも同じものを入力してください！";
        exit;
      }
      //入力確認完了

      $name = htmlspecialchars($_POST['name']);
      $password = $_POST['password'];
      $re_password = $_POST['re_password'];


      $pdo;
      $ac = new Access("bbs");
      if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
      else $pdo = new PDO($ac->dsn, $ac->username);

      $statement = $pdo->query("SELECT * from user where name='".$name."'");

      if($statement->fetch()){
        echo "※既に使用されているユーザ名です！";
        exit;
      }

      $statement = $pdo->prepare("INSERT INTO user(name, pass) VALUES (?,?)");
      $statement->execute(array($name, PASSWORD_HASH($password, PASSWORD_DEFAULT)));

      echo "登録が完了しました。ようこそ、".$name."さん！";
    }
  ?>


</html>
