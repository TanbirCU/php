
<!-- found vowel in a string & count that -->
<?php
$x = "umbrela";
$vowels = Array('a','e','i','o','u');

for ($i=0;$i<strlen($x);$i++)
{
    for ($j = 0;$j<5;$j++)
        if ($x[$i] == $vowels[$j])
        {
            $total++;
            break;
        }
}
echo $total;

/* <?php
$string = "Hello, World!";
$vowels = array("a", "e", "i", "o", "u");
$total = 0;
foreach(str_split(strtolower($string)) as $char) {
    if(in_array($char, $vowels)) {
        $total++;
    }
}
echo  $total;
*/

/*
<?php
$string = "Hello World!";
$vowels = 0;

for ($i = 0; $i < strlen($string); $i++) {
 $char = strtolower($string[$i]);
   
    if ( $char == 'a' || $char == 'e' ||  $char == 'i' ||  $char == 'o' ||  $char == 'u') {
        $vowels++;
    }
}

echo $vowels;


?> 
*/

?> 

?> 