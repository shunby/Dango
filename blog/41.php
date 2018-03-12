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
          $id = 41;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            最近、電車の中ではナンプレ（数独は商品名だということは、今日知ったw）にはまって、いやはまっているというほどでもないんですけど、まぁちょくちょく楽しんでる感じなんです<br>
            もちろんナンプレにも難易度があって、最初のほうは中級でヒーハー言ってた僕でも今ではなんなく上級をクリアできるまでに至りました。そこで昨晩、僕は最上級のエキスパートとかいう禁断のナンプレを始めてしまったのである。<br>
            おそらく昨晩だけで3時間以上はかけただろう…　時計の針（ちなみにデジタルだが。）が1時を回ろうとしているのに気が付いたとき、俺は完全に茫然自失になった。<br>
            <br>
            なんという時間の浪費q(ﾟдﾟ )<br>
            <br>
            しかし、ここまでやったならクリアする以外の選択肢はない！　そのいきで今朝の電車の中で再び挑戦してみたのですがもちろんすらすら埋まるわけはなく。。。<br>
            そこで……！　みなさんのお力を借りようというわけです！*.+ｷﾗｰ(☆∀☆)/"ｰﾝ*.+<br>
            よろしくね(⋈◍＞◡＜◍)。✧♡
          </p>
          <img src="/image/blog/blog41.JPG" style="margin-bottom: 25px;">
          <img src="/image/blog/meido.gif" style="width: 250px; height: auto;">
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
