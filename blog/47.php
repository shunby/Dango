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
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 47;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            いつもは外で勉強するとしたら図書館なんですけど、ジョナサンのドリンクバーのクーポンもらったのでそこで勉強してみることに…<br>
            <br>
            まず入って思ったのが、ファミレス音楽でかすぎる。　iPhoneの付属イヤホンだと自分で音楽流しててもバリバリ入ってくる　しね（暴言は吐いてない）<br>
            それから大人同士がファミレスでなんか大事な話とかよくするじゃん。　それで俺が行ったときはなんか怖いお兄さんたちが喝飛ばしまくってた　しね（もう一度言うが、暴言は吐いてない）<br>
            あと夕食の時間になってカップルが入ってきて、席結構すいてたのに店員が向かいのテーブルに案内しやがった。　男のほうがめっちゃコミュ障なくせに、女がかなり美形だった　しね。　たいして面白い話してないのに女のほう爆笑するし…ね<br>
            リア充爆ぜろよ　てか彼女いなくてもリアル充実してればリア充じゃん？　リア充なろ。<br>
            <br>
            （次回　卍爆ぜる）
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
