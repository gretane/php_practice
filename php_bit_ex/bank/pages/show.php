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
                    <th>Add money</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name Surname</td>
                    <td>Money left</td>
                </tr>
                <tr>
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

    <!-- success message. Successfully added-->
</body>
</html>