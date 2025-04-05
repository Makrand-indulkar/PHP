<?php
$a = array(1, 2);
$b = array(3, 4);
$c = array();

$i = 0;
while ($i < 2) {
    $c[$i] = $a[$i];
    $i = $i + 1;
}

$j = 0;
while ($j < 2) {
    $c[$i] = $b[$j];
    $i = $i + 1;
    $j = $j + 1;
}
?>
