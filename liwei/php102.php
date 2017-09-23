<?php 

$myName = readline('What is your name?' . PHP_EOL);

echo 'Hi, ' . $myName . PHP_EOL;

$yourAge = (int) readline('hey! how are old you?' . PHP_EOL);

echo "Imageine, you will be" . (string) ($yourAge + 5) . "
	after five year" . PHP_EOL;
?>

