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
                    <th>Withdraw money</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name Surname</td>
                    <td>Money left</td>
                </tr>
            </tbody>
        </table>
        <form action="#" method="POST">
            <fieldset>
                <label for="add">Write amount:</label>
                <input type="number" id="add" name="add"><br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form> 
    </section>
<!-- success message. Successfully withdrawn-->
    
</body>
</html>