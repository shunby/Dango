<?php
  require "access.php";

  $roomid = $_POST['roomid'];
  $threadid = $_POST['threadid'];
  $name = $_POST['name'];
  $settings = "";
  $canbedeleted = 1;
  $deleted = 0;

  $pdo;
  $ac = new Access("bbs");
  if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
  else $pdo = new PDO($ac->dsn, $ac->username);

  $st = $pdo->prepare("INSERT INTO `thread`(`roomid`, `threadid`, `name`, `settings`, `canbedeleted`, `deleted`) VALUES (?,?,?,?,?,?)");
  $st->execute(array($roomid, $threadid, $name, $settings, $canbedeleted, $deleted));
  header("Location: messages.php?roomid={$roomid}&threadid={$threadid}");
  exit();
?>
