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
          $id = 48;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <p>
            ラーメン屋さんといえば狭い店の中に男どもがぎゅうぎゅう詰めになって麺をすすっているイメージの方…<br>
            全く間違ってません！　故になれてない人は非常に入りずらいですよね。　例えばこんな店とか
          </p>
          <img src="/image/blog/blog48.png">
          <p>
            by&nbsp;Googlemaps<br>
            <br>
            ラブホテルの看板もすぐそばに見えちゃってますね。　ちなみに大宮駅からこの店にたどり着くまでにそっち系のお店がずらりと並んでます、はい。<br>
            ここのお店は魚介系の濃いつけ麺が売りです。つけ麺tetsuにとっても似てる<br>
            そんな、なかなかラーメン屋さんに入れない人におすすめしたいのがチェーン店から始めることです！<br>
            豚骨ならば一風堂とかは店内がオシャレで女性客もかなりおおめ<br>
            <br>
            で、今回紹介するのがすごい煮干しラーメン凪の大宮東口店!<br>
            まず個人ブース（横に仕切り）が設けられているうえに、注文はタブレット、さらにラーメンも空を飛んできます（お店側のキャッチフレーズで実際に飛ぶわけではなく、カウンターの向こう側から回転寿司のように運ばれてきます）<br>
            つまりはあんまり人に見られずにラーメンを食すことができるのです！　まぁ店構えが派手なので入りずらさに変わりはないですが…<br>
            <br>
            ちなみにラーメン大好き小泉さんでは6話の朝ラーメンででてきます。
          </p>
          <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/50765/50765696.jpg?token=6928064&api=v2">
        </div>

        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
