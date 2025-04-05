<?php
$nums = array(1, 2, 3, 4);
$i = 0;

while (isset($nums[$i])) {
    if ($nums[$i] == 3) {
        $nums[$i] = 99;
    }
    $i++;
}
?>
