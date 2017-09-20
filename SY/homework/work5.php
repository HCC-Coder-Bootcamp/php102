<?php 

echo 'Im tired, no more introduce.Give me the points, i give u ans.' . PHP_EOL . '';

 	$X1 = (int)readline('X1 = ');
 	$Y1 = (int)readline('Y1 = ');
 	$X2 = (int)readline('X2 = ');
 	$Y2 = (int)readline('Y2 = ');


 	$distance = sqrt(pow(($X2 - $X1),2) + pow(($Y2 - $Y1),2));

 	echo (int)(string) 'The distance between this two point is ' . $distance . '. ' . PHP_EOL . ' ' ;
 ?>