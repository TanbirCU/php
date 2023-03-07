
<!-- ------multidimentional array--------- -->
<?php
    $emp=[
        [1,"tanvir","php","12345"],
        [2,"ndhgj","java","97345"],
        [3,"dhhhshj","js","198245"],
        [4,"rsshh","python","982562"]
    ];
/*
    for($row=0;$row<4;$row++){
        for($col=0;$col<4;$col++){
            echo $emp[$row][$col]." ";
        }
        echo "<br>";
    }

*/
echo "<table border='3px' cellpadding='3px' cellspacing='3px'>";
echo "<tr>
        <th>Employee id</th>
        <th>Employee name</th>
        <th>Employee designation</th>
        <th>Employee salary</th>

    </tr>

";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>