<?php
    require '../php/Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../../css/index.css">
        <link rel="stylesheet" href="../css/onlineDB.css">
        <title>Insert into DB</title>
    </head>
    <body>
        <h1>Insert new data into database | Alex P | Last Edit: 02-15-19</h1>
        <br><hr><br>
        <form action="../php/insertCustomer.php" method="POST">
            <input type="text" name="first" placeholder="Enter First Name">
            <br>
            <input type="text" name="middle" placeholder="Enter Middle Name">
            <br>
            <input type="text" name="last" placeholder="Enter Last Name">
            <br>
            <input type="text" name="entrant" placeholder="Entrant Name">
            <br>
            <button type="submit" name="Submit">Insert Entry</button>
        </form>


    </body>
</html>