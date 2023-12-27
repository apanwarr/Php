<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers from 1 to 100</title>
</head>
<body>

<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "<h2>Prime numbers from 1 to 100 are:</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";
?>

</body>
</html>
