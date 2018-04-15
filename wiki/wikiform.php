<?php

require_once($_SERVER['DOCUMENT_ROOT']."/template/check_login.php");



if (@$_POST['submit']) {
  $checkbox_arr = $_POST['checkbox'];
  array_push($checkbox_arr, "arr");
  $checkbox_string = serialize($checkbox_arr);
  echo $checkbox_string;

  $title = $_POST['title'];
  $easydes = $_POST['easydes'];
  $text = $_POST['text'];

  $pdo = Access::getPDO("bbs");
  $username = $_SESSION['user']->name;
  $userid = $_SESSION['user']->id;
  $wikinum = NULL;

  if(@$_POST['postnum']){//編集
    $sql = "UPDATE wiki SET title=?, easydes=?, maindes=?, tag=? where num=?";
    $set1 = $pdo->prepare($sql);
    $wikinum = $_POST['postnum'];
    $set1->execute(array($title, $easydes, $text, $checkbox_string, $wikinum));

  }else{//新規
    //wikiテーブルへの更新
    $set1 = $pdo->prepare("INSERT INTO wiki(title,easydes,maindes,tag) VALUES(?,?,?,?)");

    $set1->execute(array(
      $title,
      $easydes,
      $text,
      $checkbox_string,
    ));

    $wikinum = $pdo->lastInsertID();
  }

  //wikiuserテーブルへの更新
  $set2 = $pdo->prepare("INSERT IGNORE INTO wikiuser(username,userid,wikinum) VALUES(?,?,?)");
  $set2->execute(array(
    $username,
    $userid,
    $wikinum,
  ));



}
exit();
