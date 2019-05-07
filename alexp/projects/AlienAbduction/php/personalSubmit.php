<?php  
    session_start();
    require 'alienDBconn.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['DOB'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $hAdd = $_POST['homeAdd'];
    $hCity = $_POST['homeCity'];
    $hState = $_POST['homeState'];
    $hZip = $_POST['homeZip'];
    $hCountry = $_POST['homeCountry'];
    list($bYear,$bDay,$bMonth) = explode('-',$dob,4);
    $sql = "INSERT INTO personalInformation(fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country)
        VALUES('$fname','$lname','$bDay','$bMonth','$bYear','$email','$phone','$hAdd','$hCity','$hState','$hZip','$hCountry')";

    $conn->query($sql);
    $search = "SELECT * FROM personalInformation WHERE fname='$fname'";
    $res = $conn->query($search);
    $row = $res->fetch_assoc();
    $id=$row['IDpersonal'];
    $_SESSION['id']=$id;
    header("location: ../Reports/incidentReport.html");
    
    $conn->close();
?>  