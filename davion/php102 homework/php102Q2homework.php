<?php

$deposit = readline('deposit' . PHP_EOL);

echo $deposit . PHP_EOL;

$year = readline('P.A' . PHP_EOL);

echo $year. PHP_EOL;


$gain1=$year*0.041;

echo $gain1 . PHP_EOL;

$deposit1=($deposit*$gain1)+$deposit;

echo $deposit1. PHP_EOL;

?>