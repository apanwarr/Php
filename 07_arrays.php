<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<body>

	<?php
	// -----Numeric Array------

	$food=array("apple","orange","banana","mango");
    //echo $food;   // Wrong Way to print..
	echo("$food[0]");
	echo("<br>"."$food[0] $food[2]");

	//using loop to display all items instead of repeating echo line..

	echo "<br>"."I am For loop....";
	for ($i=0; $i < count($food); $i++) {
		echo "<br>".$food[$i];
	}

	echo "<br>"."I am For Each loop....";
	foreach ($food as $f1 ) {
		echo "<br>".$f1;
	}

	// ------Multidimensional Array ------

	$car=array(array("Thar","fortuner","Creta"),
		array("Lambo","Mustang","Audi"),
		array("Mercedies","Rolls R.","Beltey"));

	echo "<br>".$car[0][0]. ":First ".$car[0][1].":Second  ".$car[0][2].":Third";
	echo "<br>".$car[1][0]. ":First ".$car[1][1].":Second  ".$car[1][2].":Third";
	echo "<br>".$car[2][0]. ":First ".$car[2][1].":Second  ".$car[2][2].":Third";

	// another example like - Matrix

	$matrix=array(array(1,2,3),array(4,5,6),array(7,8,9));
	echo "<br>".$matrix[0][0]." ".$matrix[0][1]." ".$matrix[0][2];
	echo "<br>".$matrix[1][0]." ".$matrix[1][1]." ".$matrix[1][2];
	echo "<br>".$matrix[2][0]." ".$matrix[2][1]." ".$matrix[2][2];
	?>
</body>
</html>