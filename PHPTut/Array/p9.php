<?php
$nums = array(1, 2, 3);
$len = 0;

while (isset($nums[$len])) {
    $len++;
}

$i = $len - 1;
while ($i >= 0) {
    echo $nums[$i] . "<br>";
    $i--;
}
?>
