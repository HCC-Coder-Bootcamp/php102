<?php 

	$convertHour = (int)readline('How many hour?' . PHP_EOL);

	$convertMinutes = (int)readline('How many minutes?' . PHP_EOL);

	$totalTime = $convertHour * 60;

	echo "Answer is " . (string)($totalTime + $convertMinutes) . " minutes" . PHP_EOL;

?>