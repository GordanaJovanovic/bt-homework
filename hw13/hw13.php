<?php

/* 1. U hw13.php Napisati funkciju koja izracunava i vraca ukupnu povrsinu datih bazena, 
kao i funkcije za povrsinu svakog bazena ponaosob. 
Ulazni parametri funkcija su sirina i duzina za pravougaone i poluprecnik za krug. 
*Za peticu ne duplirati kod. U zadatku kreirati i pozvati funkciju. */

function povrsinaPravougaonika ($a, $b) {  //Površina bazena u obliku pravougaonika
    return $a * $b;
}

function povrsinaKruga ($b) {  //Površina bazena u obliku kruga
    return ((($b/2)**2)*M_PI);
}

$p = "povrsinaPravougaonika";
$k = "povrsinaKruga";

function povrsinaPrvogBazena ($p, $k) {
    return $p + $k/2;
}

echo "Površina prvog bazena je: " . povrsinaPrvogBazena ($p(2,1), number_format($k(1),2)). "<br>";
echo "Površina bazena u obliku kruga je: " . number_format($k(1),2) . "<br>";
echo "Površina bazena u obliku pravougaonika je: " . $p(2, 1) ."<br>";

?>