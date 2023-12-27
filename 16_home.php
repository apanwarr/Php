<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessions</title>
</head>
<body>
	This is the Home Page.. <br>
	<a href="16_sessions.php">This goes to the login page </a> <br>
	<h1>I am Home Page...</h1>
	<form action="16_home.php" method="post">
		<input type="submit" value="logout" name="logout">
	</form>
</body>
</html>

<?php
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";

if (isset($_POST["logout"])) {
	session_destroy();

	header("Location: 16_sessions.php");
}
?>