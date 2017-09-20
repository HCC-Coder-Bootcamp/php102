<?php
//readline是一个function for告诉电脑要和user拿input or information才能开始计算；
//PHP_EOL is php format end of line,maening of enter；
$myName = readline('Whats is your name ?' . PHP_EOL);

echo 'Hi, ' . $myName . PHP_EOL;

//(int)is integers=整数（没小数点）；

$yourAge = (int)readline('hey! how old are you ?' . PHP_EOL);


//(string)is turn the number become a string baru boleh display on echo； 
echo "Imagine, you will be " . (string) ($yourAge + 5 ) . " agter five years! " . PHP_EOL ;