<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operators</title>
</head>
<body>

	<?php
	// ---------Arithmetic Operators---
	$x=10;
	$y=12;
	$z=null;
	$add=$x+$y;
	echo "Addition : {$add}";
	echo "<br> Do all like this! <br>";
	// echo $y-$x;
	// echo $y*$x;
	// echo $y/$x;
	// echo $y%$x;

	// ----- increment and decrement------
	$a=12;
	echo "<br> $a";
	$a++;
	echo "<br> $a";
	$a=11;
	echo "<br> $a";
	$a--;
	echo "<br> $a";

	// -------[Imp] operators precedence--------

	// ()
	// **
	// * / %
	// + -
	$total=1+2-3*4/5**6;
	echo "<br> $total";

	// -------
	$m=12;
	$n=13;
	if ($m>$n) {
		echo "<br> m greater";
	}elseif ($m<$n) {
		echo "<br> n is greater";
	}else{
		echo "both equal";
	}

	// -----logical-----
	$m1=12;
	$n1=13;
	if ($m1>10 && $m1<20) {
		echo "<br> m greater";
	}elseif ($n1>20 || $m1<$n1) {
		echo "<br> n is greater";
	}else{
		echo "both equal";
	}

	// -----assignment------
	$a=10;
	echo "a is assigning : $a";
	?>

</body>
</html>