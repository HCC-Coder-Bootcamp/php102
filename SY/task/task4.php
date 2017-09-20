<?php 
//readline is a calling for computer make it request input form user
//PHP_EOL is php format end of line,maening of enter
$input_sec = (int)readline('How many seconds?' . PHP_EOL);

$hour = (int)($input_sec / 3600);

$min = (int)(($input_sec % 3600)/60);

$sec = $input_sec % 60;

//(int)is interger=shu zi(without xiaoshudian)
//(string)is turn the number become a string baru boleh display on echo 
$H_M_S =(int)(string) $hour . 'Hour' . $min . 'minutes' . $sec . 'seconds';

echo $H_M_S . PHP_EOL;

