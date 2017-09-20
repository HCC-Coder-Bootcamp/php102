<?php 

	//rate = 4.19

	$input = (int)readline('MYR to USD?'. PHP_EOL);

	$rate = 4.19;

	$USD = $input / $rate;

	echo 'USD'. number_format($USD,2,",",".");

 ?>