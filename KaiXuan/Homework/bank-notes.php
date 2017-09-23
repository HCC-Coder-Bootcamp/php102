<?php 
	$amount= (int) readline('amount= ');
	$hundred= (int)($amount/100);
	$fifty= (int)($amount%100/50);
	$twenty= (int)($amount%100%50/20);
	$ten= (int)($amount%100%50%20/10);
	$five= (int)($amount%100%50%20%10/5);
	$one= (int)($amount%100%50%20%10%5s/1);
	echo 'hundred= ' . $hundred . ' ' . 'fifty= ' . $fifty . ' ' . 'twenty= ' . $twenty . ' ' . 'ten= ' . $ten . ' ' . 'five= ' . $five . ' ' . 'one= ' . $one;
?>