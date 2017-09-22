<?php 

	$rate = (float)readline("USD to MYR rate 4.19, USD: " . PHP_EOL);

	$total = $rate * 4.19;

	echo "MYR " . number_format((string)$total, 2, '.', '');

?>