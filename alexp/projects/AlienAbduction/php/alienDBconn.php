<?php

$servername = "gator4268.hostgator.com";
$username = "mmcclend_alien";
$password="alientoor";
$database="mmcclend_alien";
$conn =new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
  
  $servername = 'localhost';
  $username ='root';
  $password = 'toor';
  $database = 'alien';

  $conn =new mysqli($servername, $username, $password, $database);
  
    if($conn->connect_error){
    die('Connection Failed: ' . mysqli_connect_error()); 
  }
}
?>