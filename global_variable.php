<?php
    $x=20;
    $y=30;

    function test(){
        
        global $x,$y;
        $x=$x+$y;
    }
    test();
    echo $x;

?>