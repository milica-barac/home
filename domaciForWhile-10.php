<?php

/* 1. Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30.
Koristeći while petlju
Kotisteći for petlju
 */

//while
$p=1;
$sum=0;
$i=1;
while($i<=20){
    $p *= $i;
    $i++;
}

$i=1;
while($i<=30){
    $sum += $i;
    $i++;
}

echo $p-$sum . "<hr>";

//for
$p=1;
$sum=0;
for($i=1; $i<=20; $i++){
    $p *= $i;
}

for($i=1; $i<=30; $i++){
    $sum += $i;
}

echo $p-$sum . "<hr>";


/* 2. Odrediti sumu kubova brojeva od n do m.
Koristeći while petlju
Koristeći for petlju
*/

//for
$n = 3;
$m = 9;
$sum = 0;

for ($i=$n; $i<=$m; $i++) {
    $sum += $i**3;
}

echo $sum . "<hr>";

//while
$i = $n;
$sum = 0;
while ($i<=$m) {
    $sum += pow($i, 3);
    $i++;
}

echo $sum . "<hr>";

?>