<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>だんご三兄弟</title>

    <meta name="author" content="だんご三兄弟">
    <meta name="http-equiv" content="300">

    <?php include "../template/analytics.html" ?>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link href="../template/header.css" rel="stylesheet" type="text/css">
    <link href="../template/footer.css" rel="stylesheet" type="text/css">
    <link href="../template/navi.css" rel="stylesheet" type="text/css">
    <link href="../bbs/search_form.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../template/filmblog.css" type="text/css">
  </head>
  <body>
   <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>
    <main id="main">
      <?php
       $a02 = file_get_contents('大記事/sample.html');
       $a03 = file_get_contents('大記事/h29_autumn.html');
       $a04 = file_get_contents('大記事/h29_winter.html');
       $a05 = file_get_contents('大記事/h30_spring.html');
       $allblog = array(
         $a02,
         //季節変わったらここに変数追加
       );
       rsort ($allblog);
       echo $allblog[0];
       ?>
    </main>
    <?php include "../template/footer.html" ?>
   </div>
  </body>
</html>
