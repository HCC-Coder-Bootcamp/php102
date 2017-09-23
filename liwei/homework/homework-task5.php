<?php

$x1 = readline('insert position x1 = ');

$y1 = readline('insert position y1 = ');

$x2 = readline('insert position x2 = ');

$y2 = readline('insert position y2 = ');

echo "the distance of coordinate is " .(sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2))) . PHP_EOL;

?>