<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Functions</title>
</head>
<body>
	<?php
	// function happy($name,$age){
	// 	echo "{$age} Master {$name} !! <br>";
	// 	echo "{$age} Master {$name} !! <br>";
	// 	echo "{$age} Master  {$name} !! <br>";
	// }
	// happy("Coder",20);

	//--------another eg-----------
	// function even($n){
	// 	if ($n%2==0) {
	// 		echo "No. is Even";
	// 	}
	// 	else{
	// 		echo "No. is Odd";
	// 	}
	// }
	// even(25);

	//-------another eg-----------
	function hypotenuse($a,$b){
		$c=sqrt($a ** 2 + $b ** 2);
		return $c;
	}
	echo hypotenuse(3,6);

	?>
</body>
</html>