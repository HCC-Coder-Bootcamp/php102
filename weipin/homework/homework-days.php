<?php 

	$days = (int)readline("Days?" . PHP_EOL);

	$totalYears = $days / 365;

	$funcMonth = $days % 365;

	$totalMonths = $funcMonth / 30;

	$totalDays = $funcMonth % 30;

	echo 'Answer is ' . (string)(int)$totalYears . 'years ' . (string)(int)$totalMonths . 'months ' . (string)(int)$totalDays . 'days ';

 ?>