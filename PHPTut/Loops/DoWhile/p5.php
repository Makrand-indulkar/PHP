<?php
$row = 1;
do {
    $col = 1;
    do {
        echo "* ";
        $col = $col + 1;
    } while ($col <= $row);
    echo "<br>";
    $row = $row + 1;
} while ($row <= 5);
?>
