<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/LearnPHP.css">
  <title>First PHP script</title>
</head>
<body>
  <h2>My First PHP test - Alex P</h2>
  <h2>What is important so far</h2>
  <ol>
   <li>Instead of Index.html use Index.php</li>
   <li>PHP begins with (&lt;?php) and end with (?>)</li>

  </ol>

  <?php
  echo "My First PHP script I am echoing this from inside a php tag"
  ?>
  <br>
  <hr>
  <br>
  <h2>Connecting to MySql mysqli OO</h2>
  <?php
    //create connection
    /*
    $servername = "127.0.0.1";
    $username = "root";
    $password = "toor";
    $dbname = "A4phpvet";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    */
  ?>
  <br>
  <img src="../../images/PHPConnecting.png" alt="PHP Connecting">
  <br>
  <hr>
  <br>
  <h2>Php Create a Database and Table</h2>
  <?php
  /*
    $servername = "localhost";
    $username = "root";
    $password = "toor";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS A4phpvet";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }
    // use database
    /*
    $sql = "USE A4phpvet";
    if ($conn->query($sql) === TRUE) {
      echo "Database selected";
    } else {
      echo "Error selecting database: " . $conn->error;
    }

    // sql to create table

    $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "<br>Table MyGuests created successfully ";
    } else {
        echo "<br>Error creating table: " . $conn->error;
    }

    mySqli_query($conn, 'TRUNCATE TABLE MyGuests');

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if ($conn->multi_query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "<br>New records created successfully, Last inserted ID:" . $last_id ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    */
  ?>
  <br>
  <img src="../../images/PHPCreate.png" alt="">
  <br>
  <hr>
  <br>

</body>
</html>
