<?php

$radius = readline('Please insert a radius' . PHP_EOL);

$perimeter = (2*3.14*$radius);

$area = (3.14*sqrt($radius));

echo "the perimeter of circle is " . ($perimeter) . " cm" . PHP_EOL;

echo "the area of circle is " . number_format((float)$area, 2, '.', '') . " cm" . PHP_EOL;  

?>

