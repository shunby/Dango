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
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
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
      <?php include $webroot."/template/shortcut/shortcut.php" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 60;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <video controls width="480" height="320" preload="auto">
            <source  src="/image/blog/blog60.mp4" />
          </video>
          <p>
            おわかりいただけるだろうか？<br>
            この立方体をぐるぐるさせるためだけに八時間もかかったということを………。
          </p>
          <p>
            <a href="https://www.lwjgl.org/">LWJGL(ホームページかっこいい)</a>を使って立方体を動かしています。
            これは付属のデモとかじゃなくて自分で一から作ったのでめっさ時間かかりました。つかれた。
          </p>
          <p>
            LWJGLは有名な<a href="#foot_c">C言語<sup>(*1)</sup></a>でできた画面表示用ライブラリのOpenGLを、
            <a href="#foot_java">Java<sup>(*2)</sup></a>に移植したものです。
            こいつは画面表示ならなんでもやってくれる凄いやつで、これを使ってるゲームも結構あります、
            例えばMinecraftとか。あれの画面表示は全部LWJGLがやってます。多分。
          </p>
          <p>
            そのLWJGLを使って、立方体を作ってぐるぐるしてみました。
            作った当人は物凄く感動してるんですが、外からすると非常に地味ですね。申し訳ない。
            でもここまで来れればばそのうち何か面白いものが作れる！はず！
          </p>
          <br>
          <p id="foot_c">
            *1：C言語<br>
            プログラミング言語の一種で、太古の昔からある古株。
            とってもOSやハードウェアに近い言語で、基本的に何でもできます。
            あと処理速度が非常に速いです。<br>
          </p>
          <p id="foot_java">
            *2：Java<br>
            プログラミング言語の一種。ねこの母語でもある。<br>
            "Write once, run anywhere"「一度書けば、どこでも動く」を掲げ、どんなOSでも（ほとんど）同じコード
            で処理を書ける言語。他の言語ではOS間の差を考慮してプログラムを書く必要がありますが、
            Javaでは一つのコードで済ませられるのです。そのぶん足が遅いとか言われてたけど、そんなのは昔の話なんだからね！
            もう一つ特徴として「オブジェクト指向」というのもありますが、こっちはややこしいのでそのうち。
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
