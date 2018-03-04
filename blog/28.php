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
          $id = 28;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            なが～い一日が終わりました。テストお疲れ様です。ちなみに自分はテストは終わったけど、まだ勉強漬けの日々は終わりそうにありません。とりあえずまぁ、課題f*ck。みんなは数学のやり直しやったのかな？　それについてコメントしてくれるとありがたいなー<br>
            男子の平均点はだいたい210～220あたりのような気がしました。210点台が多くて、ずば抜けてる人も何人かいたからそのくらいだろうかと......やばみ(*'ω'*)←アホガール状態<br>
            女子はわからないから、LINEで教えてもらえると嬉しいな。このブログ見てくれている人がいればだけどw<br>
            それから、この一日で感じたことが一つ。このクラスの男子はどうやら意外と大人だなーって思った。なんでかっていうと、給食の時間に女子は席を移動させてたけど、男子が誰もしてなかったから。いままでもしてなかったけどねw<br>
            それがどうして大人っぽくなるのかはわからないけど、なんとなくそんな感じしない？w
          </p>
          <p>
            なにかクラス旅行で手伝えることがあったら、ホームページという環境を駆使してなんでもしちゃいますよ！永井代表、実行委員の人、気兼ねなく声かけてね(`･ω･´)b
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
