<?php
$a = array(1, 2, 3);
$b = array();
$i = 0;
$j = 2;

while ($i < 3) {
    $b[$i] = $a[$j];
    $i = $i + 1;
    $j = $j - 1;
}
?>
