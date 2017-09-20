<?php 

	$inputDays = (int)readline('Please enter you days. ' . PHP_EOL);

	$yrs = (int)($inputDays / 365);
	$mth = (int)(($inputDays % 365) / 30);
	$day = (int)(($inputDays % 365) % 30);

	echo (int)(string)'There have ' . $yrs . ' Years ' . $mth . ' Month' . ' and ' . $day . ' days .' . PHP_EOL;


 ?>