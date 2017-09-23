<?php

$hour = readline('insert hour' . PHP_EOL);

$min = readline('insert min' . PHP_EOL);

$hourSub = 60;

echo "It's " . ((string)$hour * 60 + $min) . " minutes!" . PHP_EOL; 