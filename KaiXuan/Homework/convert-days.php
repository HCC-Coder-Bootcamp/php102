<?php 
	$day= (int) readline('How many days? = ');
	$years= (int) ($day/365);
	$months= (int) ($day/30) - (int) ($years*12);
	$days= (int) $day - $years*365 - $months*30;
	echo (int) $years . 'years' . $months . "months" . $days . 'days';
?>
