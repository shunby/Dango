<!DOCTYPE html>
<html>
  <head>
    <title>だんご三兄弟</title>
    <meta name="description" content="">
    <meta name="author" content="だんご三兄弟">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <!-- <meta name="viewport" content="width=device-width"> -->

    <?php
      $webroot = $_SERVER['DOCUMENT_ROOT'];
      include $webroot."/template/analytics.html"
     ?>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/main.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
    <link href="" rel="shortcut icon">

    <!--ここからブログ記事呼び出し処理-->
    <?php
      $blogs = simplexml_load_file("blog/blogs.xml");

      $current_max = NULL;//検索した中での最新
      foreach($blogs->blog as $blog_elem){
        if(is_null($current_max) || ($current_max->id+0 < $blog_elem->id+0)){
          //まだ何も検索していないか、検索した中の最新よりも新しいものを見つけたら、最新を置き換える
          $current_max = $blog_elem;
        }
      }
      //javascriptの変数としてURL/タイトル/日付を記録
      echo <<<EOM
      <script>
        var blog_url = "{$current_max->link}";
        var blog_title = "{$current_max->title}";
        var blog_date = "{$current_max->date}";
      </script>
EOM;
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="load_blog_top.js"></script>
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

      <main>
        <div id="main">
          <h2>初めての方へ</h2>
          <p>
            初めてこのサイトを閲覧される方はまず<a href="/blog/01.php">こちら</a>をお読みください。<br>
            現在このブログはβ版です。何かあれば掲示板や<a href="/questionnaire/questionnaire.php">お問い合わせ</a>から気軽にご報告ください。
            <ul>
              <li>ページが読み込めない！・表示がおかしい！→<a href="/bbs/messages.php?roomid=0&threadid=1">問題報告等</a></li>
              <li>こんなページがほしい！・この機能つけて！→<a href="/bbs/messages.php?roomid=0&threadid=2">感想・要望板</a></li>
            </ul>
          </p>
          <h2>最新のブログ記事</h2>
          <div class="blog_top">
            <div class="blog_content">
              <!---ここにブログ記事の内容を表示-->
            </div>
            <a href="/blog/index.php" style="text-decoration: none">ブログ目次へ</a>
          </div>
        </div>
      </main>

      <div class="wtf">

      </div>

      <?php include $webroot."/template/footer.html" ?>

    </div>
  </body>
</html>
