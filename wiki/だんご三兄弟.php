<?php
require_once $_SERVER['DOCUMENT_ROOT']."/template/autologin_nologout.php";
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
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/analytics.html"
  ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/template/content.css" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
  <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
  <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  <link rel="stylesheet" href="/wiki/contents.css" type="text/css">
  <link href="" rel="shortcut icon">
 </head>

 <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>
      <article id="sidemain">

        <!--タイトル-->
        <h2 class="main_title">だんご三兄弟</h3>

        <!--超ざっくり説明-->
        <div class="main_des">
          <p>だんご三兄弟とは3人の学友で作ったサイトページのことである</p>
        </div>

        <!--目次 sub_titleから取得-->
        <div class="contents_table">
          <p>目次</p>
          <ol>
            <li>ねこ</li>
            <li>卍</li>
            <li>おらふ</li>
          </ol>
        </div>

        <!--内容*3-->
        <div class="contents">
          <h3 class="sub_title">ねこ</h3>
          <div class="sub_des">
            <p>ねこである</p>
            <img src="http://ramen-koizumi.com/img/character/chara1_thum.png">
          </div>
        </div>
        <div class="contents">
          <h3 class="sub_title">卍</h3>
          <div class="sub_des">
            <p>卍である</p>
          </div>
        </div>
        <div class="contents">
          <h3 class="sub_title">おらふ</h3>
          <div class="sub_des">
            <p>おらふである</p>
          </div>
        </div>
      </article>
    </div>
 </body>
</html>
