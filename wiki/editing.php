<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once($webroot."/template/check_login.php");

  $postnum_hidden = "";
  $post_title = "";
  $post_easydes = "";
  $post_text = "";
  $post_tags = array("arr");
  if(@$_GET['postnum']){
    $postnum = $_GET['postnum'];

    $pdo = Access::getPDO("bbs");

    $postnum_hidden =
      '<input type="hidden" name="postnum" value="'.$postnum.'"></input>';

    $stmt = $pdo->prepare("SELECT * from wiki where num=?");
    $stmt->execute(array($postnum));
    $post_data = $stmt->fetch();

    $post_title = $post_data['title'];
    $post_easydes = $post_data['easydes'];
    $post_text = $post_data['maindes'];
    $post_tags = unserialize($post_data['tag']);
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
   <link href="editing.css" rel="stylesheet" type="text/css">
  <link href="/template/header.css" rel="stylesheet" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">

  </script>
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
      <h2 style="margin-left: 10px; font-weight: lighter;">記事を編集</h2>

      <form name="wikiform" class="wikiform" action="/wiki/wikiform.php" method="post" onsubmit="return chkform();">
        <h3><label for="title">タイトル</label></h3>
        <input type="text" name="title" value="<?php echo $post_title; ?>"></input><br>

        <h3><label for="easydes">概要</label></h3>
        <textarea name="easydes"><?php echo $post_easydes; ?></textarea><br>
        <!--エディタ-->
        <h3><label for="text">本文</label></h3>
        <textarea class="editor" name="text"><?php echo $post_text ?></textarea>

        <!--タグフォーム-->
        <h3 style="margin-top: 50px;">タグを選択</h3>
        <p style="margin-left: 10px;">タグを3つまで選択してください</p>

        <!--HTMLコーティングとCSS装飾-->
        <div class="tag">
          <ul>

            <li style="list-style-type: none;">
              <input value="先生" type="checkbox" id="1" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="1" style="position: relative; top: -3px;">先生</label>
            </li>

            <li style="list-style-type: none;">
              <input value="部活" type="checkbox" id="2" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="2" style="position: relative; top: -3px;">部活</label>
            </li>

            <li style="list-style-type: none;">
              <input value="施設" type="checkbox" id="3" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="3" style="position: relative; top: -3px;">施設</label>
            </li>

            <li style="list-style-type: none;">
              <input value="行事" type="checkbox" id="4" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="4" style="position: relative; top: -3px;">行事</label>
            </li>

            <li style="list-style-type: none;">
              <input value="勉強" type="checkbox" id="5" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="5" style="position: relative; top: -3px;">勉強</label>
            </li>

            <li style="list-style-type: none;">
              <input value="名言" type="checkbox" id="6" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="6" style="position: relative; top: -3px;">名言</label>
            </li>

            <li style="list-style-type: none;">
              <input value="栄東全般" type="checkbox" id="7" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
              <label for="7" style="position: relative; top: -3px;">栄東全般</label>
            </li>
            <?php echo $postnum_hidden; ?>
            <script>
              var tags = JSON.parse('<?php echo json_encode($post_tags); ?>');
              wikiform.elements['checkbox[]'].forEach(function(val){
                if(tags.includes(val.value)){
                  val.checked = true;
                }
              });

            </script>
          </ul>
        </div>

        <!--送信ボタンとwikinum-->
        <input type="submit" name="submit" value="送信する" style="margin-left: 10px; width: 120px;">

        <!--jQueryのチェック数制限-->
        <script type="text/javascript">
        function chkform(){
          var checks = count_checks();
          var text = wikiform.text.value;
          var title = wikiform.title.value;
          var easydes = wikiform.easydes.value;

          if(text.length < 1 || text.length > 30000){
            alert("本文は30000文字以内で入力してください");
            return false;
          }
          if(title.length < 1 || title.length > 32){
            alert("タイトルは32文字以内で入力してください");
            return false;
          }
          if(easydes.length < 1 || easydes.length > 2000){
            alert("概要は2000文字以内で入力してください");
            return false;
          }
          if(checks.length > 3 || checks.length < 1){
            alert("タグは3つまで選択してください");
            return false;
          }

          return true;
        }

        function click_cb(){
          var check_count = count_checks();


           if(check_count == 0){
             $(".tag ul li").each(function(){
               $(this).find(".locked").removeClass("locked");
             });
           }else if(check_count > 2){
             $(".tag ul li").each(function(){
               if(!$(this).children("input[type='checkbox']").prop('checked')){
                $(this).children("input[type='checkbox']").prop('disabled',true);
                $(this).addClass("locked");
               }
             });
           }else {
             $(".tag ul li").each(function(){
               if(!$(this).children("input[type='checkbox']").prop('checked')){
                $(this).children("input[type='checkbox']").prop('disabled',false);
                $(this).removeClass("locked");
               }
             });
           }
          return false;
        }

        function count_checks(){
          var count = 0;
          $(".tag ul li").each(function(){
            var parent_checkbox = $(this).children("input[type='checkbox']");

            if(parent_checkbox.prop('checked'))count++;

          });
          return count;
        }
        </script>
      </form>
    </main>
  </div>
  </body>
</html>
