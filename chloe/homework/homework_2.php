<?php 

	//formula of compound interest 
	//amount = deposit(1 + interestrate)^(years)
	//^mean power sof = pow(0,0)
	
	$interest_rate = 0.041;

	$input_deposit = readline('How many deposit u want to put?' . PHP_EOL);

	$input_years = readline('years?');

	$total_amount = $input_deposit * pow((1 + $interest_rate), $input_years);

	$interest_gain = $total_amount + $input_deposit;

	echo "This is your ineterst gain Rm " . number_format($interest_gain) . PHP_EOL;

	echo "This is your deposit amount Rm " . number_format((float)$total_amount) . PHP_EOL;

 ?>