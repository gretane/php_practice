<?php

include('./controller.php');

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
        
            <?php $count = 0;  foreach(getData() as $chair) { ?>
                <tr>
                    <td><?= ++$count . "| id:" . $chair['id']?></td>
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

    </table>
</body>
</html>