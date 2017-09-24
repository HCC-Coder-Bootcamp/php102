<?php

$digits = readline('Gimme your number ?' . PHP_EOL);

$tenthousand = ((($digits%10-$digits%1)/1)*10000);
$thousand = ((($digits%100-$digits%10)/10)*1000);
$hundred = ((($digits%1000-$digits%100)/100)*100);
$ten = ((($digits%10000-$digits%1000)/1000)*10);
$one = ((($digits%100000-$digits%10000)/10000)*1);

echo $tenthousand + $thousand + $hundred + $ten + $one;