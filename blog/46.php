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
          $id = 46;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ものすごく久しぶりのねこです。<br>
            <a href="https://www.amazon.co.jp/ALUNAR-M508-%E3%80%90%E5%B7%A5%E5%A0%B4%E7%9B%B4%E8%B2%A9%E3%80%913D%E3%83%97%E3%83%AA%E3%83%B3%E3%82%BF%E3%83%BC%E3%82%AD%E3%83%83%E3%83%88-%EF%BC%90-%EF%BC%93mm%E3%83%8E%E3%82%BA%E3%83%AB-3%EF%BC%A4%E9%80%A0%E5%BD%A2%E3%82%B5%E3%82%A4%E3%82%BA7200cm%C2%B3-%E7%B5%84%E7%AB%8B%E3%81%A6%E3%83%93%E3%83%87%E3%82%AASD%E3%82%AB%E3%83%BC%E3%83%89%E4%BB%98%E5%B1%9E/dp/B01JZ4GS16">
              3Dプリンター</a>を買いました。amazonで30000円くらいのやつ。<br>
            特に何も設定をいじらないまま一つ印刷してみました。題して「猫派 2.5D」です。<br>
            3Dモデルのファイル（需要あるのか）は<a href="/image/blog/blog46.zip">こちら(.obj)</a>をどうぞ。<br>
            <figure>
              <img style="border:solid 1px" width=50% src="/image/blog/blog46.jpg" alt="2.5Dってなんや" />
              <figcaption>猫派 2.5D（写真うつりが悪いのは仕様です）</figcaption>
            </figure>
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
