<?php 

	//rate:4.19
	$input = (int)readline('USD to MYR?'. PHP_EOL);

	$rate = 4.19;

	$MYR = $input * $rate;

	echo (string)'Rm'. $MYR . PHP_EOL;


 ?>