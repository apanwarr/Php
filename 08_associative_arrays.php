<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Associative Array</title>
</head>
<body>
	<form action="08_associative_arrays.php" method="post">
		<label>To Know the Capital,Please enter Country</label><br>
		<input type="text" name="country"><br>
		<input type="submit" value="Check">
	</form>


	<?php
	// ------Associative Array-------

	//key and values
	//countries => capitals
	//id => Username
	//item => price

	
	$capital = array("India"=>"New Delhi","Usa"=>"Washington D.C","Japan"=>"Kyoto","South korea"=>"Seoul");
	$capitals=$capital[$_POST["country"]];
	echo $capitals;

	// foreach($capital as $key => $value){
	// 	echo "<br>"."{$key} {$value}";
	// }
	?>
</body>
</html>