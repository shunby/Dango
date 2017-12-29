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

  $trip = makeTrip($_POST['trip']);

  $msgid = htmlspecialchars($_POST['messageid']);
  for(;;$msgid++){
    $st1 = $pdo->query("select * from message where messageid=".$msgid);
    if(null == $st1->fetch()){
      break;
    }
  }



  $sql = "INSERT INTO `message`(`roomid`, `threadid`, `messageid`, `name`,".
    "`date`, `mail`, `message`, `trip`, `deleted`,".
    " `ipaddress`, `remotehost`, `useragent`)".
    " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['roomid']), htmlspecialchars($_POST['threadid']), $msgid, htmlspecialchars($_POST['name']),
              htmlspecialchars($_POST['date']), htmlspecialchars($_POST['mail']), $message, htmlspecialchars($trip), 0,
              htmlspecialchars($_SERVER["REMOTE_ADDR"]), htmlspecialchars($host), htmlspecialchars($_SERVER['HTTP_USER_AGENT'])));

  $sql = "UPDATE thread SET last_modified = ? WHERE roomid = ? AND threadid = ?";
  $st = $pdo->prepare($sql);
  $st->execute(array(htmlspecialchars($_POST['date']), htmlspecialchars($_POST['roomid']), htmlspecialchars($_POST['threadid'])));

  header("Location: messages.php?roomid={$_POST['roomid']}&threadid={$_POST['threadid']}");
  exit();

  function makeTrip($trip){
    if(!isset($trip) || $trip==""){
      return "no_pass";
    }

    $tripkey = mb_convert_encoding($trip, "SJIS", "UTF-8");
    $salt = substr($tripkey . 'H.', 1, 2);
    $salt = preg_replace('/[^\.-z]/', '.', $salt);
    $salt = strtr($salt, ':;<=>?@[\\]^_`', 'ABCDEFGabcdef');

    $trip = crypt($tripkey, $salt);
    $trip = substr($trip, -15);
    return $trip;
  }
?>
