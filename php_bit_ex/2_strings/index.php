<?php
/*
1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
*/

echo "<h3> 1. </h3>";

$name = 'Rowan';
$surname = 'Atkinson';

if (strlen($name) > strlen($surname)) {
    echo "$surname <br/>";
} else {
    echo "$surname <br/>";
};

/*
2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/

echo "<h3> 2. </h3>";

$name2 =  strtoupper($name);
$surname2 = strtolower($surname);

echo "$name2 $surname2 <br/>";

/*
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir
pavardės kintamųjų raidžių. Jį atspausdinti.
*/

echo "<h3> 3. </h3>";

$initials = substr($name, 0, 1) . '.' . substr($surname, 0, 1) . '.';

echo "$initials <br/>";

/*
4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir
pavardės kintamųjų raidžių. Jį atspausdinti.
*/

echo "<h3> 4. </h3>";

$last_letter = substr($name, -1, 1) . ' ' . substr($surname, -1, 1);

echo "$last_letter <br/>";

/*
5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir
mažąsias) pakeisti žvaigždutėm “*”. Rezultatą atspausdinti.
*/

echo "<h3> 5. </h3>";

$movie = "An American in Paris";
$without_a = preg_replace('/a/i', '*', $movie);

echo "$without_a <br/>";

/*
6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir
mažąsias) raides. Rezultatą atspausdinti.
*/

echo "<h3> 6. </h3>";

$number_of_a = preg_match_all('/a/i', $movie);

echo "There are $number_of_a 'a' letters in the string (case insesitive). <br/>";

/*
7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą
atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space
Odyssey” ir “It's a Wonderful Life”.
*/

echo "<h3> 7. </h3>";

$movie2 = "Breakfast at Tiffany's";
$movie3 = "2001: A Space Odyssey";
$movie4 = "It's a Wonderful Life";

$without_vowels_1 = preg_replace('/[aeiouy]/i', '', $movie);
$without_vowels_2 = preg_replace('/[aeiouy]/i', '', $movie2);
$without_vowels_3 = preg_replace('/[aeiouy]/i', '', $movie3);
$without_vowels_4 = preg_replace('/[aeiouy]/i', '', $movie4);

echo "Strings without vowels: <br/><br/>";

echo "$without_vowels_1 <br/><br/>";
echo "$without_vowels_2 <br/><br/>";
echo "$without_vowels_3 <br/><br/>";
echo "$without_vowels_4 <br/><br/>";

/*
8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ',
rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo
numerį.
*/

echo "<h3> 8. </h3>";

$movie5 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo "$movie5 </br>";

$find_ep = str_replace('Star Wars: Episode ', '', $movie5);
$find_ep = str_replace(' - A New Hope', '', $find_ep);

echo "Episode nr.: $find_ep. <br/>";

/*
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice
in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu
“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

echo "<h3> 9. </h3>";

$movie6_eng = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$movie6_lt =  "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$word = strtok($movie6_eng, ' ');

$word_count = 0;

//$movie6_eng
while ($word !== false) {
  if (strlen($word) <= 5) {
      ++$word_count;
  };
  $word = strtok(' ');
};

echo "There are $word_count words in movie name <i>$movie6_eng</i> that have less than or 5 letters. <br/>";

//$movie6_lt 
$word = strtok($movie6_lt, ' ');

$word_count = 0;

while ($word !== false) {
  if (strlen($word) <= 5) {
      ++$word_count;
  };
  $word = strtok(' ');
};

echo "There are $word_count words in movie name <i>$movie6_lt</i> that have less than or 5 letters. <br/>";

/*
10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis
3 simboliai.
*/

echo "<h3> 10. </h3>";

$string10 = 'abcdefghijklmnopqrstuvwxyz';
$random_string = substr($string10, rand(0, strlen($string10)), 1) .
 '' . substr($string10, rand(0, strlen($string10)), 1) . 
 '' . substr($string10, rand(0, strlen($string10)), 1);

echo "Random string is: $random_string. <br/>";

/*
Papildomas.
11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų
žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai
neturi kartotis. (reikės masyvo)
*/

echo "<h3> 11. </h3>";

$string11 = $movie6_eng . ' ' . $movie6_lt;

$string11 = str_replace(',', '', $string11);

$array11 = explode(' ', $string11);

$random_string_11 = '';

$word_repeats = preg_match

echo '<pre>';
print_r($splited_string);
echo '</pre>';

//one loop goes until the entire string is replaced(consists of) with different words
//second loop goes until string is full

// or mix the array value keys and trim substrings/words from the end
for($i = 0; $i <= 10; $i++) {
    $random_word_11 = $array11[rand(0, sizeof($array11)-1)]; 
    if (preg_match())
    
    $random_string_11 .= . ' ';

};

stristr($random_string_11, )

$random_string_11 = rtrim($random_string_11);

echo "$random_string_11 <br/>";