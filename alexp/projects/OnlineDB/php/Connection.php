<?php
    $servername = 'gator4268.hostgator.com';
    $username ='mmcclend_a4root';
    $password = 'a4toor';
    $database = 'mmcclend_a4';

  $conn =new mysqli($servername, $username, $password, $database);

  if($conn->connect_error){
    $servername = 'localhost';
    $username ='root';
    $password = 'toor';
    $database = 'a4';
    $conn =new mysqli($servername, $username, $password, $database);
      if($conn->connect_error){
      die('Connection Failed: ' . mysqli_connect_error()); 
    }
  }
  //echo 'Connection Successful';
