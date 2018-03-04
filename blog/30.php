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
          $id = 30;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            栄東出身の数学教師N先生に関する話。<br>
            <br>
            まず、N先生が栄東の卒業生だと初めて知った人はその時点でまず驚いたでしょ。あと、彼は現在28歳だから、トミーってそれより年下なのかな？よく分からない。（てか数学の宿題終わらない）<br>
            <br>
            で、本題。<br>
            N先生が17歳の時、つまりは受験季節の真っ只中。あいつなんと年下の女の子と付き合っていたんだわ。年下とかまじで出会う経緯が分からぬ... よっぽどモテてたのかなぁ。そういえば一学期の頃とかよく女子高生が会いに来てたし。何はともあれ、N先生はバレンタインデー大変そうだなw<br>
            <br>
            話を戻すと、受験の真っ只中なのでNはあまり彼女と会えなくなることを事前に彼女に伝えたらしいんだ。結構律儀ですね。クラス組全員に年賀状書いたみたいだし。でもしばらくして彼女はやっぱり会えないのが嫌でNを降っちゃったんだ。N何もしてないのに可哀想。<br>
            ここまでは至って普通のよくある話。ここからが肝心。受験の前日になって彼女はNを呼び出します。呼び出し先は家でそこでお守りを渡したらしい。そりゃあもう好きな子にお守りもらったら、勉強しなくても受かりそうだわ。羨ましい限り。すでに両思いの雰囲気あるけど結局このときは恋人関係は戻らなかった。そして卒業式。彼女はこんどはNにネクタイをおねだりしたらしい。ブレザーの高校って、第二ボタンの代わりにネクタイっていう文化あるのか？初耳w 採寸でネクタイ1つしか買わなかったかんだけど、もう1つ買っておくかーwwwww<br>
            <br>
            こんな感じで別れた後にまたラブラブになっちゃったもんだから、また付き合っちゃいます。大学生になって時間的余裕もあるし、彼女もいるし完全にリア充を満喫していたN。それも年下だから絶対同級生に自慢したって。その時代にリア充爆発しろっていう単語はあったのかな？w<br>
            でも忘れてはならないこと、今度は彼女が受験なんだよ。いやー。。。受験の期間会えないだけですぐ別れるという発想になるちょっと残念な性格な彼女はまたもやN振っちゃうんだ。<br>
            落ちはないけど文章要約すると、「N野後輩にネクタイ盗まれるwww」になって面白いでしょ！
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
