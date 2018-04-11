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
a
aw\
\
dwd
{\
[wd](awd)sw\(wa\)aw
![123,130](URL)aw
{a}
}
####a###a
EOM
)?>);
      </script>
    </div>
 </body>
</html>
