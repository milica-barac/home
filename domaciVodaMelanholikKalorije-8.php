<html>
<head>
    <style>
        img {
            width: 60%;
        }
    </style>
</head>
</html>

<?php

/* 1 */

$voda = 100;

if ($voda >= 100) {
    echo "Voda kljuca";
}

elseif ($voda <= 0) {
    echo "Voda se ledi";
}

else {
    echo "voda je u tecnom stanju";
}

echo "<br>";

/* 2 */

$tip = "sanmelflekol";

if ($tip == "sangvinik") {
    echo "<img src='OsmiDomaci/Sanguine.jpg'>";
}

elseif ($tip == "melanholik") {
    echo "<img src='OsmiDomaci/Melancholic.jpg'>";
}

elseif ($tip == "flegmatik") {
    echo "<img src='OsmiDomaci/Phlegmatic.jpg'>";
}

elseif ($tip == "kolerik") {
    echo "<img src='OsmiDomaci/Choleric.jpg'>";
}

else {
    echo "<img src='OsmiDomaci/Other.jpg'>";
}

echo "<br>";

/* 3 */

$cal = 2000;
$KJ = $cal * 4.1868;

if ($KJ < 2000) {
    echo "povecajte dnevni unos";
}

elseif ($KJ > 4000) {
    echo "smanjite dnevni unos";
}

else {
    echo "dnevni unos je u redu";
}

?>
