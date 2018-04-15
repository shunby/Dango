<?php

  $list = NULL;

  if(!key_exists('type', $_GET))$_GET['type'] = "";
  if(!key_exists('text', $_GET))$_GET['text'] = "";
  if(!key_exists('page', $_GET) || !ctype_digit($_GET['page']))$_GET['page'] = "0";

  $search_text = $_GET['text'];
  $pdo = Access::getPDO("bbs");

  if(strcmp($_GET['type'], 'name') == 0){
    $sql = "SELECT * from wiki where title LIKE ? order by `time` desc limit ".($_GET['page']*20).", 20";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('%'.$search_text.'%'));
    $list = $stmt->fetchAll();
  }else if(strcmp($_GET['type'], 'tag') == 0){
    $sql = "SELECT * from wiki where tag LIKE ? order by `time` desc limit ".($_GET['page']*20).", 20";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array('%'.$search_text.'%'));
    $list = $stmt->fetchAll();
  }else{
    $sql = "SELECT * from wiki where 1 order by `time` desc limit ".($_GET['page']*20).", 20";
    $stmt = $pdo->query($sql);
    $list = $stmt->fetchAll();
  }

?>
<link href="article_list.css" rel="stylesheet" type="text/css">

<ul>
  <?php
  foreach ($list as $article) {
    $easydes = mb_substr($article['easydes'], 0, 20);
    if(strlen($article['easydes']) > 20)$easydes .= '…';

    $tags = unserialize($article['tag']);
    $tag_str = "";
    foreach ($tags as $tag) {
      if(strcmp($tag, "arr") === 0)continue;
      $tag_str .= $tag." ";
    }


    echo <<<EOM
<li class="article_list">
  <a href="article.php?wikinum={$article['num']}">{$article['title']}</a><hr>
  <span class="easydes">{$easydes}</span><br>
  <span class="tags">{$tag_str}</span>
</li>
EOM;
            }
?>
</ul>
<div style="text-align: center">
<?php
  $page = $_GET['page'];
  $npage = $page + 1;
  $ppage = $page - 1;
  $prev_link = $page == 0 ? "" : <<<EOM
<-<a href="?page={$ppage}">{$ppage}ページ</a>
EOM;
  $next_link =  <<<EOM
<a href="?page={$npage}">{$npage}ページ</a>->
EOM;
  echo $prev_link."|".$page."ページ|".$next_link;
?>
</div>
