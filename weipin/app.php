<?php

$myName = readLine('What is your name?' . PHP_EOL);

echo 'Hi ' . $myName . PHP_EOL;

//we can use readline to capture user input in command line
$yourAge = (int)readLine('hey!how old are you?' . PHP_EOL);

echo "Imagine, you will be " . (string)($yourAge + 5) . " " . "after five year!" . PHP_EOL;

?>