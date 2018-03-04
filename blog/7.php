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
          $id = 7;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ねこです。掲示板が少しアップデートされました。変更点をあげていきます。<br>
            <h2>更新のないスレッドの非表示化</h2>
            5日間誰も発言していないスレッドはスレッド一覧に表示されなくなりました。それに伴い、スレッド一覧に最終更新日が表示されるようになっています。<br>
            非表示になっているスレッドを表示するには、検索窓から「5日間更新がないスレッドも表示」にチェックを入れて検索をしてください。（検索ワードは入力しなくても大丈夫です）<br>
            <h2><a href="/bbs/messages.php?roomid=0&threadid=4">削除申請板</a>の作成</h2>
            運営にメッセージ・スレッド等の削除依頼が出せるスレッドを作成しました。今後細かなガイドライン等も設定していく予定です。<br>
            <h2><a href="/bbs/messages.php?roomid=0&threadid=3">おらふのブログネタ募集板</a>の作成</h2>
            おらふのブログのネタ募集中です。暇があれば投稿してやってください。
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
