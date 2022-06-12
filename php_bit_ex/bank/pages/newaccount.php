<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
      
    $firstName =  check_input($_POST["fname"]);
    $lastName = $_POST['lname'];
    $accountNo = $_POST['account'];
    $personalNo = $_POST['pcode'];


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

    } elseif (strlen($firstName) < 2)
    {
      $nameErr = "Name is too short";
      echo $nameErr;
      

    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) 
    {
      $nameErr = "Only letters and white space allowed";

    } elseif (strlen($lastName) < 2)
    {
      $surnameErr = "Surname is too short";
      echo $surnameErr;
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

    function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
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