<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/user_util.php";
session_start(); ?>
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
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/content.css" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
    <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
    <link href="" rel="shortcut icon">

    <!--ここからブログ記事呼び出し処理-->
    <?php
      $blogs = simplexml_load_file("blog/blogs.xml");

      $current_max = NULL;//検索した中での最新
      $current_next = NULL;//検索した中での二番手
      foreach($blogs->blog as $blog_elem){
        if(is_null($current_max) || ($current_max->id+0 < $blog_elem->id+0)){
          //まだ何も検索していないか、検索した中の最新よりも新しいものを見つけたら、最新を置き換える
          $current_next = $current_max;
          $current_max = $blog_elem;
        }
      }
      $id = $current_max->id;
      //javascriptの変数としてURL/タイトル/日付を記録
      echo <<<EOM
      <script>
        var blog_url = "{$current_max->link}";
        var blog_title = "{$current_max->title}";
        var blog_date = "{$current_max->date}";
        var next_url = "{$current_next->link}";
        var next_title = "{$current_next->title}"
      </script>
EOM;
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <?php require "load_blog_top.php"?>
    <!--ここまでブログ記事呼び出し処理-->

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>
      <article id="sidemain">
        <section>
          <h2>まずは最新のブログ記事をどうぞ</h2>
          <div class="blog_top">
            <div class="blog_content">
              <!---ここにブログ記事の内容を表示-->
            </div>
            <a href="/blog/index.php" style="text-decoration: none;text-align: right;display: block;margin-right: 20px;">ブログ目次へ</a>
          </div>
        </section>
        <section>
          <h1 style="display:inline;">だんご三兄弟(仮)へようこそ</h1>

          <p>
            現在このブログはβ版です。何かあれば以下から気軽にご報告ください。
            <ul>
              <li>ページが読み込めない！・表示がおかしい！→<a href="/bbs/messages.php?roomid=0&threadid=1">問題報告等</a></li>
              <li>こんなページがほしい！・この機能つけて！→<a href="/bbs/messages.php?roomid=0&threadid=2">感想・要望板</a></li>
              <li>これどうなってるの？・誰にも知られずに相談したい→<a href="/questionnaire/questionnaire.php">お問い合わせ</a>(ログイン不要)</li>
              <li>運営に協力したい・サイト管理をしてみたい→<a href="/maid/">メイドさん募集</a></li>
            </ul>
          </p>

          <p>
            <h1>運営からのお知らせ</h1>
            <?php
              require_once $webroot."/bbs/access/access.php";
              $pdo;
              $ac = new Access("bbs");
              if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
              else $pdo = new PDO($ac->dsn, $ac->username);

              if(isset($_SESSION['user'])){
                $role = $_SESSION['user']->getRole();
                if(strcmp($role, "一般ユーザー") != 0){


                  if(isset($_POST['news'])){
                    $statement = $pdo->prepare("INSERT INTO `news`(`news`, `user`) VALUES (?,?)");
                    $statement->execute(array($_POST['news'], $_POST['user']));

                    $sql = "INSERT INTO `admin_action`(`userid`, `act`) VALUES (?, ?)";
                    $statement = $pdo->prepare($sql);
                    $statement->execute(array($_SESSION['user']->id, "お知らせ 追加:".$_POST['news']));
                  }
                  echo <<<EOM
                  <form action=" " method="POST">
                    <input type="text" name="news"></input>
                    <input type="hidden" name="user" value="{$_SESSION['user']->id}"></input>
                    <input type="submit" value="投稿"></input>
                  </form>
EOM;
                }
              }

              $statement = $pdo->query("SELECT * from news WHERE 1 ORDER BY newsid desc");
              echo "<ul>";
              $i = 0;
              while($row = $statement->fetch()) {
                echo <<<EOM
                <li class="news">
                  {$row['news']}
                </li>
EOM;
                if($i >= 10)break;
                $i++;
              }
              $statement->closeCursor();
              echo "</ul>";

             ?>
          </p>
        </section>
      </article>

    </div>
  </body>

</html>
