<?php
    $str="hello world";

    // echo convert_uuencode($str);

   $encodString= convert_uuencode($str);
   echo $encodString;

   $decodstring=convert_uudecode($encodString);
   echo $decodstring;

?>