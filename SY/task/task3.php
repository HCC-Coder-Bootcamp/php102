<?php 

$input_hour = (int)readline('How many hour?' . PHP_EOL);
$input_min = (int)readline('how many minutes?' . PHP_EOL);

$hour = $input_hour * 60;
$min = $input_min;

$total_minutes = $hour + $min;

echo $total_minutes . PHP_EOL .'';

