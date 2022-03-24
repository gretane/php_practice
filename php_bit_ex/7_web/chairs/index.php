<?php

session_start();

if (!isset($_SESSION['chairs'])){
    $_SESSION['chairs'] = [];
    $_SESSION['id'] = 1;
}

if ('POST' == $_SERVER['REQUEST_METHOD'] && !isset($_POST['id']) && isset($_POST['name'])) {
    //$chair = [];
    $chair['id'] = $_SESSION['id'];
    $chair['name'] = $_POST['name'];
    $chair['legs'] = $_POST['legs'];
    $chair['foldable'] = $_POST['foldable'];
    $chair['chairs_left'] = $_POST['chairs_left'];

    $_SESSION['id']++;
    $_SESSION['chairs'][] = $chair;

    header('Location: ./index.php');
    die;
}
if ('GET' == $_SERVER['REQUEST_METHOD'] && ($_GET['id'] ?? false)) {
//take id
//check witch chair has the id
//if the chair fits the id 
//show it in the form as value=""
//button "change" in stead of add
//after changing it set the post value to the chair with the id 
    
    foreach($_SESSION['chairs'] as $key) {
        if ($_GET['id'] == $key['id']) {
            $chair = $key;
            break;
        }
    }

}

if ('POST' == $_SERVER['REQUEST_METHOD'] && !isset($_POST['name'])) {
    echo 'delete';
    foreach($_SESSION['chairs'] as $key => &$chair) {
        if ($_POST['id'] == $chair['id']) {
            unset($_SESSION['chairs'][$key]);
            header('Location: ./index.php');
            die;
        }
    }
    header('Location: ./index.php');
    die;
}

if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['id'])) { // && isset($_POST['name'])
    foreach($_SESSION['chairs'] as &$chair) {
        if ($_POST['id'] == $chair['id']) {
            $chair['name'] = $_POST['name'];
            $chair['legs'] = $_POST['legs'];
            $chair['foldable'] = $_POST['foldable'];
            $chair['chairs_left'] = $_POST['chairs_left'];
            header('Location: ./index.php');
            die;
        }
    }

    header('Location: ./index.php');
    die;
}


// if ('GET' == $_SERVER['REQUEST_METHOD']) {
//     echo '<pre>';
//     print_r($_SESSION);
//     echo '</pre>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chairs</title>
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
        <!--<label for="id">Chair ID: </label><br/>-->
        <!--<input type="text" name="id"><br/>-->
        <label for="name">Chair:</label><br/>
        <input type="text" name="name" value="<?php echo isset($chair)? $chair['name'] : ''?>"><br/>
        <label for="legs">Number of legs:</label><br/>
        <input type="number" name="legs" value="<?php echo isset($chair)? $chair['legs'] : ''?>"><br/><br/>
        
        Foldable: <br/>
        <input type="radio" id="Yes" name="foldable" value="Yes">
        <label for="Yes">Yes</label><br/>
        <input type="radio" id="No" name="foldable" value="No">
        <label for="No">No</label><br/><br/>
        <label for="chairs_left">Number of chairs left in warehouse:</label><br/>
        <input type="number" name="chairs_left" value="<?php echo isset($chair)? $chair['chairs_left'] : ''?>"><br/>
        
        <?php if (!isset($chair)): ?>
            <input type="submit" value="Add"><br/><br/>
        <?php else: ?>
            <input type="hidden" name="id" value="<?= $chair['id']?>">
            <input type="submit" value="Save changes"><br/><br/>
        <?php endif?>
    </form>

    <table>
        <tr>
            <th>Chair ID:</th>
            <th>Name:</th>
            <th>Number of legs:</th>
            <th>Foldable:</th>
            <th>Chairs left in warehouse:</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php if (isset($_SESSION['chairs'])) {
            $chair['id'] = $_SESSION['id'] ?>
            <?php foreach($_SESSION['chairs'] as $chair) { ?>
                <tr>
                    <td><?=$chair['id']?></td>
                    <td><?=$chair['name']?></td>
                    <td><?=$chair['legs']?></td>
                    <td><?=$chair['foldable']?></td>
                    <td><?=$chair['chairs_left']?></td>
                    <td><a href="?id=<?=$chair['id']?>">edit</a></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $chair['id']?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

    </table>
</body>
</html>