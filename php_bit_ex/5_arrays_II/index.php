<?php
/*1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš
5 elementų su reikšmėmis nuo 5 iki 25.
*/
echo '<h3> 1. </h3>';

$m_array1 = [];

// for($i = 0; $i < 10; $i++) {
//     for($j = 0; $j < 5; $j++) {
//         $m_array1[$i][$j] = rand(5, 25);
//     }
// }


foreach(range(0, 9) as $key) {
    foreach(range(0, 4) as $key1) {
        $m_array1[$key][$key1] = rand(5, 25);
    }
}

echo 'm_array1 <pre>';
print_r($m_array1);
echo '</pre>';


/*
2. Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
*/
echo '<h3> 2. </h3>';

echo '<h4> 2.a) </h4>';

$count_el = 0;

foreach($m_array1 as $key => $value) {
    foreach($m_array1[$key] as $value1) {
        if ($value1 > 10) {
            $count_el++;
        }
    }
}

echo "There are $count_el elements higher than 10 in m_array1. <br/>";

/*
b) Raskite didžiausio elemento reikšmę;
*/

echo '<h4> 2.b) </h4>';

// foreach($m_array1 as $key => $value) {
//     foreach($m_array1[$key] as $key1 => &$value1) {
//         if ($key == 0 && $key1 == 0) {
//             continue;
//         } else {
//             if ($value1 < $m_array1[$key][$key1 - 1]) {
//                 $temp = $value1;
//                 $value1 = 
//                 $m_array1[$key][$key1 - 1] = 
//             }
//         }
//     }
// }

$m_array1b = [...$m_array1];

foreach($m_array1b as $key => $value) {
    rsort($m_array1b[$key]);

}

// echo 'Sorted m_array1b <pre>';
// print_r($m_array1b);
// echo '</pre>';

$highest = $m_array1b[0][4];

for($i = 1; $i < sizeof($m_array1b); $i++) {

        if ($m_array1b[$i][0] > $highest) {
            $highest = $m_array1b[$i][0];
        }
}


echo "The highest number is $highest. <br/>";

/*
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais
indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/

echo '<h4> 2.c) </h4>';

$sums = [];

foreach(range(0, 4) as $key2) {
    $sums[$key2] = 0;
}

// echo 'Sums: <pre>';
// print_r($sums);
// echo '</pre>';

for($i = 0; $i < sizeof($m_array1); $i++) {
    for ($j = 0; $j < sizeof($m_array1[$i]); $j++) { 
        switch($j) {
            case 0:
                $sums[$j] += $m_array1[$i][$j]; 
                break;
            case 1:
                $sums[$j] += $m_array1[$i][$j]; 
                break;
            case 2:
                $sums[$j] += $m_array1[$i][$j]; 
                break;
            case 3:
                $sums[$j] += $m_array1[$i][$j]; 
                break;
            case 4:
                $sums[$j] += $m_array1[$i][$j]; 
                break;
            default:
               echo "Something went wrong. <br/>";
        }
        
    }
}

echo 'Sums: <pre>';
print_r($sums);
echo '</pre>';

/*d) Visus masyvus “pailginkite” iki 7 elementų
*/

echo '<h4> 2.d) </h4>';

for($i = 0; $i < sizeof($m_array1); $i++) {
    for($j = 0; $j < 7; $j++) {
        if ($j > 4) {
            $rand_number = rand(5, 25);
            array_push($m_array1[$i], $rand_number);
        }  
    }
}

echo 'm_array1[] with added elements: <pre>';
print_r($m_array1);
echo '</pre>';

/*
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą
atskirai ir sumas panaudokite kaip reikšmes sukuriant naują
masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio
masyvo, turinčio indeksą 0 dideliame masyve, visų elementų
sumai.
*/

echo '<h4> 2.e) </h4>';

$sums_e = [];

foreach(range(0, 9) as $key_e) {
    $sums_e[$key_e] = 0;
}

for ($i = 0; $i < sizeof($m_array1) ; $i++) {
    for ($j = 0; $j < sizeof($m_array1[$i]); $j++) { 
        $sums_e[$i] += $m_array1[$i][$j]; 
    }
}

