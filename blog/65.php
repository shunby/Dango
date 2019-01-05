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
    <link rel="stylesheet" href="/template/shortcut/shortcut.css" type="text/css">
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
      <?php include $webroot."/template/shortcut/shortcut.php" ?>
      <?php include $webroot."/template/sideber.php" ?>

      <div id="sidemain">
        <?php include $webroot."/template/blog/before.php" ?>

        <?php
          $id = 65;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            みなさん、あけましておめでとうございます。随分とお久しぶりのねこでございます。
            みなさん残り少ない冬休みをいかがお過ごしでしょうか。私は過去最高に課題が進んでいてほくほくしています。<br>
            終わってはいませんが。
          </p>
          <p>
            今回のテーマは団子三兄弟（現爆ぜろSCC）です。今やすっかり過疎っているこのサイト。でも最初はそれなりに人がいたし、
            一応盛り上がっていた気もします。このサイトの辿った軌跡をまとめ、過去の栄光（？）を振り返ってみたいと思います。
          </p>
          <h4>1. 開発期(2017年夏~2017/12/15)</h4>
          <p>
            団子三兄弟のメンバー三人（おらふはいたか分かりません）でわいわいと計画を練っていた時期です。
            もう記憶があいまいで何があったかもよく思い出せませんが、開発途中の団子三兄弟の貴重なスクショが見つかったので
            貼っておきます。
          </p>
          <img src="/image/blog/blog65_1.png" width="300"></img>
          <p>
            ほぼまっさらですね。書いてあるのは「<b>今日は合唱コンクールの練習でとても疲れました。週末はおらふ君のように
            ニートしたいです</b>」という一文のみ。この頃からおらふは何もしてこなかったようです。
          </p>
          <h4>2. 匿名期(2017/12/15~2017年末)</h4>
          <p>
            クラスのLINEグループでお披露目し、ここにお客さんが来るようになった時期です。オープン当日は「誰も来ないんじゃないか」
            と思いながら自信満々のこくしゅん君を見てヒヤヒヤしていたりしたわけですが、なんともありがたいことにその日は30人近くの
            人が来てくれていました。このときは心底ほっとするとともに、大きな達成感を覚えました。オープン当初の団子三兄弟の
            スクショがありました。
          </p>
          <img src="/image/blog/blog65_2.png" width="300"></img>
          <img src="/image/blog/blog65_3.png" width="300"></img>
          <p>
            当時は、このサイトに入るためにはパスワードが必要でした。雑なパスワード入力画面に「dango」と入力すれば、
            最新のブログ記事がお出迎え。第一回目のブログ記事は、こくしゅんが書いたこのサイトの紹介でした。懐かしいですね。
            また、当時の掲示板は今のような会員制ではなく、ハンドルネームを入力して投稿する匿名制。名前を自由に変えられるので、
            おんくんが大量発生したりしていました。あと、このころ流行ったスレに、「○○について語ろう」系がありましたね。色んな人のスレが乱立して、
            盛り上がったり盛り上がらなかったりしていました。今では後の時代に作られた「田中淳子について語ろう」以外はすべて消えて
            しまっていますね。
          </p>
          <h4>会員制・平穏期(2018年始~不明)</h4>
          <p>
            現在の会員制が始まってから、何となくメンバーが固定されていくまでの時期です。
            匿名期ほどの勢いはありませんでしたが、この頃は安定しており、掲示板でも穏やかに会話が進行していました。
            （突如十二支全員分のアカウントが作られたり、といったプチ騒動はありましたが。）しりとりや連歌、風が吹けば桶屋が儲かるといったような
            お題に沿って簡単な言葉をつぶやくようなスレと、ほのぼのと雑談をするスレが並立して進行していたような記憶があります。
          </p>
          <h4>会員制・終末期</h4>
          <p>
            会員制になった後、半固定メンバーでゆるゆると続いていただんご三兄弟ですが、終末の足音がひたひたと近づいて参ります。
            皆の心がなんとなくだんご三兄弟から離れていき、ブログの更新も断続的になり、最後には止まってしまいます。（個人的にはブログ停止が
            終末の決定打になったのではないかと考えております。さぼってごめんなさい。）あとは惰性でしりとりが続いていくのみですが、最後にはその
            しりとりも（ほぼ）止まってしまいます。だんご三兄弟は止まってしまいました。
          </p>
          <h4>会員制・懐古期(最近)</h4>
          <p>
            こうして完全に停止した団子三兄弟ですが、最近ゆっくりと、非常にゆっくりと回っております。回っているのは「しりとり4」と
            「雑談 3rd gen.」。ぐるんぐるん回っていた時代を懐かしんでか、これらのスレにごくごくたまに人が入ってくるのです。
            かくいう私もその一人で、こうして昔を懐かしみながらこのブログを書いているわけです。自分でさぼっておきながら
            後からちゃっかり懐古記事を書くというのも虫のいい話ですが。
          </p>
          <p>
            果たしてこれからの団子三兄弟はどうなるのか、どうにもならないのか、乞うご期待です。
            こんなヤマもオチもない文章に付き合ってくださって、ありがとうございました。
          </p>
        </div>



        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
