<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once $webroot."/core/user_util.php";
  include $webroot."/template/check_login.php";
 ?>
<?php

  $message = nl2br(htmlspecialchars($_POST['message']));

  $pdo = Access::getPDO("bbs");

  $host = (!isset($_SERVER['REMOTE_HOST']) || $_SERVER['REMOTE_HOST'] == "") ? gethostbyaddr($_SERVER['REMOTE_ADDR']): $_SERVER['REMOTE_HOST'];

  $sql = "INSERT INTO `message`(`roomid`, `threadid`, `name`, `userid`,".
    "`date`, `message`, `deleted`,".
    " `ipaddress`, `remotehost`, `useragent`)".
    " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['roomid']), htmlspecialchars($_POST['threadid']), htmlspecialchars($_SESSION['user']->name), $_SESSION['user']->id,
              htmlspecialchars($_POST['date']), $message, 0,
              htmlspecialchars($_SERVER["REMOTE_ADDR"]), htmlspecialchars($host), htmlspecialchars($_SERVER['HTTP_USER_AGENT'])));

  $sql = "UPDATE thread SET last_modified = ? WHERE roomid = ? AND threadid = ?";
  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['date']), htmlspecialchars($_POST['roomid']), htmlspecialchars($_POST['threadid'])));

  $sql = "UPDATE chatroom SET last_modified = ? WHERE roomid = ?";
  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['date']), htmlspecialchars($_POST['roomid'])));

  header("Location: messages.php?roomid={$_POST['roomid']}&threadid={$_POST['threadid']}");
  exit();

?>
