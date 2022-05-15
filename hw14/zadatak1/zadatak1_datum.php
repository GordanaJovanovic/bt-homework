<?php

/*1.Zadatak 
Napisati program koji proverava da li je uneseni datum ispravan.
Datum se formira na osnovu 3 ulazna parametra type text sa html-a: dan, mesec i godina.
Potpuna validacija. Uzeti u obzir i prestupne godine.*/

if(empty($_POST)) {
    die ("ERROR");
}

if(is_null($_POST['dan'])) {
    die ("Morate uneti dan!");
}
if(empty($_POST['mesec'])) {
    die ("Morate uneti mesec!");
}
if(empty($_POST['godina'])) {
    die ("Morate uneti godinu!");
}

$dan = $_POST['dan'];
$mesec = $_POST['mesec'];
$godina = $_POST['godina'];

if((!is_int($_POST['dan']) && $dan<0) || (!is_int($_POST['mesec']) && $mesec<0) || (!is_int($_POST['godina']) && $godina<0)) {
    die ("Svaki unos mora biti prirodan broj!");
}

if($dan>31) {
    die ("Dan može imati najviše 31 dan!");
}
if($mesec>12) {
    die ("Broj meseci ne može biti više od 12!");
}

if($godina<1970 || $godina>2100) {
    die ("Godina može biti samo između 1970. i 2100.");
} 

if(($mesec==4 || $mesec==6 || $mesec==9 || $mesec==11) && $dan>30) {
    die ("Datum nije validan!");
} else echo "Datum je validan!";

function prestupnaGodina($godina) {
    return ((($godina % 4) == 0) && ((($godina % 100) != 0) || (($godina %400) == 0)));
}

if(prestupnaGodina($godina)==true && $mesec=2 && $dan>29) {
    die ("Datum nije validan!");
} else echo "Datum je validan!";

if(prestupnaGodina($godina)==false && $mesec=2 && $dan>2) {
    die ("Datum nije validan!");
} else echo "Datum je validan!";
?>