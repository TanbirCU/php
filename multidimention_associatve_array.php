<!-- ---------PHP Multidimensional Associative Array--------- -->

<?php
    $marks=[

        "tanvir"=>[
            "math"=>"67",
            "physics"=>"87",
            "chemistry"=>"97",
        ],
        "ahmed"=>[
            "math"=>"77",
            "physics"=>"47",
            "chemistry"=>"57",
        ],
        "sakil"=>[
            "math"=>"97",
            "physics"=>"77",
            "chemistry"=>"47",
        ],
    ];
/*
    echo "<pre>";

print_r($marks);
echo "<pre>";
*/
echo "<table border='1px'>";
foreach($marks as $key=> $v1){
    echo "<tr>
     <td>$key</td>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";


    }
    echo "</td>";
}
echo "<table>";


?>