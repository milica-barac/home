<?php

/* 1. Zadatak
Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od
nih je najmanji. */

$a = 23;
$b = 8;
$c = 94;

if ($a > $b && $a > $c) {
	$max = $a;
	if($b > $c){
		$mid = $b;
		$min = $c;
	}else{
		$min = $b;
		$mid = $c;
	}
}elseif ($b > $c) {
	$max = $b;
	if($a > $c){
		$mid = $a;
		$min = $c;
	}else{
		$mid = $a;
		$min = $c;
	}
}else {
	$max = $c;
	if($a > $b){
		$mid = $a;
		$min = $b;
	}else{
		$min = $a;
		$mid = $b;
	}
}

echo "Najveci broj je $max <br>";
echo "Srednji broj je $mid <br>";
echo "Najmanji broj je $min <hr>";


/* 2. Zadatak
Učitati dva cela broja i ispitati da li je veći od njih paran. */

$br=34;
$br1=43;

if($br!=$br1){
    if($br>$br1){
        if($br%2==0){
            echo "Veci broj je paran.";
        }else{
            echo "Veci broj je neparan.";
        }
    }else{
        if($br1%2!=1){
            echo "Veci broj je paran.";
        }else{
            echo "Veci broj je neparan.";
        }
	}
}else{
	echo "Brojevi su jednaki.";
}
echo "<hr>";


/* 3. Zadatak
Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h
do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno
otvoren. */ 

$vreme = date ("G");
$dan = date("N");

if ($dan <= 5 && $vreme > 9 && $vreme < 20) {
    echo "Butik je otvoren";
}elseif ($dan >= 6 && $vreme > 10 && $vreme < 18) {
    echo "Butik je otvoren";
}else {
    echo "Butik je zatvoren";
}

?>
