<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>だんご三兄弟</title>

　　<meta name="author" content="だんご三兄弟">
    <meta name="http-equiv" content="300">


    <link rel="stylesheet" href="list.css" type="text/css">
    <link href="../template/header.css" rel="stylesheet" type="text/css">
    <link href="../template/footer.css" rel="stylesheet" type="text/css">
    <link href="../template/navi.css" rel="stylesheet" type="text/css">
    <link href="../template/sidemain.css" rel="stylesheet" type="text/css">
    <link href="../template/content.css" rel="stylesheet" type="text/css">
    <link href="../bbs/search_form.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  </head>
  <body>
   <div id="content">
    <header>
      <?php include "../template/header.html" ?>
    </header>
    <nav>
      <?php include "../template/navi.html" ?>
    </nav>
    <?php include $webroot."/template/sideber.php" ?>
    <main id="sidemain">
     <h2>ブログ一覧</h2>

     <div class="php1">
       <?php
        date_default_timezone_set('Asia/Tokyo');
        $path = "大記事/";
        $latest_mtime = 0;
        if ($handle = opendir($path)) {
          # code...
          while (false !== ($file = readdir($handle))) {
            # code...
            if ($file != "." && $file != ".." ){
              # code...
              $fname = $path.$file;
              $mtime = filemtime($fname);
              if ($mtime > $latest_mtime) {
                # code...
                $latest_mtime = $mtime;
              }
            }
          }
          closedir($handle);
        }
        echo "最新更新日:".date("Y/n/d h:iA",$latest_mtime);
        ?>
     </div>

     <ul>
       <li style="list-style: none" class="li">
         <a href="index.php?article=h29_autumn" class="a">1.平成29年度秋号(=ﾟωﾟ)ﾉ</a>
       </li>
       <li style="list-style: none" class="li">
         <a href="index.php?article=h29_winter" class="a">2.平成29年度冬号ノ</a>
       </li>
     </ul>
    </main>
    <footer>
    </footer>
   </div>
   <?php include "../template/analytics.html" ?>
  </body>
</html>
