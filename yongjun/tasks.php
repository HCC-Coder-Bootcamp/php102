<?php 

$task_3 = function(){
	$toMinute = function($hour, $minute){
		return $hour*60 + $minute;
	};

	$hour = readline('Please enter the hour' . PHP_EOL);
	$minute = readline('Please enter the minute' . PHP_EOL);

	echo 'The time is ' . $toMinute($hour, $minute) . ' minutes' . PHP_EOL;
};

$task_4 = function(){
	$toHourMinuteSecond = function($second){
		$sec = $second%60;
		$min = (($second - $sec)/60)%60;
		$hour = (($second - $min * 60 - $sec)/3600)%60;
		echo "$hour hours $min minutes $sec seconds";
	};

	$seconds = (int)readline('Please enter the seconds' . PHP_EOL);

	$toHourMinuteSecond($seconds);
};

$task_5 = function(){
	$USD_MYR = 4.19;
	chooseMode:
	$mode = readline('Enter 1 for USD to MYR, enter 2 for MYR to USD.' . PHP_EOL);
	switch($mode){
		case 1:
			$input = (int)readline('Please enter amount of USD.' . PHP_EOL);
			$outcome = (int)($input * $USD_MYR * 100);
			break;
		case 2:
			$input = (int)readline('Please enter amount of MYR.' . PHP_EOL);
			$outcome = (int)($input / $USD_MYR * 100);
			break;
		default:
			goto chooseMode;
			break;
	}
	$outcomeText = (string)($outcome - $outcome % 100) / 100 . '.' . $outcome % 100;
	echo 'The converted amount is ' . $outcomeText . PHP_EOL;
};

$task_6 = function(){
	$height = readline('Please enter the height of the rectangle.(cm)' . PHP_EOL);
	$width = readline('Please enter the width of the rectangle.(cm)' . PHP_EOL);

	$perimeter = 2 * ($height + $width);
	$area = $height * $width;

	echo "The perimeter is $perimeter." . PHP_EOL;
	echo "The area is $area." . PHP_EOL;

};

$task_7 = function(){
	$input = readline('Please enter the total amount of a purchase.' . PHP_EOL);
	$gst = 0.06;

	$gst_output = $input * $gst;
	$total_output = $input * (1 + $gst);

	$cashFormat = function($amount){
		$dollar = (int)$amount;
		$cent = ($amount * 100)%100;
		return "$dollar.$cent";
	};

	echo 'GST : RM' . $cashFormat($gst_output) . PHP_EOL;
	echo 'Total : RM' . $cashFormat($total_output) . PHP_EOL;
};

$task = '1';

while($task != 'e' && $task != 'E'){
	$task = readline('Please select the task. (3, 4, 5, 6, 7)' . PHP_EOL . 'Enter E to exit' . PHP_EOL);
	switch($task){
		case '3':
			$task_3();
			break;
		case '4':
			$task_4();
			break;
		case '5':
			$task_5();
			break;
		case '6':
			$task_6();
			break;
		case '7':
			$task_7();
			break;
		default:
			echo 'Please enter the correct selection.' . PHP_EOL;
			break;
	}
}

echo 'Good bye!';