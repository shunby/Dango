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
      <?php include $webroot."/template/blog/before.php" ?>

      <?php
        $id = 14;
       ?>

      <!--ここから本文-->
      <div class="main-main">
        <p>こんばんは！ユーザー数がクラスの過半数を超えなくて悲しみの真っただ中におります。</p>
        <p>
          まぁ、そんななか使いずらがったフッターをやめ、新しくサイドバーを増築しました。<br>
          どうでしょうか、この猫のドット絵！<br>
          ネットで「ねこ　ドット絵」と検索したら出てくるよー（ほかにも種類があったけどこの三つにした）<br>
          運営のねこのLINEのトプ画よりかわいいでしょ？w<br>
        </p>
        <p>あと、シャムさん長文ありがとうです！自分からも伝えときますb</p>
      </div>
      <!--ここまで本文-->



      <?php include $webroot."/template/blog/after.php" ?>
    </div>
  </body>
</html>
