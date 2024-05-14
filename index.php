<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p class="login-status">You are logged In!</p>';
                }
                else {
                    echo '<p class="logout-status">You are logged Out!</p>';
                }

            ?>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>