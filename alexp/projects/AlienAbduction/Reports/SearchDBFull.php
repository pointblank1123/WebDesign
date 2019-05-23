<?php
    require '../php/alienDBconn.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alien Abduction</title>
    <link rel="stylesheet" href="../css/Alien.css">
    <script src="../js/aliens.js"></script>
    <style>
    body{
        background-image: url("../../../images/SpaceBackground.jpg") ;
    }
    </style>
</head>
<body>
    <h1>Search Aliens DB | Alex P. | Last Edit 05-17-19</h1>
    <br><hr><br>
    <div class="searchReturn">
    <?php

        $sql = $_SESSION['sql2'];
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            echo "<table style='color:white'><tr><th>ID</th><th>Occurance Date</th><th>Address of Occurance</th><th>Encounter Class</th><th>Encounter Threat</th><th>Corroborated</th><th>Drug Activites</th></tr>";
            while($row = $res->fetch_assoc()){
                echo '<form action="../php/expandReport.php" method="POST" class="resultForm">'.
                '<tr><td>'. $row['IDreport'].'</td>'.
                '<td>'.$row['dayOccur'].'/'.$row['monthOccur'].'/'.$row['yearOccur'].'</td>'.
                '<td>'.$row['streetOccur'].' '.$row['cityOccur'].' '.$row['stateOccur'].' '.$row['zipOccur'].' '.$row['countryOccur'].'</td>'.
                '<td>'.$row['classEncounter'].' '.'</td>'.
                '<td>'.$row['threatEncounter'].' '.'</td>'.
                '<td>'.$row['corroborated'].' '.'</td>'.
                '<td>'.$row['usingPsychedelics'].' '.'</td>'.
                '<input type="hidden" name="repSelected" value="'.$row['IDreport'].'">'.
                '<input type="hidden" name="class" value="'.$row['classEncounter'].'">'.
                '<td><button type="submit" class="expandBtn">expand</button></td></tr></form>';  
            }
            echo '</table>';
            }
        else{
            echo 'No Results';
        };

    ?>
    </div>
</body>
</html>