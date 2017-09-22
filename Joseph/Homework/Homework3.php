<?php 

$inputRadius = (float)readline('Please enter the radius of the circle.' . PHP_EOL);

$π = (float)3.14;

$perimeter = 2 * ($π * $inputRadius);
$theArea   = $π * ($inputRadius * $inputRadius);

echo "The perimeter of the circle is " . (string)number_format((float)$perimeter, 2, '.', '') . "cm ." .  PHP_EOL . "And the area of the circle is " . (string)number_format((float)$theArea, 2, '.', '') . "cm^2 ." . PHP_EOL;

 ?>