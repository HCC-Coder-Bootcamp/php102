<?php 

echo 'Suka beli-beli dan makan-makan? Tapi enkau pun nak tahu GST macam mana kila ? Lai,tanye saya !';

//cannot use (int),wanna use(float)
//(int)is hu lue xiaoshudian,float is baokuaxiaoshudian
$Harga = (float)readline('Harga berapa ? ');

$GST =  $Harga * 0.06 ;

echo 'GST' . '=' . 'MYR' . number_format($GST, 2, '.', ',') . PHP_EOL;

$TotalHarga = $Harga + $GST;

echo 'Total' . ' MYR' . '=' . number_format($TotalHarga, 2, '.', ',') . PHP_EOL;