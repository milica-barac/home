<?php

/* 1. Zadatak
Napisati funkciju digitron koja prima tri parametra: Prva dva su brojevi, a treći je karakter koji predstavlja aritmetičku operaciju (‘+’, ‘-’, ‘*’ ili ‘/’). Potrebno je da funkcija izvrši odgovarajuću aritmetičku operaciju nad zadatim brojevima.
Na primer, digitron(5, 8, ‘*’) kao rezultat daje 5 * 8 = 40. */

function digitron($a, $b, $op) {
    if($op=="+"){
        $rez=$a+$b;
    }elseif($op=="-"){
        $rez=$a-$b;
    }elseif($op=="*"){
        $rez=$a*$b;
    }elseif($op=="/"){
        if($b!=0){
            $rez=$a/$b;
        }else{
            $rez = 0;
            echo "Nemoguce izvrsiti operaciju. Nije dozvoljeno deljenje ";
        }
    }else{
        echo "Pogresan unos karaktera za aritmeticku operaciju. Greska, rezultat je nemoguce prikazati.";
    }
    return $rez;
}

echo digitron(5, 6, "*");

?>