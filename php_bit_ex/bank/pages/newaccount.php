<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {

  function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }    

  $firstName =  check_input($_POST["fname"]);
  $lastName = check_input($_POST['lname']);
  $accountNo = check_input($_POST['account']);
  $personalNo = check_input($_POST['pcode']);
  $personalStr = substr($personalNo, 1, 6);

  echo $personalStr;

    if (empty($firstName) || empty($lastName) || empty($accountNo) || empty($personalNo)) 
    {    
        if (empty($firstName)) {
            $nameErr = "Name is required";
            echo $nameErr;
        }

        if (empty($lastName)) {
            $surnameErr = "Surname is required";
            echo $surnameErr;
        }

        if (empty($accountNo)) {
            $accErr = "Account number is required";
            echo $accErr;
        }
        if (empty($personalNo)) {
            $codeErr = "Personal code is required";
            echo $codeErr;
        }

    } elseif (
      strlen($firstName) < 2 || !preg_match("/^[a-zA-Z-' ]*$/", $firstName) //Lithuanian letters
      || strlen($lastName) < 2 || !preg_match("/^[a-zA-Z-' ]*$/", $lastName) //Lithuanian letters
      || !preg_match("/^LT[0-9]18/", $accountNo) 
      || !preg_match("/^[1-6][0-9]{10}/", $personalNo)|| !checkdate($personalStr)
    )
    {
      //name
        if (strlen($firstName) < 2 || !preg_match("/^[a-zA-Z-' ]*$/", $firstName))  //Lithuanian letters
        {
            $nameErr = "Valid name is required";
            echo $nameErr;
        }
          //last name
        if ((strlen($lastName) < 2) || !preg_match("/^[a-zA-Z-' ]*$/", $lastName)) //Lithuanian letters
        {
            $surnameErr = "Valid surname is required";
            echo $surnameErr;
        } 

        // Lithuanian account number
        if (!preg_match("/^LT[0-9]18/", $accountNo)) 
        { 
            $accErr = "Valid account number is required";
            echo $accErr;
        } 

        // Personal code
        if (!preg_match("/^[1-6][0-9]{10}/", $personalNo) || !checkdate($personalStr)) 
        {
            $personalErr = "Valid account number is required";
            echo $personalErr;
        }
    } else 
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bank";
        $sql = "";
        $insertData = "";

        try {
            $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $insertData = "INSERT INTO accounts (firstname, lastname, account_number, personal_code)
            VALUES ($firstName, $lastName, $accountNo, $personalNo)";
            // use exec() because no results are returned
            $connect->exec($insertData);
            echo "New record created successfully";

        } catch(PDOException $e) {
            echo $insertData . "<br>" . $e->getMessage();
        }

        $connect = null;
    }

    // header('Location: http://localhost/php_practice/php_bit_ex/bank/pages');
    // die;
}


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
        <form method="POST">
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