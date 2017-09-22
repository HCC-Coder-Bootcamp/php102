<?php 

	$radius = readline("Radius of circle:" . PHP_EOL);

	$perimeter = 3.14 * $radius * 2;

	$area = 3.14 * $radius * $radius;

	echo 'Perimeter:' . (string)$perimeter . PHP_EOL . 'Area:' . (string)$area;

 ?>