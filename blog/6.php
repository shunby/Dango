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

    <?php include "../template/analytics.html" ?>
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
          $id = 6;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            <a href="/blog/04.php">前回</a>の続きです。あれから資材をそろえ、環境を整えました。そして、まずは小手調べにベタな単語帳を作ってみることにしました。<br>
            古単・ユメタンの練習の役に立てばいいな、くらいのノリで開発がスタートしました。超☆開発中の画面を晒しておきます。
            <figure id="img_title">
              <img style="border:solid 1px" width=50% src="/image/blog/20171220/title.png" alt="タイトル" />
              <figcaption>殺風景なタイトル画面</figcaption>
            </figure><br>

            <figure id="img_register0">
              <img style="border:solid 1px" width=50% src="/image/blog/20171220/register0.png" alt="タイトル" />
              <figcaption>配置のずれた登録画面</figcaption>
            </figure><br>

            <figure id="img_register">
              <img style="border:solid 1px" width=50% src="/image/blog/20171220/register.png" alt="タイトル" />
              <figcaption>それなりにまともな入力画面</figcaption>
            </figure><br>
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
