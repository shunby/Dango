<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/check_login.php"
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>だんご三兄弟</title>

    <meta name="author" content="だんご三兄弟">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?php include "template/analytics.html" ?>
    <link rel="stylesheet" href="recruitment.css">
    <link href="template/header.css" rel="stylesheet" type="text/css">
    <link href="template/footer.css" rel="stylesheet" type="text/css">
    <link href="template/main.css" rel="stylesheet" type="text/css">
    <link href="template/content.css" rel="stylesheet" type="text/css">
    <link href="template/navi.css" rel="stylesheet" type="text/css">
    <link href="bbs/search_form.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="content">
        <?php include "template/header.html" ?>
        <?php include "template/navi.html" ?>
      <main id="main">
        <p class="p1">記事募集要項（短いほう）</p>
        <p class="p2">・ブログ記事の応募</p>
        <p class="p3"> 記事全文を募集しています。<a href="/questionnaire/questionnaire.php">お問い合わせ</a>ページよりご応募ください。<br>
        <p class="p2">・話題の《画像・動画》記事の応募</p>
        <p class="p3">記事のアイデア（記事全文でも可）を募集しています。<a href="/questionnaire/questionnaire.php">お問い合わせ</a>ページよりご応募ください。<br>
           ※画像または動画が必須。</p>
        <p class="p4">運営側から定期的に人気記事や人気writerのランキングなどを公表します。奮ってご応募ください。(*- -)(*_ _)ペコリ<br>
           ※ブログに関する応募なのか、話題の《画像・動画》に関する応募なのかわかるようにご記入お願いします。<br>
           ※詳細については、記事募集要項（長いほう）をご覧ください。</p>
        <hr /><br><br><br><br><br><br>
        <p class="p1">記事募集要項（長いほう）</p>
        <p class="p3">応募されて採用された記事は、すべて「みんなの募集記事」と、「ブログ」または「話題の《画像・動画》まとめ」のどちらかに掲載されます。<br>
             「みんなの記事」ではタイトル・作者・リンクのみを掲載し、実際に閲覧できるのは「ブログ」または「話題の《画像・動画》まとめ」のどちらかとなります。</p>
        <p class="p2">・ブログ記事の応募</p>
        <p class="p3"> 記事全文を募集しています。<a href="/questionnaire/questionnaire.php">お問い合わせ</a>ページより記事を応募したい旨をお伝えください。<br>
               ご記入されたメールアドレスより運営側からコンタクトを取らせていただきます。</p>
        <p class="p2">・話題の《画像・動画》記事の応募</p>
        <p class="p3">記事のアイデア（記事全文でも可）を募集しています。こちらもブログ記事と同じく<a href="/questionnaire/questionnaire.php">お問い合わせ</a>ページより記事アイデアを応募したい旨を伝えてください。<br>
              ご記入されたメールアドレスより運営側からコンタクトを取らせていただきます。<br>
              ※記事アイデアに関する画像または動画が必須となります。</p>
        <p class="p4">運営側から定期的に人気記事や人気writerのランキングなどを公表します。奮ってご応募ください。(*- -)(*_ _)ペコリ<br>
              ※ブログに関する応募なのか、話題の《画像・動画》に関する応募なのかわかるようにご記入お願いします。</p>
      </main>
      <?php include "template/footer.html" ?>
    </div>
  </body>
</html>
