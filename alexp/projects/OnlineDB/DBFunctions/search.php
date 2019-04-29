<?php
    require '../php/Connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/onlineDB.css">
    <link rel="stylesheet" href="../../../css/index.css">
    <title>Search</title>
</head>
<body>
    <h1>Search the Table | Alex P. | Last Edit: 02-28-19</h1>
    <br><hr><br>
    <form action="../php/searchCustomers.php" method="POST">
        <input type="text" name="id" placeholder="Search ID">
        <br>
        <input type="text" name="fname" placeholder="Search First Name">
        <br>
        <input type="text" name="mname" placeholder="Search Middle Name">
        <br>
        <input type="text" name="lname" placeholder="Search Last Name">
        <br>
        <input type="text" name="entrant" placeholder="Search Entrant">
        <br>
        <button type="submit" name="search">Search</button>
    </form>

</body>
</html>