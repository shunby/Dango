<?php $webroot = $_SERVER['DOCUMENT_ROOT']; ?>

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
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
    <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/wiki/editing.css" type="text/css">
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
        <?php include $webroot."/template/shortcut/shortcut.php" ?>
        <?php include $webroot."/template/sideber.php" ?>
        <div id="sidemain">
          <form action="/shortcutcookie.php" method="post">
            <p style="font-size: 22px;">この中から最大3つの項目を選んでショートカットに登録してください</p>
            <div class="tag">
              <ul>
                <li style="list-style-type: none;">
                  <input value="ログイン" type="checkbox" id="1" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="1" style="position: relative; top: -3px;">ログイン</label>
                </li>

                <li style="list-style-type: none;">
                  <input value="ブログ目次" type="checkbox" id="2" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="2" style="position: relative; top: -3px;">ブログ目次</label>
                </li>

                <li style="list-style-type: none;">
                  <input value="TOP" type="checkbox" id="3" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="3" style="position: relative; top: -3px;">TOP</label>
                </li>

                <li style="list-style-type: none;">
                  <input value="栄ペディア" type="checkbox" id="4" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="4" style="position: relative; top: -3px;">栄ペディア</label>
                </li>

                <li style="list-style-type: none;">
                  <input value="掲示板" type="checkbox" id="5" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="5" style="position: relative; top: -3px;">掲示板</label>
                </li>

                <li style="list-style-type: none;">
                  <input value="ユーザ検索" type="checkbox" id="6" name="checkbox[]" onclick="click_cb();" style="width: 17px; height: 17px;">
                  <label for="6" style="position: relative; top: -3px;">ユーザ検索</label>
                </li>
                <input type="submit" value="登録" name="submit" style="-webkit-appearance: none; background-color: #fff; border: 1px solid #333; padding: 3px 12px; border-radius: 5px; color: #333;">
              </ul>
            </div>
            <script type="text/javascript">
            function insertAtCaret(str) {
              var obj = $(".editor");
              obj.focus();
              if(navigator.userAgent.match(/MSIE/)) {
                var r = document.selection.createRange();
                r.text = str;
                r.select();
              } else {
                var s = obj.val();
                var p = obj.get(0).selectionStart;
                var np = p + str.length;
                obj.val(s.substr(0, p) + str + s.substr(p));
                obj.get(0).setSelectionRange(np, np);
              }
            }
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
        </div>
      </div>
  </body>

</html>
