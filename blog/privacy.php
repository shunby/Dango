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
    <link href="/template/main.css" rel="stylesheet" type="text/css">
    <link href="/template/content.css" rel="stylesheet" type="text/css">
    <link href="/template/navi.css" rel="stylesheet" type="text/css">
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
      <?php include $webroot."/template/blog/before.php" ?>

      <?php
        $id = 8;
       ?>

      <!--ここから本文-->
      <div class="main-main">
        <p>
          <h2>当サイトが使用しているアクセス解析ツールについて</h2>
          当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。
          このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。
          このトラフィックデータは匿名で収集されており、個人を特定するものではありません。
          この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。
          この規約に関して、詳しくは<a href="http://www.google.com/analytics/terms/jp.html">こちら</a>、または<a href="https://www.google.com/intl/ja/policies/privacy/partners/">こちら</a>をクリックしてください。
        </p>
        <p>
          <h2>当サイトへのコメントについて</h2>
          当サイトでは、スパム・荒らしへの対応として、コメントの際に使用されたIPアドレスおよびホスト名を記録しています。
          スパム・荒らしへの対応以外にこのIPアドレスを使用することはありません。
          また、メールアドレスとURLの入力に関しては、任意となっております。
          加えて、次の各号に掲げる内容を含むコメントは運営の裁量によって削除する事があります。
          <ul>
            <li>特定の自然人または法人を誹謗し、中傷するもの。</li>
            <li>極度にわいせつな内容を含むもの。</li>
            <li>禁制品の取引に関するものや、他者を害する行為の依頼など、法律によって禁止されている物品、行為の依頼や斡旋などに関するもの。</li>
            <li>その他、公序良俗に反し、または管理人によって承認すべきでないと認められるもの。</li>
          </ul>
        </p>
        <p>
          <h2>免責事項</h2>
          当サイトに掲載されている記事の内容につきましては、正しい情報を提供することに務めてはおりますが、提供している記事の内容及びリンク先からいかなる損失や損害などの被害が発生したとしても、当サイトでは責任を負いかねます。
          当サイト掲示板で発生したいかなる損失や損害などの被害についても、当サイトでは責任を負いかねます。
        </p>
        初出掲載：2017年12月23日
      </div>
      <!--ここまで本文-->

      <?php include $webroot."/template/blog/after.php" ?>
    </div>
  </body>
</html>
