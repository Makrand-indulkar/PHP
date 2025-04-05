<?php
$matrix = array(array(1,2), array(3,4));
$total = 0;

$row = 0;
while (isset($matrix[$row])) {
    $col = 0;
    while (isset($matrix[$row][$col])) {
        $total++;
        $col++;
    }
    $row++;
}

echo $total;
?>
