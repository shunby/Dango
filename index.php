<!DOCTYPE html>
<!--テンプレート-->
<html>
  <head>
    <title>だんご三兄弟</title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <?php
      $webroot = $_SERVER['DOCUMENT_ROOT'];
      include $webroot."/template/analytics.html"
     ?>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/main.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <article id="main">
        <section>
          <h1>だんご三兄弟(仮)へようこそ</h1>

          <p>
            現在このブログはβ版です。何かあれば以下から気軽にご報告ください。
            <ul>
              <li>ページが読み込めない！・表示がおかしい！→<a href="/bbs/messages.php?roomid=0&threadid=1">問題報告等</a></li>
              <li>こんなページがほしい！・この機能つけて！→<a href="/bbs/messages.php?roomid=0&threadid=2">感想・要望板</a></li>
              <li>これどうなってるの？・誰にも知られずに相談したい→<a href="/questionnaire/questionnaire.php">お問い合わせ</a>(ログイン不要)</li>
              <li>運営に協力したい・サイト管理をしてみたい→<a href="/maid/">メイドさん募集</a>(予定)</li>
            </ul>
          </p>

          <p>
            <h1>運営からのお知らせ</h1>

          </p>
        </section>
      </article>

      <?php include $webroot."/template/footer.html" ?>

    </div>
  </body>

</html>
