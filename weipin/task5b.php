<?php

	$rate = (float)readline("MYR to USD rate 4.19, MYR" . PHP_EOL);

	$total = $rate / 4.19;

	echo "USD " . number_format((string)$total, 2, '.', '');

?>