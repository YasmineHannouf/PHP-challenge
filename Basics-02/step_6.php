<?php
function sumOfDigits($num) {
  $sum = 0;
  $n = strlen($num);
  for ($i = 0; $i < $n; $i++) {
    $sum += $num[$i];
  }
  return $sum;
}

echo sumOfDigits('54321');

?>
