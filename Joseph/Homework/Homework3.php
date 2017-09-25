<?php 

$inputRadius = (float)readline('Please enter the radius of the circle.' . PHP_EOL);

$perimeter = 2 * (M_PI * $inputRadius);
$theArea   = M_PI * ($inputRadius * $inputRadius);

echo "The perimeter of the circle is " . (string)number_format((float)$perimeter, 2, '.', ',') . "cm ." .  PHP_EOL . "And the area of the circle is " . (string)number_format((float)$theArea, 2, '.', ',') . "cm^2 ." . PHP_EOL;

 ?>