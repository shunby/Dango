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
          $id = 23;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
           現在、 <a href="/user/?userid=9"> 卍氏</a>がブログコメント機能を作ってくれているので、ご期待ください。<br>
          </p>
          <p>
           という風に先にほめる機構を完成させた彼からプレッシャーをかけられたので、明日が休みだと知った瞬間、今日でコメント機構完成させちゃおうと思いました<br>
           手抜きですからあんまり期待しないでw　掲示板のやつほどしっかししたものじゃないけどまぁそれなりに頑張ったよ<br>
           ただしトップページからのコメントはできないのでご了承ください。<br>
           それにしても明日が休みになったことで3連休が5連休に…<br>
           自分の友達も「今から深夜テンションになるわ」と言って、なにか卑猥なことをする予定の模様<br>
          </p>
          <p>
           せっかくなので、運営が普段どういう活動をしているかっていうのを少し紹介<br>
           最近は自由気ままですね。その象徴ともいえるのがおらふ。をらふに役目乗っ取られてたよあいつ<br>
           なんのことか気になった人はおらふのブログの最新回を見てみてね<br>
           他の二人（自分含む）も最近は自由にやってる。少し前はお互いに会議して開発の進捗を確認しあってたけど、今は勝手にやって勝手にサーバーにアップしてる感じw<br>
           自分がブログを更新したときはLINEグルにリンクを貼って通知するように心がけてるけど、ほかの二人は知ってるのかw<br>
           あと、あの二人は人の失言をすくうのが上手だね。俺いろいろひどい目にあった。。。<br>
           それでも運営はたのしいかな。運営が楽しいっていうかパソコンでコード書くのがそれなりに楽しい。分からないとすぐ飽きるけどw<br>
           プロプログラマーも運営に一人いるから、わからなかったら彼に聞くとだいたい解決して今のところそこまで大変だと思ったことはないかな。<br>
           次回、自分がブログ書くときは実際にどういう風に作業してるかってのを紹介しようと思う。作業環境もプロプログラマーの子が整えてくれてすごいんですよ。<br>
           それではまた。<br>
          </p>

        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
