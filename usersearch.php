<?php require_once $_SERVER['DOCUMENT_ROOT']."/bbs/access/access.php" ?>

<?php

$username = $_POST['name'];

$pdo = Access::getPDO("bbs");

$sql = "SELECT * FROM user WHERE name = ?";

$data = $pdo->prepare($sql);
$data->execute(array($username));
 ?>

<div>
  <p>検索結果</p>
  <?php
  var_dump($data);
  foreach ($data as $value) {
    echo <<<EOM
    <div style="border: 1px solid #000000; border-radius: 3px; padding: 20px; margin-bottom: 10px;">
    名前:　{$value['name']}　　　id:　{$value['id']}<br>
    リンク:　<a herf="paysestbbs.webcrow.jp/user/?userid={$value['id']}">こちらからどうぞ</a>
    </div>
EOM;
  }
   ?>
</div>
