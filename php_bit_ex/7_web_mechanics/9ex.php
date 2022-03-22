<?php
/*
9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10)
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva
pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta
checkboksų (ne kurie, o kiek).
*/
echo "<h3 style='color: white;'> 9. </h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 exercise</title>
    <style>

        <?php
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                echo "body {background-color: black;} <br/>";
            } else {
                echo "body {background-color: white;} <br/>";
            }
        
        ?>

    </style>

</head>
<body>
    <?php if ('GET' == $_SERVER['REQUEST_METHOD']): ?>

    <form style='color: white' target="_self" method="post">
    <label style='color: white' for="color">Check some: </label><br>
    
    <?php
    $string = 'ABCDEFGHIJ';

    for($i = 0; $i < rand(3, 10); $i++) {
        echo '<input type="checkbox" id="' . $i . '" name="' . $i . '" value="' . substr($string, $i, 1) . '">';
        echo '<label for="' . $i . '"> ' . substr($string, $i, 1) . ' </label><br/>';
    }

    ?>

    <input type="submit" value="Submit">
    </form> 

    <?php else: ?>
    <?php echo '<h2>' . sizeof($_POST) . '</h2>'; ?>
    <?php endif ?>

</body>
</html>