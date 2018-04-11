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
          $id = 52;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            新サービスは栄ペディアに決定しました！　栄東にまつわる様々な記事をみなさんで編集していって栄東公式サイトよりもこっち見たほうが学校紹介多いレベルにまで進化させていきましょう！<br>
            使い方はwikipediaとほぼ一緒！　ユーザーならだれでも編集できますし、ユーザーではなくても閲覧できます！<br>
            <br>
            手始めにφさん、お友達とトミーのページを書いてみてはいかがでしょうか？　運営は今年の文化祭の栄東新聞の記事をすべて写真に収めてそれを手作業でコピペしようと思ったり思わなかったり…？<br>
            とまぁそんなわけでただいま絶賛システム開発中です。目安は1週間くらい、つまりは17日当たりの運用開始を目指しますฅ(๑'Δ'๑)ﾆｬｧｧｧﾝ<br>
            オリエンテーション期間は帰るの早いし、らーめん食えるからモチベ上がるし、課題終わってないし、とりま頑張ります(*- -)(*_ _)ペコリ
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
