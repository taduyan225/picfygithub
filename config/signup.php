<?php
    include "conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["first_name"])) {
            $first_name = ucfirst($_POST["first_name"]);
        }
        if (isset($_POST["last_name"])) {
            $last_name  = ucfirst($_POST["last_name"]);
        }
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
        }
        if (isset($_POST["password"])) {
            $password = md5($_POST["password"]);
        }
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
        }
        if (isset($_POST["birthday"])) {
            $birthday = $_POST["birthday"];
        }

        $sql = "INSERT INTO user(first_name, last_name, password_user, email, birthday, gender) VALUES ('$first_name', '$last_name', '$password', '$email', '$birthday', '$gender')";
        $db->query($sql);
    } 
?>