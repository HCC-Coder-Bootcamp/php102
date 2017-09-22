<?php 

echo "Please give me 2 sets of number, so that I could give you the distance between them." . PHP_EOL;

$X1 = (int)readline('X1 =' . PHP_EOL);
$Y1 = (int)readline('Y1 =' . PHP_EOL);
$X2 = (int)readline('X2 =' . PHP_EOL);
$Y2 = (int)readline('Y2 =' . PHP_EOL);

$theDistance = (float)sqrt(pow(($X2 - $X1), 2) + pow(($Y2 - $Y1), 2));

echo "The answer is " . (string)$theDistance . "." . PHP_EOL;

 ?>