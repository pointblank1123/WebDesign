<?php 
session_start();
session_unset(); //Proper close of sessions clearout session vars 
session_destroy(); // Ending session
header("location: ../index.php");