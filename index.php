<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe3_Schloffer</title>
</head>

<body>
    <h1>Primzahlen/Log</h1>

    <?php
    $zahl1 = 0;
    $ausgabe = "";

    //Prüfen, ob das Formular abgeschickt wurde
    if (isset($_REQUEST["submit"])) {
        $zahl1 = $_REQUEST["zahl1"];    //Eingabe in eine Zahl umwandeln
    
        //Prüfen, ob die Zahl kleiner ist als 2
        if ($zahl1 < 2) {
            $ausgabe = "Keine Primzahl vorhanden."; //wenn ja, diese Ausgabe
        } else {
            $ausgabe = "Primzahlen: <br>";
            for ($i = 2; $i <= $zahl1; $i++) { //Schleife, von 2 bis zur eingegebenen Zahl
                $isPrim = true; // Es wird erstmal angenommen, dass $i eine Primzahl ist
    

                for ($j = 2; $j <= $i / 2; $j++) {  //Prüfe mögliche Teiler von 2 bis Hälfte von $i
                    if ($i % $j == 0) { //Wenn $i durch $j teilbarist, ist es keine Primzahl
                        $isPrim = false; //Die Abfrage ob $i eine Primzahl ist, ist somit false
                        break; //und die Schleife bricht ab
                    }
                }
                //Wenn $i eine Primzahl ist, wird es ausgegeben
                if ($isPrim) {
                    $ausgabe .= $i . "<br>";
                }

            }
        }
    }
    ?>
    <!-- Formular für die Eingabe der Obergrenze -->
    <form action="" method="post">
        <label for="zahl1">Geben Sie eine Zahl ein:</label><br>
        <input type="text" id="zahl1" name="zahl1" value="<?= $zahl1 ?>"><br><br>
        <input type="submit" name="submit" value="Primzahlen anzeigen"><br><br>
    </form>

    <!-- Ausgabe der Primzahlen -->
    <div>
        <?= $ausgabe ?>
    </div>


</body>

</html>