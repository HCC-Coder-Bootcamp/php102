<?php

$days = readline('Gimme know the days' . PHP_EOL);
$day1 = $days%365%30;

echo $day1 . PHP_EOL;


(int)$months = readline('Gimme know the month' . PHP_EOL);
(int)$month1 = (int)($months%365/30);

echo $month1 . PHP_EOL;


(int)$years = readline('Gimme know the year' . PHP_EOL);
(int)$year1 = (int)($years/365);

echo $year1 . PHP_EOL;


