<?php
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
                <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>object->(property)accountNumber</td>
                    <td><a href="./add.php">Add</a></td>
                    <td><a href="./withdraw.php">Withdraw</a></td>
                    <td><a href="./show.php">Show details</a></td>
                </tr>
            </tbody>
        </table>
    </section>

</body>
</html>