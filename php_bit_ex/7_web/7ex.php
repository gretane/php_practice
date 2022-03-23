<?php
/*
7. Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų
tuo pačiu adresu (t.y. į patį save) jau GET metodu.
*/
if ('POST' == $_SERVER['REQUEST_METHOD']) {
header('Location: http://localhost/php_practice/php_bit_ex/7_web_mechanics/7ex.php');
die;
}
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