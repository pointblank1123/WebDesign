<?php
if(isset($_POST['signup-submit'])){
    require 'dbh.inc.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $passRepeat = $_POST['pass-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passRepeat)){ // search for empty fields in form and send back with error notice
        header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // Validating to ensure proper email format
        header("location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }    
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){ // Ensuring proper username format
        header("location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)&& !filter_var($email, FILTER_VALIDATE_EMAIL)){ // Checking for proper username and email format
        header("location: ../signup.php?error=invalidmail&uid");
        exit();
    }
    else if($password !== $passRepeat){ // Checking password and repeat password for consistency
        header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers =?";
        $stmt = mysqli_stmt_init($conn); // prepared statement init
        if(!mysqli_stmt_prepare($stmt, $sql)){ // prepared statement error
            header("location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){ //checking for already taken username
                header("location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else{
                $sql="INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn); // prepared statement to insert new login info
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("location: ../signup.php?error=sqlerror");
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); // hashing password
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_clost($conn);
}
else{
    header("location: ../signup.php");
    exit();
}