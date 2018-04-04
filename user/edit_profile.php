<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php";
   checkPost();
   function checkPost(){
     if(!key_exists('profile', $_POST))return;
     $text  = htmlspecialchars($_POST['profile']);
     $usrid = $_SESSION['user']->id;

     $pdo = Access::getPDO('bbs');
     $sql = "UPDATE user SET profile=? where id=? ";
     $prof_stmt = $pdo->prepare($sql);
     $prof_stmt->execute(array($text, $usrid));

     header('Location: index.php');
     exit;
   }

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
    include $webroot."/template/analytics.html"
   ?>
  <link href="/user/edit_profile.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
  <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
  <script src='/marked.js'></script>
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
    <main id="main">
      <h1>自己紹介を編集</h1>
      <p id="tabcontrol">
        <a href="#tabpage_edit" style="color: #00CCCC;">編集</a>
        <a href="#tabpage_preview" style="color: #FF6666;">プレビュー</a>
      </p>
      <div id="tabbody">
        <div id="tabpage_edit">


          <form method="post" action="/user/edit_profile.php" name="profile_form" onsubmit="return checkTextarea();">
            <textarea id="editor" name="profile"></textarea>
            <input id="button" type="submit" value="更新する！"></input>
          </form>
          <script>
            <?php
              $pdo = Access::getPDO('bbs');
              $sql = 'SELECT * from user where id=?';
              $getprof_stmt = $pdo->prepare($sql);
              $getprof_stmt->execute(array($_SESSION['user']->id));

              $profile = $getprof_stmt->fetch()['profile'];
              $profile = json_encode(htmlspecialchars_decode($profile));
              echo <<<EOM
              var profile={$profile};
EOM;
            ?>
            document.profile_form.profile.value = profile;



            //送信時に内容を確認 1文字以上5000文字以内ならTrueを返す
            function checkTextarea(){
              var text_length = profile_form.profile.value.length;

              if(text_length < 1){
                alert("1文字以上入力してください。");
                return false;
              }else if(text_length > 5000){
                alert("5000文字以内で入力してください。");
                return false;
              }else{
                return true;
              }
            }
          </script>

        </div>
        <div id="tabpage_preview">

        </div>
      </div>

    </main>
  </div>
  <script type="text/javascript">
    var tabs = document.getElementById('tabcontrol').getElementsByTagName('a');
    var pages = document.getElementById('tabbody').getElementsByTagName('div');

    function changeTab() {
      //リンクの#以降の文字列
       var targetid = this.href.substring(this.href.indexOf('#')+1,this.href.length);

       for(var i=0; i<pages.length; i++) {
          if( pages[i].id != targetid ) {
             pages[i].style.display = "none";
          }
          else {
             pages[i].style.display = "block";
          }
       }

       for(var i=0; i<tabs.length; i++) {
          tabs[i].style.zIndex = "0";
       }
       this.style.zIndex = "10";

       var prof = document.profile_form.profile.value;
       prof = marked(prof);
       prof = prof.replace(/\r?\n/g, '<br>');
       document.getElementById("tabpage_preview").innerHTML = prof;

       return false;
    }

    for(var i=0; i<tabs.length; i++) {
       tabs[i].onclick = changeTab;
    }

    tabs[0].onclick();
    </script>
  </body>
</html>
