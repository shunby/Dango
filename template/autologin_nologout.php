<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];

require_once $webroot."/core/user_util.php";
session_start();
check();

function check(){
  if(!isset($_SESSION['user'])){
    if(isset($_COOKIE['rememberme'])){
      $token = $_COOKIE['rememberme'];
      $user = User::readFromToken($token);
      if(!$user){
        return;
      }
      $_SESSION['user'] = $user;
      //入場ログ
      $pdo = Access::getPDO("bbs");
      $sql = "INSERT into enter_log (userid, ipaddress, type) VALUES (?,?, ?)";
      $statement = $pdo->prepare($sql);
      $statement->execute(array($_SESSION['user']->id, $_SERVER['REMOTE_ADDR'], "auto_login"));
      return;
    }
  }
}
