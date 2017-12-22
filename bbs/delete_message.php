<?php
require "access.php";

$key = key_exists("key", $_POST) ? $_POST['key']:"null";
if(strcmp($key, "kill_olaf_rapidly") != 0)exit;
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
