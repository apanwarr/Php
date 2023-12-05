<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkboxes</title>
</head>
<body>
	<form action="11_checkboxes.php" method="post">
		<input type="checkbox" value="Pizza" name="food[]">
		Pizza<br>
		<input type="checkbox" value="Hamburger" name="food[]">
		Hamburger<br>
		<input type="checkbox" value="Hotdog" name="food[]">
		Hotdog<br>
		<input type="checkbox" value="Sanvich" name="food[]">
		Sanvich<br><br>
		<input type="submit" value="Order" name="submit">
	</form>

	<?php

/*  if(isset($_POST['submit'])){   // ----1st Method

		if(isset($_POST["pizza"])){
			echo "You ordered Pizza <br>";
		}
		if(isset($_POST["hamburger"])){
			echo "You ordered Hamburger <br>";
		}
		if(isset($_POST["hotdog"])){
			echo "You ordered Hotdog <br>";
		}
		if(isset($_POST["sanvich"])){
			echo "You ordered Sanvich<br>";
		}
		if(empty($_POST["pizza"])){
			echo "You don't like Pizza <br>";
		}
		if(empty($_POST["hamburger"])){
			echo "You don't like Hamburger <br>";
		}
		if(empty($_POST["hotdog"])){
			echo "You don't like Hotdog <br>";
		}
		if(empty($_POST["sanvich"])){
			echo "You don't like Sanvich<br>";
		}
	}   */

	//---------2nd Method [using Array] -----------

	if (isset($_POST['submit'])) {
		$foods=$_POST['food'];
		foreach ($foods as $food) {
			echo "{$food} <br>";
		}
	}

	?>
</body>
</html>