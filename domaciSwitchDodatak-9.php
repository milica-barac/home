<?php

// DODATAK - BONUS DOMACI 10-i

/* ZADATAK SA BOJAMA - SWITCH */

/* 1. Na osnovu unete boje na engleskom jeziku obojiti tekst
paragrafa u crveno, zeleno ili plavo. Ukoliko nije uneta
ni jedna od ove tri boje, tekst paragrafa obojiti u žuto.
*/

$color = "red";

switch ($color) {
    case "red":
        echo "<p style='color:red;'>You chose the color red! The text will be red!</p>";
        break;
    case "green":
        echo "<p style='color:green;'>You chose the color green! The text will be green!</p>";
		break;
	case "blue":
        echo "<p style='color:blue;'>You chose the color blue! The text will be blue!</p>";
        break;
    default:
        echo "<p style='color:yellow;'>You didn't choose red, blue or green color! This text will be colored in yellow!</p>";
}

?>
