<?php
$n = 5;
$i = 1;
$fact = 1;

do {
    $fact = $fact * $i;
    $i = $i + 1;
} while ($i <= $n);

echo "Factorial: " . $fact;
?>
