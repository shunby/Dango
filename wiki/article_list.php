<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/template/autologin_nologout.php";

  $list = NULL;

  if(!key_exists('type', $_GET))exit("不正なクエリ");
  if(!key_exists('text', $_GET))exit("不正なクエリ");

  $search_text = $_GET['text'];
  $pdo = Access::getPDO("bbs");

  if(strcmp($_GET['type'], 'name') == 0){
    $sql = "SELECT * from wiki where title LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('%'.$search_text.'%'));
    $list = $stmt->fetchAll();
  }else if(strcmp($_GET['type'], 'tag') == 0){
    $sql = "SELECT * from wiki where tag LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('%'.$search_text.'%'));
    $list = $stmt->fetchAll();
  }else{
    $sql = "SELECT * from wiki where 1";
    $stmt = $pdo->query($sql);
    $list = $stmt->fetchAll();
  }

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
  <link href="article_list.css" rel="stylesheet" type="text/css">
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
        <ul>
          <?php
            foreach ($list as $article) {
              $easydes = substr($article['easydes'], 0, 20);
              if(strlen($article['easydes']) > 20)$easydes .= '…';

              $tags = unserialize($article['tag']);
              $tag_str = "";
              foreach ($tags as $tag) {
                if(strcmp($tag, "arr") === 0)continue;
                $tag_str .= $tag." ";
              }


              echo <<<EOM
<a href="article.php?wikinum={$article['num']}">
<li class="article_list">
  <a href="article.php?wikinum={$article['num']}">{$article['title']}</a><hr>
  <span class="easydes">{$easydes}</span><br>
  <span class="tags">{$tag_str}</span>
</li>
</a>
EOM;
            }
           ?>
        </ul>
      </article>
    </div>
 </body>
</html>
