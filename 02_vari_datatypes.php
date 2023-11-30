<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variables and Datatypes</title>
</head>
<body>

	<?php
	// --------------Variables declaration----
	    $x=20;
	    $y=30;
	    $email="abc@gmail.com";
	    $z=$y-$x;
	    echo "$z  <br>";
	    echo $x+$y;
	    echo "<br> Your email is : {$email}";

	// -------------Datatypes-----------------
	    $age=21;
	    echo "<br> You are {$age} years old";
	    $user="leo";
	    echo "<br> your friend name is : {$user}";
	    $price=380.45;
	    echo "<br> Items price is : {$price}";
	    echo "<br> Items price is : \${$price}";
	    $a= true;
	    $b= false;
	    echo "<br> a is {$a}";
	    echo "<br> b is {$b}";  // false value doesn't appears anythings....


	?>
</body>
</html>