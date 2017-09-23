<?php

$price = readline('Insert your total Amount please' . PHP_EOL);

$GST = (($price*6) / 100);

echo "It's " . (string)($price + $GST) . PHP_EOL; 

