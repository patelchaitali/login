<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// echo "jbjnmbbm";

if ($_POST) {
    if (isset($_POST['submit']) == "Login") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        try {
            include './model/Login.php';
            $login = new Login($username, $password);

            if ($login == true) {
                session_start();
                $_SESSION['username'] =$username;
                header('Location:home.php');
            } else {
                echo "user not register.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
} else {
    echo "in else";
}
