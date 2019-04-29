<?php
    require '../php/Connection.php';
    // DB write phase
    $first=$_POST['first'];
    $middle=$_POST['middle'];
    $last=$_POST['last'];
    $entrant =$_POST['entrant'];
    $sql = "INSERT INTO customer(fname,mname,lname,entrant)
    VALUES('$first','$middle','$last','$entrant');";

    $conn->query($sql);

    header("Location:../DBMenu.html?insertSuccessful");

    include '../php/close.php';
