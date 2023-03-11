<!-- PHP Array_Values & Array_Unique -->

<?php
 $color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"green");
 
//  $newarray=array_values($color);
$newarray=array_unique($color);
echo "<pre>";
print_r($newarray);
echo "<pre>";


?>