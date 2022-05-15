<?php

/*2.Zadatak 
Napisati funkciju koja izracunava broj kamiona koji mogu da predju zadatu rutu za odredjenu litrazu goriva,
ako se za svaki kamion zna kolika im je potrosnja.
Znaci ulazni parametri su $ukupnoGorivo i $potrposnjaPoKamionu + $ostatakGorivaFlag(bool) 
koji nije obavezan ali ako se ne unese da se podrazumeva da je false. 
Funkcija treba da vrati $brojKamionaKojiMoguDaPredjuRutu ili  $ostatakGoriva u zavisnosti od $ostatakGorivaFlag.
Ako se unese za $ostatakGorivaFlag da je true, onda ce funkcija vratiti ostatak goriva a u suprotnom treba da vrati broj kamiona.*/

function brojKamionaKojiMoguDaPredjuRutu($ukupnoGorivo, $potrposnjaPoKamionu, $ostatakGorivaFlag=false) {
    if($ostatakGorivaFlag==true) {
        $ostatakGoriva = $ukupnoGorivo % $potrposnjaPoKamionu;
        echo "Ostatak goriva je: ";
        return $ostatakGoriva;
    } else {
        $brojKamionaKojiMoguDaPredjuRut = $ukupnoGorivo / $potrposnjaPoKamionu;
        echo "Broj kamiona je: ";
        return $brojKamionaKojiMoguDaPredjuRut;
    }
}
echo floor(brojKamionaKojiMoguDaPredjuRutu(350, 30));

//Ne znam da li si ovako mislio, ali radi, tj. ispisuje rešenja u zavisnosti od promene zadate vrednosti, tj. true/false

?>