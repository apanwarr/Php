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
	<form action="16_sessions.php" method="post">
		<label>Username:</label>
		<input type="text" name="username"><br>
		<label>Password :</label>
		<input type="password" name="password"><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>

<?php
if (isset($_POST["login"])) {

	if (!empty($_POST["username"]) && !empty($_POST["password"])) {
	$_SESSION['username']=$_POST["username"];
	$_SESSION['password']=$_POST["password"];

	echo $_SESSION['username']."<br>";
	echo $_SESSION['password']."<br>";

	header("Location: 16_home.php");

	}
	else{
		echo "Missing username/password <br>";
	}
}	

?>



<!-- <?php
//-------eg-----------

$_SESSION['username']="Master";
$_SESSION['password']="m123";
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";

?> -->