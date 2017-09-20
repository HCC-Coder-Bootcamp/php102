<?php 

echo 'Im not bank, but i can calculate the interest rate for you. ' . PHP_EOL . '';

	$inputDeposit = (float)readline('Please enter deposit amount :');
	$inputYears = (int)readline('Please enter the years :');
	$interestRate = 0.043 ;

	//fomular of compound interest
	//amount = deposit (1 + interestrate) ^ (yrs)
	// ^ mean power sof = pow(0,0)
	$totalAmount = $inputDeposit * pow ((1 + $interestRate), $inputYears);
	$totalInterestGain = $totalAmount - $inputDeposit;
					
	echo (string)'Total interest gain is $ ' .  number_format($totalInterestGain ,2,',',',') . PHP_EOL . 'Total amount of deposit is $ ' . number_format($totalAmount ,2,'.',',') ;
	
 ?>