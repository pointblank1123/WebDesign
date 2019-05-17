<?php
 require "header.php";
?>

    <main>
        <div class="signUp">
            <h1>Signup</h1>
            <?php
            if(isset($_GET['error'])){ // Checking for and displaying signup errors
                if($_GET['error']=="emptyfields"){
                    echo '<p>Fill in all fields</p>';
                }
                else if($_GET['error']=="invaliduidmail"){
                    echo '<p>Invalid email and username</p>';
                }
                else if($_GET['error']=="invaliduid"){
                    echo '<p>Invalid username</p>';
                }
                else if($_GET['error']=="invalidmail"){
                    echo '<p>Invalid email</p>';
                }
                else if($_GET['error']=="passwordcheck"){
                    echo '<p>Passwords do not match</p>';
                }
                else if($_GET['error']=="usertaken"){
                    echo '<p>Username is taken</p>';
                }
            }
            else if($_GET['signup']=="success"){
                echo '<p>Signup Successful</p>';
            }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder = "Username"><br>
                <input type="text" name="mail" placeholder = "Email"><br>
                <input type="password" name="pass" placeholder = "Password"><br>
                <input type="password" name="pass-repeat" placeholder = "Repeat password"><br>
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </div>
    </main>

<?php
    require "footer.php"
?>