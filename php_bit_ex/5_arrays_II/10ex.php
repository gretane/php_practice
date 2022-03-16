<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php




/*
10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir
color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡,
o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo
reikšmės nuspalvintos spalva color.
*/

echo '<h3> 10. </h3>';

function generate_color() {

$string_color = "abcdef";
$rand_color = '#'; //0-9, a-f
$rand_0a = rand(0, 1);

for($i = 0; $i < 6; $i++) {
    $rand_0a = rand(0, 1);
        switch ($rand_0a) {
            case 0 :
                $rand_color .= rand(0, 9);
                break;
            case 1 :
                $rand_color .= substr($string_color, rand(0, 4), 1);
                break;
            default :
            echo "Something went wrong. <br/>";
        };
}
return $rand_color;
};


$m_array10 = [];
$li = "&#35041"; //裡

$string10 = "#%+*@"; 
$rand_string = 0;

foreach(range(0, 9) as $key10) {
    foreach(range(0, 1) as $key10_1) {
        if ($key10_1 == 0) {
            $key10_1 = "value";
            $rand_string = rand(0, 5);

            if ($rand_string < 5) {
                $m_array10[$key10]["value"] = substr($string10, rand(0, 4), 1);
            } else if ($rand_string == 5) {
                $m_array10[$key10]["value"] = $li;
            } else {
            echo "Something went wrong. <br/>";
            }
        } else if ($key10_1 == 1) {
            $key10_1 = "color";
            $m_array10[$key10]["color"] = generate_color();
        } else {
            echo "Something went wrong. <br/>";
        }
    }
}

echo 'm_array10: <pre>';
print_r($m_array10);
echo '</pre>';



?>

<article>

<table style='border: 1px solid; border-collapse: collapse; border-color: black;'>

<?php

for($i = 0; $i < sizeof($m_array10); $i++) {
    echo "<tr> <br/>";
    for($j = 0; $j < sizeof($m_array10); $j++) {
        echo "<td style='border: 1px solid; text-align: center; border-color: LightGray; height: 20px; width: 20px;
        color:" . $m_array10[$i]["color"] . "'>" . $m_array10[$i]["value"] . "</td>";
    }
    echo '</tr>';
}


?>
</table> 
</artcicle>;


</body>
</html>