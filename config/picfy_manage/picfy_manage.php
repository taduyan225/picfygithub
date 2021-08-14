<?php
    include "/xampp/htdocs/taan/picfy/config/conn.php";
    session_start();

    if (!isset($_SESSION['loggedIN'])) {
        header('location: index.php');
        exit();
    }

    if($_SESSION['email']) {
        echo "you are login"." ".$_SESSION['email'];
    }
?>