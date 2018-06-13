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
          $id = 61;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            WindowsのアップデートでPINによるサインインなるものが追加されました。<br>
            事実マイクロソフトは従来のパスワードによるログインではなく、PINでのログインを推奨しています。
          <br>
            理由としては...<br>
          </p>

          <div style="border: 1px solid black; border-radius: 6px;">
            <p>
              PIN はこのデバイスでしか動作しないからです。あらゆるアカウントに開かせすするのに使用する可能性のあるパスワードとは異なり、PIN はこの PC でのみ使用します。PIN は遠くにいるハッカーにとって利用価値はありません。<br>
            </p>
          </div>

          <p>
            とのこと。<br>
            つまり、Microsoftアカウントでログインしてると盗まれたときにいろんなデータ取られちゃう。<br>
            でもPINだと盗み見されても端末とセットでこアカウントこそそれは生きるので、デバイスさえ盗まれなければ心配いらないということです。<br>
            もっと単純に言い換えれば、「パソコンでもスマホみたいに数字だけのパスワード設定すればいいのね」って認識で結構でふ、<(_ _)><br>
            <br>
            具体的な設定の仕方はこちらからどぞ<br>
            <a href="https://pc-karuma.net/windows10-pin-signin/">PIN(暗証番号)でサインインする方法</a>
          </p>

        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
