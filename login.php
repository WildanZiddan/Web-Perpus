<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="./CSS/login.css">
<script src="login.js"></script>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
            if (isset($loginError)) {
                echo "<p>$loginError</p>";
            }
        ?>
        <form class="form" action="" method="post">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>

            <input class="button" type="submit" value="Login">
        </form>
        <div class="signup">
            <p>Don't have an account? <a class="link" href="#">Sign Up</a> </p>
        </div>
    </div>
</body>
</html>