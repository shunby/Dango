<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/bbs/access/access.php");
  require_once($_SERVER['DOCUMENT_ROOT'].'/core/user_util.php');
  session_start();
  $postnum = $_POST['postnum'];
  $error = '';
  if (@$_POST['submit']) {
    if ($_POST['content'] == $error) {
    } else {
      $userid = $_SESSION['user']->id;
      $username = $_SESSION['user']->name;
      $pdo = Access::getPDO("bbs");
      $set = $pdo->prepare("INSERT INTO comment(postnum,content,userid,username) VALUES(?,?,?,?)");
      $set->execute(array(
      $_POST['postnum'],//postnum
      $_POST['content'],//coutent
      $userid,
      $username,
      ));
    }
  }
  header("Location: {$_POST['url']}");
  exit();
?>
