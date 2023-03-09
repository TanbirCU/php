

<?php
//  $new = array();


// for ($row = 0; $row < 5; $row++) {
//     for ($col = 0; $col < 5; $col++) {
//       echo  $new [$row][$col] = $row + $col + 1;
//     }
//     echo "<br>";
// }
for ($row = 1; $row <= 5; $row++) {
    for ($col = $row; $col <$row+5; $col++) {
      echo  $col;
    }
    echo "<br>";
}

?> 
