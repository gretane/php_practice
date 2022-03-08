<?php
/*Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų
funkcijų. PHP funkcijas žinoma naudokite (pageidautina).
*/

/*
1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo
metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal
gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir
pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/

echo "<h3> 1. </h3>";

$name = 'Alen';
$surname = 'Wazausky';
$birth_year = 1956;
$years = date('Y') - $birth_year;

echo "My name is $name $surname. I am $years years old. <br/><br/>";

/*
2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį
suapvalinę iki 2 skaičių po kablelio.
*/

echo "<h3> 2. </h3>";


    $a2 = rand(0, 4);
    echo "a is $a2 <br/>";
    $b2 = rand(0, 4);
    echo "b is $b2 <br/>";

    if (($b2 != 0 && $a2 != 0) && $b2 > $a2) {
        $c2 = number_format($b2/$a2, 2, ".");
        echo "$b2 is more than $a2. Qutient is $c2. </br></br>";
    } else if (($b2 != 0 && $a2 != 0) && $a2 > $b2) {
        $c2 = number_format($a2/$b2, 2, ".");
        echo "$a2 is more than $b2. Qutient is $c2. </br></br>";
    } else {
      echo "The nubers a = $a2 and b = $b2 do not meet the criteria. </br></br>";
    };


/*
3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
*/

echo "<h3> 3. </h3>";

    $a3 = rand(0, 25);
    $b3 = rand(0, 25);
    $c3 = rand(0, 25);

    echo "a = $a3 </br> b = $b3 </br> c = $c3 </br></br>"; 

    if (($a3 > $b3 && $a3 < $c3) || ($a3 > $c3 && $a3 < $b3)) {
        echo "Number in the middle is $a3. <br/><br/>";
    } else if (($b3 > $a3 && $b3 < $c3) || ($b3 > $c3 && $b3 < $a3)) {
        echo "Number in the middle is $b3. <br/><br/>";
    } else if (($c3 > $a3 && $c3 < $b3) || ($c3 > $b3 && $c3 < $a3))  {
        echo "Number in the middle is $c3. <br/><br/>";
    } else {
        echo "The numbers a = $a3, b = $b3, c = $c3 do not meet the criteria. <br/><br/>";
    };


/*
4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite
rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų,
ar galima sudaryti trikampį ir atsakymą atspausdintų.
*/

echo "<h3> 4. </h3>";
/*
$var_1 = rand(0, 10);
$var_2 = rand(0, 10);
$var_3 = rand(0, 10);

$is_triangle = function ($a, $b, $c) {
    // $a = rand(0, 10);
    // $b = rand(0, 10);
    // $c = rand(0, 10);

    echo " a = $a, b = $b, c = $c </br>";

    if (($a > $b + $c) || ($b > $a + $c) || ($c > $b + $a) || ($a == 0 && $b == 0 && $c == 0)) {
        echo "It is not a triangle. </br>";
    } else {
        
        echo "Yes. It is a triangle. </br>";
    };
};

$is_triangle($var_1, $var_2, $var_3);
*/

$a4 = rand(0, 10);
$b4 = rand(0, 10);
$c4 = rand(0, 10);

    echo " a = $a4, b = $b4, c = $c4 </br>";

    if (($a4 > $b4 + $c4) || ($b4 > $a4 + $c4) || ($c4 > $b4 + $a4) || ($a4 == 0 && $b4 == 0 && $c4 == 0)) {
        echo "It is not a triangle. <br/><br/>";
    } else {
        
        echo "Yes. It is a triangle. <br/><br/>";
    };


/*
5. Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.
(sprendimui masyvo nenaudoti).
*/

echo "<h3> 5. </h3>";

    $a5 = rand(0, 2);
    $b5 = rand(0, 2);
    $c5 = rand(0, 2);
    $d5 = rand(0, 2);

$string5 = "$a5 $b5 $c5 $d5";

echo "$string5 </br>";
// $zero = "/0/";
// $one = "/1/";
// $two = "/2/";

$zeros = preg_match_all("/0/", $string5);
$ones = preg_match_all("/1/", $string5);
$twos = preg_match_all("/2/", $string5);

echo "There are $zeros zeros, $ones ones, $twos twos. <br/><br/>";


/*
6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir
jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
echo "<h3> 6. </h3>";


$num6 = rand(1, 6);

switch($num6) {
    case 1:
        echo "<h1> $num6 </h1> <br/><br/>";
        break;
    case 2:
        echo "<h2> $num6 </h2> <br/><br/>";
        break;
    case 3:
        echo "<h3> $num6 </h3> <br/><br/>";
        break;
    case 4:
        echo "<h4> $num6 </h4> <br/><br/>";
        break;
    case 5: 
        echo "<h5> $num6 </h5> <br/><br/>";
        break;
    default: 
        echo "<h6> $num6 </h6> <br/><br/>";  
};


/*
7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10.
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
*/

echo "<h3> 7. </h3>";

$a7 = rand(-10, 10);
$b7 = rand(-10, 10);
$c7 = rand(-10, 10);

//$a7

