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
    <title>Delete DB Data</title>
</head>
<body>
    <h1>Delete database info | By: Alex P. | Last Updated: 02-26-19</h1>
    <br><hr><br>    
    <form action="../php/DeleteCustomer.php" method="POST">
        <input type="text" name="ID" placeholder="Enter Customer ID">
        <br>
        <button type='submit' name='submit'>Delete Customer</button> 
    </form>
</body>
</html>