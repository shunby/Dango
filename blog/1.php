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
          $id = 1;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            第一回目のブログはサイトの紹介！<br>
            今みんなはLINEから開いたと思うけど、次回以降いちいちLINEを開くのはめんどくさいから、ブックマークに登録しちゃってね。<br>
            サイトのコンテントは主に2つ。ブログと掲示板です。どちらも自由に閲覧、掲示板は自由に書き込みしてもらって大丈夫。好きに活用してください。<br>
            以上で紹介終わり！www(ﾟ∀ﾟ)<br>
            <br>
            紹介と並んでお願いがあります。←これ重要<br>
            このサイトは現在ベータ版です。https://ja.wikipedia.org/wiki/%E3%83%99%E3%83%BC%E3%82%BF%E7%89%88<br>
            したがってルールがいくつかあります。みんな協力よろです。<br>
  　        １．クラス外にはパスワードの「dango」を教えないでください。<br>
  　        ２．ちょっとここ改善してほしいな、こんな機能欲しいなと思ったら遠慮せずに教えてください。<br>
  　        ３．掲示板は基本書き込み自由ですが、ほかの人を誹謗中傷する内容は慎んでください。<br>
            <br>
            最後に、このサイトはPC向けに作成してるのでかなーり使いずらいと思います。そういうのも含めて運営に知らせてくれたらありがたいです。<br>
            また、みんなの記事もじゃんじゃん投稿まってるよー((o(^∇^)o))<br>
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>

      </div>
    </div>
  </body>
</html>
