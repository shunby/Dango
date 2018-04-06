<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  //include $webroot."/template/check_login.php"
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
          $id = 50;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <img src="/image/blog/blog50.jpg">
          <p>
            入手経路は明かせませんが、来年度（今年度？）、つまりは明々後日からの先生たちの配属がどこなのかがわかりました。<br>
            自分の旧担任は2-2へ逆方向に飛んで行ってしまいました。ばいばいーい　本人が避けたがっていた1年生の担任にはならなくてよかったんじゃないでしょうかw<br>
            多分このサイトを見ているほとんどの人は来年の担任は塩山先生なのでしょうねー　どんな先生かわからないと思うので卒業生からの参考情報（あくまで個人の意見です）
          </p>
          <img src="/image/blog/blog50.png">
          <p>
            それからみなさんは課題終わりましたか？　自分は春休み課題がない小学生の弟を充血するくらい殺意を持った目でにらみながらそれなりに頑張ってます。（昨日一日中アニメぶっぱなしでみたことは内緒ですよ？w）<br>
            それでは3日後また会いましょう。それでは
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
