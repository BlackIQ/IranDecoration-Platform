<?php

session_start();

include('../config/config.php');

$errors = array();

// Login user
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['mail']);
    $password = mysqli_real_escape_string($connection, $_POST['pass']);

    if (empty($email)) {
        array_push($errors, 'ایمیل الزامیست');
    }
    if (empty($password)) {
        array_push($errors, 'رمز الزامیست');
    }

    if (count($errors) == 0) {
        $query = mysqli_query($connection, "SELECT * FROM users WHERE mail = '$email' AND passcode = '$password'");
        if (mysqli_num_rows($query) == 1) {
            $user_row = mysqli_fetch_assoc($query);
            $_SESSION['status'] = true;
            $_SESSION['user'] = $user_row;
            header('Location: ' . $home . '/user');
        }
    }
}