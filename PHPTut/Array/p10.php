<?php
$nums = array(5, 10, 3, 99);
$i = 1;
$max = $nums[0];

while (isset($nums[$i])) {
    if ($nums[$i] > $max) {
        $max = $nums[$i];
    }
    $i++;
}

echo $max;
?>
