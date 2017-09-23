<?php

$deposit = readline('Insert your total deposit please' . PHP_EOL);

$gain = (($deposit*4.1) / 100);

$amount = ($deposit + $gain);

echo "Your gains is " . number_format((float)$gain, 2, '.', '') . PHP_EOL; 

echo "Your total amount is RM " . number_format((float)$amount, 2, '.', '') . PHP_EOL; 

?>