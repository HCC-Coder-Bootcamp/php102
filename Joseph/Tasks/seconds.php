<?php 

$seconds = (float)readline('How many seconds?' . PHP_EOL);

$leftSeconds = (int)$seconds % 60; //the seconds that is left over
$totalSeconds = (int)$seconds - $leftSeconds;

$leftMinutes = (int)$totalSeconds % 3600; //the minutes that is left over
$totalMinutes = (int)$leftMinutes / 60;

$hour = (int)($totalSeconds / 3600);

echo "There is " . (string)$hour . " hour " . (string)$totalMinutes . " minutes " . (string)$leftSeconds . " seconds" . PHP_EOL; 

 ?>