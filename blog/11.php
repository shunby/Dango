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
          $id = 11;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ねこです。どうもみなさん、メリーク<span style="color: red;">リ</span>スマスです。
          </p>
          <p>
            今日はクリスマスで<span style="color: red;">あ</span>りますからして、みなさんプレゼントなんかもらっちゃって、
            <span style="color:red">充</span>実した気分でハッピーな一日を過ごしておられるのでしょうか。
          </p>
          <p>
            私も思わず<span style="color:red">バク</span>転をしてしまいそうなくらいには<span style="color:red">ハッ</span>ピーです、ええ。ハッピーはっぴー。
            少し残念なのは、<span style="color:red">白</span>い雪が見られないことですが、埼玉だから仕方ないのでしょうかね。
          </p>
          <p>
            とても短いですが、今日はそんなところで。<br>
            <span style="color:white">ところで、赤字をつなげて読むと、、、、</span>
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
