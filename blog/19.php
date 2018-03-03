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
          $id = 19;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <video src="/image/blog/blog19.mp4" controls width="500"></video>
          <p>
            なんか全然理由はわからないけど無性に、ギャルゲーが作りたくなってきたので、ちょっとギャルゲーについて勉強会を開きます。<br>
            まずは<a href="https://srdk.rakuten.jp/entry/2015/10/27/110000">キモくなどない！10秒で理解できるギャルゲー入門</a>を見てみてください。<br>
            10秒では全部読み切れませんが、最後まで読めばギャルゲーの概要は理解できるのでは？　一つだけ注意が必要なのは、「キモくなどない！」と豪語してるけど、実際めちゃくちゃキモいです。間違いなくキモいです。ギャルゲー実況をするならば、顔出しはやめよう・・・<br>
            <br>
            そして、記事を読み終えてもう一つ思ったこと・・・　「ラブコメですねこれ。」<br>
            エンディングは違うし、物語の厚みも全然違うけど、登場人物とかは完全にラブコメですねこれ。間違いない！<br>
            つまりは全世界のラブコメを読破すれば、最強のギャルゲーも作れるはず！　今後クラスでラブコメ読んでる時間が増えますが、よろしく。
          </p>
          <p>end</p>
          <p>
            追記<br>
            動画が再生されないのを修正しました。申し訳ありませんでした。
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
