<?php
    
    require 'Connection.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $entrant = $_POST['entrant'];

    if(!empty($id)){
        $searchTerm="ID_customer = '$id'";
    }
    if(!empty($fname)){
        $searchTerm="fname LIKE '$fname%'";
    }
    if(!empty($mname)){
        $searchTerm="mname LIKE '$mname%'";
    }
    if(!empty($lname)){
        $searchTerm="lname LIKE '$lname%'";
    }
    if(!empty($entrant)){
        $searchTerm="entrant LIKE '$entrant%'";
    }

    //$sql = "SELECT * FROM customer WHERE ".$searchTerm ;
    $sql ="SELECT * FROM incidentReport WHERE IDpersonal=$id";
    $res = $conn->query($sql);
    echo $sql;
    if($result->num_rows > 0){
        echo '<table><tr><th>Customer ID</th><th>Name</th><th>Entrant</td></tr>';
        while($row = $res->fetch_assoc()){
          echo '<tr><td>' . $row['ID_customer'].'</td>'.
          '<td>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>'.
          '<td>'.$row['entrant'].'</td></tr>';
         }
    echo '</table>';
    }
    else{
       echo 'No Results';
    };
      
?>