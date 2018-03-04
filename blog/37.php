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
          $id = 37;
         ?>

        <!--ここから本文-->
        <div class="main-main">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
          <?php
            echo "<script>";
            require $webroot.'/simplemde.min.js';
            echo "</script>";
          ?>
          <textarea id="mde_target">

          </textarea>
          <script>
            var mde = new SimpleMDE({element: document.getElementById("mde_target")});
            mde.value(
              `
<font color="gray">※この記事を読む前に、文章のすぐ上のツールバーにある目のアイコンを押してください</font>

編集ウィンドウの中からこんにちは、ねこです。
[ユーザーページ](/user/)に自己紹介欄が追加されました。早速[顔文字を書いたりして使いこなしてる人](/user/?userid=23)とかもいましたが、どう編集すればよくわからない人も<font color=gray><s>そもそも自己紹介に興味ない人も</s></font>いるかと思います。

今回は、そんな人でも自己紹介できるように自己紹介文の文法を解説したいと思います。
より詳しい解説がほしい人は「markdown記法」で検索してみると幸せになれると思います。

### 1.普通の文章
普通の文章です。何の装飾もないですが、最悪これでも伝わります。
普通の文章を書くには、普通に文章を書けばいいです。特に変なことをする必要はありません。

### 2.見出し
↑の「2.見出し」みたいなのが見出しです。見出しを作りたいときは、
\`# 見出しの内容\`
みたいな風に書けばいいです。また、
\`## 小見出しの内容\`
\`### より小さい見出しの内容\`
\`#### もっと小さい見出しの内容\`
\`##### さらに小さい見出しの内容\`
\`###### いちばん小さい見出しの内容\`
という感じに#を重ねることで見出しの大きさを変えることができます。
#と見出しの間には半角スペース(スマホならアルファベットを打つ時のキーボードにある小さいスペース)が入ります。全角スペース(ひらがなを打つ時のキーボードにある大きいスペース)ではないので注意しましょう。

### 3.太字・打消し線
まとめて二つです。
**太字はこんな感じ**、~~打消し線はこんな感じ~~に表示されます。
それぞれ、
\`**太字の内容**\`
\`*打消し線の内容*\`
と書きます。太字が\*\*で、打消し線が\*です。間違えないようにしましょう。

### 4.リンク

みなさんおなじみ、リンクです。言わなくても分かるでしょうが、[こういうの](https://www.google.co.jp)がリンクです。リンクを書くときは、
\`[団子三兄弟！](http://paysestbbs.webcrow.jp)\`
のように、
\`[表示するテキスト](リンク先URL)\`
と書けばOKです。

### 5.画像

画像の貼り方は、リンクとほぼ同じです。
\`![画像の説明](画像URL =縦x横)\`
画像URLの後に半角スペースを入れ、「=縦のサイズx横のサイズ」と記入すると、サイズを指定して表示することができます。(サイズ指定は省略可)
縦のサイズと横のサイズを区切っているのはアルファベットの小文字xです。×(かける)や×(バツ)ではないので注意。

### 6.色付き文字

<font color=red>色付き文字</font>は、
\`<font color=色>色を付ける内容</font>\`
です。色には、red, blue, orange等の色を表す英単語か、0xFFFFFF等の16進数のカラーコードが指定できます。(カラーコードについては省略)

### 7.プレビュー機能

最後に、一つ便利な機能を紹介します。記事を読む前に押してもらった目のボタン、実はあれはプレビュー機能のボタンだったのです。もう一回ボタンを押すと、プレビュー状態が解除されてこのブログの原文が出てきます。このプレビュー機能を使えば、編集中でもすぐに見た目を確認できるのでじゃんじゃん活用していきましょう。

それでは、文字装飾を活用して、良い自己紹介ライフを！
ねこでした。
              `
            );
          </script>
        </div>
        <!--ここまで本文-->



        <?php include $webroot."/template/blog/after.php" ?>
      </div>

    </div>
    <?php include "../template/analytics.html" ?>
  </body>
</html>
