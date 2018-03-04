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
    $pdo = Access::getPDO("bbs");

    $statement = $pdo->prepare("SELECT * from user where ?=?");

    $result;
    switch($type){
      case "id":
        $statement = $pdo->query("SELECT * from user where id=".$parm);
        if(!$statement)exit;
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $this->id = $result['id'];
        $this->name = $result['name'];
        break;
      case "name":
        $statement = $pdo->query("SELECT * from user where name='".$parm."'");
        if(!$statement)exit;
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
      $this->block_until = DateTime::createFromFormat("Y-m-d H:i:s", $result['block_until']);
    }

    if(empty($this->name) || empty($this->id)){
      $this->name = "";
      $this->id = 0;
      $this->note = array();
      $this->point = 15;
      $this->block_until = new DateTime();
    }

  }

  //権限を表す文字列を返す
  public function getRole(){
    return Admins::getRole($this->id);
  }

  //ブロックされているか返す
  public function isBlocked(){
    date_default_timezone_set('Asia/Tokyo');
    $now = new DateTime('now');
    return $now < $this->block_until;
  }

  //色付きの名前を返す
  public function getDisplayName(){
    return self::makeDisplayName($this->name, $this->point);
  }

  //色付きの名前を返す
  public static function makeDisplayName($name, $point){
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

    return "<span style='color:{$color};'>{$name}</span>";
  }

  //データベースに情報を反映する
  public function push(){
    $pdo = Access::getPDO("bbs");

    $sql = "UPDATE `user` SET `name`=?,`note`=?,`point`=?,`block_until`=? WHERE `id`=?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($this->name, serialize($this->note), $this->point, $this->block_until->format("Y-m-d H:i:s"), $this->id));
  }

  //データベースからユーザー情報を引っ張ってくる
  public function pull(){
    $pdo = Access::getPDO("bbs");

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
      $this->block_until = DateTime::createFromFormat("Y-m-d H:i:s", $result['block_until']);
    }
  }

  //自動ログイン用トークンを生成
  public function createToken(){
    $pdo = Access::getPDO("bbs");

    //トークンが生成済みの場合は破棄
    self::destroyTokenById($this->id);

    //32桁のトークン
    $TOKEN_LENGTH = 16;
    $bytes = openssl_random_pseudo_bytes($TOKEN_LENGTH);
    $token = bin2hex($bytes);

    //トークンをデータベースに登録
    $sql = "INSERT INTO `login_token`(`userid`, `token`) VALUES (?,?)";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($this->id, $token));

    //トークンをクッキーに保存(有効期間は360日)
    setcookie('rememberme', $token, time()+60*60*24*360, '/');
  }

  //自動ログイン用トークンからユーザー情報を読み込んでUserを返す
  public static function readFromToken($token){
    $pdo = Access::getPDO("bbs");

    //トークンからユーザーIDを取得
    $sql = "SELECT * from login_token where token=?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($token));
    if(!$statement)return null;

    $userid = $statement->fetch(PDO::FETCH_ASSOC)['userid'];
    if(!$userid)return null;

    //ユーザーIDからUserを作成して返す
    $user = new User($userid);
    return $user;

  }

  //自動ログイン用トークンを破棄
  public static function destroyToken($token){
    $pdo = Access::getPDO("bbs");

    $sql = "DELETE from login_token where token=?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($token));

    setcookie('rememberme', '', time()-1024, '/');
  }
  //該当するユーザーの自動ログイン用トークンを破棄
  public static function destroyTokenById($id){
    $pdo = Access::getPDO("bbs");

    $sql = "DELETE from login_token where userid=?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($id));

    setcookie('rememberme', '', time()-1024, '/');
  }


}
