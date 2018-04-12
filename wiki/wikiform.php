<?php

require_once($_SERVER['DOCUMENT_ROOT']."/template/check_login.php");

$checkbox_arr = $_POST['checkbox'];
//var_dump($checkbox_arr);
$checkbox_string = serialize($checkbox_arr);
echo $checkbox_string;

if (@$_POST['submit']) {
  # code...
  $pdo = Access::getPDO("bbs");
  $username = $_SESSION['user']->name;
  $userid = $_SESSION['user']->id;

  //wikiテーブルへの更新
  $set1 = $pdo->prepare("INSERT INTO wiki(title,easydes,maindes,tag) VALUES(?,?,?,?)");
  //仮
  $set1->execute(array(
    "title",
    "easydes",
    "maindes",
    $checkbox_string,
  ));

  $wikinum = $pdo->lastInsertID();

  //wikiuserテーブルへの更新
  $set2 = $pdo->prepare("INSERT INTO wikiuser(username,userid,wikinum) VALUES(?,?,?)");
  $set2->execute(array(
    $username,
    $userid,
    $wikinum,
  ));

}
exit();

 ?>
