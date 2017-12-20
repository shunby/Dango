<?php
  require "access.php";

  $pdo;
  $ac = new Access("bbs");
  if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
  else $pdo = new PDO($ac->dsn, $ac->username);

   $search = "select * from message where deleted!=1";

   if(array_key_exists('roomid', $_GET) &&  $_GET['roomid'] != "-1"){
     $search = $search." AND roomid= ".$_GET['roomid'];
   }else{
     exit("クエリが異常です。部屋番号がセットされていません。");
   }

   if(array_key_exists('threadid', $_GET) &&  $_GET['threadid'] != "-1"){
     $search = $search." AND threadid= ".$_GET['threadid'];
   }else{
     exit("クエリが異常です。スレッド番号がセットされていません。");
   }
   //
  //  if(array_key_exists('name', $_GET) &&  $_GET['name'] != ""){
  //    $search = $search." AND name LIKE '%".$_GET['name']."%'";
  //  }
   $st = $pdo->query($search);

   $st1 = $pdo->query("select * from thread where threadid={$_GET['threadid']} AND roomid={$_GET['roomid']}");
   $threadName = "";
   while($row = $st1->fetch()){
     $threadName = $row['name'];
   }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <title></title>

    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <?php include "../template/analytics.html" ?>
    <link href="messages.css" rel="stylesheet" type="text/css">
    <link href="../template/header.css" rel="stylesheet" type="text/css">
    <link href="../template/footer.css" rel="stylesheet" type="text/css">
    <link href="../template/navi.css" rel="stylesheet" type="text/css">
    <link href="../template/main.css" rel="stylesheet" type="text/css">
    <link href="../template/content.css" rel="stylesheet" type="text/css">

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
         <form name="search" action="threads.php" method="get">
           <?php
           //メッセージ送信用の部屋番号とスレッド番号
            echo "<input type=\"hidden\" name=\"roomid\" value=\"".(array_key_exists('roomid', $_GET) ?  $_GET['roomid'] : "-1")."\"></input>";
            echo "<input type=\"hidden\" name=\"threadid\" value=\"".(array_key_exists('threadid', $_GET) ?  $_GET['threadid'] : "-1")."\"></input>";
           ?>
         </form>

         <?php
          echo "<h1>{$threadName}</h1>";
         ?>
         <!--ここから投稿------------------------>
         <ul class="messages">
         <?php
          $messageid = 0;
          while($row = $st->fetch()){
            $mail = (isset($row['mail']) && $row['mail'] != "") ? "mailto:".$row['mail'] : "" ;
            if($row['deleted'] != 1)echo <<<EOM
            <li>
              <div class="message_content">
                <div class="message_text">
                  {$row['message']}
                </div>
                <div class="message_info">
                  <div class="name"><a href="{$mail}">{$row['name']}</a></div>
                  <div class="trip">#{$row['trip']}</div>
                  <div class="date">{$row['date']}</div><br/>
                </div>
              </div>
            </li>
EOM;
            $messageid++;
          }
         ?>
         </ul>
         <!--ここまで投稿------------------------>

       </section>
       <section>
         <h5>このスレッドに書き込む</h5>
         <form name = "msgform" class="noreline" action="upload_message.php" method="post" onSubmit="return checkbefore();">
           名前 :
           <input type="text" name="name" placeholder=""></input>
           メール:
           <input type="text" name="mail"></input>
           <br>パスワード :
           <input type="text" name="trip"></input>
           <br>
           <textarea name="message" placeholder="400字以内で入力"></textarea>
           <br>
           <input type="submit" value="投稿" id="submit"></input>
           <?php
            date_default_timezone_set('Asia/Tokyo');
            $date = date("Y/m/d H:i:s e");
            echo "<input type=\"hidden\" name=\"roomid\" value=\"". $_GET['roomid'] ."\"></input>";
            echo "<input type=\"hidden\" name=\"threadid\" value=\"". $_GET['threadid'] ."\"></input>";
            echo "<input type=\"hidden\" name=\"messageid\" value=\"". $messageid ."\"></input>";
            echo "<input type=\"hidden\" name=\"date\" value=\"". $date ."\"></input>";
           ?>

         </form>
       </section>
       <div id="returnTo">
         <?php
          echo '<a href="threads.php?roomid='.$_GET['roomid'].'" rel="nofollow">スレッド一覧へ戻る</a><br />';
         ?>
       </div>
     </article>



     <?php include "../template/footer.html" ?>
     <?php
      echo '<script type="text/javascript">';
      require "message.js";
      echo '</script><noscript>Javascriptを有効にしてください。</noscript>'
     ?>

   </div>
  </body>
</html>
