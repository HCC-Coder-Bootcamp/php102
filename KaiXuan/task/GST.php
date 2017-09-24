	<?php 
		$Amount = readline('Amount');
		$GST = ($Amount * 6) / 100;
		$Total = $Amount + $GST;
		echo $GST;
	 ?>