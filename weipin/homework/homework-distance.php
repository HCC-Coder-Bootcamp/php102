<?php 

	$x1 = readline('x1=' . PHP_EOL);

	$y1 = readline('y1=' . PHP_EOL);

	$x2 = readline('x2=' . PHP_EOL);

	$y2 = readline('y2=' . PHP_EOL);

	$count = (int)(sqrt(pow( $x1 - $x2 , 2) + pow( $y1 - $y2 , 2)));

	echo 'Distance: ' . (string)$count;

 ?>