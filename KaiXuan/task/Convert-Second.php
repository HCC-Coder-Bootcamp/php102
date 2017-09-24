	<?php 
		$seconds= (int)readline ('How many Seconds?');
		$hour= (int)($seconds / 3600);
		$minutes= (int)($hour * 60) - (int) ($seconds / 60) ;
		$second= (int)$seconds % 60;
		echo $hour . 'Hours ' .  $minutes . 'Minutes' . $second . 'Seconds';
	 ?>