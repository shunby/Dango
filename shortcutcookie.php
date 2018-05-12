<?php



if (@$_POST['submit']) {
  // code...
  setcookie('shortcut[1]','',time()-1);
  setcookie('shortcut[2]','',time()-1);
  setcookie('shortcut[3]','',time()-1);
  $checkbox_arr = $_POST['checkbox'];
  $count = count($checkbox_arr);
  for ($i=0; $i < $count; $i++) {
    // code...
    $o = $i + 1;
    setcookie("shortcut[$o]","$checkbox_arr[$i]",time()+60*60);
  }
  //var_dump($_COOKIE['shortcut']);
}
header("Location: /index.php");
exit();




 ?>
