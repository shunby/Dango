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
          $id = 40;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            今日Z会が返ってきそうな雰囲気がありましたが、3時間目はテーマトークで終わりましたね。　自分的に「自己紹介」っていうテーマ面白かったw。　あと陰陽師からのジブリも笑うw<br>
            Z会の結果といい春季学習部といい、なんともいえない漠然な不安を抱えてナーバスになっている方々が多いことをお察しいたします。<(_ _)><br>
            しかしこんなときこそ俺はみんなにいいたい。　メイドいいぞﾒﾒﾒΣ(●´д`●)<br>
            <br>
            ってことでこれから僕が書いた記事の一番下にはこのバナーを設置します、邪魔だなと思った方は運営部屋で抗議の声をあげてください。僕以外の運営が対応してくれます。ちなみに僕は泣きます。<br>
            これからホームルームの時間が増えると思うけど、クラスでレクリエーションやりたいな。特にドロケイ。久々に小学生の気分にもどってみたいわw
          </p>
          <img src="/image/blog/meido.gif" style="width: 250px; height: auto;">
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
