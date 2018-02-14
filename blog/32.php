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

    <?php include "../template/analytics.html" ?>
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
          $id = 32;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            みななは腕時計いつもつける派？それともつけない派？<br>
            今の座席の左前の二人は時計に対する興味がすごくて、修学旅行先の空港でロレックスの店内に入るというつわもの。。。　ロレックスっていうのは、お高い腕時計売ってるところ。成田で見た時は100万円以上の時計があったなー。<br>
            それとは対照に自分は時計なんて小学校の時の試験で親の借りてつけたくらいで、それ以外はほとんどつけてこなかった人間なんです。かっこいいなーと思うことがあってもそんな興味はなかったな。<br>
            で、流れからわかるように、最近自分も腕時計をつけはじめたんです！　といっても普通の時計とはちょっと違う。<br>
          </p>
          <p>
            「 <a href="https://www.amazon.co.jp/itDEAL-%E3%82%B9%E3%83%9E%E3%83%BC%E3%83%88%E3%83%96%E3%83%AC%E3%82%B9%E3%83%AC%E3%83%83%E3%83%88-%E6%B4%BB%E5%8B%95%E9%87%8F%E8%A8%88-%E3%82%B9%E3%83%9E%E3%83%BC%E3%83%88%E3%82%A6%E3%82%A9%E3%83%83%E3%83%81-%E6%97%A5%E6%9C%AC%E8%AA%9E%E5%AF%BE%E5%BF%9C/dp/B07371X868/ref=cm_cr_arp_d_product_top?ie=UTF8">itDEAL　スマートブレスレット</a>」　 こういうの！<br>
            ね？かなーり違うでしょ。時代の先端を行ってる感じがしてかっちゃいましたよー(๑¯ω¯๑)　ただ単にこれが気に入っただけで、従来の時計への興味はいまだにさっぱりですわwww<br>
          </p>
          <p>
            このブレスレットは、例えば睡眠状況だったりその日の消費カロリーだったり心拍数だったりいろいろなものを自動で測ってくれます。（心拍数とか血圧とか測るとき、画面の裏から怪しい緑の光がでるんだわ。すごい）<br>
            それで、FitCloudというスマホアプリと連動すれば、日、週、月のそれぞれの状況を一目で確認できるというハイテクマシン。　もちろん現在時刻も表示してくれるよw<br>
            で、一番便利に感じてるのがこれ。<br>
            <img src="/image/blog/blog32_1.JPG">
            こういうLINEメッセージが届いたときに、ブレスレットが振動してお知らせ。さらにメッセージ内容まで教えてくれるんです！最高じゃね？<br>
            もちろん上みたいな冷たいメッセージだけじゃなくて暖かいメッセージも来ますよーw<br>
            <img src="/image/blog/blog32_2.JPG">
            タイトルがApple　Watchになってるけど違うからねw　あれはお値段3倍くらいするからなΣ(ﾟ□ﾟ(ﾟ□ﾟ*)
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
