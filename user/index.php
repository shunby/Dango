<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once "../bbs/access/access.php";
  require_once $webroot."/core/user_util.php";
  include $webroot."/template/check_login.php";

 ?>

<!DOCTYPE html>
<!--テンプレート-->
<html>
<head>
  <title>だんご三兄弟</title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <?php
    include $webroot."/template/analytics.html"
   ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include $webroot."/template/header.html" ?>
    <?php include $webroot."/template/navi.html" ?>
    <article id="main">
      <section>
        <?php
          $user = null;

          if(isset($_GET['userid'])){
            $user = new User($_GET['userid']);
          }else{
            $user = $_SESSION['user'];
          }
          if(empty($user)){
            echo "該当するユーザーは存在しません。";
            exit;
          }
        ?>
        <h2><?php echo $user->name."のユーザーページ" ?></h2>
        <p>ユーザid: <?php echo $user->id ?></p>
        <p>タイプ: <?php
          echo $user->getRole();
          ?>
        </p>
        <p>
          ポイント: <?php
          $adminFlag = strcmp($_SESSION['user']->getRole(), "一般ユーザー") != 0;//一般ユーザー以外

          if($adminFlag && isset($_POST['point'])){
            $point_temp = $user->point;
            $user->point -= $_POST['point'];

            if($point_temp > 0 && $user->point <= 0){
              $user->block_until = new DateTime("2038-01-19 03:14:07");
            }else if($point_temp > 5 && $user->point <= 5){
              $now = new DateTime();
              $user->block_until = $now->modify('+1 months');
            }

            $user->push();

            $pdo;
            $ac = new Access("bbs");
            if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
            else $pdo = new PDO($ac->dsn, $ac->username);

            $sql = "INSERT INTO `admin_action`(`userid`, `act`) VALUES (?, ?)";
            $statement = $pdo->prepare($sql);
            $statement->execute(array($_SESSION['user']->id, $user->name."(ID".$user->id.")"."を".$_POST['point']."点減点"));

          }

          echo $user->point;

          if($user->isBlocked()) echo $user->block_until->format("（Y/m/d H:i:s までブロック）");

          ?>
        </p>
        <?php

          if($adminFlag){
            echo <<<EOM
            <form action=" " method="POST" name="point">
              <input type="text" name="point"></input>
              <input type="submit" value="減点" onsubmit="return confirm('本当に減点しますか?')"></input>
            </form>
EOM;

          }
        ?>


        <div>
          <h1>お知らせ</h1>
          <ul id="note">
            <?php
              if(isset($_POST['msg'])){
                $post = $_POST['msg'];
                $user->note[count($user->note)] = "<b>".$_POST['post_usr']."</b><br>".nl2br(htmlspecialchars($post));
                $user->push();

                $_POST = array();
              }
              foreach($user->note as $msg){
                  echo "<li><p>{$msg}</p></li>";
              }
            ?>
          </ul>
          <?php
            if($adminFlag || $user->id == $_SESSION['user']->id){
              echo <<<EOM
              お知らせにはあなた自身かメイドさんと運営しか投稿できません。
              <form name="post_msg" action=" " method="POST">
                <textarea style="width:80%; height:200px;" name="msg"></textarea>
                <input type="hidden" name="post_usr" value="{$_SESSION['user']->name}"></input>
                <input type="submit" value="投稿"></input>
              </form>
EOM;
            }
           ?>

        </div>
      </section>
    </article>

    <?php include $webroot."/template/footer.html" ?>

  </div>
</body>

</html>
