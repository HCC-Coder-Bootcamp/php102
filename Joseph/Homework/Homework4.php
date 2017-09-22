<?php 

$inputAmount = (int)readline('What is your amount? RM' . PHP_EOL);

$noteHundred = (int)($inputAmount / 100);
$noteFifty   = (int)(($inputAmount % 100) / 50);
$noteTwenty  = (int)((($inputAmount % 100) % 50) / 20);
$noteTen     = (int)(((($inputAmount % 100) % 50) % 20) / 10);
$noteFive    = (int)((((($inputAmount % 100) % 50) % 20) % 10) / 5);
$noteTwo     = (int)(((((($inputAmount % 100) % 50) % 20) % 10) % 5) / 2);
$noteOne     = (int)(((((($inputAmount % 100) % 50) % 20) % 10) % 5) % 2);

echo (string)$noteHundred . " pcs RM 100" . PHP_EOL . (string)$noteFifty . " pcs RM 50" . PHP_EOL . (string)$noteTwenty . " pcs RM 20" . PHP_EOL . (string)$noteTen . " pcs RM 10" . PHP_EOL . (string)$noteFive . " pcs RM 5" . PHP_EOL . (string)$noteTwo . " pcs RM 2" . PHP_EOL . (string)$noteOne . " pcs RM 1" . PHP_EOL;

 ?>