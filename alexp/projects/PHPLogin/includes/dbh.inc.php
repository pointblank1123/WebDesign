<?php
    $servername = "localhost";
    $database = "loginsystemtut";
    $username = "root";
    $password = "toor";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection Failed ".mysqli_connect_error());
    }