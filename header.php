<?php
    session_start();

?>
<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta name="description" content="This is my first try.">
        <meta name=viewpoint content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img src="img/logo.png" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

                <div class="Header-login">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                        }
                        else {
                            echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="E-mail/Username">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                            <a href="signup.php" class="header-signup">
                                <button type="button">Signup</button>
                            </a>
                            </form>';

                        }      
                    ?>
                </div>
        </header>
    </body>
</html>