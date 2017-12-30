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

  <?php
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
    <main id="main">
      <p>
        さて皆さんお待ちかね（？）のおらふのブログの時間です‼<br>
        今日は...初回からネタが足りないです（笑）とりあえず、3-1の剣道部員某ｋ田クンの面白エピソードを語ろうと思います<br>
        中2の冬季大会の時の話ですが、試合前のアップの時間になっても彼はどこかへ行ってしまって、
        帰ってこなかったんです。皆で心配になって探し回っていると、大宮武道館の中で最も日当たりがよいと思われる廊下の
        ベンチで、爆睡しているではありませんか！（その後みっちり油を搾ったのは余談です）<br>
        他には、今年の5月の行田の錬成大会の時の話ですが、彼が下車する駅を間違えて、海上までレンタサイクルで来た、
        なんてのもいい思い出ですねえ<br>
        連絡先を交換できるよう頑張ります!!<br>
        少し短いですが、今回はここまでです。<br>
        ネタ切れがひどいので、これからは掲示板→運営部屋→おらふのブログのスレッドでネタを募集します!<br>
        してくれないと年内にはネタがつきそうです((
      </p>
    </main>
    <?php include $webroot."/template/footer.html" ?>
  </div>
</body>
</html>
