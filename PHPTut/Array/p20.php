<?php
$colors = array("a" => "red", "b" => "blue");
$target = "blue";
$result = "not found";

foreach ($colors as $k => $v) {
    if ($v == $target) {
        $result = $k;
    }
}

echo $result;
?>
