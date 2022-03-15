<?php

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

// echo 'Sizes: <pre>';
// print_r($sizes);
// echo '</pre>';

$k_letter = []; //in_array("K", $m_array3[]);
$i = 0;

foreach(range(0, sizeof($m_array3) -1) as $key_k) {
    $k_letter[$key_k] = array_search("K", $m_array3[$i]);
    $i++;
}

// echo 'K_letter: <pre>';
// print_r($k_letter);
// echo '</pre>';

$m_array3_k = [];

for($i = 0; $i < sizeof($m_array3); $i++) {

    if (array_search("K", $m_array3[$i]) || array_search("K", $m_array3[$i]) === 0) {
        array_push($m_array3_k, $m_array3[$i]);
    }
}

// echo 'm_array3_k only with k without sort: <pre>';
// print_r($m_array3_k);
// echo '</pre>';

$smallest_size_with_k = sizeof($m_array3_k[0]);
$index = 0;

for($i = 0; $i < sizeof($m_array3_k); $i++) {              // while (sizeof $m_array3_k < 0)
    if (sizeof($m_array3_k[$i]) <= $smallest_size_with_k) {
        $smallest_size_with_k = sizeof($m_array3_k[$i]);
        $index = $i;
    } 
}

// echo "The smallest array in m_array3_k is with index: $index. Size: $smallest_size_with_k. <br/><br/>";

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


// echo 'k_sort: <pre>';
// print_r($k_sort);
// echo '</pre>';

// echo 'm_array_3_k without elements: <pre>';
// print_r($m_array3_k);
// echo '</pre>';

$m_array3_k = [];

for($i = 0; $i < sizeof($m_array3); $i++) {

    if (array_search("K", $m_array3[$i]) != true && array_search("K", $m_array3[$i]) !== 0) {
        array_push($m_array3_k, $m_array3[$i]);
    }
}

// echo 'm_array3_k only without k: <pre>';
// print_r($m_array3_k);
// echo '</pre>';

$temp = []; 

$smallest_size_without_k = sizeof($m_array3_k[0]);
$index = 0;

while (sizeof($m_array3_k) > 0) {
    $smallest_size_without_k = sizeof($m_array3_k[0]);
    $index = 0;
    for($i = 0; $i < sizeof($m_array3_k); $i++) {             
        if (sizeof($m_array3_k[$i]) <= $smallest_size_without_k) {
            $smallest_size_without_k = sizeof($m_array3_k[$i]);
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