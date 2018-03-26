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
          $id = 45;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ただいまでーす！<br>
            今から約12時間前に故郷（自宅in蕨）に帰還しましたよん。　えーっと今回行ったのはランドでですね、久々のディズニーの感想は「ディズニーせまくね？」でした。。。<br>
            <br>
            まず昨日はキモオタのドタキャンから始まり、6人の予定が5人に…　つまりは、コースターで一人余るのね、まぁ俺は全部隣居たけど‹‹\(´ω` )/››<br>
            それから行く日を日曜日に決めたうえ、集合時間を7時から7時半に遅らせるやつとか（開園8時）、チケット買わずに入場の列に並んでたせいでなんと入場できたのが9時近く。　ウラマニさんのお言葉守れてない…<br>
            でも閉園間近まで粘って3大マウンテンは制覇できました。　よきよき( ｰ`дｰ´)<br>
            自分にとってのディズニーの醍醐味は知らない人に手を振ること(*/▽＼*)　返してくれないと悲しいけどね…（キャストさんはみんな返してくれた！）<br>
            特にスプラッシュマウンテンは道のすぐ横をボートが通るので、夕方暇な時間帯はそこで30分くらい手を振ってましたwww<br>
          </p>
          <img src="/image/blog/blog45.JPG">
          <p>春休みのある日曜日、お昼時のディズニーランド</p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
