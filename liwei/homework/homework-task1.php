<?php

$days = (int)readline('Please insert your days' . PHP_EOL);

$year =  (string)((int)($days / 365));

$month = (string)(($days - ($year*365)) / 30);

$day = (string)($days - ($year*365))-((int)$month*30);

echo "It's " . ((string)$year) . "year" . ((int)$month). "month" . ((string)$day). "day" . PHP_EOL; 

?>