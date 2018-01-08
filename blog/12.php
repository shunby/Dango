<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  // include $webroot."/template/check_login.php"
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
          $id = 12;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            お久しぶりのねこです。年が明けましたね。
          </p>
          <p>
            皆さん、つつがない感じのお正月を迎えておられますでしょうか。それとも、課題に追われていらっしゃるのでしょうか。
            私は、課題を無視しながらつつがなくお正月を迎えております。
          </p>
          <p>
            新年の目標はもう立てましたか？まだ立ててないですか？それとも立てる予定もないですか？
            私の目標は「課題を溜めない」です。なんだかぱっと見いい感じの目標ですが、ちょっと考えてみるとなんかあれですね。
          </p>
          <p>
            それだけならまあ良いんですが、それだけじゃないんです。実はこの目標、毎年、毎月、毎週、毎日立てております。
            いつも期日ギリギリまで残して、試験日に徹夜して完成させております。
          </p>
          <p>
            それで、いつもちょっとだけ懲りて、「次は溜めまい」となんとなく誓うんですが、結局溜めて、結局徹夜して、結局また誓う羽目になるんですね。
            いやー、なんででしょうね。
          </p>
          <p>ねこでした。</p>
        </div>
        <!--ここまで本文-->

        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
