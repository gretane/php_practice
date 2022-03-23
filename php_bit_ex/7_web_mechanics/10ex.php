<?php
/*
10. Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo
pažymėta, o kitas kiek iš vis buvo jų sugeneruota.
*/
    $string = 'ABCDEFGHIJ';
    $color = 'black';
    if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['checkbox'])) {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        echo "Checked " . count($_POST['checkbox']) . " out of " . $_POST['times'] . " checkboxes. <br/>";
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