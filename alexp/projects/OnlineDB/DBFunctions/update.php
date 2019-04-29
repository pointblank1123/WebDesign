<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel="stylesheet" href="../css/onlineDB.css">
    <title>Update DB Data</title>
</head>
<body>
    <h1>Update database info | By: Alex P. | Last Updated: 02-28-19</h1>
    <br><hr><br>
        <form action="../php/updateCustomer.php" method="POST">
            <input type="text" name="id" placeholder="Enter ID to Update">
            <br>
            <input type="text" name="first" placeholder="Enter First Name">
            <br>
            <input type="text" name="middle" placeholder="Enter Middle Name">
            <br>
            <input type="text" name="last" placeholder="Enter Last Name">
            <br>
            <input type="text" name="entrant" placeholder="Entrant Name">
            <br>
            <button type="submit" name="Submit">Update Entry</button>
        </form>
</body>
</html>