<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe3_Schloffer</title>
</head>

<body>
    <h1>Log</h1>

    <?php
    $zahl2 = 0;
    $ausgabe = "";

    // Prüfen, ob das Formular abgeschickt wurde
    if (isset($_REQUEST["submit"])) {

        // Eingabe holen und in Zahl umwandeln
        $zahl2 = isset($_REQUEST["zahl2"]) ? (int) $_REQUEST["zahl2"] : 0;

        // Fehlermeldung, wenn Zahl zu klein
        if ($zahl2 < 1) {
            $ausgabe = "Bitte eine Zahl größer oder gleich 1 eingeben.";
        } else {

            // Schleife von 1 bis zur eingegebenen Zahl
            for ($n = 1; $n <= $zahl2; $n++) {

                $logWert = log($n);   // natürlicher Logarithmus
                $faktor = 5;          // Skaliert die Länge der Sterne
                $anzahlSterne = round($logWert * $faktor); // Sterne berechnen
    
                if ($anzahlSterne < 1)
                    $anzahlSterne = 1; // mindestens 1 Stern
    
                $sterne = str_repeat("*", $anzahlSterne); // Sterne erzeugen
                $ausgabe .= $n . " | " . $sterne . "<br>"; // Zeile anhängen
            }
        }
    }
    ?>

    <!-- Formular für die Eingabe der Obergrenze -->
    <form action="" method="post">
        <label for="zahl2">Bis Zahl:</label><br>
        <input type="text" id="zahl2" name="zahl2" value="<?= $zahl2 ?>"><br><br>
        <input type="submit" name="submit" value="Logarithmus anzeigen"><br><br>
    </form>

    <?php echo $ausgabe; ?>
</body>

</html>