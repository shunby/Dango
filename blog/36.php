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
          $id = 36;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            それはとある日常の中で起きた（ちなみに3/3温家にて）今日で試験も終わり（え？現代文？なにそれおいしいの？）次男が殺害されました。<br>
            <br>
            <br>
            ・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・<br>
            ・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・<br>
            <br>
            <br>
            確か温家では兄とおんぴの兄弟だったから次男お前じゃん。バカだバカだとはとは思っていたがついにクスリやって発狂したかと思ったそこのあなた。（俺の中ではゲームデータは息子、ラノベは娘ということになっている）クスリはやってませんがあながち間違っていません。
            <br>
            <br>
            ことの発端はバージョン4.7.0のworld&nbsp;of&nbsp;tanks&nbsp;blitzのアップデートが来たことでした。今日も元気に頑張るぞい、とハッスル（特に深い意味はない）していましたが<br>
            いつものようにアプデができません。説明が面倒なので端折りますが、バカだった俺はアカウント登録もせずにアンインストールし、撃沈<br>
            <br>
            <br>
            <br>
            フザケルナァフザケルナァフザケルナァフザケルナァフザケルナァフザケルナァフザケルナァです。<br>
            <br>
            <br>
            <br>
            なかむらおさなくなったかわいい(><)!!
            <br>
          </p>
          <p>誰かさんの一言コメントより引用、写すの疲れた。。。
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
