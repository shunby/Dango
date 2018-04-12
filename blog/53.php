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
          $id = 53;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <div id="morning" style="display:none;">
            みなさん、おはようございます。
            こんな朝早くからこのサイトを見ているなんて、なかなかの物好きですね。<br>
            私はいつも7時くらいに起きて、7時半の電車に乗り、8時20分くらいに学校に着いてます。遅いですね。<br>
            早く来れないこともない（はず）なのですが、一度「この時間でも大丈夫」とわかってしまうと
            それより早い時間に起きるのがとても難しくなってしまうのです。<br>
            この気持ち、分かりませんか？
          </div>
          <div id="afternoon" style="display:none;">
            みなさん、こんにちは。お昼です。<br>
            私は休日には13時から15時くらいの間に起きるんですが、
            そうするとどうしても一日の時間が短くなってしまうんですよね。<br>
            15時に起きると、24時まで9時間しかありません。朝8時に起きた場合は16時間もあるので、
            このままでは私の一日は普通の人の約1.8倍に圧縮されてしまいます。<br>
            常人の1.8倍の速度で行動でもしない限りは、この差は致命的です。
            なんとかして7時間を取り戻さなければいけません。<br>
            そこで私が目を付けたのが、夜の時間です。<br>
            普通は寝て時間を浪費している夜に、朝使えない7時間を確保すればいいのです。
            つまり、朝の15時に起きて、夜の7時に寝るのです。こうすることで、私は普通の人と同じ毎日を生きているのです。<br>
            めでたしめでたし。
          </div>
          <div id="night" style="display:none">
            みなさん、こんばんは。
            今日も終わりが近づいていますが、課題は進んでいますか？<br>
            課題をやらないといけないのに、どうしてもやる気が起きないときってありますよね。
            危機感だけは湧いてくるけど、どうしてもやる気が出ない。例えばこんな感じ。
            <blockquote>
              明日提出の課題をやってない。やらないとまずいけど、今はとてつもなく眠くてやる気が出ない。<br>
              まあ、明日朝早くに行って学校でやればいいかな…
            </blockquote>
            ………ここから朝寝坊するとこまででワンセットですね。<br>
            でも、仕方ないんです。どれだけ「やらねば」と思っていても、何もせずに
            寝てしまう。きっとそれが人間なんです。
          </div>
          <script>
            var date = new Date();
            var time = date.getHours();
            var elem;
            if(5 <= time && time <= 11){
              elem = document.getElementById("morning");
            }else if(12 <= time && time <= 18){
              elem = document.getElementById("afternoon");
            }else if((19 <= time && time <= 23) || (0 <= time && time <= 4)){
              elem = document.getElementById("night");
            }
            elem.style.display = "block";
          </script>
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
