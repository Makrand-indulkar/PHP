<?php
$matrix = array(array(1, 2), array(3, 4));

$row = 0;
while (isset($matrix[$row])) {
    $col = 0;
    while (isset($matrix[$row][$col])) {
        echo $matrix[$row][$col] . " ";
        $col++;
    }
    echo "<br>";
    $row++;
}
?>
