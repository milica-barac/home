<?php
    // 1. Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.
    $arr = array(-6,14,19,-9,18,-7,-8,16,19,15);
    $max=$arr[0];
    for($i=1; $i<count($arr); $i++){
        if($arr[$i]>$max){
            $max=$arr[$i];
        }
    }
    echo "Maksimalna vrednost u nizu je: $max <br>";

    $num=0;
    foreach($arr as $value){
        if($value==$max){
            $num++;
        }
    }
    echo "Broj elemenata niza koji imaju maksimalnu vrednost je: $num <hr>";


    // 2. Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.
    $niz = array(1,7,3,5,4,2,6);
    $index=0;
    $sum=0;
    $n=count($niz);
    foreach($niz as $vrednost){
        $sum+=$vrednost;
    }
    $sredVred=$sum/$n;
    echo "Srednja vrednost niza iznosi: $sredVred<br>";

    $min=abs($niz[0]-$sredVred);
    for($i=1; $i<$n; $i++){
        if(abs($niz[$i]-$sredVred)<$min){
            $min=abs($niz[$i]-$sredVred);
            $elem=$niz[$i];
            $index=$i;
        }
    }
    echo "Vrenost clana niza koji je najblizi srednjoj vrednosti je: $elem , a indeks elementa koji nosi tu vrednost je: $index";

?>