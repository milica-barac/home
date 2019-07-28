<html>

    <head>
        <title>12 - 18. 07. - 19. 07.</title>
    </head>
    
    <body>


    <!-- 1. Zadatak
    Napisati funkciju koja ispisuje stavku liste <li>. Kao prvi parametar  prima boju teksta, kao drugi parametar veličinu teksta u toj stavci liste, a kao treći parametar sam tekst koji se ispisuje. U telu HTML dokumenta formirati jednu neuređenu listu i pozvati tri puta funkciju za ispisivanje tri stavke liste. Za boje, veličinu i tekst uzeti proizvoljne veličine.
    -->

    <?php
        function listItem($color, $font, $text){
            echo "<li style='color:$color;font-size:$font'>$text</li>";
        }
    ?>

        <ul>
            <?php
                listItem("red", 23, "Tralalalalalalala");
                listItem("blue", 32, "Tralalalalalalala");
                listItem("green", 44, "Tralalalalalalala");
            ?>
        </ul>



    <!-- 2. Zadatak
    Napisati funkciju koja ispisuje ćeliju tabele <td>. Kao prvi parametar prima logičku promenljivu da li je tekst u ćeliji iskošen ili ne, a kao drugi parametar tekst koji se prikazuje unutar te ćelije. U telu HTML dokumenta kreirati tabelu dimenzija 2 x 3, a unutar nje pozvati šest puta funkciju sa proizvoljnim tekstom.Potrebno je da tekst u ćelijama naizmenično bude iskošen.
    -->

    <?php
        function tableData($italic, $text){
            if($italic=="italic"){
                echo "<td><i>$text</i></td>";
            }else{
                echo "<td>$text</td>";
            }
        }
    ?>

        <table border=1>
            <tr>
                <?php 
                    tableData("italic", "Tralalalalalalala"); 
                    tableData("", "Tralalalalalalala");
                    tableData("italic", "Tralalalalalalala"); 
                ?>
            </tr>
            <tr>
                <?php 
                    tableData("", "Tralalalalalalala");
                    tableData("italic", "Tralalalalalalala");
                    tableData("", "Tralalalalalalala");
                ?>
            </tr>
        </table>
    </body>
</html>