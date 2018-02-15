<div id="sideber">
  <ul class="user">
    <li>ユーザー関連</li>
    <li><input type="button" value="ログイン" onclick="window.location.href='/login/login.php';"></input></li>
    <li><input type="button" value="ログアウト" onclick="window.location.href='/login/logout.php';"></input></li>
    <li><input type="button" value="ユーザ登録" onclick="window.location.href='/login/register.php';"></input></li>
    <li><input type="button" value="ユーザーページ" onclick="window.location.href='/user/';"></input></li>
  </ul>
  <ul class="type">
    <li>記事タイプ</li>
    <li> <a href="/blog/">・目次</a> </li>
    <li> <a href="/blog/?tag=栄東">・栄東</a> </li>
    <li> <a href="/blog/?tag=雑記">・雑記</a> </li>
    <li> <a href="/blog/?tag=みんなの記事">・みんなの記事</a> </li>
    <li> <a href="/blog/?tag=アップデートヒストリー">・アップデートヒストリー</a> </li>
  </ul>
  <?php
  //good.xmlの処理
  $xml = ($_SERVER['DOCUMENT_ROOT'].'/good/good.xml');
  $good_xmldata = simplexml_load_file($xml);
  $good_arr = get_object_vars($good_xmldata->blog);

  arsort($good_arr);//いいね数でソート

  $good_val_arr = array_values($good_arr);

  $good_key_arr = array_keys($good_arr);
  $good_key_arr1 = mb_substr($good_key_arr[0],1);//1位のブログのid
  $good_key_arr2 = mb_substr($good_key_arr[1],1);//2位のブログのid
  $good_key_arr3 = mb_substr($good_key_arr[2],1);//3位のブログのid

  //blogs.xmlの処理
  $blog_xml = ($_SERVER['DOCUMENT_ROOT'].'/blog/blogs.xml');
  $blog_xmldata = simplexml_load_file($blog_xml);

  $id_content = array();//idがkeyでtitleとlinkがvalueの配列
  foreach ($blog_xmldata as $blog) {
    # code...
    //var_dump(''.$blog->id);
    $tl = array('title' => $blog->title, 'link' => $blog->link );
    $id_content [''.$blog->id] = $tl;//$id_contentにkeyとvalueを追加
  }

  ?>
  <ul class="rank">
    <li>人気記事ランキング</li>
    <li>
      <div class="goodnum">
        <a>いいね数：<?php echo $good_val_arr[0]; ?></a>

      </div>
      <a href="
      <?php echo $id_content[$good_key_arr1]["link"]; ?>
      ">
        <?php
        echo $id_content[$good_key_arr1]["title"];
         ?>
      </a>
      <a href="<?php echo $id_content[$good_key_arr1]["link"]; ?>"><img class="neko" src="https://rr.img.naver.jp/mig?src=https%3A%2F%2Fimg0.etsystatic.com%2F114%2F0%2F12294915%2Fil_570xN.911322906_rost.jpg&twidth=300&theight=300&qlt=80&res_format=jpg&op=r"></a>
    </li>
    <li>
      <div class="goodnum">
        <a>いいね数：<?php echo $good_val_arr[1]; ?></a>

      </div>
      <a href="
      <?php echo $id_content[$good_key_arr2]["link"]; ?>
      ">
        <?php
        echo $id_content[$good_key_arr2]["title"];
         ?>
      </a>
      <a href="<?php echo $id_content[$good_key_arr2]["link"]; ?>"> <img class="neko" src="http://rr.img.naver.jp/mig?src=https%3A%2F%2Fimg1.etsystatic.com%2F133%2F0%2F12294915%2Fil_570xN.911074225_9g86.jpg&twidth=300&theight=300&qlt=80&res_format=jpg&op=r"> </a>
    </li>
    <li>
      <div class="goodnum">
        <a>いいね数：<?php echo $good_val_arr[2]; ?></a>

      </div>
      <a href="
      <?php echo $id_content[$good_key_arr3]["link"]; ?>
      ">
        <?php
        echo $id_content[$good_key_arr3]["title"];
         ?>
      </a>
      <a href="<?php echo $id_content[$good_key_arr3]["link"]; ?>"> <img src="data:image/png;base64,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" class="neko"> </a>
    </li>
  </ul>
  <ul class="footer">
    <li> <a href="http://www.sakaehigashi.ed.jp/">栄東official</a> </li>
    <li> <a href="/questionnaire/questionnaire.php">お問い合わせ</a> </li>
    <li> <a href="/recruitment.php">記事応募</a> </li>
    <li> <a href="/document/maid.php">メイドさん募集</a> </li>
    <li> <a href="/olaf/loginforolaf.php">おらふ用入口</a> </li>
    <li> <a href="/blog/privacy.php">プライバシーポリシー</a> </li>
    <li> <a href="/document/delete.php">処罰の基準</a> </li>
  </ul>
</div>
