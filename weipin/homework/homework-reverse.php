<?php 

	$input = (int)readline('Input 5 digits number:' . PHP_EOL);

	$number5 = $input % 10;

	$number4 = (int)(($input % 100)/10);

	$number3 = (int)(($input % 1000)/100);

	$number2 = (int)(($input %10000)/1000);

	$number1 = (int)($input / 10000);

	$reverse = $number5*10000 + $number4*1000 + $number3*100 + $number2*10 + $number1;

	echo 'Reverse: ' . (string)$reverse;
 ?>