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
          $id = 41;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            いよいよ明日は卒業式です！　予行でぐっとこらえた涙を明日ははばからずに流してくださいねヾ(｡>﹏<｡)ﾉ<br>
            中学校卒業って聞くとなんかすべてが終わった気がして、全く勉学に励む気がしなくなってしまうんだよなw<br>
            そんでなにをしていたかって言うとこれを作っていました！<br>
          </p>
          <img src="/image/blog/blog42.png">
          <p>
            Spähpanzer SP I.C.　という戦車の模型です。ゲーム内ではこんな感じ<br>
            <a href="https://en.wikipedia.org/wiki/Sp%C3%A4hpanzer_SP_I.C.">wikiはこちらからどうぞ</a>　偵察用戦車でとても小さくてかわいいんです(´•ω•｀♥)　Spähpanzerの戦車はゲーム内でどれも大好きですね！全部かわいい！（わからないと思いますが…）<br>
          </p>
          <img src="blog42-2.png">
          <p>
            まだ右側の車輪が完成してませんが、左側のものを対称にコピーすれば完成です！　٩(ˊᗜˋ*)وｲｴｰｲ<br>
            3Dプリンターの設計図みたいなやつです。　多分建築の設計とかよりも断然簡単だから、興味を持った人はチャレンジしてみてもいいんじゃない？w<br>
            主に設計するソフトは2種類あって、3DCADと3DCGです。　んでこれは3DCADで作りました。　CADのほうは製図の延長線上で立体を作るみたいな感じなので、絵が下手でも簡単にできます。<br>
            八村先生が結構ハイエンドな3Dプリンターを持っているので、それで一回は作ってもらう予定です。友達は一回やってもらったみたいだけど、一回目は失敗だったのかな？　よくわからない。<br>
            その人よ、コメント求！
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
