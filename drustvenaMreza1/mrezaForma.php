<?php

    require_once 'mrezaHeader.php';

    // prvo proverimo da li je post metod prazan, ako nije na sledeci nacin dohvatamo unose iz inputa
    if(!empty($_POST)){
        // ovde se definisu polja ne iznad
        $id=12;
        $ime = $conn->real_escape_string($_POST['ime']);
        // validacija da ne moze Milicici da se unese prazno
        if($ime!="" || !empty($ime/*empty($ime)==false*/)){
            echo "Morate uneti ime.";
        }
        //elseif za prezime i za pol ne mora jer smo stavili checked i onda tek else da se izvrsi upit 
        $prezime = $conn->real_escape_string($_POST['prezime']);
        $pol = $conn->real_escape_string($_POST['pol']);
        echo "Zdravo $ime $prezime $pol";

        $sql="INSERT INTO profili(korisnik_id, ime, prezime, pol) VALUES($id,'$ime','$prezime','$pol')";
        $conn->query($sql);
    }
?>

        <!-- action na koju stranicu vodi kad se klikne na submit, ostaje na istoj u ovom slucaju. Metod moze da bude get i post -->
        <form action="mrezaForma.php" method="POST">
            <label for="ime">Ime: </label>    
            <input type="text" name="ime"><br><br>
            <label for="prezime">Prezime: </label>
            <input type="text" name="prezime"><br><br>
            <label for="pol">Pol: </label><br>
            <label for="zenski">Zenski </label>
            <input type="radio" name="pol" value="z"><br>
            <label for="muski">Muski </label>
            <input type="radio" name="pol" value="m"><br>
            <label for="ostalo">Ostalo </label>
            <input type="radio" name="pol" value="o" checked><br><br>
            <input type="submit" value="Potvrdi">

        </form>    
    </body>
</html>