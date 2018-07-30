<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Test1</title>
</head>
<body>

	<?php

		$tst_num = 1;
		include 'O:\home\localhost\www\php\Tests\header.php';

		echo "Hello, World!";
		echo "<br>This is <a href='#'>link</a><br>";
		$var = "Куку";
		$var2 = "2";
		echo $var;
		echo "<br>".$var.$var2."<br>"; //кукушка
		$var3 = 5;
		echo $var2 + $var3; //7

		//$$
		echo "<hr>$$<hr>";

		$a = "b";
		$b = "c";
		$c = "d";

		echo $$a.";    $($(a) = $(b) = c"; //c
		echo "<br>";
		echo $$$a.";    $$($(a) = $$(b) = $(c) = d"; //d

		//if
		echo "<hr>$$<hr>";

		$d = "1";
		$f = "1";
		$g = "3";
		$h = "3";
		$j = false;


		if($d and $f == 1){
			$g = true;
		}
		if($d or $f == 1){
			$h = true;
		}
		if($d xor $f == 1){  //Или то ли то, но не все вместе
			$j = true;
		}


		echo "g = ".$g.";<br>";
		echo "h = ".$h.";<br>";
		echo "j = ".$j."'false';<br>";







	 ?>

	 <a href="http://localhost/php/Tests/2">Test2</a>
	
</body>
</html>