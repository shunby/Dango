<?php
$article_type =  key_exists("article_type", $_POST) ? $_POST['article_type'] : null;
$article_id =  key_exists("article_id", $_POST) ? $_POST['article_id'] : null;
$act =  key_exists("act", $_POST) ? $_POST['act'] : null;
if(is_null($article_type) || is_null($article_id) || is_null($act))exit;

$good_data = new DOMDocument("1.0", "UTF-8");//全ブログのいいねデータ
$good_data->preserveWhiteSpace = false;
$good_data->formatOutput = true;
$good_data->load("good.xml");

$articles_data = $good_data->getElementsByTagName($article_type)->item(0);//該当する生地タイプのいいねデータ

//送られてきた記事データに該当する記事のいいね数
$count = $articles_data->getElementsByTagName('a'.$article_id)->length != 0 ? $articles_data->getElementsByTagName('a'.$article_id)->item(0)->nodeValue : 0;

$cookie = key_exists($article_type, $_COOKIE) ? $_COOKIE[$article_type] : null;
if (!$act ||
(isset($cookie)
 && key_exists($article_id, $cookie))) {//いいねするフラグがオフまたはクッキー名がarticle_typeのarticle_id番目の値が存在するか

  echo $count;
}else {//まだいいねしてない

  setcookie($article_type."[".$article_id."]",'1');//いいねしたフラグを立てる
  $count = $count+1;
  echo $count;

  if($articles_data->getElementsByTagName('a'.$article_id)->length != 0){//いいね数が既に設定されている
    $articles_data->getElementsByTagName('a'.$article_id)->item(0)->nodeValue = $count;
  }else{//まだ設定されてない
    $articles_data->appendChild($good_data->createElement('a'.$article_id, $count));
  }
  $good_data->save("good.xml");
}
 ?>
