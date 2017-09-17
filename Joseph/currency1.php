<?php 

$inputUSD = (float)readline('How much money? USD' . PHP_EOL);

$currencyRate = 4.19;

$totalAmount = ($inputUSD * $currencyRate);

echo "MYR " . number_format((float)$totalAmount, 2, '.', '');

 ?>