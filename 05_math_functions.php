<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math Functions</title>
</head>
<body>
	<form action="05_math_functions.php" method="post">
		<label>Radius</label>
		<input type="text" name="radius">
		<input type="submit" value="Calculate">
	</form>

	<?php
	//-----examples---------

	// <form action="05_math_functions.php" method="post">
	// 	<label>x:</label>
	// 	<input type="text" name="x1">
	// 	<label>y:</label>
	// 	<input type="text" name="y1">
	// 	<input type="submit" value="total">
	// </form>
	// ------------------------------------

	//---------php of example-------
	// $y=$_POST['x1'];
	// $z=$_POST['y1'];
	// $Total=null;
	// // $Total=abs($y);
	// // $Total=round($y);
	// // $Total=floor($y);
	// //$Total=ceil($y);
	// $Total=pow($y, $z);
	// echo $Total;

	$rad=$_POST["radius"];
	$circum=null;
	$area=null;
	$volumne=null;
	$circum=2*pi()*$rad;
	$circum=round($circum,2);
	$area=pi()*pow($rad, 2);
	$area=round($area,2);
	$vol=4/3*pi()*pow($rad, 3);
	$vol=round($vol,2);
	echo "Circumference is : {$circum} <br>";
	echo "Area is : {$area} <br>";
	echo "Volumne is : {$vol} ";
	?>
</body>
</html>