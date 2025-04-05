<?php
$arr = array(2, 4, 6);
$search = 4;
$i = 0;
$found = false;

while ($i < 3) {
    if ($arr[$i] == $search) {
        $found = true;
    }
    $i = $i + 1;
}
?>
