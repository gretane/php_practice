<?php

/*
1. Naršyklėje nupieškite linija iš 400 “*”.
a) Naudodami css stilių “suskaldykite” liniją taip, kad visos
žvaigždutės matytųsi ekrane;
b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje
nebūtų daugiau nei 50 “*”;
*/

echo "<h3> 1. </h3>";

$string1 = '';

for($i = 0; $i < 400; $i++) {
    $string1 .= '* ';
};

echo "<h4> 1) Break points with inline CSS </h4>";

echo "<div style='width:95%;'> $string1 </div>";

echo "<h4> 2) Break points with php </h4>";

$string1 = '';

for($i = 0; $i < 400; $i++) {
    if ($i % 50 == 0) {
        echo '<br/>';
    };
    echo '* ';
};

/*
2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos
atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.
Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/

echo "<h3> 2. </h3>";

$larger_than_150 = 0;


for($i = 0; $i < 300; $i++) {
    $a = rand(0, 300);
    
    if ($a > 150) {
        $larger_than_150++;
    };

    if ($a > 275) {
        echo "<span style='color: red'>$a </span>";
    } else echo "$a ";
    
};

echo '<br/><br/>';

echo "There are $larger_than_150 numbers larger than 150. <br/>";

/*
3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio
skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be
liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio
neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi
ekrane.
*/

echo "<h3> 3. </h3>";

$rand_nr3 = rand(3000, 4000);
$string3 = '';

echo "$rand_nr3 <br/>";

for($i = 0; $i < $rand_nr3; $i++) {
    if (($i != 0) && ($i % 77 == 0)) {
        $string3 .= $i . ', ';

    };
};

$string3 = rtrim($string3, ', ');

echo "<p> $string3 </p> <br/>";


/*
4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css
stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
// */

 echo "<h3> 4. </h3>";

 $string4 = '';

for ($i = 0; $i < 10000; $i++) {
    if (($i != 0) && ($i % 100 == 0)) {
        $string4 .= '<br/>';
    }
    $string4 .= '* ';
};

echo "<div style='word-spacing: 9.2px;'> $string4 </div><br/>";

/*
5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
*/


echo "<h3> 5. </h3>";

$string5 = "<article> "; 

for ($i = 0; $i < 100; $i++) {

    for ($j = 0; $j < 100; $j++) {
        if ($i == $j || $j == 99 - $i){
            $string5 .= "<span style ='color: red; word-spacing:9.2px'>* </span>";
        } else {
            $string5 .= "<span style='word-spacing:9.2px'>* </span>";
        }
    }
    $string5 .= '<br/>';
};

$string5 .= " </article></br>";

echo "$string5 <br/>";


/*
6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija,
kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į
ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą
stabdome:
a) Iškritus herbui;
b) Tris kartus iškritus herbui;
c) Tris kartus iš eilės iškritus herbui;
*/

echo "<h3> 6. </h3>";

$coin_throw = rand(0, 1);

if ($coin_throw == 0) {
    echo " H <br/>";
} else {
    echo " S <br/>";
}

echo "<h4> 6.a) Stop when H is thrown</h3>";

do {
    $coin_throw = rand(0, 1);

    if ($coin_throw == 1) {
        echo " S <br/>";
    } else {
        echo " H <br/>";
        break;
    };

} while ($coin_throw != 0);

echo "<h4> 6.b) Stop when H is thrown 3 times</h3>";

$count_H = 0;

do {
    $coin_throw = rand(0, 1);

    if ($coin_throw == 1) {
        echo " S <br/>";
    } else {
        echo " H <br/>";
        $count_H++;
    };

} while ($count_H < 3);

echo "<h4> 6.b) Stop when H is thrown 3 times in a row</h3>";

$count_H = 0;
$coin_throw = rand(0, 1);


while ($count_H < 3) {
    if ($count_H < 3) {
        if ($coin_throw == 0) {
            echo " H ";
            $count_H++;
            echo "Count_H = $count_H <br/>";
        } else {
            $count_H = 0;
            echo " S ";
            echo "Count_H = $count_H <br/>";
        }
        $coin_throw = rand(0, 1);
    };
};


/*
7. Kazys ir Petras žaidžia Bingo. Petras surenka taškų kiekį nuo 10 iki 20,
Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų
vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį
generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222
taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba
daugiau taškų. Nenaudoti cikle break.
*/
echo "<h3> 7. </h3>";


/*
8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą
(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia
padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos
(perkrovus puslapį spalvos turi keistis).
*/

echo "<h3> 8. </h3>";

/*
9. Panaudokite (nėra).
*/

echo "<h3> 9. </h3>";

/*
10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite
pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į
lentą).
a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20
mm. Suskaičiuokite kiek reikia smūgių.
b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30
mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija
tikimybei sumodeliuoti), kad smūgis nepataikys į vinį.
Suskaičiuokite kiek reikia smūgių.
*/

echo "<h3> 10. </h3>";

/*
11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
didžiausio.
*/

echo "<h3> 11. </h3>";






