<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<?php
  require "access/access.php";

  $roomid = $_POST['roomid'];
  $threadid = $_POST['threadid'];
  $name = $_POST['name'];
  $settings = "";
  $canbedeleted = 1;
  $deleted = 0;
  date_default_timezone_set('Asia/Tokyo');
  $last_modified = date("Y/m/d H:i:s e");


  $pdo;
  $ac = new Access("bbs");
  if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
  else $pdo = new PDO($ac->dsn, $ac->username);

  $st = $pdo->prepare("INSERT INTO `thread`(`roomid`, `threadid`, `name`, `last_modified`, `settings`, `canbedeleted`, `deleted`) VALUES (?,?,?,?,?,?,?)");
  $st->execute(array($roomid, $threadid, $name, $last_modified,$settings, $canbedeleted, $deleted));
  header("Location: messages.php?roomid={$roomid}&threadid={$threadid}");
  exit();
?>
