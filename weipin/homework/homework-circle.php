<?php 

	$radius = readline("Radius of circle:" . PHP_EOL);

	$perimeter = 3.14 * $radius * 2;

	$area = 3.14 * $radius * $radius;

	echo 'Perimeter of circle: ' . (string)$perimeter . 'cm' . PHP_EOL . 'Area of circle: ' . (string)$area . 'cm2';

 ?>