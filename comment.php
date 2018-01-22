<div style="font-size:30px; text-align:center">
  <?php
  $postnum = $_POST['postnum'];
  require_once($_SERVER['DOCUMENT_ROOT'].'/core/user_util.php');
  session_start();
  $error = '';
  if (@$_POST['submit']) {
    # code...
    if ($_POST['content'] == $error) {
      # code...
      echo "コメントがありません";
    } else {
      # code...
      $userid = $_SESSION['user']->id;
      $username = $_SESSION['user']->name;
      $pdo = new PDO("mysql:dbname=paysestbbs_bbs;charset=utf8;","root");
      $set = $pdo->prepare("INSERT INTO comment(postnum,content,userid,username) VALUES(?,?,?,?)");
      $set->execute(array(
      $_POST['postnum'],//postnum
      $_POST['content'],//coutent
      $userid,
      $username,
      ));
      echo "コメントが投稿されました";
    }
  }
  ?>
  <p> <a href=" <?php echo $_POST['url']; ?> ">閲覧していたブログに戻る</a> </p>
</div>
