<?php

$MYR = readline('How much MYR you have i will help you to change to USD ' . PHP_EOL);

$Ans = ($MYR / 4.19);

echo "It's USD " . number_format((float)$Ans, 2, '.', '');