<?php
    session_start();
    require 'alienDBconn.php';
    $rep = $_SESSION['repSelected'];
    $class = $_SESSION['class'];

    if($class = 1){
        $sql = "SELECT * FROM classOneReport WHERE IDreport=".$rep;
    }
    elseif($class= 2){
        $sql = "SELECT * FROM classTwoReport WHERE IDreport=".$rep;
    }
    elseif($class= 3){
        $sql = "SELECT * FROM classThreeReport WHERE IDreport=".$rep;
    }
    $res = $conn->query($sql);
?>