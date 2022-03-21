<?php

/*
Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su
failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu
perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su
perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be
perduodamo kintamojo, vėl pasidarytų juodas.
*/
echo "<h3 style='color: white;'> 1. </h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7_web_mechanics</title>
    <style>
        <?php
         if (1 == ($_GET['color'] ?? '')) {
            echo "body {background-color: red;}";
         } else {
            echo "body {background-color: black;}";
         }
         ?>
    </style>
</head>
<body>

<a style='color: white;' href='http://localhost/php_practice/php_bit_ex/7_web_mechanics/'>index.php</a> 

<a style='color: white;' href='http://localhost/php_practice/php_bit_ex/7_web_mechanics/index.php?color=1'>color=1</a> 

<?php
/*2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju
nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB
spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
echo "<h3 style='color: white;'> 2. </h3>";

/*
3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku
GET metodu formoje.
*/
echo "<h3 style='color: white;'> 3. </h3>";

/*
4. Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite atitinkamom
spalvom. Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį
orange.php. Pademonstruokite veikimą.
*/
echo "<h3 style='color: white;'> 4. </h3>";

/*
5. Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save
(abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant linko puslapis ne
tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą
puslapį (iš raudono į mėlyną ir atvirkščiai).
*/
echo '<h3> 5. </h3>';

/*
6. Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną
GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių,
nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš
POST.
*/
echo '<h3> 6. </h3>';

/*
7. Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų
tuo pačiu adresu (t.y. į patį save) jau GET metodu.
*/
echo '<h3> 7. </h3>';

/*
8. Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į
pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą
nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus
naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php
puslapį.
*/
echo '<h3> 8. </h3>';

/*
9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10)
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva
pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta
checkboksų (ne kurie, o kiek).
*/
echo '<h3> 9. </h3>';

/*
10. Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo
pažymėta, o kitas kiek iš vis buvo jų sugeneruota.
*/
echo '<h3> 10. </h3>';
/*
11. papildomas
Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais,
kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. Šone yra
rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo
žaidėjo vardas ir mygtukas “mesti kauliuką”. Jį nuspaudus skriptas
automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo
rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu
(parodo kieno eilė “mesti kauliuką”). Žaidimas tęsiamas iki tol, kol
kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie
laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš
naujo.
*/
?>
</body>
</html>