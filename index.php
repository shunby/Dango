<?php
require_once $_SERVER['DOCUMENT_ROOT']."/template/autologin_nologout.php";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
          <div id="blog_tab_link">
            <a href="#blog_top" onclick="return ontab('blog');">ブログ</a>
            <a href="#olafblog_top" onclick="return ontab('olaf');">おらふ</a>
          </div>
          <div id="blog_tab_body">
            <div id="blog_top"><!-- ここから通常ブログ-->
              <div class="blog_content">
                <!---ここにブログ記事の内容を表示-->
              </div>

              <!--コメント一覧-->
              <?php
              $topid = $id;

              //データベース処理
              $pdo = Access::getPDO("bbs");
              $sql = "SELECT * FROM comment WHERE postnum = $topid";
              $data = $pdo->prepare($sql);
              $data->execute(array($topid));
              ?>
              <!--HTML部分-->
              <div style="margin-left: 30px;">
                <p>コメント一覧</p>
                <?php
                foreach ($data as $value) {
                  echo <<<EOM
                  <div style="padding-bottom: 40px;">
                  名前:{$value['username']}  投稿日: {$value['time']}<br>
                  {$value['content']}
                  </div>
EOM;
                }

                if(!empty($_SESSION['user'])){
                  echo <<<EOM
                  <form name="comment_form" action="/comment.php" method="post" id="comment" onsubmit="return check_comment();">
                  <p>コメントをどうぞ</p>
                  <textarea name="content" style="width: 90%;height: 100px;"></textarea>
                  <p><input type="submit" name="submit" value="コメントを送信" class="submit"></p>
                  <input type="hidden" name="postnum" value="{$topid}">
                  <input type="hidden" name="url" value="/index.php">
                  </form>
EOM;
                }

                ?>
              </div>

              <p><a href="/blog/index.php" style="text-decoration: none;position: relative;left: 460px;">ブログ目次へ</a></p>
            </div><!--ここまで通常ブログ-->
            <div id="olafblog_top"><!--ここからおらふ-->
              <div id="olafblog_content">
                <script>
                  <?php
                    $files = glob($webroot.'/olaf/*');
                    $latest_blog = -1;//filesのうち最新のブログのブログ番号
                    foreach($files as $file){
                      //例外処理：ファイルが存在しないかolafblogでないならスルー
                      if(!is_file($file))continue;
                      if(strpos($file, '/olafblog') === FALSE)continue;

                      //パス文字列が/olaf/olafblog##.phpの形式なら番号を抜き取る
                      $file = str_replace($webroot.'/olaf/olafblog', "", $file);
                      $file = str_replace('.php', '', $file);


                      if(!ctype_digit($file))continue;

                      if($latest_blog < $file)$latest_blog = $file;
                    }
                    if($latest_blog == -1)exit;

                    $olafblog = new DOMDocument();
                    libxml_use_internal_errors( true );
                    $olafblog->loadHTML(mb_convert_encoding(file_get_contents($webroot.'/olaf/olafblog'.$latest_blog.'.php'), "HTML-ENTITIES", "UTF-8"));
                    libxml_clear_errors();

                    echo 'var olafblog_content = '.json_encode(mb_convert_encoding($olafblog->saveHTML(), "UTF-8","HTML-ENTITIES")).';';
                   ?>
                   var olafblog = $(olafblog_content).find('main').html();
                   $('#olafblog_content').html(olafblog);
                </script>

              </div>
            </div><!--ここまでおらふ-->
          </div>

          <!--タブ用JavaScript-->
          <script>
          ontab("blog");//最初は通常ブログを表示
          function ontab(blog_type){
            switch(blog_type){
              case "blog":
                document.getElementById("blog_top").style.display="block";
                document.getElementById("olafblog_top").style.display="none";
                break;
              case "olaf":
                document.getElementById("blog_top").style.display="none";
                document.getElementById("olafblog_top").style.display="block";
                break;
            }
            return false;
          }
          </script>

        </section>
        <section>
          <h1 style="display:inline;">栄東生専用掲示板「爆ぜろSCC」へようこそ</h1>

          <p>
            <?php
            if(empty($_SESSION['user'])){
              echo <<<EOM
              <b>このサイトは会員制です。利用するには<a href="login/register.php">ユーザー登録</a>するか、<a href="login/login.php">ログイン</a>してください。</b>
EOM;
            }else{
              echo "ようこそ、{$_SESSION['user']->name}さん！";
            }
            ?>
            <ul>
              <li>ページが読み込めない！・表示がおかしい！→<a href="/bbs/messages.php?roomid=0&threadid=1">問題報告等</a></li>
              <li>こんなページがほしい！・この機能つけて！→<a href="/bbs/messages.php?roomid=0&threadid=2">感想・要望板</a></li>
              <li>これどうなってるの？・誰にも知られずに相談したい→<a href="/questionnaire/questionnaire.php">お問い合わせ</a>(ログイン不要)</li>
              <li>運営に協力したい・サイト管理をしてみたい→<a href="/document/maid.php">メイドさん募集</a></li>
            </ul>
          </p>

          <p>
            <h1>運営からのお知らせ</h1>
            <?php
            require_once $webroot."/bbs/access/access.php";
            $pdo = Access::getPDO("bbs");

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
