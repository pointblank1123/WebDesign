<?php
    session_start();
    require 'alienDBconn.php';
    $id = $_POST['selected'];

    $sql = "SELECT * FROM incidentReport WHERE IDpersonal = $id;";
    //echo $sql;
    $_SESSION['sql2'] = $sql;

    //$repID = $row['IDreport'];
    /*
    $sql2 = "SELECT * FROM classOneReport WHERE IDreport =$repID";
    $sql3 = "SELECT * FROM classTwoReport WHERE IDreport =$repID";
    $sql4 = "SELECT * FROM classThreeReport WHERE IDreport =$repID";
    */
    header("location: ../Reports/SearchDBFull.php");
?>