<?php

// -------- for set the cookie------------

setcookie("fav_food","pizza",time()+(86400*2),"/");
setcookie("fav_drink","coffee",time()+(86400*3),"/");
setcookie("fav_dessert","ice cream",time()+(86400*4),"/");

foreach ($_COOKIE as $key => $value) {
	echo "$key = $value <br>";
}

foreach ($_COOKIE as $key => $value) {
	echo $_COOKIE['fav_food']."<br>";
}

if (isset($_COOKIE['fav_drink'])) {
	echo "Buy Some {$_COOKIE['fav_drink']}";
}else{
	echo "I don't know your favourite food..";
}

// ---------for delete the cookie---------

// setcookie("fav_food","pizza",time()-0,"/");
// setcookie("fav_drink","coffee",time()-0,"/");
// setcookie("fav_dessert","ice cream",time()-0,"/");
?>