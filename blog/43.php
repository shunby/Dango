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
          $id = 43;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            中学校を卒業した卍少年は、新しく始まる高校生活に対して確かな夢と希望を抱いていました<br>
            しかしほにゃららが原因でそれが揺らいでしまう。（いいほにゃららが思いつきませんでした、すみません）　いてもたってもいられなくなった少年卍はついに禁断の駄菓子を手に入れてしまいます…<br>
            その禁断の駄菓子とは…「プチプチ占いラムネ！」　なんと自分自身の運命を驚異の精度で占えるのだ！
          </p>
          <img src="/image/blog/blog43.jpg">
          <p>
            とまぁ、茶番はこのくらいにしてと。　昨日からLINEで人狼ゲームが盛り上がっていてですね、今日いつものようにDARSを買おうとおかしのまちおかに立ち寄ったところ人狼関連でこの占い駄菓子を買ってしました。<br>
            わがままとイメチェンは友達と開けてしまったのですが、16個も残っています！<br>
            掲示板の運営部屋にスレを用意するので、占ってくれとお願いしてね！　具体的な願いとかあればちゃんとそれに沿った占い結果をお伝えしましょう。みなさんのネタ力期待してます〃(*o´∪`)o〃<br>
            項目は画像からどうぞご確認くださいな。
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
