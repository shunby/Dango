<?php

class Access{

  public $dsn;
  public $username;
  public $password;

  public function __construct($dbname){
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


}
?>
