<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<h1>hello homework</h1>

	<?php 

		$name = 'davion. ';
		$nickname = 'still davion. ';
		$birthday = '15th November 1995. ';
		$custommessage = '"Im still waiting Fong Jordan". ';
		$singlequote = 'Hello, my name is ' . $name . 'My nickname is ' . $nickname . 'My birthday is ' . $birthday . 'My customer message is ' . $custommessage;
		$doublequote = "Hello, my name is $name, my nickname is $nickname, my birthday is $birthday. Lastly my message is $custommessage";

		echo $singlequote;
		echo $doublequote;

	 ?>
</body>
</html>