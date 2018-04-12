<?php   $webroot = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/template/check_login.php");?>


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

      <!--wikinum取得-->
      <?php

      //新しい場合
      $pdo = Access::getPDO("bbs");
      $sql = "SELECT MAX(num) AS maxnum FROM wiki";
      $data = $pdo->query($sql);
      $lastnum = $data->fetch()['maxnum'];
      $lastnum = $lastnum + 1;

      //更新の場合
      //作れませんーん

       ?>


      <form class="wikiform" action="/wiki/wikiform.php" method="post">
        <!--エディタ-->
        <div class="editor" style="border: 1px solid gray; min-height: 200px; margin: 20px;">

        </div>

        <!--タグフォーム-->
        <h3 style="margin-left: 10px; margin-top: 50px;">タグを選択</h3>
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
          </ul>
        </div>

        <!--送信ボタンとwikinum-->
        <input type="submit" name="submit" value="送信する" style="margin-left: 10px; width: 120px;">
        <input type="hidden" name="wikinum" value="<?php echo $lastnum; ?>">

        <!--jQueryのチェック数制限-->
        <script type="text/javascript">
        function click_cb(){
          var check_count = 0;

          $(".tag ul li").each(function(){
            var parent_checkbox = $(this).children("input[type='checkbox']");

            if(parent_checkbox.prop('checked')){
              check_count = check_count+1;
            }
          });

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
        </script>
      </form>



    </main>
  </div>
  </body>
</html>
