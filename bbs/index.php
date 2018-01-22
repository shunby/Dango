<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<?php
require_once "access/access.php";

$pdo = Access::getPDO("bbs");


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
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="../template/main.css" rel="stylesheet" type="text/css">
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
        <!--最新-->
        <h1>最新のスレッド</h1>
        <table>
          <tr><th width=70%>名前</th><th>最終更新日時</th></tr>
          <?php
            $statement_latest = $pdo->query("SELECT * from thread where deleted!=1 order by last_modified desc");
            for($i = 0;$i < 3; $i++){
              $row = $statement_latest->fetch();
              if(!$row)break;

              $datearr = explode(" ",$row['last_modified']);
              $date = new DateTime($datearr[0]." ".$datearr[1]);
              echo <<<EOM
              <tr>
                <td><a href="messages.php?roomid={$row['roomid']}&threadid={$row['threadid']}">{$row['name']}</a></td>
                <td>{$date->format("Y/m/d H:i:s")}</td>
              </tr>
EOM;
            }
            $statement_latest->closeCursor();
           ?>
        </table>
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
          <tr><th width=70%>名前</th><th>タイプ</th><th>最終更新日時</th></tr>
          <?php

          while($row = $st->fetch()){
            $datearr = explode(" ",$row['last_modified']);
            $date = new DateTime($datearr[0]." ".$datearr[1]);
            echo <<<EOM
            <tr>
              <td><a href="threads.php?roomid={$row['roomid']}">{$row['name']}</a></td>
              <td>{$row['type']}</td>
              <td>{$date->format("Y/m/d H:i:s")}</td>
            </tr>
EOM;
          }

          ?>
        </table>

      </section>

    </article>


  </div>
</body>
</html>
