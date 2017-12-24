<!DOCTYPE html>
<html lang="ja">
<head>

  <title>アンケート｜管理者メニュー</title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <link href="admin_questionnaire.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/main.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/admin_navi.html" ?>

    <article id="main">
      <section>
        <h1>アンケート</h1>
        <h5>検索</h5>
        ※空白は指定なし
        <form action="admin_questionnaire.php" method="get">
          名前
          <input name="name" type="text" id="name"></input>
          <br>
          所属
          <select name="grade" id="grade">
            <option value="0">指定なし</option>
            <option value="1">中学1年生</option>
            <option value="2">中学2年生</option>
            <option value="3">中学3年生</option>
            <option value="4">高校1年生</option>
            <option value="5">高校2年生</option>
            <option value="6">高校3年生</option>
            <option value="10">教員</option>
          </select>
          <br>
          <input type="radio" name="gender" value="man">男性</input>
          <input type="radio" name="gender" value="woman">女性</input>
          <input type="radio" name="gender" value="none">性別指定なし</input>
          <br>
          メールアドレス:
          <input type="email" name="email" style="margin-left: 0px;"></input>
          <br>
          SQL文を直接入力：
          <input name = "sql" type="text" style="width:500;"></input>
          <br><br>
          <input type="submit" id="submit" value="検索"></input>

        </form>
        <table border="2">
          <tr><th>名前</th><th>性別</th><th>学年</th><th>メール</th><th>内容</th></tr>
          <?php
          $search = 'select * from kansou where ';
          if(!array_key_exists('name',$_GET)){
            $search = $search.'1';
          }else if($_GET['sql'] != ""){
            if(strpos($_GET['sql'], "select") === false || !(strpos($_GET['sql'], ";") === false) || !(strpos($_GET['sql'], "\g") === false)){
              echo '安全のため、select文以外の文や複数の文は発行できません。';
              $search = $search." 1";
            }else{
              $search = $_GET['sql'];
            }
          }else{
            $isMultiCondition = false;
            if($_GET['name'] != ""){
              $search = $search."name='".$_GET['name']."'";
              $isMultiCondition = true;
            }
            if($_GET['grade'] != 0){
              if($isMultiCondition)$search = $search." AND";
              $search = $search." "."grade='".$_GET['grade']."'";
              $isMultiCondition = true;
            }
            if(array_key_exists('gender', $_GET) && $_GET['gender'] != "none"){
              if($isMultiCondition)$search = $search." AND";
              $search = $search." "."gender='".$_GET['gender']."'";
              $isMultiCondition = true;
            }
            if($_GET['email'] != ""){
              if($isMultiCondition)$search = $search." AND";
              $search = $search." "."email='".$_GET['email']."'";
              $isMultiCondition = true;
            }
            if($_GET['name'] == ""
            && $_GET['grade'] == 0
            && (!array_key_exists('gender', $_GET) || $_GET['gender'] == "none")
            && $_GET['email'] == ""){
              $search = $search." 1";
            }

          }

          echo $search;

          $pdo = new PDO("mysql:dbname=kansou", "root");
          $st = $pdo->query($search);
          while($row = $st->fetch()){
            $name = htmlspecialchars($row['name']);
            $gender = htmlspecialchars($row['gender']);
            $grade = htmlspecialchars($row['grade']);
            $email = htmlspecialchars($row['email']);
            $kansou = htmlspecialchars($row['kansou']);
            echo "<tr><td>{$name}</td><td>{$gender}</td><td>{$grade}</td><td>{$email}</td><td>{$kansou}</td></tr>";
          }
          ?>
        </table>
      </section>
    </article>

    <?php include "../template/footer.html" ?>
  </div>
</body>
</html>
