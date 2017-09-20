<?php 

echo 'Hi,if you give me height and width value, i can compute the perimeter and ares of a retangle for you. ';

$inputHeight = (int)readline('Your height is ?');
$inputWidth = (int)readline('You width is ?');

$areas = $inputHeight * $inputWidth ;

echo (int)(string)$areas . 'cm2' . PHP_EOL;