<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
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
    <link href="../template/sidemain.css" rel="stylesheet" type="text/css">
    <link href="../template/content.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../template/filmblog.css" type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  </head>
  <body>
   <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>
    <?php include $webroot."/template/sideber.php" ?>
    <main id="sidemain">
      <?php
       $article = key_exists("article", $_GET) ? $_GET["article"] : NULL;//クエリからarticleの値を取得
       if(preg_match('/[\\.\\/\\\]/', $article))$article=NULL;//".","/","\"が含まれる場合は弾く(不正アクセスを防ぐため)
       if(!file_exists("大記事/".$article.".html"))$article=NULL;//指定された記事が存在しない場合も弾く
       if(is_null($article)){//articleが存在しない場合
         $a03 = 'h29_autumn';
         $a04 = 'h29_winter';
         $a05 = 'h30_spring';
         $allblog = array(
           $a03,
           //季節変わったらここに変数追加 新しいものほど後に来るように
         );
         echo file_get_contents("大記事/".$allblog[count($allblog) - 1].".html");//配列の最後の要素を表示
       }else{//articleが存在する場合
         echo file_get_contents("大記事/".$article.".html");//指定された記事を表示
       }

       ?>
       <div id="for_clear"></div>
    </main>
   </div>
  </body>
</html>
