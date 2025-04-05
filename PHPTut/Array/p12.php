<?php
$row = 0;
while ($row < 2) {
    $col = 0;
    while ($col < 2) {
        echo $matrix[$row][$col] . " ";
        $col = $col + 1;
    }
    echo "<br>";
    $row = $row + 1;
}
?>
