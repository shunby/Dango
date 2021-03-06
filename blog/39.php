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
          $id = 39;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            どうも、高校卒業式で明日が休みになることを知らずに明日課題を出す予定を立てていたせいで若干詰んだねこです。
          </p>
          <p>
            春季学習部は8:00~17:00、HR付きのフルコースですが、4月にはないことや、自分の休業中の生活サイクルから鑑みるに「そこまで影響ないんじゃね？」って思ったのでそーゆースタンスで行こうと決めました。
            春季学習部で課題が早く終わればギリギリに徹夜する必要もありませんしね、うんうん。<br>
            こう考えてみると、案外悪いものじゃないかもしれませんね、春季学習部。（錯乱）
          </p>
          <p>
            そんな感じで楽しんできたいと思いますので、入部したくなってきた方は今からでもまさゆき先生に掛け合ってみてはいかがでしょうか。きっと素敵な春休みになりますよ。
          </p>
          <p>
            ねこでした。
          </p>

        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
