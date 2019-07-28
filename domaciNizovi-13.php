<?php
    // 1. Odrediti srednju vrednost elemenata celobrojnog niza.
        
        $brojevi = array(1,2,3,4,5,6,7,8);
        $l=count($brojevi);
        $sum=0;
        for($i=0;$i<$l;$i++){
            $sum+=$brojevi[$i];
        }
        echo $sum/$l;


    // 2. Odrediti maksimalnu vrednost u celobrojnom nizu.

        $celobrojni = array(8,9,23,4,22,32,24);
        $le=count($celobrojni);
        $max=$celobrojni[0];
        for($i=0;$i<$le;$i++){
            if($celobrojni[$i]>$max){
                $max=$celobrojni[$i];
            }
        }
        echo "<hr>$max<hr>";


    // 3. Odrediti minimalnu vrednost u celobrojnom nizu.

        $celiBrojevi = array(13,66,5,54,3,69,7,6);
        $le=count($celiBrojevi);
        $min=$celiBrojevi[0];
        for($i=0;$i<$le;$i++){
            if($celiBrojevi[$i]<$min){
                $min=$celiBrojevi[$i];
            }
        }
        echo "$min<hr>";

?>