<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once $webroot."/core/user_util.php";
  include $webroot."/template/check_login.php";
 ?>
<?php
$role = $_SESSION['user']->getRole();
if(strcmp($role, "一般ユーザー") == 0)exit;

$messageid = key_exists("messageid", $_POST) ? $_POST['messageid'] : null;
if(is_null($messageid)){
  exit;
}
$pdo;
$ac = new Access("bbs");
if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
else $pdo = new PDO($ac->dsn, $ac->username);

$sql = "UPDATE message SET deleted = 1 WHERE messageid = ?";
$statement = $pdo->prepare($sql);
$statement->execute(array($messageid));

$sql = "INSERT INTO `admin_action`(`userid`, `act`) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute(array($_SESSION['user']->id, "掲示板 削除 #".$messageid);

echo "削除しました";
exit();
