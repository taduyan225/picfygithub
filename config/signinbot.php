<?php 
    include "conn.php";

    session_start();

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedIN"])) {
        header("location:http://localhost:8080/taan/picfy/view/manage.php");
        exit();
    }

    $email = $password = "";
    if (isset($_POST['login'])) {

        $email = $db->real_escape_string($_POST["email_bottom"]);
        $password = md5($db->real_escape_string($_POST["password_bottom"]));
       
        $data = $db->query("SELECT user_id FROM user WHERE email='$email' AND password_user='$password'");
       
        if ($data->num_rows > 0) {
            $_SESSION['loggedIN'] = '1';
            $_SESSION['email'] = $email;
            exit('<p style="color: green; font-weight: 600; font-size: 12px; position: fixed; top: 221px;">Login success...</p>');
        } else {
            exit('<p style="color: red; font-weight: 600; font-size: 12px; position: fixed; top: 221px;">Tài khoản hoặc mật khẩu bị nhập sai</p>');
        }
    }
