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
          $id = 51;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            今日も自分はいつものようにラーメン屋さんに入ってカウンターに座っていた（ちなみに <a href="https://tabelog.com/saitama/A1102/A110202/11037211/">ここ</a> ）<br>
            店内はお昼時ということもあって、それなりに混んでいた。　自分は味玉ラーメン塩　のりましを注文。　麺硬め、味濃いめ、油少なめだ。　しかしでてきたのはふつーの家系ラーメンで油もかなり浮いてる。もちろんのりもデフォルトだ。<br>
            自分は店員に向かって「味玉ついてると思うんですけど…」と一声。店員はすぐに味玉を追加してくれた。のりの件もあるが、クーポンだしまぁいっかと思った。　それからしばらくして隣のお客さんがラーメンを受け取る。みるとまさに自分の注文したやつじゃん！！！<br>
            「あー多分ここで入れ替わっちゃってます」と一声かけるとすかさず隣の客も「そーですね」といった。<br>
            <br>
            そして隣の客が先に食べ終わり帰り際、「今日はごめんね、これ（千円札）でまた食べに来て」とイケメン過ぎる一言。　とりあえずは渋ったもののそのまま笑顔MAXで受け取ってしまい…そして<br>
            <br>
            らーめんがますます好きになった(*˘︶˘*).｡.:*♡
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
