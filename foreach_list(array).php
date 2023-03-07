<!-- PHP Foreach Loop with List  -->

<?php
     $emp=[
        [1,"tanvir","php","12345"],
        [2,"ahmed","java","97345"],
        [3,"akas","js","198245"],
        [4,"tarek","python","982562"]
    ];


    echo "<table border='2px'>";
    foreach($emp as list($id,$name,$designation,$salary)){
        
        echo "<tr>
                <td$id</td>
                <td>$name</td>
                <td> $designation</td>
                <td> $salary </td>";
    }
    echo "<table>";
?>