<?php
  session_start();

  if(!isset($_SESSION['name'])){
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    header($webroot."/login/logout.php");
    exit;
  }
 ?>
