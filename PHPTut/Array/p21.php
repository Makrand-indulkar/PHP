<?php
$assoc = array("x" => 10, "y" => 20);
$keys = array("x", "y");
$indexed = array();
$i = 0;

while ($i < 2) {
    $indexed[$i] = $assoc[$keys[$i]];
    $i = $i + 1;
}
?>
