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
          $id = 3;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            記事応募の方法を説明します。<br>
          </p>
          <p>
            <h2>必要事項</h2>
            記事の応募は、「ブログ」「話題の画像・動画」共に<a href="/questionnaire/questionnaire.php">お問い合わせ</a>からお申込みいただけます。<br>
            フォームに投稿者名(本名である必要はありません)や返信用メールアドレス等の必要事項を記入してください。記入したら、本文でどんな記事を応募したいのかを伝えてください。その際には、
            <ul>
              <li>「ブログ」と「話題の画像・動画」のどちらに応募したいのか</li>
              <li>投稿したい記事の内容の要約(または全文)</li>
            </ul>
            をはっきりと書いてください。<br>
            応募が届いた後は、運営が頂いた原稿を記事に起こし、「ブログ」「話題の画像・動画」と、「みんなの記事」にアップします。場合によっては返信用メールアドレスに運営から質問等をさせていただくかもしれません。<br>
            皆様の投稿をお待ちしております。
          <p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
