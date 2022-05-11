<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Maksimalan unos kalorija</title>
</head>

<?php

/* ZADATAK:
Napisati program koji izracunava maksimalan broj kalorija koju osoba sme da unese.
Maksimalan broj kalorija se izracunava tako sto se tezina pomnozi sa faktorom aktivnosti i faktorom starosti 
(max kalorija = tezina * faktor aktivnosti * faktor starosti).
Faktor aktivnosti zavisi od zanimanja koju osoba, tako da:
- Ako ima zanimanje 'programer' (bukvalno ako je neko to napisao)  ili 'administrativni radnik' ili 'menadzer' faktor aktivnosti je 100
- Ako ima zanimanje 'policajac', 'vojnik' faktor aktivnosti je 200
- Ako ima zanimanje 'sportista' faktor aktivnosti je 300
- Za ostala zanimanja uzima se faktor aktivnosti 150

Kreirati zadatak1.html gde ce biti forma za unos ovih parametara a kod resavati i ispisati resenje na zadatak1.php.*/




/*if((isset($_GET['programmer']) $pro = $_GET['programmer']) || (isset($_GET['admin']) $pro = $_GET['admin']) || (isset($_GET['manager']) $pro = $_GET['manager']));
$pro = 100;
else if((isset($_GET['officer']) $pro = $_GET['officer']) || (isset($_GET['soldier']) $pro = $_GET['soldier']));
$pro = 200;
else if(isset($_GET['athlete']) $pro = $_GET['athlete']);
$pro = 300;
else if(isset($_GET['other']) $pro = $_GET['other']);
$pro = 150;*/

//var_dump[$__GET];

$m = $__GET['mass'];
$pro = $_GET['profession'];
$a = $_GET['age'];

if (empty($__GET['mass'])) {
    die("Unesite masu tela!")
}
if (empty($__GET['pro'])) {
    die("Odaberite profesiju!")
}
if (empty($__GET['age'])) {
    die("Unesite godine!")
}

/*
if (isset($_GET['submit'])) {

if(isset($__GET['profession'] == 'programmer') || isset($__GET['profession'] == 'admin') || isset($__GET['profession'] == 'manager')) {
    $pro = 100;
} else if(isset($__GET['profession'] == 'officer') || isset($__GET['profession'] == 'soldier')) {
    $pro = 200;
} else if(isset($__GET['profession'] == 'athlete')) {
    $pro = 300;
} else if(isset($__GET['profession'] == 'other')) {
    $pro = 150;
}
*/

/*Faktor starosti zavisi od broja godina, tako da:
- Ako neko ima od 0 do 3 godine - faktor starosti je 1.9
- Ako neko ima od 4 do 10 godina - faktor starosti je 1.5
- Ako neko ima od 11 do 18 godina - faktor starosti je 1.2
- Ako neko ima od 19 do 26 godina - faktor starosti je 1
- Ako neko ima od 27 do 30 ili od 50 do 60 godina - faktor starosti je 0.8
- Ako neko ima od 31 do 35 ili od 45 do 49 godina - faktor starosti je 0.7 
- Ako neko ima od 36 do 44 ili preko 60 godina - faktor starosti je 0.6.*/



/*if(isset($_GET['starost'])  &&  ($_GET['starost'] >= 0 && $_GET['starost'] <= 3)); {
    $age = 1.9;
}
if(isset($_GET['starost'])  &&  ($_GET['starost'] >= 4 && $_GET['starost'] <= 10)); {
    $age = 1.5;
}
if(isset($_GET['starost'])  &&  ($_GET['starost'] >= 11 && $_GET['starost'] <= 18)); {
    $age = 1.2;
}
if(isset($_GET['starost'])  &&  ($_GET['starost'] >= 19 && $_GET['starost'] <= 26)); {
    $age = 1;
}
if(isset($_GET['starost'])  &&  (($_GET['starost'] >= 27 && $_GET['starost'] <= 30) || ($_GET['starost'] >= 50 && $_GET['starost'] <= 60))); {
    $age = 0.8;
}
if(isset($_GET['starost'])  &&  (($_GET['starost'] >= 31 && $_GET['starost'] <= 35) || ($_GET['starost'] >= 45 && $_GET['starost'] <= 49))); {
    $age = 0.7;
}
if(isset($_GET['starost'])  &&  (($_GET['starost'] >= 36 && $_GET['starost'] <= 44) || ($_GET['starost'] >= 60))); {
    $age = 0.6;
}
}
*/

$cal = $mass * $pro * $age;

?>
<body>
    Maksimalan broj kalorija koji možete dnevno da unesete: <?php echo $cal ."cal";?>
</body>
</html>