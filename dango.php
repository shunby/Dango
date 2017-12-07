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

      <main>
        <div id="main">
          <div class="main-title">
            テスト
          </div>
          <div class="main-date">
            2017/10/11
          </div>
          <div class="main-main">
            テスト
          </div>
          <div class="main-before">
            <img src="/image/blog/trn.png" alt="" id="trn">
            <div class="before-blog">
              <a href="#" style="text-decoration: none">テスト0テスト0テスト0テスト0テスト0テスト0テスト0テスト0</a>
            </div>
          </div>
          <div class="main-after">
            <img src="/image/blog/trn2.png" alt="" id="trn2">
            <div class="next-blog">
              <a href="#" style="text-decoration: none">テスト2</a>
            </div>
          </div>
          <div class="main-tocontents">
            <a href="blog/index.php" style="text-decoration: none">目次へ</a>
          </div>
        </div>
      </main>

      <div class="wtf">

      </div>

      <?php include $webroot."/template/footer.html" ?>

    </div>
  </body>
</html>
