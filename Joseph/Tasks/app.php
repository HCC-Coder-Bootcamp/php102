<?php 

$myName = readline('What is your name?' . PHP_EOL); //readline is something that let people fill in

echo 'Hi, ' . $myName . PHP_EOL; //PHP_EOL = End of line

$yourAge = (int)readline('Hey! How old are you?' . PHP_EOL); //(int) = integer

echo "Imagine, you will be " . (string)($yourAge + 5) . " after five years!" . PHP_EOL;

 ?>