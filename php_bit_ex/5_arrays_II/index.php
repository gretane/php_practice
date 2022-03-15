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
5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra
masyvas [user_id => xxx, place_in_row => xxx] user_id
atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis
skaičius nuo 0 iki 100.
*/
echo '<h3> 5. </h3>';

$m_array5 = [];

foreach(range(0, 29) as $key5) {
    foreach(range(0, 1) as &$key5_1) {
        if ($key5_1 == 0) {
            $key5_1 = "user_id";
            $m_array5[$key5][$key5_1] = rand(1, 1000000);
        } else if ($key5_1 == 1) {
            $key5_1 = "place_in_row";
            $m_array5[$key5][$key5_1] = rand(0, 100);
        } else {
            echo "Something went wrong... <br/>";
        }
    }
}

unset($key5_1);

echo 'm_array5: <pre>';
print_r($m_array5);
echo '</pre>';

/*
6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir
paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/
echo '<h3> 6. </h3>';

$temp5 = [];
$temp5_1 = [];

// sort user_id in ascending order


$smallest_id = $m_array5[0]["user_id"];
$index = 0;

while (sizeof($m_array5) > 0) {
    $smallest_id = $m_array5[0]["user_id"];
    $index = 0;
    for ($i = 0; $i < sizeof($m_array5); $i++) {
        if ($smallest_id >= $m_array5[$i]["user_id"]) {
            $smallest_id = $m_array5[$i]["user_id"];
            $index = $i;
        }
    }

    array_push($temp5, $m_array5[$index]);    
    unset($m_array5[$index]);

    if (sizeof($m_array5) > 0) {

        $temp5_1 = [...$m_array5];
        $m_array5 = [...$temp5_1];
    }  
}

$m_array5 = [...$temp5];

echo 'm_array5 user_id sorted: <pre>';
print_r($m_array5);
echo '</pre>';


// sort place_in_row in decending order

$temp5 = [];
$temp5_1 = [];

$largest = $m_array5[0]["place_in_row"];
$index = 0;

while (sizeof($m_array5) > 0) {
    $largest = $m_array5[0]["place_in_row"];
    $index = 0;
    for ($i = 0; $i < sizeof($m_array5); $i++) {
        if ($largest <= $m_array5[$i]["place_in_row"]) {
            $largest = $m_array5[$i]["place_in_row"];
            $index = $i;
        }
    }

    array_push($temp5, $m_array5[$index]);    
    unset($m_array5[$index]);

    if (sizeof($m_array5) > 0) {

        $temp5_1 = [...$m_array5];
        $m_array5 = [...$temp5_1];
    }  
}

$m_array5 = [...$temp5];

echo 'm_array5 place_in_row sorted: <pre>';
print_r($m_array5);
echo '</pre>';


/*
7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus:
name ir surname. Elementus užpildykite stringais iš atsitiktinai
sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
*/
echo '<h3> 7. </h3>';

function rand_string() {
    $string6 = "abcdefghijklmnopqrstuvwxyz";
    $rand_string = '';

    while(strlen($rand_string) < rand(5, 15)) {
        $rand_string .= substr($string6, rand(0, 25), 1);
    }
    return $rand_string;
}

$rand_string = '';

// $add_array = [];

// foreach(range(0, 9) as $key_add) {
//     foreach(range(0, 1) as &$key_add_1) {
//         if ($key_add_1 == 0) {
//             $key_add_1 = "name";
//             $rand_string = rand_string();
//             $add_array[$key_add]["name"] = $rand_string; 
//         } else if ($key_add_1 == 1) {
//             $key_add_1 = "surname";
//             $rand_string = rand_string();
//             $add_array[$key_add]["surname"] = $rand_string;
//         }
//     }
// }

// echo 'add_array: <pre>';
// print_r($add_array);
// echo '</pre>';

for($i = 0; $i < sizeof($m_array5); $i++) {
    for($j = 0; $j < 4; $j++) {
        if ($j == 2) {
            $rand_string = rand_string();
            $m_array5[$i]["name"] = $rand_string;

        } else if ($j == 3) {
            $rand_string = rand_string();
            $m_array5[$i]["surname"] = $rand_string;

        }
    }
}

echo 'm_array5 with name and surname: <pre>';
print_r($m_array5);
echo '</pre>';

/*
8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal
taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą.
Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes
užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte
reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
*/

echo '<h3> 8. </h3>';

$m_array8 = [];

$rand_array_el = 0;

foreach(range(0, 9) as $key8) {
    $rand_array_el = rand(0, 5);
    if ($rand_array_el == 0) {
        $m_array8[$key8] = rand(0, 10);
    } else {
        foreach(range(0, $rand_array_el) as $key8_1) {

            $m_array8[$key8][$key8_1] = rand(0, 10);
        } 
    }


}

echo 'm_array8: <pre>';
print_r($m_array8);
echo '</pre>';

/*
9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba
jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
*/

echo '<h3> 9. </h3>';

$sum = 0;

foreach($m_array8 as $key9 => $value9) {
 if (is_array($m_array8[$key9])) {
     $sum += array_sum($m_array8[$key9]);
 } else {
     $sum += $m_array8[$key9];
 }
}

echo "The overall sum is: $sum. <br/><br/>";

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