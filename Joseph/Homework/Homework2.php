<?php 

$AoD = (float)readline('How much is your deposit? RM' . PHP_EOL);

$YoD = (int)readline('And now, how many years?' . PHP_EOL);

$interestRate = (float)readline('What is the interest rate?' . PHP_EOL);

$totalAmount = $AoD * pow((1 + $interestRate), $YoD);
$totalInterestGain = $totalAmount - $AoD;

echo "The total interest gain of deposit is RM" . (string)number_format((float)$totalInterestGain, 2, '.', '') . PHP_EOL . "The total amount of deposit is RM" . (string)number_format((float)$totalAmount, 2, '.', '');
 ?>