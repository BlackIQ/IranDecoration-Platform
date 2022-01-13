<?php

session_start();

$session_status = $_SESSION['status'];

include('../resources/config/config.php');
include('../resources/routes/route.php');

if ($session_status == true) {
    header('Location: ' . $home . '/user');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به پنل کاربری</title>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="<?php echo $home; ?>/resources/sass/main.css" type="text/css" rel="stylesheet">
<!--    <link href="../resources/css/style.css" type="text/css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body artpic">
<nav class="navbar navbar-expand-lg navbar-light bg-blur fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-main" href="<?php echo $home; ?>">دکوراسیون ایران زمین</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/pages/about.php">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/pages/faq.php">سوالات متداول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/pages/contact.php">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/posts">اگهی ها</a>
                </li>
            </ul>
            <div class="me-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $home; ?>/client">ورود یا ثبت نام</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main">
    <div class="row">
        <div class="col-md-6">
            <div class="m-1">
                <div id="auth-box block">
                    <h4 class="text-main">
                        ورود کاربر
                    </h4>
                    <hr class="text-main">
                    <form action="index.php" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="mail" class="form-label text-main">ایمیل خود را وارد کنید</label>
                                    <input id="mail" name="mail" type="email" class="form-control border-main"
                                           placeholder="ایمیل">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="pass" class="form-label text-main">رمز خود را وارد کنید</label>
                                    <input id="pass" name="pass" type="password" class="form-control border-main"
                                           placeholder="رمز">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button name="login" class="wbtn btn-main" type="submit">ورود</button>
                </div>
            </div>
            <br>
            <?php
            if (count($errors) > 0) {
                ?>
                <div class="alert alert-danger error-box">
                    <ul>
                        <?php
                        foreach ($errors as $error) {
                            ?>
                            <li><?php echo $error; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <div class="close-error">
                        <button class="btn btn-outline-danger">پنهان سازی</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="col-md-6">
            <div class="m-1">
                <div id="auth-box block">
                    <h4 class="text-main">
                        ثبت نام کاربر
                    </h4>
                    <hr class="text-main">
                    <form action="index.php" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="fname" class="form-label text-main">نام خود را وارد کنید</label>
                                    <input id="fname" name="fname" type="text" class="form-control border-main"
                                           placeholder="نام">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="lname" class="form-label text-main">نام خانوادگی خود را وارد کنید</label>
                                    <input id="lname" name="lname" type="text" class="form-control border-main"
                                           placeholder="نام خانوادگی">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="mail" class="form-label text-main">ایمیل خود را وارد کنید</label>
                                    <input id="mail" name="mail" type="email" class="form-control border-main"
                                           placeholder="ایمیل">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="phone" class="form-label text-main">موبایل خود را وارد کنید</label>
                                    <input id="phone" name="phone" type="number" class="form-control border-main"
                                           placeholder="9---">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="pass" class="form-label text-main">رمز خود را وارد کنید</label>
                                    <input id="pass" name="pass" type="password" class="form-control border-main"
                                           placeholder="رمز">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 m-1">
                                    <label for="rpass" class="form-label text-main">تکرار رمز خود را وارد کنید</label>
                                    <input id="rpass" name="rpass" type="password" class="form-control border-main"
                                           placeholder="تایید رمز">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <input id="agree" name="agree" class="form-check-input" value="agree" type="checkbox">
                            <label for="agree" class="form-check-label text-main">با ثبت نام و کلیک روی دکمه ثبت نام با
                                قوانین دکوراسیون ایران موافق هستم.</label>
                        </div>
                        <br>
                        <button name="register" class="wbtn btn-main" type="submit">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../resources/js/jquery-3.6.0.min.js"></script>
<script src="../resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>
