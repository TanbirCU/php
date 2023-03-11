<!-- PHP Array_Reduce Function -->
<?php
    function myfunction($n,$m){
        return $n.'-'.$m;
    };



    $a=['orange','banana','apple'];
    $newArray=array_reduce($a,'myfunction' ,'heloo');

    echo "<pre>";
    print_r($newArray);
    echo"<pre>";


?>