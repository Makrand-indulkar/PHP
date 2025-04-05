<?php
$n = 5;
$i = 1;
$factorial = 1;

while ($i <= $n) {
    $factorial = $factorial * $i;
    $i = $i + 1;
}

echo "Factorial: " . $factorial;
?>
