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


  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="../template/sidemain.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="posts.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/template/sideber.css" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>
    <?php include $webroot."/template/sideber.php" ?>
    <article id="sidemain">
      <form id="search" name="search_form" action="/usersearch.php" method="post" onsubmit="return on();">
        <h3>名前検索</h3>
        <p>自己紹介を見る際などに活用してください!</p>
        <input type="text" name="name" class="searchbox" id="name">
        <p><input type="submit" name="submit" value="超卍検索！"></p>
      </form>
      <script type="text/javascript">
        function on(){
          if (document.getElementById("name").value == "") {
            alert("検索欄は未入力です")
            return false;
          }
          else {
            return true;
          }
        }
      </script>
      <div class="nakama">
        <h3>だんごと愉快な仲間たち</h3>
        <div class="intro">
          <p> <a href="/user/?userid=1">ねこ氏</a> </p>
          <p>
            ユーザーIDの一番最初を分捕っていった姑息な奴。　ちなみに野菜を食べる人をみんな猛者だと認知している。認知症が疑われる。<br>
            そしてよくLINEのクラスグルに他人の黒歴史をさらす超危険人物。　被害者の方はスレを立ててねこの愚痴を吐いてスッキリしよう！<br>
            特技:　頭を使うならなんでも強い。やばい。<br>
            好きなこと:　LINEの既読をできるだけ早くつける<br>
            嫌いなもの:　野菜。。。
          </p>
        </div>
        <div class="intro">
          <p> <a href="/user/?userid=4">おらふ氏</a> </p>
          <p>
            おらふのブログ廃案に賛成の方は今すぐスレを立てて署名しよう。　過半数の署名（2018/3/6現在、ユーザー数は52名）でおらふのブログコーナーをつぶすことができる‼<br>
            わが手によって...ふっふっふ......( ﾟ∀ﾟ)ｱﾊﾊ八八ﾉヽﾉヽﾉヽﾉ ＼ / ＼/ ＼　　　今までの恨み！！！＼＼\\٩(๑`^´๑)۶//／／　　　紹介コーナーで取り乱してしまい申し訳ございませんでした。<br>
            特技：　失態をさらす。<br>
            好きなこと:　男子のうち太ももを触る。<br>
            嫌いなもの:　野菜。。。
          </p>
        </div>
        <div class="intro">
          <p> <a href="/user/?userid=9">卍氏</a> </p>
          <p>
            つい最近3日連続のラーメン屋での食事にて生まれて初めて太ったのを実感した模様卍卍また乾燥で顔の皮がべろんとはがれてしまったこの冬卍風呂上りはスキンクリームでの顔面のケアを欠かさない卍卍弱点はわき腹ではない卍卍（絶対突くなよ卍卍）<br>
            特技:　まじめに装うこと。<br>
            好きなこと:　夜食のラーメンさいこー。<br>
            好きなもの:　野菜ŧ‹"ŧ‹"ŧ‹"ŧ‹"(๑´ㅂ`๑)ŧ‹"ŧ‹"ŧ‹"ŧ‹"
          </p>
        </div>
      </div>
    </article>
  </div>
  <?php include "../template/analytics.html" ?>
</body>

</html>
