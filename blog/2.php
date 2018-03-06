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
          $id = 2;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ねこです。このサイトのシステムをいろいろと作りました。掲示板について少し書いておきます。<br>
          </p>
          <p>
            <h2>書き込みに必要なもの</h2>
            掲示板に書き込むときに最低限必要なのは、「名前」と「本文」だけです。「メール」と「パスワード」は、入力しなくても書き込むことができます。<br>
            パスワードはなりすまし防止に役に立ちます。書き込むときにパスワードを設定すると、名前の下に"#"から始まる文字がつきます。
            同じパスワードを入力しないと、この文字は同じにならないので、たとえ名前が同じでも違う人の書き込みだと特定できるのです。<br>
          </p>
          <p>
            <h2>スレッド作成</h2>
            新しくスレッドを作りたい場合は、スレッド一覧のページを開いてください。開いたら、そのページの部屋名の横にある「スレッド作成」ボタンをクリックしてください。<br>
            ボタンをクリックするとスレッド作成フォームが表示されるので、そこにスレッド名を入力して、「作成」ボタンをクリックしてください。<br>
            ※部屋作成がしたい場合は、運営部屋でスレッドを作って申請してください。
          </p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>

      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
