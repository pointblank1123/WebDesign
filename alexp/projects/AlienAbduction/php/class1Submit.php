<?php
    require 'alienDBconn.php';
    $inVehicle = $_POST['inVehicle'];
    $type = $_POST['vehicleType'];
    $details = $_POST['addDetails'];
    session_start();
    $idRep = $_SESSION['idrep'];

    $sql = "INSERT INTO classOneReport(inVehicle,typeOfVehicle,additionalDetails,IDreport)
        VALUES(b'$inVehicle','$type','$details','$idRep');";
        echo $sql;
        $conn->query($sql);
    $conn->close();
    header("location: ../abductionForm.html");
?>