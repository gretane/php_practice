<?php

/*2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju
nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB
spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
echo "<h3> 2. </h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        echo "body {background-color:#" . $_GET['color'] . ";} <br/>";
        ?>
    </style>
</head>
<body>
    
</body>
</html>