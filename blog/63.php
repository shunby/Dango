<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  //include $webroot."/template/check_login.php"
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


    <link href="/template/blog/blog.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
    <link href="/template/header.css" rel="stylesheet" type="text/css">
    <link href="/template/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/sidemain.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
    <link href="/template/iine/ajax.css" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="/template/sideber.css" type="text/css">
    <link href="" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="content">
      <?php
        $webroot = $_SERVER['DOCUMENT_ROOT'];
        include $webroot."/template/header.html"
      ?>
      <?php include $webroot."/template/navi.html" ?>
      <?php include $webroot."/template/shortcut/shortcut.php" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 63;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <div style="min-height:50em;">
          <span id="target">
            404 Not Found!*
            お探しのページは、現在存在していません。*
            　　　　　　　　　　　　*
　　　　　　　　　　　　*
　　　　　　　　　　　　*
　　　　　　　　　　　　*
            ...なんてね。*
            今回はだんだん文字が出てくるようにしてみました。*
            なってない人はJavaScriptを有効にするか、それでもダメな場合は諦めてください。*
            しかし書くネタがないので、ここで終わってしまいます。*
            　　　　　　　　　　　*
            　　　　　　　　　　　*
            追伸:これでプログラムをかっこよく表示できないか検証*
            ***?
            public class Main{*
            　　public static void main(String[] args){*
            　　　　func();*
            　　}*
            　　private void func(){*
            　　　　System.out.println("ばなな");*
            　　}*
            }*
            -...どうでした？

          </span><span id="t2">I</span>
        </div>

          <script type="text/javascript">
          var target = document.getElementById("target");
          var text = target.innerHTML;
          target.innerHTML = "";
          text = text.replace('\n', '*');
          var i = 0;
          var f = function(){
            var c = text.charAt(i) == '*' ? '<br>' : text.charAt(i);
            if(c == "?"){
              clearInterval(t);
              t = setInterval(f, 50);
              c = "";
            }else if(c == "-"){
              clearInterval(t);
              t = setInterval(f, 100);
              c = "";
            }
            document.getElementById("target").innerHTML = document.getElementById("target").innerHTML + c;
            i++;
            if(i > text.length)clearInterval(t);
          };
          var flag = true;
          var f2 = function(){
            document.getElementById("t2").style = "display:" + (flag ? "inline" : "none") + ";";
            flag = !flag;
          }
          t = setInterval(f, 100)
          t2 = setInterval(f2, 500)
          </script>

        </div>



        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
