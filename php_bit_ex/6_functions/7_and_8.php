<?php


/*
7. Sugeneruokite atsitiktinio -- el numb -- (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus
paskutinį, elementai yra atsitiktiniai skaičiai nuo -- el value -- 0 iki 10, o paskutinis
masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis
masyvas. Viską pakartokite atsitiktinį nuo -- nests/repeat -- 10 iki 30 kiekį kartų.
Paskutinio masyvo paskutinis elementas yra lygus 0;
*/
echo "<h3> 7. </h3>";

// // -------------------------------------------------------------------------
// function array_nest() {
//     $array = 0;
//     $array_1 = [];

//     for($i = 0; $i < rand(10, 30); $i++) {
        
//         foreach(range(0, rand(9, 19)) as $key) {       // change el numb 10-20
//             $array_1[] = rand(0, 10); 
//         }

//         $array_1[sizeof($array_1)-1] = $array;
//         $array = $array_1;
//         $array_1 = [];
//     }

//     return $array;
// }

// $m_array7 = [];

// $m_array7 = array_nest();

// echo 'm_array7 recursive: <pre>';
// print_r($m_array7);
// echo '</pre>';

//--------------------------------------------------

$m_array7 = [];
$rand_7 = rand(9, 29);

echo "Repeat $rand_7 times. <br/>";

foreach(range(0, rand(9, 19)) as $key7) {       
    $m_array7[] = rand(0, 10); 
}

function array_nest($repeat) {
    $array_length = rand(10, 20);
    $array = [];
        
    for($i = 0; $i < $array_length - 1; $i++){
        $array[] = rand(0, 10);
    }

    if ($repeat > 1) {
        $array[] = array_nest($repeat-1);
    }
    else {
        $array[] = 0;
    }
    
    return $array;
}

$m_array7[sizeof($m_array7)-1] = array_nest($rand_7);

echo 'm_array7 recursive: <pre>';
print_r($m_array7);
echo '</pre>';


//--------------------------------------------------

//not my solutions

// function funcH () {
//     $array = 0;
//     $array2 = [];
    
//      rand(10,20);
    
//     for ($i = 0; $i< rand(10,20); $i++) {
        
//        foreach (range(1, rand(10,20)) as $_) {
//         $array2[] = rand(0,10);
//        }
    
//        $array2 [] = $array;
//        $array =  $array2;
//        $array2 = [];
//     }
    
//     return $array;
//     }
    
//     echo '<pre>';
    
//     print_r(funcH());

//---------------------------------------------------


// $tevas =[];
// $gylis = rand(10,30);
// foreach(range(0,rand(10,20)-1) as $i){
//     $tevas[]=rand(0,10);
// }
// $tevas[] = generator($gylis);
// echo "gylis lygus : $gylis <br>";
 
// function generator($dept){
//     $arrLength=rand(10,20);
//     $arr=[];
//     for($i=0;$i<$arrLength-1;$i++){
//         $arr[]=rand(10,20);
//     }
//     if($dept>0){
//         $arr[]=generator($dept-1);
//     }
//     else{
//         $arr[]=0;
//     }
//  return $arr; 
// }

// echo '<pre>';
// print_r($tevas);
// echo '</pre>';

//---------------------------------------------------

// function masyvoGeneratorius($vaikas, $key){//masyvas, kiek iteraciju, kelinta yra dabar
//     if($key==0){
//        // echo "key = 0<br>";
//         echo '<pre>';
//         print_r($vaikas);
//         echo '</pre>';
//         return;
//     }
    
//     $masyvas = [];
//     $masyvoIlgis=rand(10, 20);

//     foreach(range(1, $masyvoIlgis-1) as $index) {
//         $masyvas[$index] = rand(0, 10);
//     } 
    
//     //Pirma karta pildant vaikas yra visiskai tuscias masyvas
//     if($vaikas == []){
//         $masyvas[$masyvoIlgis]=0;
//     }
//     else{
//         $masyvas[$masyvoIlgis]=$vaikas;
//     }
    
//     //echo "rekursija<br>";     
//     $key--;
//     //print_r($masyvas);
//     masyvoGeneratorius($masyvas, $key);//return $masyvas
// }

// $kiekKartoti = rand(10, 30);
// echo "Iteraciju skaicius - ".$kiekKartoti."<br>";
// masyvoGeneratorius([], $kiekKartoti);


/*
8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.
Skaičiuoti reikia visuose masyvuose ir submasyvuose.
*/

echo "<h3> 8. </h3>";

$sum = array_sum($m_array7);

echo "Sum of first level array: $sum. <br/>";

//$rand_7

// function array_sum_el($repeat) {
//     $array_length = rand(10, 20);
//     $array = [];
//     $sum = 0;    
//     for($i = 0; $i < $array_length - 1; $i++){
//         $array[] = rand(10, 20);
//     }
// // $sum += array_sum($array);
//     if ($repeat > 1) {
//         $array[] = array_nest($repeat-1);
//     }
//     else {
//         $array[] = 0;
//     }
    
//     return $array;
// }

$sumAll = 0;
function sumArr($arr) {
    static $sum = 0;
    foreach($arr as $val) {
        if(!is_array($val)) {
            $sum += $val;
        } else {
            sumArr($val);
        }
    }
return $sum;
}

$sumAll = sumArr($m_array7);

echo "Overall sum is: $sumAll. <br/>";