<?php
$counterFile = "counter.txt";

// Falls die Datei nicht existiert, erstelle sie mit Startwert 10000
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "10000");
}

// Lese den aktuellen Besucherstand
$visits = (int) file_get_contents($counterFile);

// Erhöhe den Besucherzähler um 1
$visits++;

// Speichere den neuen Wert zurück in die Datei
file_put_contents($counterFile, $visits);

// Gebe die Besucherzahl aus
echo $visits;
?>
