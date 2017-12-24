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
    <link href="/template/main.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
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
      <?php include $webroot."/template/blog/before.php" ?>

      <?php
        $id = 10;
       ?>

      <!--ここから本文-->
      <div class="main-main">
       <p>
         CSS。みなさんは、CSSというものをご存知だろうか。Cascading Style Sheets(カスケーディング・スタイル・シート)の略で、ホームページの見た目を決めるのに
         とても重要な役割を果たしてくれている。<br>
         CSS。意味なんて分からなくてもよい。今回の話で、CSSはそれほど重要じゃない。<br>
         今日は、CSSから始まったある出来事について話そう。
       </p>
       <p>
         それは、ある冬の日のことだった。時刻は18時。そこまで遅くはないが、外はもう真っ暗だった。<br>
         私は、国駿と編集会議をしていたんだ。会議は滞りなく進んでいた。
         だいたい決めることも決まったかな、と思ったとき、国駿が言った。<br><br>
         「じゃあ、ブログ書いてSCCで微調整します。」<br><br>
         一瞬、頭が真っ白になった。しかし、すぐに何が起こったのか理解した。国駿も誤りに気付いたようで、<br>
         「CSSでしたwww」と笑っていた。<br>
       </p>
       <p>
         たったこれだけのことだ。しかし、あれからというもの、私の頭の片隅にはある恐怖が纏わりついて離れないのだ。<br>
         SCCに対する恐怖。SCC。Sakaehigashi Career Club。この恐ろしい労働が、私達の奥深くに何か冒涜的なものを植え付けているのではないか、という恐怖。<br>
         その恐怖を感じ始めた時から、私の感じる世界は私のものではなくなってしまった。全てがSCCによって書き換えられている。そうとしか思えない。<br>
         私の認識は、私の記憶は、私の心は、もはやSCCのものになってしまった。じきに全てが――――<br><br><br><br><br>
       </p>
       <p style="color: rgb(235, 235, 235)">これは黒歴史行き確定ですわ</p>
      </div>
      <!--ここまで本文-->

      <?php include $webroot."/template/blog/after.php" ?>
    </div>
  </body>
</html>
