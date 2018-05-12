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
          $id = 56;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            栄東の <a href="http://www.sakaehigashi.ed.jp/">officiaホームページ</a> にも部活動紹介がありましてですね、ネタ探しにいろいろ見てたわけなんですけど、部活動紹介に出てこなかったちょっと特殊な部活をみつけましたのでご紹介。<br>
            タイトル通りインターアクト部なんですけど、「インターアクトクラブ」ってのが <a href="https://ja.wikipedia.org/wiki/%E3%82%A4%E3%83%B3%E3%82%BF%E3%83%BC%E3%82%A2%E3%82%AF%E3%83%88%E3%82%AF%E3%83%A9%E3%83%96">wiki</a>にあって...<br>
            インターアクトクラブ（Interact Club、IAC、IC）は、ロータリークラブにより提唱された、12歳から18歳までの青少年または高校生のための社会奉仕クラブである。<br>
            と説明されてます。ボランティア集団みたいですね。<br>
            <br>
            そして<a href="http://www.sakaehigashi.ed.jp/club/">栄東の部活紹介では...</a><br>
            本校インターアクトクラブは、大宮東ロータリークラブの提唱により、昭和58年9月に結成されました。
            吹奏楽部との兼部という形で活動しています。“Think Globally, Act Locally”のスローガンの下、国際理解と社会奉仕を目的としたインターアクトクラブの意義を理解して、身近のできることから一つ一つ地道に取り組んでいます。<br>
            とのこと。<br>
            インターアクト部ほんとにあんの？　吹奏楽部と兼部らしいですけど、吹奏楽部の人たちはなにか詳しいことを知ってるんかな。<br>
            なにか分かった人はコメント欄によろしくー　それから勇者の人は生徒総会で聞いてみてくれw<br>
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
