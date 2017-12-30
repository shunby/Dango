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
    <?php include $webroot."/template/navi.html" ?>
    <article id="main">
      <section>
        <h2>メイドさん募集(予定)</h2>
        <p>
          当サイトでは、サイトの管理・運営をやりやすくするために、メイドさんを募集しています。
          メイドさんには掲示板の治安維持・運営からの告知作成等の仕事を行ってもらいます。
          ささやかながら報酬も用意させていただきますので、興味のある方はどうぞご応募ください。<br>
          メイドさんの応募資格:
          <ul>
            <li>運営との連絡手段(メールアドレス、Lineアカウント等)がある</li>
            <li>顕著な非行(「当サイトでの」荒らし行為等)が見られない</li>
            <li>運営に学年・クラスを公開してくれる(運営外には漏らしません)</li>
          </ul>
          <h1>メイドさんの報酬</h1>
          <ul>
            <li><b>名前の装飾</b>: ユーザ名の色を変更したりできるようになります。</li>
          </ul>
          ※メイドさんの報酬として金品や品物を差し上げることはできません。<br><br>
          <h1>メイドさんの職種</h1>
          <ul>
            <li><b>掲示板メイドさん</b>: 掲示板での荒らし・誹謗中傷等の書き込みの監視をしてもらいます。</li>
            <li><b>お知らせメイドさん</b>: 運営からのお知らせの告知をしてもらいます。</li>
            <li><b>ライターメイドさん</b>: ブログ等の更新をしてもらいます。</li>
            <li><b>メイド長</b>: メイドさんの最高職です。サイトコンテンツの増設や廃止・システムの更新等に関わることができます。
              他のメイドさん経験者からのみ選ばれます。</li>
            <li><b>運営</b>: サイト創設者の国駿・おらふ・ねこの3人。原則増えません。</li>
          </ul>
          <h1>メイドさんにできること</h1>
          <ul>
            <b>全てのメイドさんにできること：</b>
            <br>
            <li><b>掲示板の編集</b>: 掲示板のコメント・スレッドの削除、チャットルームの作成・削除ができます。</li>
            <li><b>ユーザーページの編集</b>: ユーザページのコメントの削除ができます。</li>
            <li><b>ユーザーの削除・復活</b>: 3人以上の他のメイドさんか運営の同意を得た上で、不適切なユーザーの削除と、削除済みのユーザーの復活の提案ができます。</li>
            <li><b>運営からのお知らせの追加</b>: サイトトップの「運営からのお知らせ」に項目を追加することができます。</li>
            <br>
            <b>ライターメイドさんにできること：</b>
            <li><b>サイトコンテンツの更新</b>: ブログ等の更新を行うことができます。</li>
            <br>
            <b>メイド長にできること：</b>
            <li><b>他のメイドの権限の保有</b>: 他のメイド職種にできることすべてを行うことができます。</li>
            <li><b>サイトコンテンツの編集</b>: サイトのファイルにアクセスし、運営の同意の上でその編集を行うことができます。</li>
          </ul>

          <h1>メイドさんの解任</h1>
          以下の場合にのみ、メイドさんは解任されることがあります。
          <ul>
            <li><b>自主解任</b>: メイドさん自ら辞任を申し出た場合。</li>
            <li><b>活動停止による解任</b>: 長期間メイドさんとしての活動を行っていない場合。</li>
            <li><b>投票による解任</b>: 一般ユーザーまたは他のメイドさんによる解任投票で解任が決定した場合。</li>
            <li><b>運営による解任</b>: メイドさんとして著しくふさわしくない行動をとり、運営が解任を決定した場合。</li>
          </ul>
        </p>
      </section>
    </article>

    <?php include $webroot."/template/footer.html" ?>

  </div>
</body>

</html>
