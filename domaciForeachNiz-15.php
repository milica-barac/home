<?php
// 1. Na osnovu celobrojnog niza $a[0], $a[1], ... formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.
    $a = array(21,13,-4,11,-5,12);
    $b=array();
    for($i=0;$i<count($a);$i++){
        if($a[$i]>0){
            $b[]=$a[$i];
        }
    }
    foreach ($b as $val){
        echo " $val ";
    }
    echo "<hr>";

    
/* 2. Dati su nizovi
    $a[0], $a[1], ..., $a[n - 1] i
    $b[0], $b[1], ..., $b[n - 1].
    Formirati niz $c[0], $c[1], ...,
    $c[n – 1] čiji su elementi
    $a[0] * $b[0], $a[1] * $b[1], ...,
    $a[n – 1] * $b[n – 1].
*/
    $b = array(-1,2,3,4,5,-6);
    $c = array();
    for($i=0;$i<count($a);$i++){
        $c[]=$a[$i]*$b[$i];
    }

    foreach ($c as $v){
        echo " $v ";
    }


?>