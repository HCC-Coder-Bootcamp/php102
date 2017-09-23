<?php 

	$x1 = readline('x1 = ' . PHP_EOL);

	$x2 = readline('x2 = ' . PHP_EOL);

	$y1 = readline('y1 = ' . PHP_EOL);

	$y2 = readline('y2 = ' . PHP_EOL);

	$distance = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

	echo "Answer: $distance ";


 ?>