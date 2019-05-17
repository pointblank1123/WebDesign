<?php
 require "header.php";
?>

    <main>
        <div class="main-content">
            <?php
            if(isset($_SESSION['userId'])){ // checking login status if logged in show logged in page else show logged out
                echo'<p>You are logged in</p>';
            }else{
                echo '<p>You are logged out</p>';
            }
            ?>
        </div>
    </main>

<?php
    require "footer.php"
?>