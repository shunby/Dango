<?php
require "access.php";

$pdo;
$ac = new Access("bbs");
if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
else $pdo = new PDO($ac->dsn, $ac->username);

$search = "select * from thread where deleted!=1";

if(array_key_exists('roomid', $_GET) &&  $_GET['roomid'] != "-1"){
  $search = $search." AND roomid= ".$_GET['roomid'];
}else{
  exit("クエリが異常です。部屋番号がセットされていません。");
}

if(array_key_exists('name', $_GET) &&  $_GET['name'] != ""){
  $search = $search." AND name LIKE '%".$_GET['name']."%'";
}
$st = $pdo->query($search);

$st1 = $pdo->query("select * from chatroom where roomid=".$_GET['roomid']);
$roomname = ($st1->fetch())['name'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title></title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include "../template/analytics.html" ?>
  <link href="threads.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/main.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="search_form.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <?php echo <<<EOM
        <h1 style='display: inline;'>{$roomname}</h1>
        <span class='makeNew'>
          [<a href="#">新規スレッド</a>]
        </span>
EOM;
        ?>

        <!--検索フォーム-->
        <form id="search" name="search" action="threads.php" method="get">
          スレッド名
          <input type="text" name="name"></input><br>
          <input class = button type="submit" value="検索"></input><br>
          <?php
          echo "<input type=\"hidden\" name=\"roomid\" value=\"".(array_key_exists('roomid', $_GET) ?  $_GET['roomid'] : "-1")."\"></input>";
          ?>
        </form>

        <!--スレッド一覧  -->
        <table>
          <tr><th>名前</th></tr>
          <?php
          $threadid = 0;
          while($row = $st->fetch()){
            echo "<tr><td><a href=\"messages.php?roomid={$_GET['roomid']}&amp;threadid={$threadid}\">{$row['name']}</a></td></tr>";
            $threadid++;
          }
          ?>
        </table>

      </section>


      <div id="returnTo">
        <a href="index.php" rel="nofollow">チャットルーム一覧へ戻る</a><br/>
      </div>
    </article>

    <div id="overlay_makeThread">

      <form name="makeThreadForm" method="post" action="makeThread.php" onsubmit="return checkbefore();">
        <h1 style="margin: 0;">スレッド作成</h1>
        スレッド名
        <input type="input" name="name"></input>
        <?php
        echo "<input type=\"hidden\" name=\"roomid\" value=\"".$_GET['roomid']."\"></input>";
        echo "<input type=\"hidden\" name=\"threadid\" value=\"".$threadid."\"></input>";
        ?>
        <input type="submit" value="作成"></input>
      </form>
    </div>



    <?php include "../template/footer.html" ?>


  </div>
  <script type="text/javascript">
    $(
      function(){
        $(".makeNew").on("click", function(){
          $("#overlay_makeThread").fadeIn();
        });

        $(":not(.makeNew,#overlay_makeThread form)").click(function(ev){
          if (!$(ev.target).closest(".makeNew,#overlay_makeThread form").length) {
            $("#overlay_makeThread").fadeOut();
          }

        });
      }
    );
  </script>
  <?php
  echo '<script type="text/javascript">';
  require "threads.js";
  echo '</script>';
  ?>
</body>
</html>