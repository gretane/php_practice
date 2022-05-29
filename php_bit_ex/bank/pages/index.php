<?php

/*
Banką sudaro atskiri puslapiai:
a. Sąskaitų sąrašas su mygtuku “ištrinti” ir linku į “pridėti lėšų” ir
“nuskaičiuoti lėšas” puslapius
b. Naujos sąskaitos sukūrimas (įvedami duomenys: vardas, pavardė,
sąskaitos numeris, asmens kodas)
c. Puslapis “pridėti lėšas”. Turi matytis savininko vardas, pavardė
sąskaitos likutis ir laukelis sumai įvesti
d. Puslapis “nuskaičiuoti lėšas”. Analogiškai prieš tai buvusiam
punktui
e. Visi puslapiai turi bendrą meniu su nuorodom
*/

?>
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
    include '../menu.php';
    ?>

    <section>
        <table>
            <thead>
                <tr>
                <th>Account number</th>
                <th>Add money</th>
                <th>Withdraw money</th>
                <th>Delete account</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8569123365</td>
                    <td><a href="./add.php">Add</a></td>
                    <td><a href="./withdraw.php">Withdraw</a></td>
                    <td>
                        <form method="POST" action="#">
                            <!-- @csrf -->
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>8569123365</td>
                    <td><a href="./add.php">Add</a></td>
                    <td><a href="./withdraw.php">Withdraw</a></td>
                    <td>
                        <form method="POST" action="#">
                            <!-- @csrf -->
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>8569123365</td>
                    <td><a href="./add.php">Add</a></td>
                    <td><a href="./withdraw.php">Withdraw</a></td>
                    <td>
                        <form method="POST" action="#">
                            <!-- @csrf -->
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

</body>
</html>