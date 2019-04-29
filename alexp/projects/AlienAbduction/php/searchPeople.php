<?php
session_start();
require 'alienDBconn.php';
$fname=$_POST['name'];
$search = "SELECT * FROM personalInformation WHERE fname='$fname'";
    $res = $conn->query($search);
    $row = $res->fetch_assoc();
    if($res->num_rows==1){
        header("location: ../abductionForm.html");
        $id= $row['IDpersonal'];
        $_SESSION['id']=$id;
    }
    header("location: ../Reports/incidentReport.html");
?>