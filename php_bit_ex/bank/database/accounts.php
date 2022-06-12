<?php
// using PDO. existing database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$sql = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS accounts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    account_number VARCHAR(50) NOT NULL,
    personal_code VARCHAR(50) NOT NULL,
    balance VARCHAR(50) DEFAULT 0,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    // echo "Table 'accounts' created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn->close();