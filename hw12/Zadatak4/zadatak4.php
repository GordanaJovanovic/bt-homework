<?php

/*4 ZADATAK*:
Puz se penje uz drvo odredjenom brzinom (recimo da predje 3cm da dan).
Drvo svaki dan poraste za 1 cm.
Za zadatu brzinu puza (u centrimetrima po danu) i zadatu pocetnu visinu drveta (u centimetrima),
izracunati koliko je dana potrebno puzu da se popne na vrh drveta.
Napraviti presek svakog dana, dakle program treba da izbaci sledece poruke (za brzinu puza 3 i visinu drveta 100) :
Dan 1: Puz je presao 3cm, visina drveta 100cm
Dan 2: Puz je presao 6cm, visina drveta 101cm
...
Na kraju treba da se ispise poruka na primer: Puz se popeo na drvo za 8 dana. Smatrati da drvo svakog dana raste fiksno 1cm.*/

$h = 100; //Početna visina drveta
$sv = 3; //Brzina kretanja puža po danu
$tv = 1; //Dnevni rast drveta
$day = 1; //Redni dan

do {
$snailProgress = $sv * $day;
$h += $tv;
echo "Dan $day: Puž je prešao $snailProgress cm, a visina drveta je $h cm.";
echo "<br>";

$day += 1;
} while ($h >= $sv * $day);
echo "Puž se popeo na drvo za $day dana."
?>