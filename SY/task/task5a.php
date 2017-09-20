<?php 

echo 'Hi,me again ! Now i can help you convert MYR to USD dollar ! ';

$MYR_input = (float)readline('So how much MYR you have ?' . PHP_EOL);

$USD = ($MYR_input / 4.19);

echo 'USD' . number_format($USD, 2, '.', ',') . PHP_EOL;
//number format shu zi ge shi (xiaoshudian or douhao)


