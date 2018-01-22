<div id="iine"><!--いいね機構-->
  <input type="button" value="good" id="button"><!--ボタン-->
  <a id="goodcount"></a>
  <script>
    $(function(){
      $.ajax({
        type: 'POST',
        url: '/good/ajax.php',
        data: {article_type: "blog", article_id: <?php echo $id; ?>, act: 0}//いいねするフラグはオフ
      })
      .then(
        function(result){
          $("#goodcount").text(result);
        },
        function(){
          ;
        }
      );

      $('#button').click(
        function(){
          $.ajax({
            type: 'POST',
            url: '/good/ajax.php',
            data: {article_type: "blog", article_id: <?php echo $id; ?>, act: 1}//いいねするフラグはオン
          })
          .then(
            function(result){
              $("#goodcount").text(result);
            },
            function(){
              ;
            }
          );
        }
      );
    });
  </script>
</div>

<!--コメント機構-->
<!--コメント一覧-->
<?php
  $pdo = new PDO("mysql:dbname=paysestbbs_bbs;charset=utf8;","root");
  $url = $_SERVER["REQUEST_URI"];
  $postnum = preg_replace('/[^0-9]/','',$url);
  $sql = "SELECT * FROM comment WHERE postnum = $postnum";
  $data = $pdo->query($sql);
?>
<div class="commentlist">
  <p>コメント一覧</p>
    <?php
    foreach ($data as $value) {
      # code...
      echo '<div style="padding-bottom: 50px;">';
      echo '名前:'.$value['username'].'　'.'投稿日:'.$value['time'].'<br>'.$value['content'];
      echo '</div>';
    }
    ?>
</div>

<!--フォーム-->

<form action="/comment.php" method="post" id="comment">
  <p>コメントをどうぞ</p>
  <textarea name="content" rows="10" cols="80"></textarea>
  <p><input type="submit" name="submit" value="コメントを送信" class="submit"></p>
  <input type="hidden" name="postnum" value=" <?php echo $postnum; ?> ">
  <input type="hidden" name="url" value=" <?php echo $url; ?> ">
</form>

<div class="main-before">
  <img src="/image/blog/trn.png" alt="" id="trn">
  <div class="before-blog">
    <a id="prev_link" href="#" style="text-decoration: none">
      <!--prev_link-->
    </a>
  </div>
</div>
<div class="main-after">
  <div class="next-blog">
    <a id="next_link" href="#" style="text-decoration: none">
      <!--next_link-->
    </a>
  </div>
  <img src="/image/blog/trn2.png" alt="" id="trn2">
</div>
<div class="main-tocontents">
  <a href="index.php" style="text-decoration: none">目次へ</a>
</div>
</div>
</main>

<div class="wtf">

</div>

<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  $blogs = simplexml_load_file($webroot."/blog/blogs.xml");

  $title; $date; $prev_link = ""; $next_link = ""; $prev_title = "前の記事はありません"; $next_title = "次の記事はありません";

  foreach ($blogs->blog as $blog_element) {
    switch ($blog_element->id * 1){
      case $id - 1:
        $prev_link = $blog_element->link;
        $prev_title = $blog_element->title;
      break;
      case $id + 0:
        $title = $blog_element->title;
        $date = $blog_element->date;
      break;
      case $id + 1:
        $next_link = $blog_element->link;
        $next_title = $blog_element->title;
    }
  }


  echo <<<EOM
<script type="text/javascript">
  document.getElementsByClassName("main-title")[0].textContent = "{$title}";
  document.getElementsByClassName("main-date")[0].textContent = "{$date}";
  document.getElementById("prev_link").href = "{$prev_link}";
  document.getElementById("next_link").href = "{$next_link}";
  document.getElementById("prev_link").textContent = "{$prev_title}";
  document.getElementById("next_link").textContent = "{$next_title}";
</script>
EOM;

?>
