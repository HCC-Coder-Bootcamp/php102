<?php 

	$taskHour =(int)readline('How many hour?'. PHP_EOL);
	$taskMinutes =(int)readline('How many minutes?'. PHP_EOL);
	$hour = $taskHour * 60;
	echo (string) $hour + $taskMinutes;


 ?>