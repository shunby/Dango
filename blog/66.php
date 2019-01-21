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
      <?php include $webroot."/blog/sakura.html" ?>
      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 66;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <?php include $webroot."/blog/sakura.html" ?>
          <p>
            こんにちは！まさか二回もブログを書くことになるとは
            思わなかったよ！ねこだよ！
          </p>
          <p>
            突然ですが、みんなは春って知ってますか？知ってますよね！あの「僕気温が穏やかで過ごしやすいよー」
            って雰囲気出しながら実際夏と変わらないくらい暑いこの世で最も性格の悪い季節です！
            虫唾が走りますね！あらゆる季節が夏と秋の間のちょっと涼しい期間に統合されればいいのに。
            あ、でも長期休みは欲しいです。それとこれとは話が別。
          </p>
          <p>
            今回はですね、そんな春が近づいているということで、このサイトを春っぽくしてみました！
          </p>
          <p>
            …え？「春はまだだろ」って？
          </p>
          <p>
            はあ…これだから季節素人は困りますね。春がやってくる前に体を春に慣れさせておかないと、
            本当に春が来た時に勝てませんよ！これはいわば春を想定した避難訓練！
            生半可な気持ちでいては、本物の春が来る前にやられてしまいます！
          </p>
          <p>
            というわけで、みなさん、この綺麗な桜吹雪を見て、春に備えてくださいね。
          </p>
        </div>



        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
