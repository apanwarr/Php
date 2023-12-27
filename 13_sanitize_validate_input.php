<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sanitize & Validate_Input</title>
</head>
<body>
	<form action="13_sanitize_validate_input.php" method="post">
		<label>Username</label>
		<input type="text" name="username">
		<label>Age</label>
		<input type="text" name="age">
		<label>Email</label>
		<input type="email" name="email"><br>	
		<input type="submit" name="submit" value="Login">


	</form>

	<?php
	// -------Sanitize the input---------
	if (isset($_POST["submit"])) {
		$name=filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
		$age1=filter_input(INPUT_POST, "age",FILTER_SANITIZE_NUMBER_INT);
		$mail=filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
		echo $name."<br>";
		echo $age1."<br>";
		echo $mail;
	}    

/*	// -------Validate Input------------
	if (isset($_POST["submit"])) {
		$age1=filter_input(INPUT_POST, "age",FILTER_VALIDATE_INT);
		$mail=filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
		if (empty( $mail)) {
			echo "incorrect email";
		}else{
			echo "Your Email : {$mail}";
		}
	}
               */

	?>
</body>
</html>