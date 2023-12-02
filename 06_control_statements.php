<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control Statements</title>
</head>
<body>
	<form action="06_control_statements.php" method="post">
		<label>Age:</label>
		<input type="text" name="age">
		<input type="submit" value="Check">
	</form>
	<?php
	$age=$_POST['age'];
	if ($age>21) {
		echo "You are eligible for trip...";
	}
	else{
		echo "Sorry! You are not eligible for trip";
	}

    // using logical operator
    // and practice more ques.....

	$age=$_POST['age'];
	if ($age>21 || $age==21) {
		echo "<br> You are eligible for trip...";
	}
	else{
		echo "<br> Sorry! You are not eligible for trip";
	}

	// --------Switch------------

	$age1=$_POST['age'];
	switch ($age1) {
		case $age<21:
			echo "<br> You are not eligible";
			break;

		case $age==21:
		    echo "<br> You need to made your id...";
		    break;

		default:
			echo "<br> You are eligible";
			break;
	}

	// ----------same as < while,do-while,forloop >------
	// practice some questions on them.........
	// For Good Coder....
	?>
</body>
</html>