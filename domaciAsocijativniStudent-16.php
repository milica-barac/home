<?php

/* 1. Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.
Ispisati sve predmete i ocene studenta.
Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.
Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.
 */

$student = array("Hemija"=>7, "Matematika"=>10, "Racunarska tehnika"=>10, "Ekologija"=>8, "Sociologija"=>6, "Osnovi sitema zastite"=>9);
foreach($student as $predmet=>$ocena){
    echo "Predmet: $predmet, ocena: $ocena <br>";
}
echo "<hr>";

$max = 0;
foreach($student as $predmet=>$ocena){
    if($ocena > $max){
        $max = $ocena;
    }
}

echo "Student ima najvecu ocenu: $max, iz predmeta: ";

foreach($student as $predmet=>$ocena){
    if($max == $ocena){
        echo "$predmet  ";
    }
}
echo "<hr>";

$sum = 0;
foreach($student as $predmet=>$ocena){
    $sum+=$ocena;
}
$prosek = $sum / count($student);
echo "Prosecna ocena stundeta: $prosek <hr>";


echo "Predmeti na kojima je student dobio ocenu vecu od prosecne: ";

foreach($student as $predmet=>$ocena){
    if($ocena > $prosek){
        echo "$predmet  ";
    }
}





?>