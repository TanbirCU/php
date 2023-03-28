<?php
// $t=3;
// for($i=1; $i<=$t; $i++){
//     echo "$t";
//     if($n%2 == 0){
//         echo "even"."<br>";
//     }else{
//         echo "odd";
//     }

// }



if(isset($_POST['submit'])) {
    $number = $_POST['number'];
    if($number % 2 == 0) {
        echo "$number is even";
    } else {
        echo "$number is odd";
    }
}




?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">Enter number 1:</label>
    <input type="number" name="number" id="number">
    <input type="submit" name="submit" value="Check">
</form>