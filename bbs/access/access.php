<?php

class Access{

  public $dsn;
  public $username;
  public $password;

  public function __construct($dbname){
    throw new Exception("非推奨の関数");

    $hoststr = "";

    if(gethostname() == "sv1.webcrow-php.netowl.jp"){
      $this->username = "paysestbbs_taro";
      $this->password = "wuguojun2002";
      $hoststr = "host=mysql1.webcrow-php.netowl.jp";
      $dbname = "paysestbbs_".$dbname;

    }else{
      $this->username = "root";
      $this->password = "";
      $hoststr = "";
    }
    $this->dsn = "mysql:dbname=".$dbname.";".$hoststr;
  }

  public static function getPDO($dbname){
    $hoststr; $username; $password;

    if(gethostname() == "sv1.webcrow-php.netowl.jp"){
      $username = "paysestbbs_taro";
      $password = "wuguojun2002";
      $hoststr = "host=mysql1.webcrow-php.netowl.jp";
      $dbname = "paysestbbs_".$dbname;

    }else{
      $username = "root";
      $password = "";
      $hoststr = "";
    }
    $dsn = "mysql:dbname=".$dbname.";".$hoststr;

    $pdo = new PDO($dsn, $username, $password);
  }




}
?>
