<?php
$count = file_get_contents('09.txt');
if (isset($_COOKIE['good09'])) {
  # code...
  echo $count;
}else {
  # code...
  setcookie('good09','1');
  $count = $count+1;
  echo $count;
  file_put_contents('09.txt',$count);
}
 ?>
