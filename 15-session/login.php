<?php
session_start();

if( $_POST['username'] === 'jorge' && $_POST['password'] === 'superpass' ) {
    $_SESSION['logged'] = True;
    header("Location: index.php");

} else {
    $_SESSION['logged'] = False;
    header("Location: error.html");
}

