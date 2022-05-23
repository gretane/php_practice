<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank application</title>
</head>
<body>

    <?php
    include 'menu.php';
    ?>

    <section>
        <form action="#" method="POST">
            <fieldset>
                <legend>Personalia:</legend>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="email">Account number:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="birthday">Personal code:</label>
                <input type="date" id="birthday" name="birthday"><br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form> 
    </section>

</body>
</html>