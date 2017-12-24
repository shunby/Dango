<!-- オラフへ
この"olaf"フォルダの中身は好きにしてくれて大丈夫です。このメッセージも消してもらって構いません。
ただし、サイトに統一感を出すために守ってほしいことがあります。
1. サイトの大枠はtemplate/template.phpをもとにしてください。
2. ページの拡張子は.phpにしてください。php以外にするとPHPのコードが動作しません。
-->

<!DOCTYPE html>
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
        <h1>おらふのブログ</h1>
        <p>
        オラフこと某クラスの常識人が一日おきに更新‼<br>
        ～更新内容～<br>
        月　募集したネタ<br>
        水　募集したネタ＆金曜までの宿題<br>
        金　集まった宿題をまとめてランキングにして発表<br>
        日　おらふ的一週間のネットニュースまとめ<br>
        宿題の投稿は<a href="/bbs/messages.php?roomid=0&threadid=3">おらふのブログネタ募集スレ</a>から<br>
      </p>
        <ul>
          <li><a href="/olaf/olafblog01.php">第一回</li>
        </ul>
      </section>
    </article>

    <?php include $webroot."/template/footer.html" ?>

  </div>
</body>

</html>
