<?php 

	$input_digits = (int)readline("Enter 5 digits..." . PHP_EOL);

	$one = ($input_digits / 10000)%10;

	$ten = (($input_digits / 1000)%10)*10;

	$hundred = (($input_digits / 100)%10)*100;

	$thousand = (($input_digits / 10)%10)*1000;

	$tenthousand = ($input_digits %10)*10000;

	$Answer = $one + $ten + $hundred + $thousand + $tenthousand;

	echo "Answer: ". (string)$Answer . PHP_EOL;

 ?>