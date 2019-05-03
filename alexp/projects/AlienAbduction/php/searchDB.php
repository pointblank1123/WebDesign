<?php
    session_start();
    require 'alienDBconn.php';
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    //$sql ="SELECT fname, lname, dayBirth, monthBirth, yearBirth, email FROM personalInformation WHERE ";
    if(!empty($id)){
        $searchTerm = "IDpersonal=$id";
    }
    elseif(empty($id)){
        if(!empty($fname) and !empty($lname)){
            $searchTerm = "fname LIKE '$fname%' AND lname LIKE '$lname%'";
        }
        elseif(empty($fname) and !empty($lname)){
            $searchTerm = "lname LIKE '$lname%'";
        }
        elseif(!empty($fname) and empty($lname)){
            $searchTerm = "fname LIKE '$fname%'";
        }
    }
    else{
        die(mysql_error());
    }
    $sql = "SELECT IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email FROM personalInformation WHERE ".$searchTerm.";";
    //$sql = "SELECT * FROM personalInformation WHERE IDpersonal=$id";
    echo $sql;
    //$res = $conn->query($sql) or die($conn->error);
    $_SESSION['sql']= $sql;
    /*
    if($res->num_rows > 0){
    echo "<table><tr><th>ID</th><th>Name</th><th>Date of Birth</th><th>Email</th></td></tr>";
        while($row = $res->fetch_assoc()){

            echo '<tr><td>' . $row['IDpersonal'].'</td>'.
            '<td>' . $row['fname'] . ' ' . $row['lname'] . '</td>'.
            '<td>'.$row['dayBirth'].'/'.$row['monthBirth'].'/'.$row['yearBirth'].'</td>'.
            '<td>'.$row['email'].'</td></tr>';
            
        }
        echo '</table>';
        }
        else{

            echo 'No Results';
         };
         */
    $conn->close();
    header("location: ../search.php");
