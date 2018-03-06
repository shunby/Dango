<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
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


  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="../template/sidemain.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="posts.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>
    <?php include $webroot."/template/sideber.php" ?>
    <article id="sidemain">
      <form id="search" name="search_form" action="/usersearch.php" method="post" onsubmit="return on();">
        <h3>名前検索</h3>
        <p>自己紹介を見る際などに活用してください!</p>
        <input type="text" name="name" class="searchbox" id="name">
        <p><input type="submit" name="submit" value="超卍検索！"></p>
      </form>
      <script type="text/javascript">
        function on(){
          if (document.getElementById("name").value == "") {
            alert("検索欄は未入力です")
            return false;
          }
          else {
            return true;
          }
        }
      </script>
    </article>
  </div>
  <?php include "../template/analytics.html" ?>
</body>

</html>
