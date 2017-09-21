<?php 

	$input_notes = (int)readline('Amount: $ ' . PHP_EOL);

	$notes_100 = ($input_notes / 100 );
	$notes_50 = (($input_notes % 100) / 50 );
	$notes_20 = (($input_notes % 100) % 50) / 20 ;
	$notes_10 = (((($input_notes % 100) % 50) % 20) / 10);
	$notes_5 = ((((($input_notes % 100) % 50) % 20) % 10) / 5);
	$notes_2 = (((((($input_notes % 100) % 50) % 20) %10 ) % 5) / 2);
	$notes_1 = (((((($input_notes % 100) % 50 ) % 20) % 10) % 5) % 2);

	$total_amount = $notes_100 + $notes_50 + $notes_20 + $notes_10 + $notes_5 + $notes_2 + $notes_1;

	echo (int)(string) $notes_100 . ' RM 100 ' . PHP_EOL . $notes_50 . ' RM 50 ' . PHP_EOL . $notes_20 . ' RM 20 ' . PHP_EOL . $notes_10 . ' RM 10 ' . PHP_EOL . $notes_5 . ' RM 5 ' . PHP_EOL . $notes_2 . ' RM 2 ' . PHP_EOL . $notes_1 . ' RM 1 ' . PHP_EOL;

 ?>