<?php
    $servername = "gator4268.hostgator.com";
    $database = "mmcclend_phplogin";
    $username = "mmcclend_login";
    $password = "logintoor";
    $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
        $servername = "localhost";
        $database = "loginsystemtut";
        $username = "root";
        $password = "toor";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if(!$conn){
            die("Connection Failed ".mysqli_connect_error());
        }
    }