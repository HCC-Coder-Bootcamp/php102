<?php 

$inputDays = (int)readline('How many days?' . PHP_EOL);

$year   = (int)($inputDays / 365);

$months = (int)(($inputDays % 365) / 30);

$days   = (int)(($inputDays % 365) % 30);

echo "There is " . (string)$year . " year " . (string)$months . " months " . (string)$days . " days" . PHP_EOL; 

 ?>