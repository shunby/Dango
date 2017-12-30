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
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
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
        <h1>おらふの日常</h1>
        運営メンバーのおらふが日常のネタを不定期更新！ネタの要望お待ちしております<br>
        毎週一回「宿題」がありますので、ぜひぜひ宿題の提出お待ちしております<br>
        ネタの要望は<a href="http://paysestbbs.webcrow.jp/bbs/messages.php?roomid=4&threadid=1">おらふのブログネタ募集スレ</a>から<br>
        宿題の投稿は<a href="http://paysestbbs.webcrow.jp/bbs/threads.php?roomid=4">おらふのブログ部屋</a>から<br>
      </p>
      <p>
        <ul>
          <li><a href="/olaf/olafblog01.php">第一回</li>
          <li><a href="/olaf/olafblog02.php">第二回</li>
          <li><a href="/olaf/olafblog03.php">第三回</li>
        </ul>
      </section>
    </article>

    <?php include $webroot."/template/footer.html" ?>

  </div>
</body>
</html>
