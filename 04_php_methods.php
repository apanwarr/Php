<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Methods</title>
</head>
<body>
	
	<form action="04_php_methods.php" method="post">
		<label>Quantity</label><br>
		<input type="txet" name="quantity"><br>
		<input type="submit" value="Total">
	</form>

	<?php
     
    // example----

	// <form action="04_php_methods.php" method="post">
	// 	<label>Username</label><br>
	// 	<input type="text" name="username"><br>
	// 	<label>Password</label><br>
	// 	<input type="password" name="password"><br>
	// 	<input type="submit" value="Log in">
	// </form>

	// --------Get Method------

	// echo $_GET['username'];
	// echo "<br>";
	// echo $_GET['password'];

	// --------Post Method------

	// echo $_POST['username'];
	// echo "<br>";
	// echo $_POST['password'];

	// Another eg-------

	$item="pizza";
	$price=5.11;
	$quantity=$_POST['quantity'];
	$total=null;
	$total=$quantity*$price;
	echo "You have ordered {$quantity} Pizza's <br>";
	echo "Your Total is : \${$total}";

    ?>


</body>
</html>