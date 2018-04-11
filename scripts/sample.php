<?php
require_once $_SERVER['DOCUMENT_ROOT']."/template/autologin_nologout.php";
?>
<!DOCTYPE html>
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
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/template/content.css" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
  <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
  <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  <link rel="stylesheet" href="/wiki/contents.css" type="text/css">
  <link href="" rel="shortcut icon">
  <script src="parser.js"></script>
 </head>

 <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>
      <article id="sidemain">

      </article>
      <script>
        var sidemain = document.getElementById("sidemain");
        sidemain.innerHTML = parser.parse(<?php echo json_encode(
<<<EOM
#団子三兄弟
団子三兄弟とは3人の学友が作ったサイトページのことである。
{\
　　目次　

　1.ねこ　
　2.卍　
　3.おらふ　

}
##ねこ
ねこである
![a,a](http://ramen-koizumi.com/img/character/chara1_thum.png)

##卍
卍である
##おらふ
おらふである

EOM
)?>);
      </script>
    </div>
 </body>
</html>
