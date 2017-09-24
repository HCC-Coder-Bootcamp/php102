	<?php 
		$rate = 4.19;
		$MYR = (int)readline('How much MYR you want to convert to USD? =');
		$resultU = $MYR / $rate;
		echo number_format((float)$resultU, 2, '.', ''); 
		echo "<br>";
		$USD = (int)readline('How much USD you want to convert to MYR? =');
		$resultM = $USD * $rate;
		echo number_format((float)$resultM, 2, '.', ''); 
	?>
