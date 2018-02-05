<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
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
          $id = 26;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            どーもねこです。
          </P>
          <p>
            怖いものって、たまーに見たくなりますよね。私は基本ホラー系苦手なんですけど、たまーに思い出したように見たりします。
          </p>
          <p>
            私がそんな感じで見たり見なかったりを繰り返してるのが、<a href="http://ja.scp-wiki.net/" target="_blank">SCP財団</a>です。<br>
            これは、「SCP」と呼ばれる異常なものたちを確保、収容、保護し、現実世界を平和に保つため暗躍する
            世界規模の団体「SCP財団」によるSCPについての報告書...という体でホラーな文章を読んだり書いたりする、恐怖系創作サイトです。
          </p>
          <p>
            <a href="http://ja.scp-wiki.net/scp-173" target="_blank">少しでも目を離したら超高速で動いて首をへし折ってくる彫刻</a>や、
            <a href="http://ja.scp-wiki.net/scp-682" target="_blank">すべての生命を憎悪し酸にも耐える最強の爬虫類</a>、
            <a href="http://ja.scp-wiki.net/scp-240-jp" target="_blank">現実改変能力を駆使して絶対に死なない0匹のイナゴ</a>などなど、
            多種多様なホラーだったり面白かったり謎だったりするSCPがいて、割と面白いです。暇だったら一度読んでみてください。
          </p>
          <p>
            SCPを紹介する動画もそれなりにあるので、そちらから入門するのもいいと思います。
          </p>
          <p>
            <figure id="scp_096">
              <img style="border:solid 1px" width=50% src="/image/blog/blog26_096.jpg" alt="scp-096" />
              <figcaption><a href="http://ja.scp-wiki.net/scp-096" target="_blank">特に何かあるわけではないですが、この綺麗な山の写真を張っておきますね。</a></figcaption>
            </figure><br>
          </p>
          <p>
            では、そんな感じで、ねこでした。
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
