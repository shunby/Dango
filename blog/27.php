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
          $id = 26;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ねこです。
          </P>
          <p>
            何か作ってみようと思い立ち、ゲームでも作ってみることにしました。<br>
            しかしアイデアが全くないので、私に作って欲しいゲームのアイデアを募集します。<s>え、単語帳？何それおいしいの？</s><br>
            使うのは<a href="https://unity3d.com/jp">Unity3D</a>。3Dとありますが2D・3D両方作れます。
            あと、一応スマホ・PC両方で遊べるようにするつもりです。<br>
            条件は、
            <ol>
              <li>上手な絵や、自作3Dモデルを必要としない</li>
              絵は絶望的に下手で、モデリング技術も皆無です。
              <li>ストーリーがない</li>
              話を作るのも無理です。そういう才能ある人って尊敬します。
              <li>短時間で遊べる</li>
              超大作はたぶん途中で折れるので、ミニゲームくらいのでお願いします。
            </ol>
            です。注文が多くてすみません(汗)。
            アイデアの投稿はコメント欄か<a href="/bbs/messages.php?roomid=0&threadid=7">このスレ</a>にお願いします。
          </p>
          <p>
            よろしくお願いします。ねこでした。
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
