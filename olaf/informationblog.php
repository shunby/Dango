<!DOCTYPE html>
<html>
<head>
  <title>だんご三兄弟</title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    include $webroot."/template/analytics.html"
   ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div id="content">
    <?php include $webroot."/template/header.html" ?>
    <?php include $webroot."/template/navi.html" ?>
    <article id="main">
      <section>
      <p>
        <h1>おらふのネット情報局</h1>
        水曜と日曜に更新！ネットの世界での情報をお届けしていきます<br>
        あまりよく知らない人も多い5chのことなど発信できたらなと思います<br>
        ・水曜　ネット上で以前有名になったこと<br>
        ・日曜　一週間のネットニュースまとめ<br>
        どうぞごらんください<br>
    </p>
    <p>
      <ul>
        <li><a href="information01.php">炎上したバカッターの末路</a>
        <li><a href="information02.php">1月第1週のおらふ的ニュースまとめ</a>

      </ul>
  </section>
</article>

<?php include $webroot."/template/footer.html" ?>

</div>

</body>
</html>
