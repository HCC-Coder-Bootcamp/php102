<?php 

$inputMYR = (float)readline('How much money? MYR' . PHP_EOL);

$currencyRate = 4.19;

$totalAmount = ($inputMYR / $currencyRate);

echo "USD " . number_format((float)$totalAmount, 2, '.', '');

 ?>