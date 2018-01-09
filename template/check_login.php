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
          //header("Location: /login/logout.php");
          echo print_r($user);
          exit;
        }
        $_SESSION['user'] = $user;
        return;
      }
      header("Location: /login/logout.php");
      exit;
    }else{
       $_SESSION['user']->pull();
       if($_SESSION['user']->isBlocked()){
         header("Location: /login/logout.php");
         exit;
       }
    }
  }
