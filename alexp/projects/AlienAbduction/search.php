<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alien Abduction</title>
    <link rel="stylesheet" href="css/Alien.css">
    <script src="js/aliens.js"></script>
    <style>
    body{
        background-image: url("../../images/SpaceBackground.jpg") ;
    }
    </style>
</head>
<body>
    <h1>Search Aliens DB | Alex P. | Last Edit 04-25-19</h1>
    <br><hr><br>
    <div>
        <form action="php/searchDB.php" method="POST">
            <p>Search by ID: </p><input type="text" name="id">
            <p>Search by First Name: </p><input type="text" name="fname">
            <p>Search by Last Name: </p><input type="text" name="lname">
            <br>
            <button type="submit">Search</button>
        </form>
        <div id="searchReturn">
            <h1>Results</h1>
            <hr><br>
            <?php
                require 'php/alienDBconn.php';
                session_start();
                $sql = $_SESSION['sql'];
                $res = $conn->query($sql) or die($conn->error);
                if($res->num_rows > 0){
                    echo "<table style='color:white'><tr><th>ID</th><th>Name</th><th>Date of Birth</th><th>Email</th></td></tr>";
                    while($row = $res->fetch_assoc()){
                        echo '<tr><td id=1>' . $row['IDpersonal'].'</td>'.
                        '<td>' . $row['fname'] . ' ' . $row['lname'] . '</td>'.
                        '<td>'.$row['dayBirth'].'/'.$row['monthBirth'].'/'.$row['yearBirth'].'</td>'.
                        '<td>'.$row['email'].'</td></tr>';
                    }
                    echo '</table>';
                    }
                else{
                    echo 'No Results';
                };
            ?>
        </div>
    </div>
</body>
</html>
