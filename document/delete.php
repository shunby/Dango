<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>

<!DOCTYPE html>
<!--テンプレート-->
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
  <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
  <link href="/template/footer.css" rel="stylesheet" type="text/css">
  <link href="/template/main.css" rel="stylesheet" type="text/css">
  <link href="/template/content.css" rel="stylesheet" type="text/css">
  <link href="/template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include $webroot."/template/header.html" ?>
    <?php include $webroot."/template/shortcut/shortcut.php" ?>
    <?php include $webroot."/template/navi.html" ?>
    <article id="main">
      <section>
        <h2>処罰の基準</h2>
        <p>
          ユーザーがこのページに挙げるような行為をした場合、そのユーザーの名声が減点されます。初期の名声は15点で、
          名声が10以下になるとそのユーザーに対し警告を行い、5以下になると一か月のブロック（アクセス禁止）、0になると無期限のブロックを行います。<br>
        </p>
        <p>
          名声は<a href="/user/">ユーザーページ</a>から確認できます。
        </p>
        <p>
          <h3>減点対象となる行為</h3>
          <b>掲示板・ユーザーページ・コメント等への書き込みに関するもの</b>
          <ul>
            <li>名前をあげて非難する等、特定の個人への誹謗中傷などの書き込み</li>
            該当の書き込み削除、初回は8点、それ以降は15点減点
            <li>他人の個人情報の書き込み</li>
            該当の書き込み削除、初回は8点、それ以降は15点減点
            <li>不適切な書き込み</li>
            2点減点
            <li>意味をなさない単一の書き込み・スレッドの作成</li>
            5点減点
            <li>意味をなさない書き込みやスレッドの連続投稿</li>
            7点減点
          </ul>
          <b>ユーザーやシステムに関するもの</b>
          <ul>
            <li>3つ以上のアカウントの所持、またはユーザーページで関係性を明記しないうえでの2アカウントの所持</li>
            すべての過剰なサブアカウントを削除、一回目は5点、それ以降は15点の減点
            <li>システムの不具合を利用した意図的な不正行為</li>
            15点減点
            <li>他人のアカウントを乗っ取る、または複数人で同一のアカウントを使用する</li>
            初回：同意なしは10点減点、同意がある場合は3点減点<br>
            二回目以降：同意の有無にかかわらず10点減点
            <li>意図して他人のアカウントに酷似したアカウントを作り、そのアカウントを乗っ取ったり使用者を貶めようとする行為</li>
            5点減点、アカウント作成後の行動については他の罰則を適用
          </ul>
        </p>
        初出掲載：2018年1月23日
      </section>
    </article>


  </div>
</body>

</html>
