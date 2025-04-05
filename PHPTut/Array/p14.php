<?php
$data = array("x" => 100);
$keyExists = false;

foreach ($data as $key => $value) {
    if ($key == "x") {
        $keyExists = true;
    }
}
?>
