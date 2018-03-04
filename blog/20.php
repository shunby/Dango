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
          $id = 20;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            僕の今考えてることを端的に伝えるのにとてもぴったりな画像があるから、まずはこれを見てほしいです。
          </p>
          <img src="/image/blog/blog20.PNG">
          <p>
            あれは昨年度の2学期でしたね。生まれて初めての、四方向すべて異性の座席配置…　そうまさに四面楚歌だったのだ。しかし、そんな中でも２つだけ男同士が隣り合える座席があった。つまり、画像はそういうことだ。席替えは無常である。<br>
            <br>
            自分は今年度は今までずっと一番後ろだったけど、今回は後ろから3列目。隣も個性溢れすぎる友達で勝利を勝ち取ったと、自己暗示中ですw<br>
            中学校最後だから、生徒が自分たちで決めるとかあるんじゃね？とか思ってたけど、買いかぶりだったみたい。やっぱ無常である。<br>
            隣の人と語り合って楽しい三学期にしてね！(`･ω･´)b<br>
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
