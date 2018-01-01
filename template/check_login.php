<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];

  require_once $webroot."/core/user_util.php";
  session_start();

  if(!isset($_SESSION['user'])){
    header("Location: /login/logout.php");
    exit;
  }else{
     $_SESSION['user']->pull();
     if($_SESSION['user']->isBlocked()){
       header("Location: /login/logout.php");
       exit;
     }
  }