if ($a7 == 0) {
    echo "<p style='color: red'> $a7 </p>";
} else if ($a7 > 0) {
    echo "<p style='color: blue'> $a7 </p>";
} else if ($a7 < 0) {
    echo "<p style='color: green'> $a7 </p>";
};

//$b7

if ($b7 == 0) {
    echo "<p style='color: red'> $b7 </p>";
} else if ($b7 > 0) {
    echo "<p style='color: blue'> $b7 </p>";
} else if ($b7 < 0) {
    echo "<p style='color: green'> $b7 </p>";
};

//$c7

if ($c7 == 0) {
    echo "<p style='color: red'> $c7 </p><br/>";
} else if ($c7 > 0) {
    echo "<p style='color: blue'> $c7 </p><br/>";
} else if ($c7 < 0) {
    echo "<p style='color: green'> $c7 </p><br/>";
};

/*
8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR
taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida.
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų
atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite
rand() funkcija nuo 5 iki 3000.
*/

echo "<h3> 8. </h3>";

$candles_amount = rand(5, 3000);

if ($candles_amount <= 1000) {
    echo "<p> Amount of candles: $candles_amount. Price: $candles_amount EUR. </p><br/>";

} else if ($candles_amount > 1000 && $candles_amount <= 2000) {
    $price = number_format($candles_amount * 97 / 100, 2);
    echo "<p> Amount of candles: $candles_amount. Price: $price EUR. </p><br/>";

} else if ($candles_amount > 2000) {
    $price = number_format($candles_amount * 96 / 100, 2);
    echo "<p> Amount of candles: $candles_amount. Price: $price EUR. </p><br/>";
};

/*
9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm
reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį
vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės
nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko
skaičiaus.
*/

echo "<h3> 9. </h3>";

$a9 = rand(0, 100);
$b9 = rand(0, 100);
$c9 = rand(0, 100);

$arithmetical_mean = number_format(($a9 + $b9 + $c9) / 3, 0);

echo "<p> a = $a9, b = $b9, c= $c9. Arithmetical mean is $arithmetical_mean. </p>";

// all good

if (($a9 >= 10 && $a9 <= 90) && ($b9 >= 10 && $b9 <= 90) && ($c9 >= 10 && $c9 <= 90)) {   
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is the same: $arithmetical_mean. </p></br>";
};


// $a9

if (($a9 >= 10 && $a9 <= 90) && ($b9 < 10 || $b9 > 90) && ($c9 < 10 || $c9 > 90)) {
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $a9. </p></br>";
} else if (($a9 >= 10 && $a9 <= 90) && ($b9 >= 10 && $b9 <= 90) && ($c9 < 10 || $c9 > 90)) {
    $arithmetical_mean = number_format(($a9 + $b9) / 2, 0);
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $arithmetical_mean. </p></br>";
}  else if (($a9 >= 10 && $a9 <= 90) && ($b9 < 10 || $b9 > 90) && ($c9 > 10 && $c9 <= 90)) {
    $arithmetical_mean = number_format(($a9 + $c9) / 2, 0);
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $arithmetical_mean. </p></br>";
};

//$b9

if (($b9 > 10 && $b9 <= 90) && ($a9 < 10 || $a9 > 90) && ($c9 < 10 || $c9 > 90)) {
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $b9. </p></br>";
} else if (($b9 > 10 && $b9 <= 90) && ($a9 < 10 || $a9 > 90) && ($c9 > 10 && $c9 <= 90)) {
    $arithmetical_mean = number_format(($b9 + $c9) / 2, 0);
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $arithmetical_mean. </p></br>";
};

//$c9

if (($c9 > 10 && $c9 <= 90) && ($b9 < 10 || $b9 > 90) && ($a9 < 10 || $a9 > 90)) {
    echo "<p> Arithmetical mean without quantities lower than 10 or higher than 90 
    is $c9. </p></br>";
};

//none
if (($a9 < 10 || $a9 > 90) && ($b9 < 10 || $b9 > 90) && ($c9 < 10 || $c9 > 90)) {   
    echo "<p> The quantities do not meet the criteria. </p></br>";
};


/*
10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes.
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją
rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės.
Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį
prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/

echo "<h3> 10. </h3>";

$h = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);

echo "<h3> Before: $h : $min : $sec </h3>";

$extra_sec = rand(0, 300);

echo "Extra seconds: $extra_sec <br/>";

$add_sec = $extra_sec + $sec;

// sec
if ($add_sec <= 59) {
    echo "<h3> After: $h : $min : $add_sec </h3>";

    //min
} else if ($add_sec > 59) {
    $sec = $add_sec % 60;
    $min += ($add_sec - $sec)/60;
    
    // h
    if ($min > 59) {
        if ($h == 23) {
            $h = 0;
            $min = $min - 60;
            echo "<h3> After: $h : $min : $sec </h3>";
        } else {
            ++$h; 
            $min = $min - 60;
            echo "<h3> After: $h : $min : $sec </h3>";
        };
    } else {
        echo "<h3> After: $h : $min : $sec </h3>";
    };
};
//if == 60 or if == 0;
//if midnight;



/*
11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su
atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes
viename stringe, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas
tarpais. Naudoti ciklų ir masyvų NEGALIMA
*/