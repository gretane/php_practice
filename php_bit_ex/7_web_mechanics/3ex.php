<?php

/*
3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku
GET metodu formoje.
*/
echo "<h3> 3. </h3>";

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
    <form target="_self" method="get">
    <label for="color">HEX color code without hashtag:</label><br>
    <input type="text" id="color" name="color" placeholder="eae480"><br>
    <input type="submit" value="Submit">
    </form> 
</body>
</html>