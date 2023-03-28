<?php

function findDivisors($number) {
  $divisors = array();
  
  for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
      $divisors[] = $i;
    }
  }
  
  return $divisors;
}

$number = 24;
$divisors = findDivisors($number);


echo "The divisors of $number are: ";
foreach ($divisors as $divisor) {
  echo "$divisor ";
}

?>