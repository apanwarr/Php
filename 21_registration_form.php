<?php
include("21_database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
	<form action="21_registration_form.php" method="post">
		<h2>Welcome to FIGBOOK</h2>
		Username: 
		<input type="text" name="username"><br>
		Password :
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
	$username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
	$password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_SPECIAL_CHARS);

	if (empty($username)) {
		echo "Please enter a username";
	}elseif(empty($password)){
		echo "Please enter a password";
	}else{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (user,password) VALUES ('$username','$hash')";

		try{
		    mysqli_query($conn,$sql);
		    echo "You are now Registered!";
		}
		catch(mysqli_sql_exception){
			echo "That username is already exists..";
		}
	}
}


mysqli_close($conn);
?>