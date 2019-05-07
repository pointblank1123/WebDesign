<?php
    session_start();
    require 'alienDBconn.php';
    $date = $_POST['date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $class = $_POST['class'];
    $threat = $_POST['threat'];
    $corr = $_POST['corr'];
    $onDrugs = $_POST['drugs'];
    list($year,$day,$month) = explode('-',$date,4);
    $id = $_SESSION['id'];
    //echo $id;
    $sql = "INSERT INTO incidentReport(dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal)
    VALUES('$day','$month','$year','$street','$city','$state','$zip','$country','$class','$threat',b'$corr',b'$onDrugs','$id')";
    //echo $sql;
    $conn->query($sql);
    $search = "SELECT * FROM incidentReport WHERE IDpersonal=$id";
    $res = $conn->query($search);
    $row = $res->fetch_assoc();
    $idrep=$row['IDreport'];
    $_SESSION['idrep']=$idrep;
    /*
    if($class == 1){
        header("location: ../Reports/classOne.html");
    }
    elseif ($class == 2) {
        header("location: ../Reports/classTwo.html");
    }
    elseif($class == 3){
        header("location: ../Reports/classThree.html");
    }
    */
    $conn->close();
?>