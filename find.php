<?php
 $a="hello hello hello, hi how are you hello";
 $word="hello";
 $wordCount = str_word_count($a,$word);
 if($word === $wordCount){
    echo "here $word we find $wordcount";
 }else{
    echo "no word match";
 }



?>