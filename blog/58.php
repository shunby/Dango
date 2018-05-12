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
          $id = 58;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <img src="image/blog/blog58.png" alt="">
          <p>
            五月祭の公式ホームページの一押し企画をまとめました！
          </p>
          <p>
            1.<a href="https://gogatsusai.jp/91/visitor/search/view/401">東大LEGO部展示</a><br>
            東大LEGO部主催<br>
            未来都市をテーマにした大型作品に挑戦するみたいです
          </p>
          <p>
            2.<a href="https://gogatsusai.jp/91/visitor/search/view/375">利き酒</a><br>
            東京大学農学部生命化学・工学専修4年主催<br>
            全国およそ120の蔵元から提供された日本酒のうち各回異なる4種類を飲み比べられます。（未成年以外は）
          </p>
          <p>
            3.<a href="https://gogatsusai.jp/91/visitor/search/view/522">医学フェスタ</a><br>
            東京大学医学部五月祭企画主催<br>
            手術体験やVR体験などの20を超える企が用意されており、医学の世界を身近に体験することができます。<br>
            まぁぶっちゃけそんなことはどうでもよくて、東大医学部という魔境に入れられるのが一番あれです
          </p>
          <p>
            4.<a href="https://gogatsusai.jp/91/visitor/search/view/398">なるほど実感！サイエンスミュージアム@本郷</a><br>
            東京大学サイエンスコミュニケーションサークルCAST主催<br>
            この団体はなんと年間100件にものぼる公演を行っており、実験を体験して科学の楽しさをおしえています。
          </p>
          <p>
            5.<a href="https://gogatsusai.jp/91/visitor/search/view/445">10分で伝えます！東大研究最前線</a><br>
            東京大学大学院生詰め合わせ主催<br>
            「誰でも通りすがりに立ち寄って、最先端の研究に関する土産話を持ち帰れる内容」をコンセプトとして、文系・理系を問わず多岐にわたる最先端研究をお届けするらしいです。
          </p>
          <p>
            そして一押しにはなってませんが <a href="https://gogatsusai.jp/91/visitor/search/view/301"> 模擬裁判</a><br>
            東京大学法律相談所主催<br>
            今年は「正当防衛」をテーマとした刑事裁判をお送りするらしいです。半年をかけて入念に準備されたとかハイクオリティーすぎる
          </p>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
