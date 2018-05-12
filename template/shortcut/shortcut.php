<?php
//var_dump($_COOKIE["shortcut"]);
$val = $_COOKIE["shortcut"];
$val1 = ($val[1]);
//var_dump($val1);
$val2 = ($val[2]);
//var_dump($val2);
$val3 = ($val[3]);
//var_dump($val3);

//val1のswitch
switch ($val1) {
  case "ログイン":
    $val1_url = "/login/login.php";
    break;

  case "ブログ目次":
    $val1_url = "/blog/";
    break;

  case "TOP":
    $val1_url = "index.php" ;
    break;

  case "栄ペディア":
    $val1_url = "/wiki/index.php";
    break;

  case "掲示板":
    $val1_url = "/bbs/index.php";
    break;

  case "ユーザ検索":
    $val1_url = "/user_search/index.php";
    break;

    default:
      $val2 = '';
}

//val2のswitch
switch ($val2) {
  case "ログイン":
    $val2_url = "/login/login.php";
    break;

  case "ブログ目次":
    $val2_url = "/blog/";
    break;

  case "TOP":
    $val2_url = "index.php" ;
    break;

  case "栄ペディア":
    $val2_url = "/wiki/index.php";
    break;

  case "掲示板":
    $val2_url = "/bbs/index.php";
    break;

  case "ユーザ検索":
    $val2_url = "/user_search/index.php";
    break;

  default:
    $val2 = '';
}

//val3のswith
switch ($val3) {
  case "ログイン":
    $val3_url = "/login/login.php";
    break;

  case "ブログ目次":
    $val3_url = "/blog/";
    break;

  case "TOP":
    $val3_url = "index.php" ;
    break;

  case "栄ペディア":
    $val3_url = "/wiki/index.php";
    break;

  case "掲示板":
    $val3_url = "/bbs/index.php";
    break;

  case "ユーザ検索":
    $val3_url = "/user_search/index.php";
    break;

  default:
    $val3 = '';
}
 ?>

<div id="shortcut">
  <?php
  if ($val1 != '') {
    // code...
    echo <<<EOM
    <input type="button" value="$val1" onclick="window.location.href='$val1_url';">
EOM;
  }
  if ($val2 != '') {
    // code...
    echo <<<EOM
    <input type="button" value="$val2" onclick="window.location.href='$val2_url';">
EOM;
  }
  if ($val3 != '') {
    // code...
    echo <<<EOM
    <input type="button" value="$val3" onclick="window.location.href='$val3_url';">
EOM;
  }
   ?>
  <input type="button" value="SETTING" onclick="window.location.href='/shortcutsetting.php'">
</div>
