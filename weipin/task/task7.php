<?php

	$totalAmount = (float)readline("Total Amount: RM" . PHP_EOL);

	$gst = $totalAmount * 0.06;

	echo "GST(6%): RM" . number_format((string)$gst, 2, '.', '');

	echo PHP_EOL;

	$total = $totalAmount + $gst;

	echo "Tota: RM" . number_format($total, 2, '.', '');

?>