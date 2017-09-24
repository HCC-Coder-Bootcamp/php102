<?php

echo 'The gain of deposit is 4.1% . ' . PHP_EOL;

$deposit = readline('Insert your total deposit please RM' . PHP_EOL);

$year = readline('Insert the year year want please' . PHP_EOL);

$gain = (($deposit*4.1) / 100)*$year;

$amount = ($deposit + $gain);

echo "Your gains is RM " . number_format((float)$gain, 2, '.', '') . PHP_EOL; 

echo "Your total amount is RM " . number_format((float)$amount, 2, '.', '') . PHP_EOL; 

?>