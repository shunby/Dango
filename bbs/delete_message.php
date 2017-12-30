<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<?php
require "access/access.php";

require "../core/admins.php";
$role = Admins::getRole($_SESSION['userid']);
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
echo "削除しました";
exit();
?>
