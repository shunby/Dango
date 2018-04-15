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
  <link rel="stylesheet" href="/wiki/index.css" type="text/css">
  <link href="" rel="shortcut icon">
 </head>

 <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>
      <article id="sidemain">
        <h2>栄ペディアへようこそ！</h2>

        <!--新規ページ作成リンク-->
        <div class="newarticle">
          <h3>新しい記事を作成</h3>
          <a>あたらしい記事の作成は&emsp;</a>
          <a href="/wiki/editing.php" style="font-weight: 10px;">こちらからどうぞ</a>
          <a>
            <br>
            新しいページを作るうえで最初に<br>
            1.記事タイトル　2.簡易説明　3.タグの設定　が必要です。
          </a>
        </div>

  


        <!--運営おすすめページ-->
        <div class="recommend">
          <h3>運営おすすめページ</h3>
          <a>まだありません</a>
        </div>

        <!--検索システム-->
        <form class="search" action="index.php" method="get">
            <h3>記事一覧</h3>
            <select name="type">
              <option value="tag">タグ検索</option>
              <option value="name">名前検索</option>
            </select>
            <input id="searchbox" type="text" name="text">
            <input id="searchbutton" type="submit"value="検索">
        </form>

        <!--検索結果-->
        <?php include $webroot."/wiki/article_list.php"; ?>


      </article>
    </div>
 </body>
</html>
