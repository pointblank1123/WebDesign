<?php
    if(isset($_POST['login-submit'])){
        require 'dbh.inc.php';

        $mailuid = $_POST['mailuid'];
        $password = $_POST['pwd'];

        if(empty($mailuid) || empty($password)){
            header("location: ../index.php?error=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn); // prepared statements initialize
            if(!mysqli_stmt_prepare($stmt,$sql)){ 
                header("location: ../index.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss", $mailuid,$mailuid); // Binding prepared statement parameters to vars
                mysqli_stmt_execute($stmt); // executing statement
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    // pulling and fetching results
                    $pwdCheck = password_verify($password, $row['pwdUsers']);
                    if($pwdCheck == false){ // verifying login password
                        header("location: ../index.php?error=wrongpwd");
                        exit();
                    }
                    else if($pwdCheck == true){
                        session_start();
                        $_SESSION['userId'] = $row['idUsers'];
                        $_SESSION['userUid'] = $row['uidUsers'];
                        // Setting session vars to maintain logged in status across pages
                        header("location: ../index.php?login=success");
                        exit(); 
                    }
                    else{
                        header("location: ../index.php?error=unexpectederror");
                        exit(); 
                    }
                }
                else{
                    header("location: ../index.php?error=nouser");
                    quit();
                }
            }
        }
    }else{
        header("location: ../signup.php");
        exit();
    }