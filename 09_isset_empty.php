<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>isset and empty</title>
</head>
<body>
	<form action="09_isset_empty.php" method="post">
		<label>Username:</label>
		<input type="text" name="username"><br>
		<label>Password :</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Register">
	</form>
	<?php
	// $username="Master";
	// $name;
	// echo isset($username);     // 1 means true..
	// echo isset($name);         // false value doesn't show on browser...
	// if (isset($username)) {
	// 	echo("Variable is set");
	// }else{
	// 	echo("Variable is not set");
	// }

	// $n=null;
	// echo empty($n);     // 1 means true..
	// $m="a";
	// echo empty($m);

	// foreach($_POST as $key => $value){     //---for checking the values..........
	// 	echo "{$key} = {$value} <br>";
	// }

	if(isset($_POST['login'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if (empty($user)) {
			echo "Username is missing";
		}
		elseif(empty($pass)){
			echo "Password is missing !";
		}
       	else{
            echo "Hello! {$user}";
	    }
	}
	?>
</body>
</html>