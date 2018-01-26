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
          $id = 25;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            この前の連休に降った雪で、通学路も大変なことになっている今日この頃。自分の友達は今日の帰り道、車道で思いっきりこけてて笑いましたw<br>
          　で、今回の話は雪がメインじゃなくて通学路がメインです。<br>
            GoogleMapの地図で見てみたんですけど、現在の通学路、これすごい遠回りになってませんか？
          </p>
          <img src="/image/blog/blog25_1.jpg">
          <p>
            それに比べてこれが自分が思う一番いい通学路<br>
            ポイントは橋の下の部分ですね。産業道路の信号で待たされるのが、通学路の渋滞に大きく影響してると思うんだ。橋の下は信号も横断歩道もないんだよ。もう、これは革命だよね。通学路のルネッサンス時代到来ですわ。これで29分には産業道路を渡らないといけないという10分着勢のシビアな世界とはおさらばじゃ！<br>
            それから、正門から入れるから、下駄箱まで近いのもいいよね。ながーい通学路を歩き終えて着いたと思ったらまた下駄箱まで地味に長いの若干嫌だったんだ。
          </p>
          <img src="/image/blog/blog25_2.jpg">
          <p>
            記事がいいね！と思ってくれたらいいねボタンほんまよろしくな！俺にやってほしい企画があったらどしどし企画欄に言ってほしい！<br>
            みんな！人生たのしもーぜ！(パクリ)
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
