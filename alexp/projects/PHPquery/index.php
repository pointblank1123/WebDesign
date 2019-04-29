<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../../css/index.css">
<title>PHP Query</title>
<body>
  <h1 style="text-align:center">PHP Queries | Alex P | Nov 28 2018</h1>
  <hr>
  <br>
  <?php
  /*
  $servername = "localhost";
  $username = "root";
  $password = "toor";
  $dbname = "A4phpvet";

  $conn = new mysqli ($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
  $result = $conn->query($sql);

  if ($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
        echo "<br> id: ". $row["id"].
        "<br> First Name: ". $row["firstname"].
        "<br> Last Name: ". $row["lastname"].
        "<br> email: ". $row["email"].
        "<br><br><hr>";
     }
  }else{
   echo "0 results";
  }
    $conn->close();
    */
  ?>
  <br>
    <img src="../../images/PHPQuery.png" alt="PHP Query" style="float:left">
  <br>

  <?php
  phpinfo();
   ?>
</body>
</html>
