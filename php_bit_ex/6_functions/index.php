<?php
/*
1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas
į h1 tagą;
*/
echo "<h3> 1. </h3>";

function h1_tag($text = "Hi!") {
    echo "<h1> $text </h1><br/>";
};

h1_tag();

/*
2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją
remkitės pirmame uždavinyje parašytą funkciją;
*/
echo "<h3> 2. </h3>";

function h_tag($text = "Hi!", $number = 1) {
    echo "<h$number> $text </h$number><br/>";
};

h_tag("Second", 3);

/*
3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus
skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli
skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir
užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu
reikia) uždavinio funkciją ir preg_replace_callback();
*/
echo "<h3> 3. </h3>";

function h1_time($matches) {
    return "<h1 style='display:inline;'>" . $matches[0] . '</h1>';
};

$string_time = md5(time());

echo $string_time . '<br/>';

$pattern = '/\d+/';
$string_h1 = preg_replace_callback($pattern, 'h1_time', $string_time);

echo $string_h1 . '<br/>';


/*
4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas
dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite
taip, kad būtų galima įvesti tik sveiką skaičių;
*/
echo "<h3> 4. </h3>";

//function counts number of divisors of an integer 

function int_divisors(int $number) {
    if ($number < 0) {
        $number = $number / -1;
    }

    $divisors = 0;
        for($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
                $divisors++;
            }
        }

    return $divisors;
}

$int_arg = -8;

$numb4 = int_divisors($int_arg);

echo "Number $int_arg has $numb4 divisors. <br/>";

/*
5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį
mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
*/
echo "<h3> 5. </h3>";

$array5 = [];

foreach(range(0, 99) as $key5) {
    $array5[$key5] = rand(33, 77);
}

$temp5 = [];
$temp5_1 = [];

$arg = $array5[0];
$arg_i = 0;
$largest = int_divisors($arg);
$index = 0;

while (sizeof($array5) > 0) {
    $arg = $array5[0];
    $largest = int_divisors($arg);
    $index = 0;
    for ($i = 0; $i < sizeof($array5); $i++) {
        $arg_i = $array5[$i];
        if ($largest <= int_divisors($arg_i)) {
            $largest = int_divisors($arg_i);
            $index = $i;
        }
    }

    array_push($temp5, $array5[$index]);    
    unset($array5[$index]);

    if (sizeof($array5) > 0) {

        $temp5_1 = [...$array5];
        $array5 = [...$temp5_1];
    }  
}

$array5 = [...$temp5];


echo 'array5 sorted by number of divisors: <pre>';
print_r($array5);
echo '</pre>';

/*
6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo
ištrinkite pirminius skaičius.
*/
echo "<h3> 6. </h3>";

$array6 = [];

foreach(range(0, 99) as $key6) {
    $array6[$key6] = rand(333, 777);
}

echo 'array6: <pre>';
print_r($array6);
echo '</pre>';


foreach($array6 as $key6_1 => $value6_1) {
    if (int_divisors($value6_1) == 0) {
        unset($array6[$key6_1]);
    }
}

echo 'array6 non-prime: <pre>';
print_r($array6);
echo '</pre>';



/*
9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai
nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne
pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį
skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia
pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti
elemento.
*/
echo "<h3> 9. </h3>";

$array9 = [];

foreach(range(0, 2) as $key9) {
    $array9[] = rand(1, 33);
}


function is_prime($numb) {
    $prime_count = 0;

    for($j = 2; $j < $numb; $j++) {
        if ($numb % $j == 0) {
            $prime_count++;
        }
    }
    if ($prime_count > 0) {
        return false;
    } else {
        return true;
    }
};

$count_3 = 3;

while ($count_3 > 0) {
    $count_3 = 3;
    for($i = 3; $i > 0; $i--) {
        $temp9 = $array9[sizeof($array9)-$i];
        if (is_prime($temp9)) {
            $count_3--;
        }
    }
    if ($count_3 == 0) {
        break;
    } else {
        $array9[] = rand(1, 33);
    }
}

echo 'array9 with 3 non-primes at the end: <pre>';
print_r($array9);
echo '</pre>';

/*
10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų,
kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne
atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite
masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl
paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70
viską kartokite.
*/
echo "<h3> 10. </h3>";

$m_array10 = [];

foreach(range(0, 9) as $key10) {
    foreach(range(0, 9) as $key10_1) {
        $m_array10[$key10][$key10_1] = rand(1, 100);
    }
}

echo 'm_array10: <pre>';
print_r($m_array10);
echo '</pre>';

$all_sum = 0;
$smallest10 = $m_array10[0][0];
$smallest_key = 0;
$smallest_key1 = 0;
$count_primes = 0;

$loop_repeat = 0;


do{
    
$all_sum = 0;
$smallest10 = $m_array10[0][0];
$smallest_key = 0;
$smallest_key1 = 0;
$count_primes = 0;

foreach($m_array10 as $key_sum => $value_sum) {
    foreach($m_array10[$key_sum] as $key_sum1 => $value_sum1) {
        if ($smallest10 >= $value_sum1) {
            $smallest10 = $value_sum1;
            $smallest_key = $key_sum;
            $smallest_key1 = $key_sum1;
        }
        if (is_prime($value_sum1)) {
            $all_sum += $value_sum1;
            $count_primes++;
        }
    }
}

// echo "Overal sum of prime nubers is: $all_sum. <br/>";
// echo "Number of primes: $count_primes. <br/>";
// echo "The mean is:" . $all_sum/$count_primes . '<br/>';
// echo "Smallest number is: $smallest10. <br/>";
// echo "Its location is: m_array10[$smallest_key][$smallest_key1]. <br/><br/>";

if ($all_sum/$count_primes > 70) {
    break;
} else {
    $m_array10[$smallest_key][$smallest_key1] += 3;
    $loop_repeat++;
}

// echo " The smallest number +3:" . $m_array10[$smallest_key][$smallest_key1] . '<br/><br/>';

} while($all_sum/$count_primes < 70);

echo "The mean is:" . $all_sum/$count_primes . '<br/>';
echo "The loop repeated $loop_repeat times. <br/>";
