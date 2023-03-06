<?php
/*
 $colors=array("green",20,"blue",15.45,"red");

 echo $colors[2]."<br>";   
 echo $colors[1]."<br>";   
 echo $colors[3]."<br>";   
*/
/*
$colors=["red",20,"green",34.54,"blue"];

echo "<pre>";
print_r($colors);
echo "<pre>";

*/

$colors=["grren","red","yellow",20,53.36];
echo "<ul>";
for($i=0; $i<5;$i++){
    echo "<li> $colors[$i] </li>";
}
echo "<ul>";
?>