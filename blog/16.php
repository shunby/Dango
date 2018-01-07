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
          $id = 16;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            結論から言うと、おらふが公開した部品で128705円！！！（Amazon価格）<br>
            そのほかの部品（メモリーやらケースやら）も考えて、全体価格20万円だと予想しました！詳細は読みたければ読んでくださいw
          </p>
          <p>
            CPU　intel　core-i7　7700k<br>
            40980円<br>
            まずi7っていうだけですごいです！i5の7世代よりi7の6世代のほうが性能がいいんです。さらに一番新しい7世代を使っています。<br>
            自分的には宝の持ち腐れな気がしなくもない。i7を使う目安は、自分の中ではゲームをしながらそれを高画質でエンコードするくらいのゲーマだと思ってるのでw<br>
            おらふがそうじゃないとは限らないがw　とりあえず俺も欲しいw
          </p>
          <p>
            GPU　NVIDIA　GeForce　GTX1070<br>
            64456円<br>
            おらふはメーカーを公開してくれなかったので、大手もMSIの4GBと独断しました。GPUは映像処理の時に活躍してくれる部品で、ゲームを目的にパソコンを使うなら、CPUよりお金をかけるべき部品です。<br>
            主なシリーズが2つあってGeForceとRadeonです。おらふのはGeForceのシリーズで新しいのから5番目の性能。どのくらいすごいのかは価格が体現してると思いますw　ゲーマーとしてすごい羨ましい
          </p>
          <p>
            SSD　Crucial　MX300　525GB<br>
            17977円<br>
            これを買ったのは贅沢すぎる…　みなさんのスマホは容量何Gありますか？自分は32Gですwそれに比べて525Gは舐めてます。それもSSDというデータの転送速度がとても速いぜいたく品！自分はまだその速さを体験したことがないです…<br>
            とりあえずそれ売ったかねでクラスみんなに焼き肉おごってほしいなー　
          </p>
          <p>
            HDD　SEAGATE　BarraCuda　1TB<br>
            5292円<br>
            ごくごく一般的なよく使われるシリーズのHDDですb
          </p>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
  </body>
</html>
