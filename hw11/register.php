<?php

//Kreirati formu na register.html gde cete imati sve inpute iz domaceg 03. Forma treba da salje get metodom parametre na register.php. Na register.php ispisati:
//Postovani/Postovana(u zavisnosti od $pol) $ime $prezime,
//Uspesno ste se registrovali na nasem sajtu.
//Vasa lozinka je: $lozinka
//Vas username je: $email
//Vasi odabrani kursevi su: $lista_kurseva
//Proveravati za svako obavezno polje da li je setovano i ako nije ispisati gresku na ekranu. Skloniti required.
//Oba fajla smestiti u folder hw11 i pushovati na git.

//isset($_GET['submit']){
    $ime=$_GET['ime'];
    if (empty($_GET["ime"])) {
        $imeErr = "Ime je obavezno";
      } else {
        $ime = test_input($_GET["ime"]);
      //}

    $prezime=$_GET['prezime'];
    if (empty($_GET["prezime"])) {
        $prezimeErr = "Prezime je obavezno";
      } else {
        $prezime = test_input($_GET["prezime"]);
      }

    $pol=$_GET['gender'];

    $lozinka=$_GET['password_key'];
    if (empty($_GET["password_key"])) {
        $password_keyErr = "Lozinka je obavezna";
      } else {
        $password_key = test_input($_GET["password_key"]);
      }

    $email=$_GET['email'];
     if (empty($_GET["password_key"])) {
        $password_keyErr = "Lozinka je obavezna";
      } else {
        $password_key = test_input($_GET["password_key"]);
      }

    $kursevi=$_GET['course[]'];
    $kursevi=array("Java", "JS", "Python", "PHP");
    implode('', $kursevi)


?>

<!DOCTYPE html>
<html>

<head>
    <title>Registacija uspešna</title>
</head>

<body>
    <p> <?php if ($pol=="female") echo "Poštovana"; else echo "Poštovani"; echo $ime . $prezime?></p>
    <p>Uspešno ste se registrovali na našem sajtu.</p><br>
    <p>Vaša lozinka je: <?php echo $lozinka ?></p><br>
    <p>Vaš username je: <?php echo $email ?></p><br>
    <p>Vaši odabrani kursevi su: <?php echo $kursevi ?></p>

</body>

</html>