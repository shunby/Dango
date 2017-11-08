<!DOCTYPE html>
<html>
  <head>
    <title>だんご三兄弟</title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "../template/analytics.html" ?>
    <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="content">
      <?php
        $webroot = $_SERVER['DOCUMENT_ROOT'];
        include $webroot."/template/header.html"
      ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/blog/before.php" ?>

      <?php
        $title = "ブログ見本";//ここにタイトル
        $year  = "2017";//年
        $month = "10";//月
        $date  = "15";//日
        $prev_link = "/dango.html";//新しい記事のリンク
        $next_link = "#";//古い記事のリンク
        $prev_title = "前の記事";//新しい記事のタイトル
        $next_title = "これ以上古い記事はないよ";//古い記事のタイトル
       ?>

      <!--ここから本文-->
      <div class="main-main">
        <p>
          これはブログ記事のテストです。<br>
        </p>
        <p>
          かといって適当なことを書くのもアレなので、このテンプレートの使い方を書いていきます。<br>
          でも、そこまで難しくはないです。途中の&lt?php いろいろ ?&gtと書かれたところでタイトル・リンクなどの設定をして、
          コメントで「ここから本文」と書かれたところと「ここまで本文」と書かれたところの間に本文のhtmlを書くだけです。<br>
        </p>
        <p>
          ね、簡単でしょう?
        </p>
      </div>
      <!--ここまで本文-->



      <?php include $webroot."/template/blog/after.php" ?>
    </div>
  </body>
</html>
