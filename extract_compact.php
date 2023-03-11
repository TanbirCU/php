<!-- PHP Array Extract & Compact Function -->

<?php
    $color=array('a'=>'red','b'=>'green','c'=>'yellow');

    extract($color);

    echo "value of a: $a <br>";
    echo "value of a: $b <br>";


?>