<?php
/*
6. Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną
GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių,
nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš
POST.
*/
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
        if ('GET' == $_SERVER['REQUEST_METHOD']) {
            echo "body {background-color: MediumSeaGreen} <br/>";
        } else {
            echo "body {background-color:  #ffff6e} <br/>";
        }
        ?>
    </style>
</head>
<body>
    <h2>GET form</h2>
    <form target="_self" method="get">
    <input type="submit" value="Submit">
    </form> 

    <h2>POST form</h2>
    <form target="_self" method="post">
    <input type="submit" value="Submit">
    </form> 

</body>
</html>