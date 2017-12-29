<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<?php
require "access/access.php";

$pdo;

$ac = new Access("bbs");
if($ac->password != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
else $pdo = new PDO($ac->dsn, $ac->username);


$search = "select * from chatroom where deleted!=1";



if(array_key_exists('name', $_GET) &&  $_GET['name'] != ""){
  $search = $search." AND name LIKE '%".$_GET['name']."%'";
}
if(array_key_exists('type', $_GET) && $_GET['type'] != ""){
  $search = $search." AND type='".$_GET['type']."'";
}

$st = $pdo->query($search);

?>


<!DOCTYPE html>
<html lang="ja">
<head>

  <title>だんご三兄弟</title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta name="http-equiv" content="300">
  <meta name="viewport" content="width=device-width">

  <?php include "../template/analytics.html" ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="../template/main.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="search_form.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>

    <article id="main">
      <section>
        <h1>部屋一覧</h1>
        <!--検索-->
        <form id=search name="search" action="index.php" method="get">
          部屋名
          <input type="text" name="name"></input><br>
          タイプ
          <select name="type">
            <option value="">指定なし</option>
            <option value="user">ユーザー</option>
            <option value="system">運営</option>
          </select>
          <input class=button type="submit" value="検索"></input><br>
        </form>
        <!--部屋-->
        <table>
          <tr><th>名前</th><th>タイプ</th></tr>
          <?php
          $roomid = 0;
          while($row = $st->fetch()){
            echo "<tr><td><a href=\"threads.php?roomid={$roomid}\">{$row['name']}</a></td><td>{$row['type']}</td></tr>";
            $roomid++;
          }
          ?>
        </table>

      </section>

    </article>

    <?php include "../template/footer.html" ?>
  </div>
</body>
</html>
