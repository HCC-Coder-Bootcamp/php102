<?php 
	$deposit= readline('How much money? = ');
	$years= (int) readline('How many years? = ');
	$interestRate= $years*4.1;
	$total= $deposit + ($deposit/100*$interestRate);
	echo $total;
?>
