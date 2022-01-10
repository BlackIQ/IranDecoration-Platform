<?php

session_start();

$session_status = $_SESSION['status'];

include('../resources/config/config.php');
include('../resources/routes/route.php');

if ($session_status) {
    echo $_SESSION['user']['name'];
}
else {
    header('Location: ' . $home . '/client');
}