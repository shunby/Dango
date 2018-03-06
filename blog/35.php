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
          $id = 35;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <video src="/image/blog/blog35.mp4" controls width="500" poster="/image/blog/blog35.png" preload="none"></video>
          <p>
            この前の動画を入手しましたので、さっそく公開ですよー((*´∀｀*))ｴﾍﾍｯ<br>
            と思ったんだけど、これ謝恩会で流して本当に盛り上がるのだろうか…&emsp;ブログに載せてる俺が恐くなってきた((((；゜Д゜)))<br>
            あと最後に飛び跳ねてる子がいるけど、手術の痛みはもうなさそうでよかったw<br>
            まだ月曜日に現代文あるからね？&emsp;忘れたら正行泣いちゃうからいちおう勉強しとくんだよ|◕ω◕)<br>
            σ(ﾟ∀ﾟ )ｵﾚ(ﾟεﾟ)ｷﾆｼﾅｲ!!(´ー∀ー`)
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
