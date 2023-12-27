<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servers in php</title>
</head>
<body>
	<form action="17_servers.php" method="post">
		<label>Username</label>
		<input type="text" name="username"><br>
		<label>Password</label>
		<input type="password" name="password"><br>
		<input type="submit" name="">
	</form>
</body>
</html>

<?php
//-----to know the browser key and values----

// foreach($_SERVER as $key => $value){
// 	echo "{$key}={$value} <br>";
//}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	echo "This is POST Method Type...";
}
?>