<?php
require '../php/Connection.php';
$id = $_POST['id'];
$first=$_POST['first'];
$middle=$_POST['middle'];
$last=$_POST['last'];
$entrant =$_POST['entrant'];

$sql= "UPDATE customer SET fname ='$first', mname = '$middle', lname= '$last', entrant= '$entrant' WHERE ID_customer = $id";

$conn->query($sql);

header("Location:../DBMenu.html?UpdateSuccessful");
include 'close.php';