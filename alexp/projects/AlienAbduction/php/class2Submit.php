<?php
    require 'alienDBconn.php';
    $inVehicle = $_POST['inVehicle'];
    $type = $_POST['vehicleType'];
    $personHarm = $_POST['personHarm'];
    $envHarm = $_POST['envHarm'];
    $trace = $_POST['trace'];
    $descTrace = $_POST['descTrace'];
    $details = $_POST['addDetails'];
    session_start();
    $idRep = $_SESSION['idrep'];

    $sql = "INSERT INTO classTwoReport(inVehicle,typeOfVehicle,personHarmDone,environmentHarmDone,physicalTrace,descriptionOfTrace,additionalDetails,IDreport)
        VALUES(b'$inVehicle','$type',b'$personHarm',b'$envHarm',b'$trace','$descTrace','$details','$idRep');";
    echo $sql;
    $conn->query($sql);
    $conn->close();
    header("location: ../abductionForm.html");
?>