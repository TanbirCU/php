<?php
    $hello=[
        "1st"=>"red",
        "2nd"=>"green",
        "3rd"=>"yellow",
        "4th"=>"light",
    ];

    $newarray=array_keys($hello);

    // print_r($newarray);

    if($newarray){
        echo "yes key exist";
    }else{
        echo "key doesn't exist";
    }

?>