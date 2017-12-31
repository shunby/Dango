<?php
  session_start();

  if(!isset($_SESSION['user'])){
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    header("Location: /login/logout.php");
    exit;
  }
 ?>
