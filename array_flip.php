<!-- PHP Array_Flip & Array_Change_Key_Case -->

<?php
    $a=array(
        "tanvir"=>   10,
        "bill"=>   20,
        "joe"=>   30,
    );
// $newAraay=array_flip($a);

$newAraay=array_change_key_case($a,CASE_UPPER);

echo "<pre>";
print_r($newAraay);
echo "<pre>";

?>