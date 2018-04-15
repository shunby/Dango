<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/template/autologin_nologout.php";

  if(is_null(@$_GET['wikinum'])){
    exit("不正なGET");
  }

  //wiki情報取得
  $pdo = Access::getPDO('bbs');
  $sql = "SELECT * from wiki where num=?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array($_GET['wikinum']));
  $wiki = $stmt->fetch();

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
  <link href="index.css" rel="stylesheet" type="text/css">
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
  <script src="/scripts/parser.js"></script>
 </head>

 <body>
    <div id="content">
      <?php include $webroot."/template/header.html" ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/sideber.php" ?>
      <article id="sidemain">

        <!--タイトル-->
        <h2 class="main_title"><?php echo htmlspecialchars($wiki['title']); ?></h3>

        <!--超ざっくり説明-->
        <div class="main_des">
          <p><?php echo nl2br(htmlspecialchars($wiki['easydes'])); ?></p>
        </div>

        <!--内容*3-->
        <div class="wiki_contents">

        </div>
        <div class="error_output" style="white-space: nowrap;">
        </div>
        <script>
          var sidemain = document.getElementsByClassName("wiki_contents")[0];
          var src = <?php echo json_encode($wiki['maindes'], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);?>;
          try{
            sidemain.innerHTML = parser.parse(src);
          }catch(e){
            var errstr = e.location.start.line + "行" + e.location.start.column + "文字目でエラー: <br>" + e.toString() + "<br>";
            errstr += src.replace(/\r\n|[\r\n]/g, "<br>");

            document.getElementsByClassName("error_output")[0].innerHTML = errstr;
          }

        </script>
        <div style="text-align:right;"><a href="/wiki/editing.php?postnum=<?php echo $wiki['num'] ?>">編集する</a></div>
        <br><br><br>
      </article>
    </div>
 </body>
</html>
