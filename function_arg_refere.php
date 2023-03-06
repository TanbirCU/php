<!-- function argument by reference -->

<?php

    function hello(& $str){
        $str .="and where are you going";
    }

    $str="hi how are you";
    hello($str);
    echo $str;

?>