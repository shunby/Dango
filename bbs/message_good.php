<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once $webroot."/core/user_util.php";
  require_once "access/access.php";
  include $webroot."/template/check_login.php";

  $messageid = $_POST['messageid'];
  if(empty($messageid))exit;

  $userid = $_SESSION['user']->id;

  $pdo = Access::getPDO("bbs");

  $statement = $pdo->prepare("SELECT * FROM message_good where messageid=? AND userid=?");
  $statement->execute(array($messageid, $userid));

  $row = $statement->fetch();
  $sql;
  if(!empty($row)){
    $sql = "DELETE FROM message_good where messageid=? AND userid=?";
  }else{
    $sql = "INSERT into message_good(`messageid`, `userid`) VALUES (?,?)";
  }
  $statement = $pdo->prepare($sql);
  $statement->execute(array($messageid, $userid));

  header("Location: messages.php?roomid={$_POST['roomid']}&threadid={$_POST['threadid']}");
  exit();
