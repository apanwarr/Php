<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buttons</title>
</head>
<body>
	<form action="10_buttons.php" method="post">
		<input type="radio" value="Visa" name="creditcard">
		Visa<br>
		<input type="radio" value="Mastercard" name="creditcard">
		Mastercard<br>
		<input type="radio" value="Platinum" name="creditcard">
		Platinum<br>
		<input type="submit" name="confirm" value="Confirm">
	</form>

	<?php
	// if(isset($_POST["confirm"])) {
		
	//     if (isset($_POST["creditcard"])) {
	//     	$card=$_POST["creditcard"];
	// 	    echo "You selected the {$card} Card";
	//     }
	//     else{
	//     	echo "Please select a card !!";
	//     }
    // }

    // ---------using Switch-----------

    if(isset($_POST["confirm"])) {
    	$card=null;
    	if (isset($_POST['creditcard'])) {
    		$card=$_POST['creditcard'];
    	}
    	switch ($card) {
    		case 'Visa':
    			echo "You are selected Visa card";
    			break;
    		case 'Mastercard':
         		echo "You are selected Mastercard ";
         		break;
         	case 'Platinum':
                echo "You are selected Platinum card";
         		break;
    		default:
    			echo "Please select a card";
    			break;
    	}
    }
	?>
</body>
</html>