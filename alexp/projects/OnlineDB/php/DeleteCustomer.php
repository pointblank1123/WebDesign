<?php

    require '../php/Connection.php';

    $id=$_POST['ID'];

    $sql = "DELETE FROM customer WHERE ID_customer=$id;";

    $conn->query($sql);

    header('Location:../DBMenu.html?CustomerDeleted');
    include '../php/close.php';