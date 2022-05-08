<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 3: Zbir prvih n brojeva</title>
</head>

<?php

/*3. ZADATAK
Napisati program koji izracunava zbir prvih $n prirodnih brojeva
Za ovaj zadatak ne treba da kreirate html fajl sa formom, sve uradite u ovom fajlu.
Ako je $n = 4 na primer, poruka na kraju programa treba da bude: Zbir prvih 4 prirodnih brojeva je 10.*/

$n = rand(1, 1000);
$sum = 0;

for($i = 1; $i <= $n; $i++)
  $sum += $i;
?>

<body>
 <?php echo "Zbir prvih $n prirodnih brojeva je: $sum"; ?>
</body>

</html>