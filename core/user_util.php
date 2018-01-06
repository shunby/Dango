<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bbs/access/access.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/core/admins.php';

class User{
  public $id;
  public $name;
  public $point;
  public $block_until;
  public $note;


  public function __construct($parm, $type="id"){
    $pdo;
    $ac = new Access("bbs");
    if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
    else $pdo = new PDO($ac->dsn, $ac->username);

    $statement = $pdo->prepare("SELECT * from user where ?=?");

    $result;
    switch($type){
      case "id":
        $statement = $pdo->query("SELECT * from user where id=".$parm);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $this->id = $result['id'];
        $this->name = $result['name'];
        break;
      case "name":
        $statement = $pdo->query("SELECT * from user where name='".$parm."'");
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $this->name = $result['name'];
        $this->id = $result['id'];
        break;
    }

    if(empty($result['note'])){
      $this->note = array();
    }else{
      $this->note = unserialize($result['note']);
    }

    $this->point = $result['point'];

    if(!isset($result['block_until'])){
      $this->block_until = new DateTime();
    }else{
      $this->block_until = new DateTime($result['block_until']);
    }

  }

  public function getRole(){
    return Admins::getRole($this->id);
  }

  public function isBlocked(){
    $now = new DateTime();


    $interval = $now->getTimeStamp() - $this->block_until->getTimeStamp();

    return $interval < 0;
  }

  public function getDisplayName(){
    $point = $this->point;

    $color = "";

    if($point <= 5){
      $color = "red";
    }else if($point <= 10){
      $color = "rgb(255,102,0)";//橙
    }else if($point <= 15){
      $color = "black";
    }else if($point <= 30){
      $color = "green";
    }else if($point <= 45){
      $color = "rgb(51,153,255)";
    }else{
      $color = "fuchsia";//紫
    }

    return "<span style='color:{$color};'>{$this->name}</span>";
  }

  public function push(){
    $pdo;
    $ac = new Access("bbs");
    if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
    else $pdo = new PDO($ac->dsn, $ac->username);

    $sql = "UPDATE `user` SET `name`=?,`note`=?,`point`=?,`block_until`=? WHERE `id`=?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($this->name, serialize($this->note), $this->point, $this->block_until->format("Y-m-d H:i:s"), $this->id));
  }

  public function pull(){
    $pdo;
    $ac = new Access("bbs");
    if($ac->username != "")$pdo = new PDO($ac->dsn, $ac->username, $ac->password);
    else $pdo = new PDO($ac->dsn, $ac->username);

    $statement = $pdo->query("SELECT * from user where id=".$this->id);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $this->id = $result['id'];
    $this->name = $result['name'];

    if(empty($result['note'])){
      $this->note = array();
    }else{
      $this->note = unserialize($result['note']);
    }

    $this->point = $result['point'];

    if(!isset($result['block_until'])){
      $this->block_until = new DateTime();
    }else{
      $this->block_until = new DateTime($result['block_until']);
    }
  }


}
