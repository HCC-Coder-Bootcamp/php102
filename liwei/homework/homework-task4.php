<?php

$amount = readline('Please insert an amount' . PHP_EOL);

$amount100 = (int)($amount / 100);

$amount50 = (int)(($amount-$amount100*100) / 50);

$amount20 = (int)(($amount-$amount100*100-$amount50*50) / 20);

$amount10 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20) / 10);

$amount5 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10) / 5);

$amount2 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10-$amount5*5) / 2);

$amount1 = (int)($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10-$amount5*5-$amount2*2);

echo "the amount of RM100 is " .((string)$amount100) . " pcs" . PHP_EOL; 

echo "the amount of RM50 is " . ((string)$amount50) . " pcs" . PHP_EOL; 

echo "the amount of RM20 is " . ((string)$amount20) . " pcs" . PHP_EOL; 

echo "the amount of RM10 is " . ((string)$amount10) . " pcs" . PHP_EOL; 

echo "the amount of RM5 is " . ((string)$amount5) . " pcs" . PHP_EOL; 

echo "the amount of RM2 is " . ((string)$amount2) . " pcs" . PHP_EOL; 

echo "the amount of RM1 is " . ((string)$amount1) . " pcs" . PHP_EOL; 

?>