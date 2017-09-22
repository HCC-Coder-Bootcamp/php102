<?php 

	$seconds = (int)readline("How many seconds?" . PHP_EOL);

	$totalSeconds = $seconds % 60;//second

	$func = $seconds - $totalSeconds;

	$func2 = $func % 3600;

	$totalMinutes = $func2 / 60;//minutes

	$totalHour = $func / 3600;//hour

	echo "Answer is " . (string)(int)($totalHour) . "Hour " . (string)($totalMinutes) . "Minutes " . (string)($totalSeconds) . "Seconds";

?>