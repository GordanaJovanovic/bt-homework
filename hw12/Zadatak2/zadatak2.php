<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Maksimalan unos kalorija</title>
</head>

<body>

<?php

/*2 ZADATAK: (empty, isset, is_null)
Napisati program koji na osnovu zadate sirine i visine zida i na osnovu sirine i duzine jedne plocice,
izracunava neophodan broj plocica da se poploca ceo zid.
- Kreirajte fajl zadatak2.html u kome cete staviti formu, formu kreirajte proizvoljno.
- Prihvatite ulazne parametre u zadatak2.php fajlu
- Nazive ulaznih parametara definisite sami!!!
- Proizvoljno izvrsiti neophodne provere!!!  
Ispisati neophodan broj plocica na kraju programa*/

$w = "wallw";
$h = "wallh";
$S = $w*$h;

$t1 = "20x50";
$t1 == 20*50*0.0001;
$t2 = "20x60";
$t2 == 20*60*0.0001;
$t3 = "25x40";
$t3 == 25*40*0.0001;
$t4 = "25x50";
$t4 == 25*50*0.0001;
$t5 = "25x70";
$t5 == 25*70*0.0001;
$t6 = "25x75";
$t6 == 25*75*0.0001;
$t7 = "28x85";
$t7 == 28*85*0.0001;
$t8 = "30x60";
$t8 == 30*60*0.0001;
$t9 = "30x90";
$t9 == 30*90*0.0001;
$t10 = "40x120";
$t10 == 40*120*0.0001;

if(isset($_GET['tile'] == '20x50')) {
    echo "Potreban broj pločica je: ceil($S/$t1)";
}

?>

</body>

</html>