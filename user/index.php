<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php";
  require "../bbs/access/access.php";
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
          $name;$id;$note;

          $pdo;
          $ac = new Access("bbs");
          if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
          else $pdo = new PDO($ac->dsn, $ac->username);

          if(isset($_GET['userid'])){
            $id = $_GET['userid'];
            $statement = $pdo->query("SELECT * from user where id=".$id);
            $user = $statement->fetch();
            if(!$user){
              echo "該当するユーザは存在しません";
              exit;
            }
            $name = $user['name'];
            $note = unserialize($user['note']);
          }else{
            $id = $_SESSION['userid'];
            $name = $_SESSION['name'];
            $statement = $pdo->query("SELECT * from user where id=".$id);
            $note = unserialize($statement->fetch()['note']);
          }
          if(empty($note)){
            $note = array();
          }
          $statement->closeCursor();
        ?>
        <h2><?php echo $name."のユーザーページ" ?></h2>
        <p>ユーザid: <?php echo $id ?></p>
        <div>
          <h1>お知らせ</h1>
          <ul id="note">
            <?php
              if(isset($_POST['msg'])){
                $post = $_POST['msg'];
                $note[count($note)] = "<b>".$_POST['post_usr']."</b><br>".nl2br(htmlspecialchars($post));

                $statement = $pdo->prepare("UPDATE user SET note = ? WHERE id = ?");
                $statement->execute(array(serialize($note), $id));
                $statement->closeCursor();

                $_POST = array();
              }
              foreach($note as $msg){
                  echo "<li><p>{$msg}</p></li>";
              }
            ?>
          </ul>
          <form name="post_msg" action=" " method="POST">
            <textarea style="width:80%; height:200px;" name="msg"></textarea>
            <input type="hidden" name="post_usr" value="<?php echo $_SESSION['name']; ?>"></input>
            <input type="submit" value="投稿"></input>
          </form>
        </div>
      </section>
    </article>

    <?php include $webroot."/template/footer.html" ?>

  </div>
</body>

</html>
