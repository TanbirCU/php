<!-- PHP Array In_array & Array_search Function  -->

<?php

    $food=array('orange','apple','banana','grapes');
    

    // echo in_array('apple',$food);

    // echo array_search('banana',$food);
    if(in_array('orange',$food)){
        echo "yes,we got it";
    }else{
        echo "there are no match";
    }

?>