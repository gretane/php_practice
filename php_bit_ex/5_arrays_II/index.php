<?php
/*1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš
5 elementų su reikšmėmis nuo 5 iki 25.
*/
echo '<h3> 1. </h3>';
/*
2. Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais
indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą
atskirai ir sumas panaudokite kaip reikšmes sukuriant naują
masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio
masyvo, turinčio indeksą 0 dideliame masyve, visų elementų
sumai.
*/
echo '<h3> 2. </h3>';
echo '<h4> 2.a) </h4>';
echo '<h4> 2.b) </h4>';
echo '<h4> 2.c) </h4>';
echo '<h4> 2.d) </h4>';
echo '<h4> 2.e) </h4>';

/*
3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi
būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų
reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro
lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo '<h3> 3. </h3>';
/*
4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai
kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną
“K” raidę, visada būtų didžiojo masyvo visai pradžioje.
*/
echo '<h3> 4. </h3>';
/*
5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra
masyvas [user_id => xxx, place_in_row => xxx] user_id
atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis
skaičius nuo 0 iki 100.
*/
echo '<h3> 5. </h3>';
/*
6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir
paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/
echo '<h3> 6. </h3>';
/*
7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus:
name ir surname. Elementus užpildykite stringais iš atsitiktinai
sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
*/
echo '<h3> 7. </h3>';
/*
8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal
taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą.
Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes
užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte
reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
*/
echo '<h3> 8. </h3>';
/*
9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba
jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
*/
echo '<h3> 9. </h3>';

/*
10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir
color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡,
o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo
reikšmės nuspalvintos spalva color.
*/
echo '<h3> 10. </h3>';
/*
11. Duotas kodas, generuojantis masyvą:
do {
$a = rand(0, 1000);
$b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
$c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match,
swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis
funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php
Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet
sprendimo pagrindas turi būti matematinis.
Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123
- '.$sk2.' kartų.</h3>';
Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
*/
echo '<h3> 11. </h3>';