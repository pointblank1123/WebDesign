<?php
    session_start();
    require 'alienDBconn.php';
    $rep = $_POST['repSelected'];
    $class = $_POST['class'];

    if($class == 1){
        $sql = "SELECT * FROM classOneReport WHERE IDreport=".$rep.';';
        $_SESSION['repSql']= $sql;
        header("location: ../Reports/ExpandedReportDisp1.php");
    }
    elseif($class == 2){
        $sql = "SELECT * FROM classTwoReport WHERE IDreport=".$rep.';';
        $_SESSION['repSql']= $sql;
        header("location: ../Reports/ExpandedReportDisp2.php");
    }
    elseif($class == 3){
        $sql = "SELECT * FROM classThreeReport WHERE IDreport=".$rep.';';
        $_SESSION['repSql']= $sql;
        header("location: ../Reports/ExpandedReportDisp3.php");
    }
    //echo $sql;
?>