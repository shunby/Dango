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
          $id = 57;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ブログさぼりまくって早半月。　そんなことより〇木キモくね？と言いたいですど、そこを抑えて少し反省。<br>
            最近Amazonを使い始めて、手軽にお買い物ができるようになったのでもともと3万もなかった預金が1/2に…　まぁ俺のおかげで日本経済回ってるし？？？いいよね？<br>
            <img src="/image/blog/blog57.jpg" alt="">
            <img src="/image/blog/blog57 (2).jpg" alt="">
            <img src="/image/blog/blog57 (3).jpg" alt="">
            <br>
            自分の趣味をそのままさらけ出してる感じでなんかはずい。
            ラーメン大好き小泉さん、たしか次巻は今年秋です。みんな見てね(灬╹ω╹灬)<br>
            <br>
            言いたかったのは、Amazonいいから使ってみ？　でした！
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
