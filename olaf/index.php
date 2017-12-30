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

  <?php
    include $webroot."/template/analytics.html"
   ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include $webroot."/template/header.html" ?>
    <?php include $webroot."/template/navi.html" ?>
    <article id="main">
      <section>
        <h1>おらふのブログ</h1>
        <p>

           運営メンバーのおらふによるブログです<br>
           日々のネタを不定期更新する「おらふの日常」は<a href="dailyofolaf.php">こちら</a><br>
           ネットの話題をお届けする「おらふのネット情報局」は<a href="informationblog.php">こちら</a>
         </p>


     </section>
   </article>

   <?php include $webroot."/template/footer.html" ?>

 </div>

</body>

</html>
