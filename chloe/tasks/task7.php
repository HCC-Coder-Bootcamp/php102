<?php 

	$input_Amount = (float)readline('Your payment'. PHP_EOL);

	$GST = 0.06;

	$GST_Amount = (float)($input_Amount * 0.06);

	echo "GST: Rm" . number_format((float)$GST_Amount,2,'.',',') . PHP_EOL;

	$TotalAmount = $input_Amount + $GST_Amount;

	echo "Total: Rm" . number_format($TotalAmount,2,'.','');

 ?>