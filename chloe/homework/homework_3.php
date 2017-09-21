<?php 

	$radius = (int)readline("radius" . PHP_EOL);
 
 	$π = 3.14;

 	$perimeter = 2 * ($π * $radius);

 	$area = $π * $radius * $radius;

 	echo "Perimeter: " . $perimeter . "cm" . PHP_EOL . "Area: " . $area . "cm2" ;

 ?>