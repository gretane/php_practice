<?php
/*
9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10)
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva
pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta
checkboksų (ne kurie, o kiek).
*/
echo "<h3 style='color: white;'> 9. </h3>";

    $string = 'ABCDEFGHIJ';
    $color = 'black';
    if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['checkbox'])) {
        echo count($_POST['checkbox']);
        $color = 'white';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 exercise</title>
</head>
<body style='background-color: <?= $color?>;'>
    <?php if ('GET' == $_SERVER['REQUEST_METHOD']): ?>

    <form style='color: white' target="_self" method="post">
    <label style='color: white' for="color">Check some: </label><br>
    
    <?php

    for($i = 0; $i < rand(3, 10); $i++) {
        echo '<input type="checkbox" id="' . $i . '" name="checkbox[]" value="' . substr($string, $i, 1) . '">';  
        //checkbox can be set as array (="checkbox[]")
        echo '<label for="' . $i . '"> ' . substr($string, $i, 1) . ' </label><br/>';
    }

    ?>
    <input type="hidden" name="times" value="<?= $i ?>">
    <input type="submit" value="Submit">
    </form> 
    <?php endif ?>

</body>
</html>