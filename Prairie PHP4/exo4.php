<?php
for ($i = 1;$i<101;$i++){
  if ($i%3==0 && $i%5==0) {
    echo "Fizz Buzz";# code...
  }elseif($i%3==0){
  echo "Fizz";} elseif ($i%5==0) {
    echo "Buzz";
  }else echo $i;
  echo " ";
  }
 ?>
