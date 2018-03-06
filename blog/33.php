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
          $id = 33;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            UIとはこのだんご三兄弟に頻繁に出現する人物であり、七不思議の5番目に登録されている存在である。<br>
          </p>
          <p>
            生態その1<br>
            爆弾発言をよくする。<br>
            ・ホワイトデーが3.14だから「この愛は永遠だ」と言う理系がいるが「この愛は永遠に不完全だ」とも言える説　結論：理系はもうちょっと素直になれ<br>
            ・Innocentばあさん略してINOばあ<br>
            ・リア充二告グ<br>
            &emsp;一、今カラデモ遲クナイカラチヨコト共二歸レ<br>
            &emsp;二、授受スルモノは全部逆賊デアルカラ爆破スル<br>
            &emsp;三、オ前達ノ父母兄弟ハ國賊トナルノデ皆泣イテオルゾ<br>
            &emsp;二月十四日 戒嚴司令部<br>
            &emsp;下衆官兵ニ告グ<br>
            &emsp;一、今カラデモ遲クナイカラ家ニ歸レ<br>
            &emsp;二、チヨコモ貰エヌ貴様ハ可哀相デアル<br>
            &emsp;三、オ前達ノ父母兄弟ハ彼女ナキ貴様二皆泣イテオルゾ<br>
            &emsp;二月十四日 戒嚴司令部<br>
          </p>
          <p>
            生態その2<br>
            しりとりで「ん」から始まる言葉をよく知ってる<br>
            ・ンジャメナ<br>
            ・ンゴメニ岬<br>
            ・ンタレ五世<br>
          </p>
          <p>
            生態その3<br>
            妄想が好き・・・(ﾉε･`●)<br>
            ・ポッキーゲームならぬポテトゲーム(これはメニューなのか、そして誰とやるのか?そもそもできるのか?)<br>
            ・美女クエ<br>
          </p>
          <p>
            生態その4<br>
            先生のものまねが得意<br>
            ・んま(村上っぽく)<br>
            ・マんミんムんメんモ！！！<br>
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
