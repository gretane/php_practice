<?php
/*
1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių
reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/

echo "<h3> 1. </h3>";

$array1 = array();

for($i = 0; $i < 30; $i++) {
 $array1[$i] = rand(5, 25);
};

echo '<pre>';
print_r($array1);
echo'</pre>';

/*
2. Naudodamiesi 1 uždavinio masyvu:

a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
*/

echo "<h3> 2. </h3>";

echo "<h4> 2.a) </h4>";

$count_more10 = 0;

foreach($array1 as $value) {
    if ($value > 10) {
        $count_more10++;
    }
};

echo "There are $count_more10 values larger than 10 in the array. <br/>";


// b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus
// jeigu yra keli;

echo "<h4> 2.b) </h4>";

$temp_array = array();

array_push($temp_array, ...$array1);

rsort($temp_array);

// echo '<pre>';
// print_r($temp_array);
// echo'</pre>';

 $highest_nr = array_slice($temp_array, 0, 1);

 echo 'The highest number is: ' . $highest_nr[0] . '. <br/><br/>';

foreach($array1 as $key => $value) {
    if ($highest_nr[0] == $value) {
        echo "$key => $value <br/>";
    };
};


// c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

echo "<h4> 2.c) </h4>";

$even_sum = 0;

foreach($array1 as $key => $value) {
    if ($key % 2 == 0) {
        //echo $value . '<br/>';
        $even_sum += $value;
    }
}
// echo '<br/>';
echo "The sum of values with even keys is: $even_sum. <br/>";


// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo
// reikšmes minus tos reikšmės indeksas;

echo "<h4> 2.d) </h4>";

$array2 = array();

array_push($array2, ...$array1);


for($i = 0; $i < sizeof($array2); $i++) {   
    $array2[$i] -= $i;
}

echo '<pre>';
print_r($array2);
echo'</pre>';


// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo
// 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

echo "<h4> 2.e) </h4>";

$new_value = 0;

while(sizeof($array2) < 40) {
    $new_value = rand(5, 25);
    array_push($array2, $new_value);
}

echo '<pre>';
print_r($array2);
echo'</pre>';

// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti
// sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

echo "<h4> 2.f) </h4>";

$array2_even = array();
$array2_odd = array();

foreach($array2 as $key => $value) {
    if ($value % 2 == 0) {
        array_push($array2_even, $array2[$key]);
    } else {
        array_push($array2_odd, $array2[$key]);
    }
}
echo 'Array of even key values: <pre>';
print_r($array2_even);
echo'</pre>';

echo 'Array of odd key values: <pre>';
print_r($array2_odd);
echo'</pre>';

// g) Pirminio masyvo elementus su poriniais indeksais padarykite
// lygius 0 jeigu jie didesni už 15;

echo "<h4> 2.g) </h4>";

// $array1

$array1_even = array();

array_push($array1_even, ...$array1);

// echo 'array1_even: <pre>';
// print_r($array1_even);
// echo'</pre>';

foreach($array1 as $key => $value) {
    if (($key % 2 == 0) && ($value > 15)) {
        $array1_even[$key] = 0;
    }
}

echo 'Array1 values higher than 15 (with even indices) changed to 0: <pre>';
print_r($array1_even);
echo'</pre>';


// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė
// didesnė už 10;

echo "<h4> 2.h) </h4>";

foreach($array1_even as $key => $value) {
    if ($value > 10) {
        echo "First found (lowest) index (and value) of element value lower than 10: <br/>";
        echo "$key => $value";
        break;
    }
}


// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus
// turinčius porinį indeksą;

echo "<h4> 2.i) </h4>";

foreach($array1_even as $key => $value) {
    if ($key % 2 == 0) {
        unset($array1_even[$key]);
    }
}

echo 'Delete elements with even indices using function unset(): <pre>';
print_r($array1_even);
echo'</pre>';

/*
3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis
200. Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo "<h3> 3. </h3>";
/*
4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/
echo "<h3> 4. </h3>";
/*
5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus,
sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną,
nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
*/

echo "<h3> 5. </h3>";

/*
6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki
999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y.
neturi kartotis).
*/

echo "<h3> 6. </h3>";

/*
7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6
uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/
echo "<h3> 7. </h3>";
/*
8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio
masyvuose.
*/
echo "<h3> 8. </h3>";
/*
9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo
reikšmės, o jo reikšmės iš būtų antrojo masyvo.
*/
echo "<h3> 9. </h3>";
/*
10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai
nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma.
Penktas trečio ir ketvirto suma ir t.t.
*/
echo "<h3> 10. </h3>";
/*
11. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300.
Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo
didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo
pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo
dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis,
absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos
nesiskirtų viena nuo kitos daugiau nei per 30)
*/

echo "<h3> 11. </h3>";