<?php

// Zadatak 1.
$x=200;
$y=80;

//Zadatak 2.
$z=rand(0,6);
$day=["ponedeljak", "utorak", "sreda", "četvrtak", "petak", "subota", "nedelja"];

//Zadatak 3.
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);
$d=$a+$b+$c;
?>

<html>
    <head>
        <title>hw10</title>
</head>

<body>
    <!--1) Dve promenljive imaju vrednosti 200 i 80. Izracunati i prikazati njihov zbir, proizvod, razliku i kolicnik.-->
    <p>1)</p> 
    <p>Zbir brojeva je 200 i 80: <?php echo ($x+$y); ?></p>
    <p>Razlika brojeva je 200 i 80: <?php echo ($x-$y); ?></p>
    <p>Proizvod brojeva je 200 i 80: <?php echo ($x*$y); ?></p>
    <p>Količnik brojeva je 200 i 80: <?php echo ($x/$y); ?></p>
    <br>
    <!--2) Postaviti jednu random vrednost od 0 do 6 (int) u jednu promenljivu. Ispisati na ekranu “Danas je …!” u zavisnosti od broja u promenljivoj. Primer ako je br 5 “Danas je petak!”. Mozete racunati 0 kao ponedeljak ili kao nedelju.-->
    <p>2)</p>
    <p>Danas je <?php echo $day[$z] ?>!</p><br>
    <!--Postaviti 3 promenljive a, b i c na vrednosti od 1 do 10 po izboru. Izracunati njihov zbir, i prikazati recenicu-->
    <p>3)</p>
    <p>Zbir brojeva <?php echo $a; ?>, <?php echo $b; ?> i <?php echo $c; ?> je <?php echo $d; ?>.</p>
</body>

</html>