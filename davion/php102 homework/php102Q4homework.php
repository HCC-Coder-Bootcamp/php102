<?php  

$total = readline('total amount' . PHP_EOL);

echo $total . PHP_EOL;

(int)$hundred = (int)$total/100;

echo (int)$hundred . PHP_EOL;





$x1 = readline('x1' . PHP_EOL);
$x2 = readline('x2' . PHP_EOL);
$y1 = readline('y1' . PHP_EOL);
$y2 = readline('y2' . PHP_EOL);

(int)$distances = (sqrt((($x2-$x1)*($x2-$x1))-(($y2-$y1)*($y2-$y1))));

echo (int)$distances . PHP_EOL;

?>