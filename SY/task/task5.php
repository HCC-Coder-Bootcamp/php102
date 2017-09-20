<?php 

echo 'Hi, i\'m currency converter,i can help you to convert USD dollar to MYR ! ';

$USD_input = (float)readline('So how much USD you have ?' . PHP_EOL);

$MYR = ($USD_input * 4.19);

echo (string)'MYR' . $MYR . PHP_EOL;

