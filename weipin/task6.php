<?php

	$height = readline("Rectangle height(cm): " . PHP_EOL);

	$width = readline("Rectangle width(cm): " . PHP_EOL);

	$total = $height * $width;

	echo "Area:" . (string)$total . "cm2";

?>