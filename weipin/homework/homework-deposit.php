<?php 

	echo "Interest Rate 4.1% P.A." . PHP_EOL;

	$rate = readline("Amount of deposit:" . PHP_EOL);

	$years = readline("Years of deposit:" . PHP_EOL);

	$count = $rate * 0.041;

	$count1 = $count * $years;

	$count2 = $rate + $count1;//total deposit

	echo PHP_EOL . 'Total interest gain of deposit: ' . (string)$count1 . PHP_EOL . 'Total amount of deposit: ' . (string)$count2;

 ?>