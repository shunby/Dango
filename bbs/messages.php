<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once $webroot."/core/user_util.php";
  require_once "access/access.php";
  include $webroot."/template/autologin_nologout.php";
 ?>
<?php
  if(is_null($_GET['roomid']) || is_null($_GET['threadid']))exit("クエリが異常です！");


  $pdo = Access::getPDO("bbs");

  $search = "SELECT * from message where deleted!=1  AND roomid=? AND threadid=?";

  $statement_msg = $pdo->prepare($search);
  $statement_msg->execute(array($_GET['roomid'], $_GET['threadid']));


  $statement_thread = $pdo->prepare("SELECT * from thread where roomid=? AND threadid=? AND deleted = 0");
  $statement_thread->execute(array($_GET['roomid'], $_GET['threadid']));

  $thread = $statement_thread->fetch();
  if(empty($thread) || $thread['deleted'])exit("存在しないスレッドです");

  $login_user = key_exists('user', $_SESSION) ? $_SESSION['user'] : NULL;

  $role = $login_user ? $login_user->getRole() : "非ユーザー";
  $editable = strcmp($role, "一般ユーザー") != 0 && strcmp($role, "非ユーザー") != 0;
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

  <body onload="onLoad();">
    <div id="content">

     <?php include "../template/header.html" ?>
     <?php include "../template/navi.html" ?>

     <article id="main">
       <section>
         <form name="search" action="threads.php" method="get">
           <?php
           //メッセージ送信用の部屋番号とスレッド番号
           echo <<<EOM
           <input type="hidden" name="roomid" value={$_GET['roomid']}></input>
           <input type="hidden" name="threadid" value={$_GET['threadid']}></input>
EOM;
           ?>
         </form>

         <?php
          echo "<h1>{$thread['name']}</h1>";
         ?>
         <!--ここから投稿------------------------>
         <ul class="messages">
         <?php


          $statement_good = $pdo->prepare("SELECT count(*) AS cnt FROM message_good where messageid=?");
          $statement_user = $pdo->prepare("SELECT `name`,`point` from user where id=?");
          $session_user_id = $login_user ? $login_user->id : -1;
          while($row = $statement_msg->fetch()){

            $msg = $row['deleted'] == 1 ? "削除されました" : $row['message'];

            $usrid   = $row['userid'];
            $statement_user->execute(array($usrid));
            $row_for_usr = $statement_user->fetch();
            $usrname = User::makeDisplayName($row_for_usr['name'], $row_for_usr['point']);
            $usrpage = "/user/?userid=".$usrid;
            echo '<li><div class="message_content"><div class="message_text">',
                  $msg,
                '</div><div class="message_info"><div class="name"><a href="',$usrpage,'">',$usrname,'</a></div><div class="date">',$row['date'],'</div><br/>';

            if($editable){
              //削除フォーム
              echo
                  "<form name=\"delete_form\" action=\"delete_message.php\" method=\"post\" onsubmit=\"return window.confirm('本当に削除しますか？')\">",
                    '<input type="submit" value="削除" id="submit">',
                    '<input type="hidden" name="key" value="kill_olaf_rapidly"></input>',
                    '<input type="hidden" name="messageid" value="',$row["messageid"], '"></input>',
                  '</form>';

            }
            if($usrid == $session_user_id){
              //変更フォーム
              echo
                  "<form name=\"change_form\" action=\"change_message.php\" method=\"post\">",
                    '<input type="submit" value="編集" id="submit">',
                    '<input type="hidden" name="userid" value="', $usrid,'" id="submit">',
                    '<input type="hidden" name="messageid" value="',$row["messageid"], '"></input>',
                    '<input type="hidden" name="threadid" value="',$_GET["threadid"], '"></input>',
                    '<input type="hidden" name="roomid" value="',$_GET["roomid"], '"></input>',
                    '<input type="hidden" name="finish" value=0 ></input>',
                  '</form>';
            }
            //ほめるボタン
            $statement_good->execute(array($row['messageid']));
            $row_for_good = $statement_good->fetch();
            $good_cnt = empty($row) ? 0 : $row_for_good['cnt'];
            echo
              '<form name="good_form" action="message_good.php" method="post">',
              '<input name="good" style="width:5em;" type="submit" value="ほめる" id="submit">',
              '<input type="hidden" name="messageid" value="', $row["messageid"], '"></input>',
              '<input type="hidden" name="roomid" value="', $_GET["roomid"], '"></input>',
              '<input type="hidden" name="threadid" value="', $_GET["threadid"] , '"></input>',
              '<label for="good">', $good_cnt ,'</label>',
              '</form>';


            echo <<<EOM
                </div>
              </div>
            </li>
EOM;
          }
         ?>
         </ul>
         <!--ここまで投稿------------------------>

       </section>
       <section id="form">
         <?php
         if($login_user){
           echo <<<EOF
           <h5>このスレッドに書き込む</h5>
           <form name = "msgform" class="noreline" action="upload_message.php" method="post" onSubmit="return checkbefore(msgform.message.value);">
             <textarea name="message" placeholder="400字以内で入力"></textarea>
             <br>
             <input type="submit" value="投稿" id="submit"></input>
EOF;
              date_default_timezone_set('Asia/Tokyo');
              $date = date("Y/m/d H:i:s e");
              echo "<input type=\"hidden\" name=\"roomid\" value=\"". $_GET['roomid'] ."\"></input>";
              echo "<input type=\"hidden\" name=\"threadid\" value=\"". $_GET['threadid'] ."\"></input>";
              echo "<input type=\"hidden\" name=\"date\" value=\"". $date ."\"></input>";

         }

           ?>

         </form>
       </section>
       <div id="returnTo">
         <?php
          echo '<a href="threads.php?roomid='.$_GET['roomid'].'" rel="nofollow">スレッド一覧へ戻る</a><br />';
         ?>
       </div>
     </article>




     <?php
      echo '<script type="text/javascript">';
      require "message.js";
      echo '</script><noscript>Javascriptを有効にしてください。</noscript>'
     ?>

   </div>

   <script>
    function onLoad(){
      var list = document.getElementsByClassName("message_content");
      if(list.length < 4)return;
      var obj = list[list.length - 4];
      var clientRect = obj.getBoundingClientRect();
      var y = window.pageYOffset + clientRect.top;
      window.scrollTo(0,y);
    }
   </script>
   <?php include "../template/analytics.html" ?>
  </body>
</html>
