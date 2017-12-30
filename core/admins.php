<?php
class Admins{
  public static $admin_list;

  public static function getAdmins(){
    if(!isset($admin_list)){
      $admin_data = new DOMDocument("1.0", "UTF-8");//全ブログのいいねデータ
      $admin_data->preserveWhiteSpace = false;
      $admin_data->formatOutput = true;
      $admin_data->load($_SERVER['DOCUMENT_ROOT']."/core/admin.xml");

      $admin = $admin_data->getElementsByTagName("admin");
      foreach($admin as $member){
        $admin_list[$member->nodeValue.""] = $member->getAttribute("level");
      }
    }
    return $admin_list;
  }

  public static function getRole($id){
    $admins = self::getAdmins();
    if(key_exists($id, $admins)){
      $role = "???";
      switch($admins[$id]){
        case "admin":
          $role = "運営";
          break;
        case "maid_leader":
          $role = "メイド長";
          break;
        case "maid_bbs";
          $role = "掲示板メイドさん";
          break;
        case "maid_broadcast":
          $role = "お知らせメイドさん";
          break;
        case "maid_writer":
          $role = "ライターメイドさん";
          break;
      }
      return $role;
    }else{
      return "一般ユーザー";
    }
  }
}
 ?>
