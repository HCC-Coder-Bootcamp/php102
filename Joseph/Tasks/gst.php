<?php 

$inputTotal = (float)readline('How much do you spend? MYR' . PHP_EOL);

$GST = 0.06;

$gstAmount = (float)($inputTotal * $GST);

echo "The GST is " . number_format((float)$gstAmount, 2, '.', '') . PHP_EOL;

$totalAmount = (float)($inputTotal + $gstAmount);

echo "The total amount is " . number_format((float)$totalAmount, 2, '.', '');

 ?>