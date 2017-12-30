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
        $id = 5;
       ?>

      <!--ここから本文-->
      <div class="main-main">
        <p>
          毎日更新はつらいものです...ε＝（‐ω‐；；）<br>
          今日はおらふのブログ開設にあたっておらふにインタビューしてきました。（LINEで）ということで、その結果をQ ＆ A方式でみなさんにお伝えしようと思いまーす。<br>
          <br>
          Q.どうして野菜が嫌いなんですか？<br>
          A.野菜の食感がヤダ<br>野菜なんて俺に盛っても捨てるんだから食いたい人がたくさん食った方が野菜のためになるw<br>
          <br>
          Q.好きな女性（男性でも）のタイプを教えてください！！♡(人>ω<*)ｵﾈｶﾞｲｼﾏｽ!<br>
          A.一緒にいて楽しい人（ってなんでまじめに答えさせてんだオイ）<br>
          <br>
          Q.3学期の席替えで隣になりたい人は誰ですか？<br>
          A.高津くん‼｟（<s>永井</s>）<br>
          <br>
          Q.クラスのみんなに一言<br>
          A.なぜ自分がおらふに似ているといわれるのかわからない<br>
          →じゃあお前のブログ名おらふから変えろよw<br>
          <br>
          以上、おらふのインタビューでしたー、おらふさんありがとうございます！<br>
          なお、ブログ開設は今週末との見込みのようですよ？　お楽しみに！ﾜｰｲε=ヾ(*・∀・)/<br>
        </p>
      </div>
      <!--ここまで本文-->

      <?php include $webroot."/template/blog/after.php" ?>
    </div>
  </body>
</html>
