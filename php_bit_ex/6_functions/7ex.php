<?php


/*
7. Sugeneruokite atsitiktinio -- el numb -- (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus
paskutinį, elementai yra atsitiktiniai skaičiai nuo -- el value -- 0 iki 10, o paskutinis
masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis
masyvas. Viską pakartokite atsitiktinį nuo -- nests/repeat -- 10 iki 30 kiekį kartų.
Paskutinio masyvo paskutinis elementas yra lygus 0;
*/
echo "<h3> 7. </h3>";

 //recursive
// -------------------------------------------------------------------------
// function array_nest($array, $repeat, $rand) {
    
//     foreach(range(0, $rand) as $key) {       // change el numb 10-20
//         $array[$key] = rand(0, 10); 
//     }

//     if ($repeat == 0) {
//         $array[sizeof($array)-1] = 0;                   // last el of array
//         return $array;
//     }
//     $array[sizeof($array)-1] = [];
//     $array[sizeof($array)-1] = array_nest($array, $repeat-1, rand(1, 10));

//     return $array;

// }

// $m_array7 = [];

// $rand_d = rand(1, 10); 

// echo $rand_d . '<br/>';

// $m_array7 = array_nest($m_array7, 5, rand(1, 10));

// echo 'm_array7 recursive: <pre>';
// print_r($m_array7);
// echo '</pre>';

// // function array_nest($array, $repeat = 2) {

// //     $a = $repeat;
// //     echo "$a <br/>";
// //     $el_nr = rand(1, 2);

// // foreach(range(0, $el) as $key) {
// //     $array[$key] = rand(0, 10);
    
// // }

// // if ($repeat == 0) {
// //     $array[sizeof($array)] = 0;
// //     return $array;
// // }

// // $a = $repeat - 1;

// // $array[sizeof($array)] = array_nest($array, $a);

// // return $array;
// // }
//--------------------------------------------------------------

//loop
// $array = [10...20];
// $value = 0, 10;
// $repeat = 10, 30;
// $last_array[last_el] = 0;

// $repeat = rand(10, 30);

// echo $repeat . "<br/>";

// $deepest_array = [];

// foreach(range(0, rand(9, 29)) as $key7) {
//     $deepest_array[$key7] = rand(0, 10);
// }

// $deepest_array[sizeof($deepest_array)-1] = 0;

// echo 'deepest_array: <pre>';
// print_r($deepest_array);
// echo '</pre>';



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
//         print_r($vaikas);
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
// echo "Iterraciju skaicius - ".$kiekKartoti."<br>";
// masyvoGeneratorius([], $kiekKartoti);
?>