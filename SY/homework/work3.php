<?php 

	$radius = (float)readline('Please enter the radius of circle. ' . PHP_EOL);

	$Pi = 3.14;

	$area = $Pi *($radius * $radius);
	$perimeter = 2 *($Pi * $radius) ;

	echo "Perimeter of the circle is $perimeter cm ." . PHP_EOL ."Area of the circle is $area cm^2 ." . PHP_EOL . '';
	
 ?>