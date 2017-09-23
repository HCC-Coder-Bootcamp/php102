<?php

$sec = (int)readline('insert second' . PHP_EOL);

$hour = (string)((int)($sec / 60 / 60));

$min = (string)((int)($sec / 60 % 60));

$second = (string)($sec % 60); 

$hourAns = $hour . " Hour ";

$minAns = $min . " minutes ";

$secAns = $second . " second ";

echo "It's " . ((string)$hourAns . $minAns . $secAns) . PHP_EOL; 