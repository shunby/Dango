<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/core/user_util.php";
  include $webroot."/template/check_login.php"
 ?>
<?php

  $roomid = $_POST['roomid'];
  $threadid = $_POST['threadid'];
  $name = $_POST['name'];
  $settings = "";
  $canbedeleted = 1;
  $deleted = 0;
  date_default_timezone_set('Asia/Tokyo');
  $last_modified = date("Y/m/d H:i:s e");


  $pdo = Access::getPDO("bbs");

  $sql = "SELECT MAX(threadid) AS cnt from thread where roomid=?";
  $st = $pdo->prepare($sql);
  $st->execute(array($roomid));
  $threadid = $st->fetch()['cnt'];
  $threadid+=1;

  $st = $pdo->prepare("INSERT INTO `thread`(`roomid`, `threadid`, `name`, `last_modified`, `settings`, `canbedeleted`, `deleted`, `userid`) VALUES (?,?,?,?,?,?,?,?)");
  $st->execute(array($roomid, $threadid, $name, $last_modified,$settings, $canbedeleted, $deleted, $_SESSION['user']->id));

  $sql = "UPDATE chatroom SET last_modified = ? WHERE roomid = ?";
  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($last_modified), htmlspecialchars($roomid)));



  header("Location: messages.php?roomid={$roomid}&threadid={$threadid}");
  exit();
?>
