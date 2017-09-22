<?php 

	$input = (int)readline('Amount:' . PHP_EOL);

	$count = $input % 100;
	$count1 = $input - $count;
	$notes100 = $count1 / 100;

	$count2 = $count % 50;
	$count3 = $count - $count2;
	$notes50 = $count3 / 50;

	$count4 = $count2 % 20;
	$count5 = $count2 - $count4;
	$notes20 = $count5 / 20;

	$count6 = $count4 % 10;
	$count7 = $count4 - $count6;
	$notes10 = $count7 / 10;

	$count8 = $count6 % 5;
	$count9 = $count6 - $count8;
	$notes5 = $count9 / 5;

	$count10 = $count8 % 2;//notes 1
	$count11 = $count8 - $count10;
	$notes2 = $count11 / 2;

	echo 'Notes100: ' . (string)(int)$notes100 . PHP_EOL . 'Notes50: ' . (string)(int)$notes50 . PHP_EOL . 'Notes20: ' . (string)(int)$notes20 . PHP_EOL . 'Notes10: ' . (string)(int)$notes10 . PHP_EOL . 'Notes5: ' . (string)(int)$notes5 . PHP_EOL . 'Notes2: ' . (string)(int)$notes2 . PHP_EOL . 'Notes1: ' . (string)(int)$count10;

 ?>