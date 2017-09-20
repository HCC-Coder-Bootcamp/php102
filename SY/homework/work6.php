<?php 

echo "Hi,me again. I'll show you a magic,give me five digits numbers. " . PHP_EOL . '';

	$input_numbers = (int)readline('You numbers here :');

	$digits_one = (int)($input_numbers / 10000);
	$digits_two = (int)(($input_numbers % 10000) / 1000);
	$digits_three = (int)((($input_numbers % 10000) % 1000) / 100);
	$digits_four = (int)(((($input_numbers % 10000) % 1000) % 100) / 10);
	$digits_five = (int)(((($input_numbers % 10000) % 1000) % 100) % 10);

	$reversed_digits = (int)(($digits_five * 10000) + ($digits_four * 1000) + ($digits_three * 100) + ($digits_two * 10) + $digits_one);

	echo (int)(string) $reversed_digits . PHP_EOL . 'You input numbers is reversed!' ;

 ?>