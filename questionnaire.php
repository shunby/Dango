<!DOCTYPE html>
<html lang="ja">
<head>

  <title>あんけ～と</title>

  <meta name="description" content="アンケートですよー">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="questionnaire.css" rel="stylesheet" type="text/css">
  <link href="template/footer.css" rel="stylesheet" type="text/css">
  <link href="template/header.css" rel="stylesheet" type="text/css">
  <link href="template/navi.css" rel="stylesheet" type="text/css">
  <link href="template/main.css" rel="stylesheet" type="text/css">
  <link href="template/content.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- スクリプトでブロッキングを起こさないもの(とページの初期の描画に関するもの)はここに記述
  可能であれば「async（文書の読み込みが完了した時点でスクリプトを実行）」を使用
  例: <script src="" async></script> -->
</head>

<body >
  <div id="content">
    <?php
    include "template/header.html";
    ?>

    <?php
    include "template/navi.html";
    ?>

    <article id="main">
      <section>
        <h1>アンケート</h1>
        <form name="answer" action="questionnaire_complete.php" method="post" onSubmit="return checkBeforeSubmit();">
          このサイトを見て、感想・問題点・要望などありましたらご記入ください。
          <p>
            お名前
            <input name="name" type="text" id="name"></input>
          </p>
          <p>
            所属　
            <select name="grade" id="grade">
              <option value="1">中学1年生</option>
              <option value="2">中学2年生</option>
              <option value="3">中学3年生</option>
              <option value="4">高校1年生</option>
              <option value="5">高校2年生</option>
              <option value="6">高校3年生</option>
              <option value="10">教員</option>
            </select>
          </p>
          <p>
            <input type="radio" name="gender" value="man">男性</input>
            <input type="radio" name="gender" value="woman">女性</input>
          </p>
          <p>
            メールアドレス
            <input type="email" name="email" style="margin-left: 0px;"></input>
          </p>
          <p>
            サイトの中身の評価　
            <input type="radio" name="quality" value="bad">悪い
            <input type="radio" name="quality" value="soso" checked>普通
            <input type="radio" name="quality" value="good">良い
          </p>

          <p>
            サイトの見た目の評価
            <input type="radio" name="appearance" value="bad">悪い
            <input type="radio" name="appearance" value="soso" checked>普通
            <input type="radio" name="appearance" value="good">良い
          </p>

          <p>
            本文(感想、要望、記事のアイデアなど)<br>
            <textarea name="kansou" id=kansou placeholder="5文字以上1200文字以内で入力してください"></textarea>
          </p>
          <input type="submit" id="submit" value="送信"></input>
        </form>
      </section>
    </article>

    <?php
    include "template/footer.html";
    ?>

    <script src="questionnaire.js"></script>
    <noscript>ブラウザがjavascriptに対応していないか、javascriptが無効化されています。</noscript>
  </div>
</body>
</html>
