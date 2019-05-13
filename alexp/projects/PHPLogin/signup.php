<?php
 require "header.php";
?>

    <main>
        <div class="signUp">
            <h1>Signup</h1>
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