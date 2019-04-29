<?php
  //require 'includes/conn.php'
?>
<! DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Read Database</title>
  </head>
  <h1>Full Stack: Read DB, Display on HTML / CSS Client Side</h1>
  <h1>Created by: Alex P | Jan 9, 2019</h1>

  <!--<?php
    $sql = "SELECT * FROM MyGuests;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo $row['firstname'] . "<br>";
      }
    }
  ?>-->
  <img src="../../images/readDBJMJ.png" alt="Read DB JMJ">
  <p>Note: these names are a screenshot as when online the database cannot be connected to.</p>
  <br>
  <img src="../../images/readDBTerm.png" alt="Read DB Terminal">
  <p>This is the code used to pull from the linked database using mysqli Procedural</p>
  <pre>
    $sql = "SELECT * FROM MyGuests;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo $row['firstname'] . "<br>";
      }
    }
  </pre>
  <body>
</html>
