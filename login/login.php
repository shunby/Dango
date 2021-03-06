<?php
require_once "../bbs/access/access.php";
require_once $_SERVER['DOCUMENT_ROOT']."/core/user_util.php";
session_start();
?>
<?php
$msg = "";

function login(){
  global $msg;
  if(isset($_POST['login'])){
    if(empty($_POST['name'])){
      $msg =  "※ユーザー名が未入力です！";
      return;
    }else if(empty($_POST['password'])){
      $msg =  "※パスワードが未入力です！";
      return;
    }
    //入力確認完了

    $name = $_POST['name'];
    $password = $_POST['password'];

    $pdo = Access::getPDO("bbs");

    $statement = $pdo->query("select * from user WHERE name='".$name."'");

    if($row = $statement->fetch(PDO::FETCH_ASSOC)){//ユーザー名が合致したか
      if(password_verify($password, $row['pass'])){
        session_regenerate_id(true);

        $user = new User($row['id']);
        if($user->isBlocked()){
          $msg="※あなたは".$user->block_until->format("Y/m/d H:i:s").
                        "までブロックされているため、アクセスできません。";
          return;
        }
        $_SESSION['user'] = $user;

        //自動ログイン用トークンを設定
        if(isset($_POST['rememberme'])){
          $user->createToken();
        }
        //入場ログ
        $statement->closeCursor();
        $sql = "INSERT into enter_log (userid, ipaddress, type) VALUES (?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array($_SESSION['user']->id, $_SERVER['REMOTE_ADDR'], "manual_login"));

        header("Location: ../index.php");
        return;
      }
    }
    $msg =  "※ユーザー名またはパスワードが間違っています！";
    return;
  }
}
login();


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
      $webroot = $_SERVER['DOCUMENT_ROOT'];
      include $webroot."/template/analytics.html"
     ?>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
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
      <div id="content">
        <?php include $webroot."/template/header.html" ?>
        <?php include $webroot."/template/navi.html" ?>
        <?php include $webroot."/template/shortcut/shortcut.php" ?>
        <article id="main">
          <section>
            <h1>ログイン</h1>
            <span style="color:red;"><?php echo $msg; ?></span>
            <span style="color:blue;">
              <?php

                if(isset($_SESSION['user'])){
                  echo "既にログインしています。";
                }else if(isset($_COOKIE['rememberme'])){
                  $token = $_COOKIE['rememberme'];
                  $pdo = Access::getPDO("bbs");
                  $sql = "SELECT userid from login_token where token=?";
                  $stmt = $pdo->prepare($sql);
                  $stmt->execute(array($token));
                  if($stmt->fetch())echo "既にログインしています。";
                }
              ?>
            </span>
            <form id="login" name="login" action=" " method="POST">
              <label for="name">ユーザ名</label><br><input type="text" name='name'></input><br><br>
              <label for="password">パスワード</label><br><input type="password" name='password'></input><br>
              <input type="checkbox" name="rememberme" value="1"></input>
              <label for="rememberme">次回から自動ログイン</input><br>
              <input type="submit" name="login"></input>
            </form>

          </section>
        </article>



      </div>

    </div>
  </body>

</html>
