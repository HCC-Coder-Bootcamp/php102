<?php 


$tasks = function($number){
	
	$cashFormat = function($amount){
		$dollar = (int)$amount;
		$cent = ($amount * 100)%100;
		return "$dollar.$cent";
	};

	switch($number){
		case '1':
			$input = readline('Please enter an amount of days.' . PHP_EOL);
			$year = (int)($input / 365);
			$month = (int)(($input - $year * 365)/30);
			$day = (int)($input - $year * 365 - $month * 30);
			echo "$year years, $month months, and $day days" . PHP_EOL;
			break;
		case '2':
			$interestRate = 0.041;
			$inputDeposit = readline('Please enter the amount of deposit.' . PHP_EOL);
			$inputYear = readline('Please enter the years of deposit.' . PHP_EOL);
			$finalAmount = $inputDeposit * pow((1 + $interestRate), $inputYear);
			$interestGain = $finalAmount - $inputDeposit;
			echo 'Total interest gain : RM' . $cashFormat($interestGain) . PHP_EOL;
			echo 'Total amount of deposit : RM' . $cashFormat($finalAmount) . PHP_EOL;
			break;
		case '3':
			$PI = 3.141592;
			$radius = readline('Please enter the radius of a circle.' . PHP_EOL);
			$perimeter = 2 * $PI * (int)$radius;
			$area = $PI * (int)$radius * (int)$radius;
			echo "The perimeter of the circle is : $perimeter cm" . PHP_EOL;
			echo "The area of the circle is : $area cm2" . PHP_EOL;
			break;
		case '4':
			$input = readline('Please enter the amount of money' . PHP_EOL);
			$notes100 = (int)($input / 100);
			$notes50 = (int)(($input - $notes100 * 100) / 50);
			$notes20 = (int)(($input - $notes100 * 100 - $notes50 * 50) / 20);
			$notes10 = (int)(($input - $notes100 * 100 - $notes50 * 50 - $notes20 *20) / 10);
			$notes5 = (int)(($input - $notes100 * 100 - $notes50 * 50 - $notes20 * 20 - $notes10 * 10) / 5);
			$notes2 = (int)(($input - $notes100 * 100 - $notes50 * 50 - $notes20 * 20 - $notes10 * 10 - $notes5 * 5) / 2);
			$notes1 = (int)($input - $notes100 * 100 - $notes50 * 50 - $notes20 * 20 - $notes10 * 10 - $notes5 * 5 - $notes2 * 2);
			echo "$notes100 of RM100, $notes50 of RM50, $notes20 of RM20, $notes10 of RM10, $notes5 of RM5, $notes2 of RM2, $notes1 of RM1." . PHP_EOL;
			break;
		case '5':
			echo 'Please enter the coordinate of two points' . PHP_EOL;
			$X1 = readline('X1:');
			$Y1 = readline('Y1:');
			$X2 = readline('X2:');
			$Y2 = readline('Y2:');
			$distance = sqrt(pow(($X2 - $X1), 2) + pow(($Y2 - $Y1), 2));
			echo "The distance between two points is $distance" . PHP_EOL;
			break;
		case '6':
			$input = readline('Please enter a five digit number.' . PHP_EOL);
			$a = $input % 10;
			$b = $input % 100 - $a;
			$c = $input % 1000 - $a - $b;
			$d = $input % 10000 - $a - $b - $c;
			$e = $input - $a - $b - $c - $d;
			$reversed = $a * 10000 + $b * 100 + $c + $d / 100 + $e /10000;
			echo $reversed . PHP_EOL;
			break;
	}
};


$number = '1';

while($number != 'e' && $number != 'E'){
	$number = readline('Please select the number of the homework.' . PHP_EOL);
	$tasks($number);
}

echo "Bye!" . PHP_EOL;