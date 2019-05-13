<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <header>
        <nav>
           <a href="" class="navbar">
                <img src="../../images/Logo/WestAda-10.png" alt="Westada Logo">
            </a>
            <h1 class="navbar">PHP Login System | Alex P. | Last Edit 05-03-19</h1>
            <ul class="navbar">
                <li class="navbar"><a href="index.php">Home</a></li>
                <li class="navbar"><a href="#">Portfolio</a></li>
                <li class="navbar"><a href="#">About Me</a></li>
                <li class="navbar"><a href="#">Contact</a></li>
            </ul>
            <div class="navbar signIn">
                <form action="includes/login.inc.php" method = "post" class="navbar">
                    <input type="text" name="mailuid" placeholder="Username/E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <button onclick="location.href='signup.php'">Signup</button>
                <form action="include/logout.inc.php" method="post" class="navbar">
                    <button type="submit" name="logout-submit" >Logout</button>
                </form>
            </div>
        </nav>
    </header>