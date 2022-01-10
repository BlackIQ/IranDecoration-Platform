<?php

include('../config/config.php');

$errors = array();

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
        echo 'Ok';
    }
}