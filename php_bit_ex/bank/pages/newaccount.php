<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    header('Location: http://localhost/php_practice/php_bit_ex/bank/');
    die;
    }


// using PDO. use existing database
    
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bank", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage(); // also could ->getCode() (shows error code)
}

/* create database

$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDBPDO";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
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
        <form target="_self" method="POST">
            <fieldset>
                <legend>Create new account:</legend>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="account">Account number:</label>
                <input type="account" id="account" name="account"><br><br>
                <label for="pcode">Personal code:</label>
                <input type="number" id="pcode" name="pcode"><br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form> 
    </section>

</body>
</html>