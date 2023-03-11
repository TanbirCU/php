<!-- compact  -->


<?php
    $firstName="tanvir";
    $lastName="ahmed";
    $age="23";
    $gender="male";
    $country="bangladesh";

    $info=compact("firstName","lastName","age","gender", "country");

    echo "<pre>";
    print_r($info);
    echo "<pre>";
    


?>