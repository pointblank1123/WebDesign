<?php
    session_start();
    require 'php/alienDBconn.php';
    $sql = $_SESSION['sql'];
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $id = $row['IDpersonal'];

    $sql = "SELECT * FROM incidentReport WHERE IDpersonal = $id";
    $res = $conn->query($sql);
    $_SESSION['res'] = $res;

    //$repID = $row['IDreport'];
    /*
    $sql2 = "SELECT * FROM classOneReport WHERE IDreport =$repID";
    $sql3 = "SELECT * FROM classTwoReport WHERE IDreport =$repID";
    $sql4 = "SELECT * FROM classThreeReport WHERE IDreport =$repID";
    */
    header("location: ../Reports/SearchDBFull.php");
?>