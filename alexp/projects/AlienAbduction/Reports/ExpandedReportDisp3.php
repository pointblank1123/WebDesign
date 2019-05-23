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
        $sql = $_SESSION['repSql'];
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            echo "<table style='color:white'><tr><th>ID</th><th>Vehicle Presence</th><th>Vehicle Type</th><th>Human Harm</th><th></th>Environment Harm</th><th>Physical Trace</th><th>Trace Description</th><th>Creature Color</th><th>Number of Legs</th><th>Closest Animal</th><th>Other Appendages</th><th>Size</th><th># of Eyes</th><th>Abducted</th><th>Taken Off World</th><th>Time Gone</th><th># of Creatures</th><th>Additional Details</th></tr>";
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['IDclassOne'].'</td><td>'.$row['inVehicle'].'</td>'.
                '<td>'.$row['typeOfVehicle'].'</td><td>'.$row['personHarmDone'].'</td>'.
                '<td>'.$row['environmentHarmDone'].'</td><td>'.$row['physicalTrace'].'</td>'.
                '<td>'.$row['descriptionOfTrace'].'</td><td>'.$row['colorCreature'].'</td>'.
                '<td>'.$row['numLegsStandingOn'].'</td><td>'.$row['closestAnimal'].'</td>'.
                '<td>'.$row['otherAppendages'].'</td><td>'.$row['alienSize'].'</td>'.
                '<td>'.$row['numEyes'].'</td><td>'.$row['abducted'].'</td>'.
                '<td>'.$row['toOffWorld'].'</td><td>'.$row['timeGone'].'</td>'.
                '<td>'.$row['howManyCreatures'].'</td><td>'.$row['additionalDetails'].'</td></tr>';
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