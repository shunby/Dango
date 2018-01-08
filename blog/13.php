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

    <?php include "../template/analytics.html" ?>
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
          $id = 13;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ｳｲｲｲｲｲｲｲｲｲｲｲｲ↑ｯｽ！どうも、シャムで～す！<br>
            はじめまして、シャムです。これ以上はキャラ崩壊になる気がしたため語録の使用は控えさせていただきます。<br>
            さて、皆さん昨年はいかがお過ごしでしたか。<br>
            クラスで団結して様々な行事を制することができた非常に実りのある一年になったと個人的には思っておりますがいかがでしたでしょうか。冬休みに入り、部活がある方、体調を崩した方、家族と旅行に出かけた方、様々な形で過ごしている方がいると思います。<br>
            皆に共通したイベントといえばクリスマスがありましたね。栄光ある孤独というのでしょうか、春がいっこうに来ない皆さん、クリスマスは楽しかったでしょうか。<br>
            えっ？私？いやほら私はみんなのシャムだから！<br>
            前置きが長くなりましたが改めて、皆さんあけましておめでとうございます。<br>
            何故か村上春樹の書き方に感化されたような鼻につくマニュアルのある英語をはじめとして様々な課題に追われてご多忙のところだと思いますが三が日ぐらいは手を休めてもよいのではないでしょうか。<br>
            どうでもいい話ですが村上春樹つながりでかれの本を一読するのもいいかもしれませんね（個人的には「海辺のカフカ」がおすすめです）<br>
            さて、最後になりますが、Z会を控えナーバスになっている人もいるかもしれませんが、あまり根を詰め過ぎないように気をつけてください。戌年を迎え着実に春も近づいております。無責任な発言ではありますが、きっと大丈夫です。<br>
            それでは、皆さんに幸ある一年になることを願いつつ筆をおかせていただきます。<br>
            <br>
            <br>
            P.S<br>
            せっかくの機会なので紹介したいことがあります。<br>
            YouTuberの<a href="https://www.youtube.com/user/bittrans... ">エイレーン（ミライアカリ）</a>という方なのですけど、1000万円の借金をしてスタッフを集め、自分でアニメを作るという夢の実現のため活動しています。<br>
            面白いと思うかどうかは個人差あると思いますがぜひ一度見てみてください。<br>
            興味がわいた人は２Dの時代の動画も見てみてください。きっと好きになると思います。
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
