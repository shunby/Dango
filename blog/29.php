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
          $id = 29;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            今日の理科2分野の時間…　観察した人が少ないようで残念ですと言っているにも関わらず、みんながみんな古典単語を見つめておりとても微笑ましく思いましたw<br>
            少しだけ石川のメンツを守ってやろうと自分は今日出された宿題をやってみましたよ。その結果についてブログに書きかきしているという次第。<br>
          </p>
          <p>
            2月6日火曜日　天気:晴れ　観察時刻:7時30分　観察対象:オリオン座<br>
            <img src="/image/blog/blog29.JPG">
            高度:30度　左上と右下の恒星がはっきり見えた。3つの並んでいる星も若干見えた。ほかの二つは見えなかった。
            <br>
            ～感想～<br>
            自分の家が3階にテラスみたいになっていて、そこの壁を越えて簡単に屋根に登れるんですね。今日はそこで観察しました。<br>
            まず最初に思ったこと。めっちゃ明るい。雲が昼間みたいにはっきり見えるの。（東大宮とかいう全然大宮のような都会感がない田舎は暗いかもしれないが）<br>
            だからこの時間に南に見えることは知っていたんだけど、全然見つけられなかった。だからその場で星座表とかいうアプリ入れることになったw<br>
            出来事をずらずら書いてるだけで感想になってないからまとめると、オリオン座発見以上。
          </p>
          <p>
            2組のある、他人に厳しくて自分に甘い教師（顧問やってるときとか特にそう）が2組の平均点（自己採点）を出してくれました。<br>
            179点だそうですよ。<br>
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
