<?php
$arr = array(1, 2, 3, 4);
$length = 0;

while (isset($arr[$length])) {
    $length = $length + 1;
}
echo $length; // Output: 4
?>
