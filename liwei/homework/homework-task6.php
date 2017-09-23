<?php

$number = (int)readline('please input the number you want to reverse ' . PHP_EOL);

$number1 = (int)(((($number % 10000) % 1000) % 100) % 10);

$number2 = (int)(((($number % 10000) % 1000) % 100) / 10);

$number3 = (int)((($number % 10000) % 1000) / 100);

$number4 = (int)(($number % 10000) / 1000);

$number5 = (int)($number / 10000);

echo "The reverse answer is " . ((string)$number1 . $number2 . $number3 . $number4 . $number5) . PHP_EOL; 

?>
