<?php

/*1.Zadatak 

PRIMER: $users = [
[
	name => “Pera”,
	last_name => “Miric”,
	img =>’...’
],
[
	name => “Mitar”,
	last_name => “Miric”,
	img =>’...’
]
];

Ako je $searchContent = “Pera”, funkcija treba vratiti filtrirani niz u kome ce biti samo prvi clan.
Ako je npr $searchContent = ‘ic’ funkcija treba da vrati filtrirani niz koji ce u ovom primeru imati oba ova elementa.
Ako je $searchContent = “asfas”, funkcija ce u ovom primeru vratiti prazan niz.*/


$users = [
    [
        'name' => "Pera",
        'last_name' => "Miric",
	    'img' =>"..."
    ],
    [
	    'name' => "Mitar",
        'last_name' => "Miric",
        'img' =>"..."
    ]
];

/*Kreirati funkciju search_users($users, $searchContent = “”)
koja iz niza asocijativnog niza trazi elemente i vraca niz filtriranih korisnika.
Korisnici se pretrazuju ili po imenu ili po prezimenu.*/

function search_users($users, $searchContent = "") {
    foreach ($users as $user) {
        foreach ($user as $key => $value);
        $implode = implode(" ", $user);
        if (str_contains($implode, "") !== false) {
            $filteredArray = explode(" ", $implode);
        } else {
            $filteredArray=[];
        } 
    }
    return $filteredArray;
  }

$filteredArray = search_users($users, $searchContent = "Mitar");
print_r($filteredArray);

?>