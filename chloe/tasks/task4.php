

 	<?php 

 	$taskSeconds = (int)readline('How many seconds'. PHP_EOL);

 	
	$Hour = (int)($taskSeconds / 3600);
 	
 	$Minutes = (int)(($taskSeconds % 3600) / 60);

	$Seconds = (int)($taskSeconds % 60);

	echo (int)(string)$Hour . 'hour '. $Minutes . 'min ' . $Seconds . 'sec ' . PHP_EOL;
 	
  	?>