echo 'Sums of arrays\' element values: <pre>';
print_r($sums_e);
echo '</pre>';

/*
3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi
būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų
reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro
lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo '<h3> 3. </h3>';

$m_array3 = [];

$letters = range("A", "Z");

// echo 'Letters array: <pre>';
// print_r($letters);
// echo '</pre>';


foreach(range(0, 9) as $key3) {
    foreach(range(0, rand(1, 19)) as $key3_1) {
        $m_array3[$key3][$key3_1] = $letters[rand(0, 25)];
    }
}


foreach($m_array3 as &$value3) {
    sort($value3);
}

unset($value3);

echo 'm_array3: <pre>';
print_r($m_array3);
echo '</pre>';

/*
4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai
kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną
“K” raidę, visada būtų didžiojo masyvo visai pradžioje.
*/

echo '<h3> 4. </h3>';

$sizes = [];
$i = 0;


foreach(range(0, sizeof($m_array3) -1) as $key_sizes) {
    $sizes[$key_sizes] = sizeof($m_array3[$i]);
    $i++;
}

echo 'Sizes: <pre>';
print_r($sizes);
echo '</pre>';

$k_letter = [];
$i = 0;

foreach(range(0, sizeof($m_array3) -1) as $key_k) {
    $k_letter[$key_k] = array_search("K", $m_array3[$i]);
    $i++;
}

echo 'K_letter: <pre>';
print_r($k_letter);
echo '</pre>';

$m_array3_k = [];

for($i = 0; $i < sizeof($m_array3); $i++) {

    if (array_search("K", $m_array3[$i]) || array_search("K", $m_array3[$i]) === 0) {
        array_push($m_array3_k, $m_array3[$i]);
    }
}

echo 'm_array3_k only with k without sort: <pre>';
print_r($m_array3_k);
echo '</pre>';

$smallest_size_with_k = sizeof($m_array3_k[0]);
$index = 0;

for($i = 0; $i < sizeof($m_array3_k); $i++) {              // while (sizeof $m_array3_k < 0)
    if (sizeof($m_array3_k[$i]) <= $smallest_size_with_k) {
        $smallest_size_with_k = sizeof($m_array3_k[$i]);
        $index = $i;
    } 
}

echo "The smallest array in m_array3_k is with index: $index. Size: $smallest_size_with_k. <br/><br/>";

// array_unshift($m_array3_k, $m_array3_k[$index]);

// echo 'm_array3_k smallest with k at front: <pre>';
// print_r($m_array3_k);
// echo '</pre>';

// unset($m_array3_k[$index + 1]);

// echo 'm_array3_k smallest with k at front and $index + 1 unset: <pre>';
// print_r($m_array3_k);
// echo '</pre>';

$k_sort = [];
$temp = []; 

while (sizeof($m_array3_k) > 0) {
    $smallest_size_with_k = sizeof($m_array3_k[0]);
    $index = 0;
    for($i = 0; $i < sizeof($m_array3_k); $i++) {             
        if (sizeof($m_array3_k[$i]) <= $smallest_size_with_k) {
            $smallest_size_with_k = sizeof($m_array3_k[$i]);
            $index = $i;
        } 
    }
    array_push($k_sort, $m_array3_k[$index]);
    unset($m_array3_k[$index]);

    if (sizeof($m_array3_k) > 0) {
        $temp = [...$m_array3_k];
        $m_array3_k = [...$temp];
    }  

}



echo 'k_sort: <pre>';
print_r($k_sort);
echo '</pre>';

echo 'm_array_3_k without elements: <pre>';
print_r($m_array3_k);
echo '</pre>';

// echo 'm_array3: <pre>';
// print_r($m_array3);
// echo '</pre>';


// echo 'm_array3: <pre>';
// print_r($m_array3);
// echo '</pre>';


// if (sizeof($m_array3[1]) < sizeof($m_array3[1 - 1])) {
//     array_unshift($m_array3, $m_array3[1]);
//     unset($m_array3[1 + 1]);
// }


//in_array("K", $m_array3[]);



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