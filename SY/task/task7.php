<?php 

echo 'Suka beli-beli dan makan-makan? Tapi enkau pun nak tahu GST macam mana kila ? Lai,tanye saya !';

//cannot use (int),wanna use(float)
//（float）有小数点；
$Harga = (float)readline('Harga berapa ? ');

$GST =  $Harga * 0.06 ;

echo 'GST' . '=' . 'MYR' . number_format($GST, 2, '.', ',') . PHP_EOL;

$TotalHarga = $Harga + $GST;


//number format 数字格式 （2/小数点后的数值，‘。/小数点’，‘，/在数字中的逗号’）；
echo 'Total' . ' MYR' . '=' . number_format($TotalHarga, 2, '.', ',') . PHP_EOL;