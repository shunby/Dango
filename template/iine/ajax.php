<?php
$count = file_get_contents('ajax.txt');
if (isset($_COOKIE['good'])) {
  # code...
  echo $count;
}else {
  # code...
  setcookie('good','1');
  $count = $count+1;
  echo $count;
  file_put_contents('ajax.txt',$count);
}
 ?>
