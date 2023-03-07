<?php
    function myName($number){
        if($number<5){
            echo "$number<br/>";
            myName($number+1);
            
        }
       
    }
    myName(1); 
    

?>