<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='text-align: left'>
    


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

$Petras_points = 0;
$Kazys_points = 0;

$i = 0;

while ($i != 1) {
    
    $Petras_points += rand(10, 20);
    $Kazys_points += rand(5, 25);
    
    
    if ($Petras_points > $Kazys_points) {
        echo "Petras points: $Petras_points. Kazys points: $Kazys_points. <b>Round winner: Petras.</b><br/>";
    } else if ($Petras_points < $Kazys_points) {
        echo "Petras points: $Petras_points. Kazys points: $Kazys_points. <b>Round winner: Kazys.</b><br/>";
    } else {
        echo "Petras points: $Petras_points. Kazys points: $Kazys_points. Petras and Kazys have the same points. <br/>";
    };

    if ($Petras_points >= 222 && $Kazys_points < 222) {
        $i = 1;
    } else if ($Kazys_points >= 222 && $Petras_points < 222) {
        $i = 1;
    } else if ($Kazys_points >= 222 && $Petras_points >= 222) {
        $i = 1;
    };

};


if ($Petras_points > $Kazys_points) {
    echo "Overal winner: Petras <br/>";
} else if ($Petras_points < $Kazys_points) {
    echo "Overal winner: Kazys <br/>";
} else if ($Petras_points == $Kazys_points) {
    echo "Both are winners <br/>";
} else {
    echo "Something went wrong? <br/>";
}

/*
8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą, 
kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų 
atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/

echo "<h3> 8. </h3>";

echo "<article style='text-align:center;'>";

$color1 = rand(0, 255);
$color2 = rand(0, 255);
$color3 = rand(0, 255);

for ($i = 0; $i <= 11; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $color1 = rand(0, 255);
        $color2 = rand(0, 255);
        $color3 = rand(0, 255);
        echo "<span style='color:rgb($color1, $color2, $color3);'>* </span>";
    }
    echo '<br/>';
};
for ($i = 10; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        $color1 = rand(0, 255);
        $color2 = rand(0, 255);
        $color3 = rand(0, 255);
        echo "<span style='color:rgb($color1, $color2, $color3);'>* </span>";
    }
    echo '<br/>';
};

echo '</article><br/>';

/*
9. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite
pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į
lentą).
a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20
mm. Suskaičiuokite kiek reikia smūgių.
b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30
mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija
tikimybei sumodeliuoti), kad smūgis nepataikys į vinį.
Suskaičiuokite kiek reikia smūgių.
*/
//hammer, nails, hammer in, hit

echo "<h3> 9. </h3>";

echo "<h4> 9.a) Gently hammer in 5 nails</h4>"; 

$light_hits_depth = 0;
$fully_hammered_in = 85;
$one_nail_hits = 0;

for ($i = 1; $i <= 5; $i++){
    $one_nail_hits = 0;
    $light_hits_depth = 0;

while ($light_hits_depth < $fully_hammered_in) {
    $light_hits_depth += rand(5, 20);
    $one_nail_hits++;
};
    echo "Nail $i was hit: $one_nail_hits times. <br/>";
};

echo "<h4> 9.a) Hit hard and hammer in 5 nails. Possibility to miss - 50% </h4>";

$hard_hits_depth = 0;
$possible_miss = rand(0, 1);

for ($i = 1; $i <= 5; $i++){
    $one_nail_hits = 0;
    $hard_hits_depth = 0;

while ($hard_hits_depth < $fully_hammered_in) {
    $possible_miss = rand(0, 1);
    //echo "Possible miss: $possible_miss <br/>";
    if ($possible_miss == 0) {
        $hard_hits_depth += rand(20, 30);
        $one_nail_hits++;
        //echo "Depth: $hard_hits_depth <br/>";
    } else {
        $one_nail_hits++;
    }
};
    echo "Nail $i was hit: $one_nail_hits times. <br/>";
};

/*
10. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
didžiausio.
*/

echo "<h3> 10. </h3>";

$rand_nr10 = 0;
$string10 = '';
$number_count10 = 0;

while ($number_count10 < 3) {
    $rand_nr10 = rand(0, 200) . ' ';

     if (substr_count($string10, $rand_nr10) == 0) {
        $string10 .= $rand_nr10;
        $number_count10++;
     };

};

$string10 = rtrim($string10, ' ');

echo "$string10 <br/>";

//Checking for prime numbers

$array10 = explode(' ', $string10);

echo '<pre>';
print_r ($array10);
echo '</pre>';

$size = sizeof($array10) -1; 

echo "Array10 length is: $size <br/>";

$count_divisors = 0;

//

for($i = 0; $i <= $size; $i++) {

    if (($array10[$i] == 0) || ($array10[$i] == 1)) {
        echo "Key: $i, value: $array10[$i] is not a prime number. <br/>";
        continue;
    };

    $count_divisors = 0;

    for($j = 2; $j <= $array10[$i]/2; $j++) {
        if ($array10[$i] % $j == 0) {
            $count_divisors++;
        };
    };

    if ($count_divisors == 0) {
        echo "Key: $i, value: $array10[$i] is a prime number. <br/>";
    } else {
        "Key: $i, value: $array10[$i] is not a prime number. <br/>";
    };
};

?>

</body>
</html>