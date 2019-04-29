<?php
    require 'alienDBconn.php';
    $inVehicle = $_POST['inVehicle'];
    $type = $_POST['vehicleType'];
    $personHarm = $_POST['personHarm'];
    $envHarm = $_POST['envHarm'];
    $trace = $_POST['trace'];
    $descTrace = $_POST['descTrace'];
    $color =$_POST['color'];
    $legs = $_POST['legs'];
    $animal=$_POST['animal'];
    $appendages=$_POST['appendages'];
    $size=$_POST['size'];
    $eyeNum=$_POST['eyeNum'];
    $abducted=$_POST['abducted'];
    $offWorld=$_POST['offWorld'];
    $timeGone=$_POST['timeGone'];
    $number=$_POST['numCreatures'];
    $details = $_POST['addDetails'];
    session_start();
    $idRep = $_SESSION['idrep'];

    $sql = "INSERT INTO classThreeReport(inVehicle,typeOfVehicle,personHarmDone,environmentHarmDone,physicalTrace,descriptionOfTrace,colorCreature,numLegsStandingOn,closestAnimal,otherAppendages,alienSize,numEyes,abducted,toOffWorld,timeGone,howManyCreatures,additionalDetails,IDreport)
        VALUES(b'$inVehicle','$type',b'$personHarm',b'$envHarm',b'$trace','$descTrace','$color','$legs','$animal','$appendages','$size','$eyeNum',b'$abducted',b'$offWorld','$timeGone','$number','$details','$idRep');";
    echo $sql;
    $conn->query($sql);
    $conn->close();
    //header("location: ../abductionForm.html");
?>