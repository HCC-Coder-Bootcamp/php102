<?php 

	$input_days = (int)readline('How many days?' . PHP_EOL);

	$year = (int)($input_days / 365);

	$month = (int)(($input_days % 365) / 30);

	$day = (int)(($input_days % 365) % 30);

	echo (string)$year . " years " . (string)$month . " months " . (string)$day . " days" . PHP_EOL; 

 ?>