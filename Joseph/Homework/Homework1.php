<?php 

$inputDays = (int)readline('How many days?' . PHP_EOL);

$year = (int)($inputDays / 365);

$leftMonths = (int)($inputDays / 30);
$divideMonths = (int)($leftMonths % 12);
$totalMonths = (int)($divideMonths % 12);

$leftDays = (int)($inputDays % 365); //56 days
$totalDays = (int)($leftDays % 30); //26 days

echo "There is " . (string)$year . " year " . (string)$totalMonths . " months " . (string)$totalDays . " days" . PHP_EOL; 

 ?>