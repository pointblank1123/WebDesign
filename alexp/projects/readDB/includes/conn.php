<?php

  $servername = "localhost";
  $username = "root";
  $password = "toor";
  $dbname = "A4phpvet";

  //Create Connection
  $conn = new mysqli ($servername, $username, $password, $dbname);
  //Check Connection

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  /*
  else{
    echo "Connection Success";
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
  }
  */
?> <!-- not always necessary -->
