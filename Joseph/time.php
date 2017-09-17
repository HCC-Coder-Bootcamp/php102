<?php 

$inputHour = (float)readline('How many hours?' . PHP_EOL); //(float) is to make the decimal point
$inputMinute = (float)readline('How many minutes?' . PHP_EOL);

$totalHour = $inputHour * 60; //This move is convert the hour to minutes
$totalMinute = $inputMinute;

$totalTime = $totalHour + $totalMinute;

echo "The answer is $totalTime minutes.";

 ?>