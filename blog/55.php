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
          $id = 55;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <img src="http://www.zkai.co.jp/juku/high/tm/koushi/s78min0000002ans-img/s78min0000002ao1.jpg">
          <p>
            高1からこんなガチ講師来るなんて、心境を一言で表すならマジ卍でしょう。　いままで校舎内でたまーに見かけていた理科の先生はまさかの英語の先生でした<br>
            <br>
            Z会の講師で、なかなかのドSらしい。　Z会の講師紹介は <a href="http://www.zkai.co.jp/juku/high/tm/koushi/0129yanase.html">こちらから</a>
            本人曰く、『「大学入試突破という下世話で打算的・功利的な目標を超越した勉強をしたい」という生徒を歓迎する』と言っています。　大学入試以上のことやりそうで怖いっす。<br>
            また、「問題を解いてナンボ、解けてナンボ、合っててナンボ」とも言ってますね。<br>
            <br>
            予備校生の柳瀬先生についてのコメントには<br>
            『z会三大講師の一人。授業はバシバシ当てる。教科書の予習は必須で、授業内容はポイント解説で解答に載ってることはしないが、解説はかなり上手い。自作のプリントも配る。はっきりいってこの授業についてければ相当力がつく。』<br>
            『講義は120分休みなし。きつい。宿題多い。難しくてもわかって当然だと思っている。でも、真剣についていけば３ヶ月で英語は誰にも負けない自信がつく。彼以上の英語講師を俺は知らない。』<br>
            とまぁこんな感じ。　俺まだ受験生じゃないんだけどな…卍卍<br>
            誰か詳しい人に栄ペディア書いてほしいっす。気が重い記事でした。
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
