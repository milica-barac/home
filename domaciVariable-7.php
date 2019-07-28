<?php

$litar = 100;
$galon = $litar * 3.785;
echo $galon . " galona = " . $litar . " litra";
echo "<br>";

$galon = 378.5;
$litar = $galon / 3.785;
echo $litar . " litra = " . $galon . " galona";
echo "<br>";

$far = 100;
$cel = ($far - 32) * 5/9;
$kel = $cel + 273.15;
echo "$kel kelvina = $cel celziusa = $far farenhajta";
echo "<br>";

$kel = 310.92777777778;
$cel = $kel - 273.15;
$far = $cel * 9/5 +32;
echo "$far farenhajta = $cel celziusa = $kel kelvina";
echo "<br>";

?>