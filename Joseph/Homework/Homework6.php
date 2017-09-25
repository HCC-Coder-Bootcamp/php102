<?php 

$inputNumber = (int)readline('Please enter 5 digits number.' . PHP_EOL);

$tenThousand  = ($inputNumber % 10) * 10000;
$thousand     = (($inputNumber / 10) % 10) * 1000;
$hundred      = (($inputNumber / 100) % 10) * 100;
$tens         = (($inputNumber / 1000) % 10) * 10;
$one          = ($inputNumber / 10000) % 10;

$answer = $tenThousand + $thousand + $hundred + $tens + $one;

echo "Here is your answer " . (string)$answer . "." . PHP_EOL;

 ?>