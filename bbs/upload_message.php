<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<?php
  require "access/access.php";

  $message = nl2br(htmlspecialchars($_POST['message']));

  $pdo;
  $ac = new Access("bbs");
  if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
  else $pdo = new PDO($ac->dsn, $ac->username);

  $host = (!isset($_SERVER['REMOTE_HOST']) || $_SERVER['REMOTE_HOST'] == "") ? gethostbyaddr($_SERVER['REMOTE_ADDR']): $_SERVER['REMOTE_HOST'];

  $msgid = htmlspecialchars($_POST['messageid']);
  for(;;$msgid++){
    $st1 = $pdo->query("select * from message where messageid=".$msgid);
    if(null == $st1->fetch()){
      break;
    }
  }



  $sql = "INSERT INTO `message`(`roomid`, `threadid`, `messageid`, `name`,".
    "`date`, `message`, `deleted`,".
    " `ipaddress`, `remotehost`, `useragent`)".
    " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['roomid']), htmlspecialchars($_POST['threadid']), $msgid, htmlspecialchars($_SESSION['name']),
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
