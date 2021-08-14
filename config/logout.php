<?php
    session_start();    

    unset($_SESSION['loggedIN']);
    session_destroy();
    header('Location: http://localhost:8080/taan/picfy/view/index.php');
    exit();
?>