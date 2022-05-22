<?php

//Sve raditi u jednom fajlu hw15.php

echo "1.Zadatak <br><br>";

//Dat je niz ucenika $hwArray = [“Pera”, ”Milka”, ”Pera” ,”Sonja”, “Danilo”, “Marica”, ”Ivica”, ”Sonja”, ”Vanja”, “Mira”];
$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];

//a) Najpre u ovaj postojeci niz dodati vase ime.
if(in_array("Gordana", $hwArray)) {
  die ('Ime Gordana već postoji!');
} else array_push($hwArray, "Gordana");

//b) Nakon toga dodati ime vase/g rodjaka/e na trecem mestu u nizu.
if(in_array("Jelena", $hwArray)) {
  die ('Ime Jelena već postoji!');
} else {
  $rodjaka=["Jelena"];
  array_splice($hwArray, 2, 0, $rodjaka);
}

//c) Nakon toga prebrojte koliko ucenika ima
echo count($hwArray);
echo "<br>";
echo "<br>";

//d) Zatim dodati novog clana na pocetak niza
if(in_array("Stevan", $hwArray)) {
  die ('Ime Stevan već postoji!');
} else array_unshift($hwArray, "Stevan");

//e) Zatim obrisati Danila iz niza
/*$nizBezDanila = array_diff($hwArray, array('Danilo'));
print_r($nizBezDanila);*/
array_splice($hwArray, 6, 1);

//f) Zatim skloni sve duplirane clanove niza
array_unique($hwArray);
array_values($hwArray);
print_r($hwArray);

//URAĐENO: Za svako ubacivanje u niz ispitati da li postoji u nizu i ako vec postoji ne dozvoliti da se upise.


echo "<br><br><br><br> 2. Zadatak <br><br>";
/*Kreirati $data koja je niz asocijativnih nizova. Svaki asocijativni niz treba da ima strukturu:
[
	‘name’ => “Pera”,
	‘last_name’ => “Peric”,
	‘age’ => 28,
	‘gender’ => ‘male’,
	‘avg_rating’ => 7.5,
	‘married’ => false,
	‘courses’ => [‘laravel’, ‘react’, ‘jQuery’]
]
Proizvoljno dodati 5 asocijativnih niza.*/

$data = array(
    array('name' => "Stevan",
          'last_name' => "Dacic",
          'age' => 31,
          'gender' => 'male',
          'avg_rating' => 9,7,
          'married' => false,
          'courses' => ["Laravel", "PHP", "jQuery"]
),
    array('name' => "Gordana",
          'last_name' => "Jovanovic",
          'age' => 30,
          'gender' => 'female',
          'avg_rating' => 7.8,
          'married' => false,
          'courses' => ["HTML", "CSS", "PHP", "WP"]
        ),
    array('name' => "Milan",
          'last_name' => "Mladenović",
          'age' => 36,
          'gender' => 'male',
          'avg_rating' => 8.5,
          'married' => false,
          'courses' => ["React", "jQuery"]
        ),
    array('name' => "Danijela",
          'last_name' => "Ljubosavljevic",
          'age' => 40,
          'gender' => 'female',
          'avg_rating' => 9.6,
          'married' => true,
          'courses' => ["HTML", "CSS", "JS"]
        ),
    array('name' => "Natalie",
          'last_name' => "Mladenovic",
          'age' => 38,
          'gender' => 'female',
          'avg_rating' => 8.3,
          'married' => true,
          'courses' => ["Python", "Java"]
        ),
    array('name' => "Dejan",
        'last_name' => "Ljubosavljevic",
        'age' => 45,
        'gender' => 'male',
        'avg_rating' => 10,
        'married' => true,
        'courses' => ["HTML", "CSS", "PHP", "MySQL"]
      ),
    );

/*Isisati za sve pr:
    1. Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: Laravel, PHP, jQuery.
    2. */

 foreach ($data as $podatak) {
    echo $podatak['name'] . " " . $podatak['last_name'] . " " . "ima " . $podatak['age'] . " " . "godina i ";
    if($podatak['gender'] == "male" && $podatak['married'] == true) {
      echo "oženjen je.";
    } elseif($podatak['gender'] == "female" && $podatak['married'] == true) {
     echo "udata je.";
    } elseif($podatak['gender'] == "male" && $podatak['married'] == false) {
      echo "nije oženjen.";
    } elseif($podatak['gender'] == "female" && $podatak['married'] == false) {
     echo "nije udata.";
    };
    echo " Ima prosečnu ocenu " . $podatak['avg_rating'] . ", a kurseve koje trenutno sluša su: ";
    $courses = implode(", ", $podatak['courses']);
      echo " $courses.<br><br>";
} 

?>