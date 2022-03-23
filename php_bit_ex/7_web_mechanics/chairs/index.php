<?php

session_start();

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $_SESSION['chair'] = $_POST;

    header('Location: ./index.php');
    die;
}
if ('GET' == $_SERVER['REQUEST_METHOD'] && isset($_SESSION['chair'])) {
    $_POST = $_SESSION['chair'];

    echo '<pre>';
    print_r($_POST);
    Echo '<pre>';

    echo '<pre>';
    print_r($_SESSION);
    Echo '<pre>';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chairs crud</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
    </style>
</head>
<body>
    <form target="_self" method="post"> 
        <label for="id">Chair ID: </label><br/>
        <input type="text" name="id"><br/>
        <label for="name">Name:</label><br/>
        <input type="text" name="name"><br/>
        <label for="legs">Number of legs:</label><br/>
        <input type="number" name="legs"><br/><br/>
        
        Foldable: <br/>
        <input type="radio" id="Yes" name="foldable" value="Yes">
        <label for="Yes">Yes</label><br/>
        <input type="radio" id="No" name="foldable" value="No">
        <label for="No">No</label><br/><br/>
        <label for="chairs_left">Number of chairs left in warehouse:</label><br/>
        <input type="number" name="chairs_left"><br/>
        <input type="submit" value="Add"><br/><br/>
    </form>

    <table>
        <tr>
            <th>Chair ID:</th>
            <th>Name:</th>
            <th>Number of legs:</th>
            <th>Foldable:</th>
            <th>Chairs left in warehouse:</th>
        </tr>
        
        <?php if (isset($_POST['id'])) { ?>

        <tr>
            <td><?=$_POST['id']?></td>
            <td><?=$_POST['name']?></td>
            <td><?=$_POST['legs']?></td>
            <td><?=$_POST['foldable']?></td>
            <td><?=$_POST['chairs_left']?></td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>