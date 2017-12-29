<?php
  session_start();

  if(!isset($_SESSION['name'])){
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    header("Location: /login/logout.php");
    exit;
  }
 ?>
