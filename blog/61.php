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
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
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
      <?php include $webroot."/template/shortcut/shortcut.php" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 61;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <iframe width="500" height="315" src="https://www.youtube.com/embed/DCf_pqrTljc?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <p>
            問題：物体はいくつあるでしょう？
          </p>
          <p>
            需要がありそうでない少しある（と信じたい）物理演算シリーズ第三回です。遂にそれっぽいことができるようになりました！<br>
            これは誰がどう見ても物理演算ですね（強要）。物体の数が多いせいで処理は重いですが、きちんと落下しています。<br>
          </p>
          <p>
            LWJGLの設定に手間取ってだいぶ時間がかかってしまいました。
            一番修正に時間のかかったバグの原因は掛け算のミスでした…orz<br>
          </p>
          <p>
            次は陰影をつけてみたいですね。でもそのためには面倒くさそうな計算が・・・うごごごご！
          </p>
          <p>
            答え: <span style="color: rgb(254, 254, 254);">1201個(20x20x5+床)</span>
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
