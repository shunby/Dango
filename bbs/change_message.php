<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php";

  $roomid     = $_POST['roomid'];
  $threadid   = $_POST['threadid'];
  $messageid  = $_POST['messageid'];
  $userid     = $_POST['userid'];
  $finish     = $_POST['finish'];
  $text       = key_exists('text', $_POST) ?$_POST['text']:"";

  if(!isset($roomid) || !isset($threadid) || !isset($messageid) || !isset($userid)){
    print("<b>不正なPOST</b>");
    exit;
  }else if($userid != $_SESSION['user']->id){
    print("<b>不正なPOST</b>");
    exit;
  }

  if(isset($finish) && $finish == 1){
    $pdo = Access::getPDO('bbs');
    $sql = 'UPDATE message SET message=? where messageid=?';
    $stmt = $pdo->prepare($sql);
    $text = nl2br(htmlspecialchars($text));
    $stmt->execute(array($text, $messageid));
    header('Location: /bbs/messages.php?roomid='.$roomid.'&threadid='.$threadid);
    exit;
  }

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
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="/template/sideber.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
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
        <h1>投稿を書き換える</h1>
        <?php
        $pdo = Access::getPDO('bbs');
        $sql = "SELECT message from message where messageid=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($messageid));
        $text = $stmt->fetch()['message'];
        $text = preg_replace('/<br[[:space:]]*\/?[[:space:]]*>/i', "", $text);
        echo
            '<form name="change_form" action="" method="post" onSubmit="return checkbefore(change_form.text.value);">',
              '<input type="hidden" name="userid" value="', $userid,'" id="submit">',
              '<input type="hidden" name="messageid" value="',$messageid, '"></input>',
              '<input type="hidden" name="threadid" value="',$threadid, '"></input>',
              '<input type="hidden" name="roomid" value="',$roomid, '"></input>',
              '<input type="hidden" name="finish" value=1 ></input>',
              '<textarea name="text" style="width: 90%;height: 300px;">', $text, '</textarea>','<br>',
              '<input type="submit" value="投稿" id="submit">',
            '</form>';
         ?>

      </section>
    </article>


  </div>
  <script src="message.js"></script>
  <?php
    include $webroot."/template/analytics.html"
   ?>
</body>

</html>
