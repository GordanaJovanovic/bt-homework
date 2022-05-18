<?php

echo "1. Zadatak <br><br><br>";
//Kreirati funkciju koja filtrira niz emailova i vraca samo emailove (za email smatrati da je ispravan ako sadrzi @).

$emails = array("stevan dacic", "gordana_j@gmail.com", "milan_m@zavod.rs", "danijela.lj@nsz.rs", "natalie.m.gmail.com", "dejan_lj_yahoo.com");

print_r($emails);
echo "<br><br>";

function filtriraDobroIspisaneEmailAdrese($emails) {
  $filteredEmails = [];
  foreach ($emails as $email) {
    if (str_contains($email, "@") == true) {
      array_push($filteredEmails, $email);
    }
  }
  return $filteredEmails;
}

$filteredEmails = filtriraDobroIspisaneEmailAdrese($emails);
print_r($filteredEmails);


echo "<br><br><br> 2. Zadatak <br><br><br>";
/*Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza.
Funkcija prima 2 parametra:
niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije i karakter za operaciju koji je po defaultu = “+”;*/

echo "<br><br><br> 3. Zadatak <br><br><br>";
//Kreirati funkciju koja proverava da li u datom asocijativnom nizu postoji odredjeni kljuc. != array_key_exists().

$data = array('name' => "Gordana",
          'last_name' => "Jovanovic",
          'age' => 30,
          'gender' => 'female',
          'avg_rating' => 7.8,
          'married' => false,
          'courses' => ["HTML", "CSS", "PHP", "WP"]
        );

function keyExists($data) {
  foreach ($data as $key => $value)
    if(array_key_exists('avg_rating', $data) === true) {
      echo "U podacima postoji prosečna vrednost.";
    }
}
  

?>