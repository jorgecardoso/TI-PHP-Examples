<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

session_start();

if ( isset($_SESSION['logged']) && $_SESSION['logged'] ) { ?>

    <h1>You are logged</h1>
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>

<?php } else { ?>

    <form action="login.php" method="POST">
        <label>Username: <input type="text" name="username"></label>
        <br>
        <label>Pass: <input type="password" name="password"></label>
        <br>
        <input type="submit">
    </form>
<?php } ?>

</body>
</html>