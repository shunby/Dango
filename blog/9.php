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
          $id = 9;
         ?>

        <!--ここから本文-->
        <div class="main-main">
         <p>( ノﾟДﾟ)こんばんわ</p>
         <p>
           掲示板が盛り上がりを見せている今日のこの頃って感じですけども、えー<br>
           先ほどのプライバシーポリシーのアップデートに続きまして、さらなるアップデートです。<br>
           <br>
           いいねボタンを追加します！ﾜｰｲ＼(ﾟ▽ﾟ=))／…＼((=ﾟ▽ﾟ)／ﾜｰｲ<br>
           <br>
           このいいねボタンの実装によって何が変わるのかは分かりません。しかし（逆接の後大事）<br>
           運営の期待としてはみんなの記事の投稿が増えてくれることを期待。<br>
           <br>
           大切なことなのでもう一回言います。<br>
           運営の期待としてはみんなの記事の投稿が増えてくれることを期待。<br>
           <br>
           物足りないのでもう一回<br>
           運営の期待としてはみんなの記事の投稿が増えてくれることを期待。<br>
           <br>
           あと、ブログ名も考えといて(*`∀´*)ﾉﾖﾛｼｸﾅｯ
         </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
