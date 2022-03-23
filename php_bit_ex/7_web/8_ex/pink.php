<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    header('Location: http://localhost/php_practice/php_bit_ex/7_web_mechanics/8_ex/rose.php?pink=1');
    die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
</head>
<body style='background-color: pink'>

    <form target="_self" method="POST">
    <input type="submit" value="GO TO ROSE">
    </form> 
    
</body>
</html>