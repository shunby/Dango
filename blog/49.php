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
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
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
      <?php include $webroot."/template/shortcut/shortcut.php" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 49;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            みなさんこんにちは、課題は順調ですか？<br>
            終わった方も終わってない方もある意味オワタな方も、朗報です！<br>
            団子三兄弟に<span style="color:blue">新サービス</span>が追加されます！わーい！<br>
            追加されるサービスの候補は、以下の四つ。<br>
            何が追加されるかは皆さんの投票による多数決で決定されます。
            コメント欄にて追加したいサービスに投票してください！<br>

            <h3>新サービス候補一覧</h3>
            <ol>
              <li>
                <b>擬似SHIP</b><br>
                先生方が思い思いにファイルを並べていくせいでとんでもなくわかりづらい構造になっている
                SHIPのプリントを、使いやすく整理して並べます！
              </li>
              <li>
                <b>栄東知恵袋</b><br>
                勉強のことでもそうでないことでも、好きなことについて質問できます！
              </li>
              <li>
                <b>栄ノート</b><br>
                皆さんが自由に投稿できるブログです。思いの丈をぶちまけろ！
              </li>
              <li>
                <b>栄ペディア</b><br>
                栄東版Wikipediaです。皆で栄東百科事典をつくっちゃいましょう！
              </li>
            </ol>

            候補は上の四つです。皆さんの投票をお待ちしております！<br>
          </p>
          <p>
            さて、もう一つお知らせが。<br>
            団子三兄弟、改名することになりました！<br>
            新しいサイト名は…<br>
            <b style="color:red">栄東生専用サイト「爆ぜろSCC」</b>です！<br>
            これからもSCCが爆ぜるくらいに元気にやっていきましょう！
          </p>
          <p>
            追記：ログインなしでの掲示板閲覧ができるようになりました。（書き込みは要ログイン）
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
