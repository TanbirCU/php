<?php
/*
    for($a=1;$a<=10;$a++){
        if($a==3){
            // echo "no is ".$a;
            // continue;

            break;
        }
        echo $a;

    }

*/

for ($i = 0; $i <= 100; $i += 5) {
    if ($i == 25 || $i == 40 || $i == 50) {
      continue;
    }
    echo $i . "<br>";
  }
?>