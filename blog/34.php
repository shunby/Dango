<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>だんご三兄弟</title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">


    <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
    <link href="" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="content">
      <?php
        $webroot = $_SERVER['DOCUMENT_ROOT'];
        include $webroot."/template/header.html"
      ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 34;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ただの自己満足じゃなくてためになるサイトを作ろうと思い立ったので、SHIPのPDFから3年生にとって使えるやつを厳選してここに載せます。<br>
            これでコメントには感謝の嵐が吹き荒れることだろう。(๑¯ω¯๑)<br>
            <br>
            ・試験範囲表（東大クラス）&emsp; <a href="/image/PDF/3学期学年末/範囲.pdf">見る</a><br>
            <br>
            ・歴史の課題範囲&emsp; <a href="/image/PDF/3学期学年末/歴史範囲.pdf">見る</a> <br>
            <br>
            ・公民の課題範囲&emsp; <a href="/image/PDF/3学期学年末/公民.pdf">見る</a> <br>
            <br>
            ・体育SHIPプリント&emsp; <a href="/image/PDF/3学期学年末/体育プリント.pdf">見る</a> <br>
            <br>
            ・試験時間割&emsp; <a href="/image/PDF/3学期学年末/試験時間割.pdf">見る</a><br>
            <br>
            おまけ&emsp;今日の英語の課題&emsp; <a href="/image/PDF/3学期学年末/英語-readプリント.pdf">見る</a>
          </p>
          <p>
            ※公民の課題範囲を最新のに変更しました<br>
            ※試験時間割を追加しました
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
