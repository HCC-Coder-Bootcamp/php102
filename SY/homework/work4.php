<?php 

	$input = (int)readline('You amount : RM ' . PHP_EOL);

	$notesHundred = (int)($input / 100 );
	$notesFifty = (int)(($input % 100) / 50 );
	$notesTwenty = (int)((($input % 100) % 50) / 20 );
	$notesTen = (int)(((($input % 100) % 50) % 20) / 10);
	$notesFive = (int)((((($input % 100) % 50) % 20) % 10) / 5);
	$notesTwo = (int)(((((($input % 100) % 50) % 20) %10 ) % 5) / 2);
	$notesOne = (int)(((((($input % 100) % 50 ) % 20) % 10) % 5) % 2);

	echo (int)(string) $notesHundred . 'pcs RM 100 ' . PHP_EOL . $notesFifty . 'pcs RM 50 ' . PHP_EOL . $notesTwenty . 'pcs RM 20 ' . PHP_EOL . $notesTen . 'pcs RM 10 ' . PHP_EOL . $notesFive . 'pcs RM 5 ' . PHP_EOL . $notesTwo . 'pcs RM 2 ' . PHP_EOL . $notesOne . 'pcs RM 1 ' . PHP_EOL;

 ?>