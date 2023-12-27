<?php
include("20_database.php");

// ----how to create table------

// $sql="CREATE TABLE stud(id int ,name varchar(25),dept varchar(255))";

//-----how to insert data on table------

// $sql = "INSERT INTO users (user, password) VALUES('Mikky','disney1')";

$username="freeky";
$password="bros1";

// let hash our passwors
// using hash function
$hash=password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password) VALUES('$username','$hash')";


try {
	mysqli_query($conn, $sql);
	 echo "User is Registered !!";
} catch (mysqli_sql_exception) {
	echo "Could not register user??";
}





mysqli_close($conn);
?>