<?php
  require "../bbs/access/access.php";

  $name = htmlspecialchars($_POST['name']);
  $gender = htmlspecialchars($_POST['gender']);
  $email = htmlspecialchars($_POST['email']);
  $grade = htmlspecialchars($_POST['grade']);
  $kansou = htmlspecialchars($_POST['kansou']);
  $quality = htmlspecialchars($_POST['quality']);
  $appearance = htmlspecialchars($_POST['appearance']);

  $pdo = Access::getPDO("bbs");

  $st = $pdo->prepare("INSERT INTO kansou VALUES(?, ?, ?, ?, ?, ?, ?)");
  $st->execute(array($name, $gender, $grade, $email, $kansou, $quality, $appearance));

?>
<!DOCTYPE html>
<html lang="ja">
  <head>

    <title>送信の完了</title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/main.css" rel="stylesheet" type="text/css">

    <link href="" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="content">
       <?php include $webroot."/template/header.html" ?>
       <?php include $webroot."/template/navi.html" ?>
       <article id="main">
         <section>
           <h1>アンケート送信の完了</h1>
           ご協力ありがとうございます。ご提供いただいた情報は、サイトの改善のために使われます。
         </section>
       </article>
       <?php include $webroot."/template/footer.html" ?>
     </div>
  </body>
</html>
