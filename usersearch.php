<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
?>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/bbs/access/access.php" ?>

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
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
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
    <?php include "template/header.html" ?>
    <?php include "template/navi.html" ?>
    <?php include $webroot."/template/sideber.php" ?>
    <article id="sidemain">
      <?php//データベース接続
      $username = $_POST['name'];
      $pdo = Access::getPDO("bbs");
      $sql = "SELECT * FROM user WHERE name LIKE ?";
      $data = $pdo->prepare($sql);
      $data->execute(array('%'.$username.'%'));
       ?>
       <div>
         <p>検索結果</p>
         <?php
         foreach ($data as $value) {
           echo <<<EOM
           <div style="border: 1px solid #000000; border-radius: 3px; padding: 20px; margin-bottom: 10px;">
           名前:　{$value['name']}　　　id:　{$value['id']}<br>
           リンク:　<a href="/user/?userid={$value['id']}">こちらからどうぞ</a>
           </div>
EOM;
         }
          ?>
       </div>
    </article>
  </div>
  <?php include "template/analytics.html" ?>
</body>

</html>
