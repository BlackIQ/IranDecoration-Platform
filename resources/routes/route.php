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

// Register user
if (isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $mail = mysqli_real_escape_string($connection, $_POST['mail']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $pass = mysqli_real_escape_string($connection, $_POST['pass']);
    $repeat_pass = mysqli_real_escape_string($connection, $_POST['rpass']);
    $agreement = mysqli_real_escape_string($connection, $_POST['agree']);

    if ($agreement == 'agree') {
        if (empty($fname)) {
            array_push($errors, 'ایمیل الزامیست');
        }
        if (empty($lname)) {
            array_push($errors, 'رمز الزامیست');
        }
        if (empty($mail)) {
            array_push($errors, 'ایمیل الزامیست');
        }
        if (empty($phone)) {
            array_push($errors, 'رمز الزامیست');
        }
        if (empty($pass)) {
            array_push($errors, 'ایمیل الزامیست');
        }
        if (empty($repeat_pass)) {
            array_push($errors, 'رمز الزامیست');
        }
    }
    else {
        array_push($errors, 'برای ثبت نام باید با قوانین دکوراسیون ایران موافق باشید');
    }

    if ($pass != $repeat_pass) {
        array_push($errors, 'رمز های وارد شده با هم متابقت ندارند');
    }

    if (count($errors) == 0) {
        $id = rand(11111111, 99999999);
        $name = $fname . ' ' . $lname;
        $join = date("M d, Y H:i:s");
        $query = mysqli_query($connection, "INSERT INTO users (id, name, mail, phone, passcode, `join`) VALUES ('$id', '$name', '$mail', '$phone', '$pass', '$join')");
        if ($query) {
            $user_row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE id = '$id'"));
            $_SESSION['status'] = true;
            $_SESSION['user'] = $user_row;
            header('Location: ' . $home . '/user');
        }
    }
}