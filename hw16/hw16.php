<?php

echo "1. Zadatak <br><br>";
//Kreirati funkciju koja filtrira niz emailova i vraca samo emailove (za email smatrati da je ispravan ako sadrzi @).

$emails = array("stevan dacic", "gordana.j@gmail.com", "milan_m@yahoo.com", "danijela.lj@gmail.com", "natalie.m.com", "dejan_lj_yahoo.com");

print_r($emails);
echo "<br><br>";

function filteringEmailAdresses($emails) {
  $filteredEmails = [];
  foreach ($emails as $email) {
    if (strpos($email, "@")) { // ili (str_contains($email, "@"))
      array_push($filteredEmails, $email);
    }
  }
  return $filteredEmails;
}

$filteredEmails = filteringEmailAdresses($emails);
print_r($filteredEmails);


echo "<br><br><br><br> 2. Zadatak <br><br><br>";
/*Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza.
Funkcija prima 2 parametra:
niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije i karakter za operaciju koji je po defaultu = “+” */

$numbers = array(2, 9, 5, 7);

function math($numbers, $sign = "+") {
  $calculation = 0;
  //for ($i=0; $i<count($numbers); $i++) 
  foreach ($numbers as $numb) {
    if($sign == true) {
      $calculation = $calculation + $numb;
      print_r($calculation);
      echo "<br>";
    } elseif($sign == "-") {
      $calculation = $calculation - $numb;
      print_r($calculation);
      echo "<br>";
    } elseif($sign == "*"){
      $calculation = $calculation * $numb;
    } elseif($sign == "/"){
      $calculation == $calculation / $numb;
    }
  }
  return $calculation;
}

$calculation = math($numbers);
//print_r($calculation);

echo "<br><br><br><br> 3. Zadatak <br><br><br>";
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
    if(('avg_rating', $data) === true) { //ne može array_key_exists
      echo "U podacima postoji prosečna vrednost.";
    }
}
  

?>