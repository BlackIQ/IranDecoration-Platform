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
    <link href="../resources/css/main.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 vh-100 p-5 overflow-y-scroll">
            <div class="welcome">
                <h3 class="text-red">به دکوراسیون ایران زمین خوش آمدید!</h3>
                <br>
                <p>
                    دکوراسیون ایران زمین یک شرکت برای طراحی، ساخت و راه اندازی دکور های شما میباشد.
                </p>
                <p>
                    اگر حساب کاربری دارید میتوانید با استفاده از آن وارد شوید و یا با لینک زیر فرم به صفحه ثبت نام
                    بروید.
                </p>
                <i class="fa fa-times text-red close-box"></i>
            </div>
            <br>
            <div id="register-box" style="display: block">
                <h4 class="text-red">
                    ورود کاربر
                    <i class="fa fa-home float-start pointer" onclick="return changeUrl('../');"></i>
                </h4>
                <hr class="text-red">
                <form action="index.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="mail" class="form-label text-red">ایمیل خود را وارد کنید</label>
                                <input id="mail" name="mail" type="email" class="form-control border-red"
                                       placeholder="ایمیل">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="pass" class="form-label text-red">رمز خود را وارد کنید</label>
                                <input id="pass" name="pass" type="password" class="form-control border-red"
                                       placeholder="رمز">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button name="login" class="ibtn btn-red" type="submit">ورود</button>
                    <hr class="text-red">
                    <a class="text-decoration-none a-red" onclick="return changeBox('login-box', 'register-box');">ثبت
                        نام</a>
                </form>
            </div>
            <div id="login-box" style="display: none;">
                <h4 class="text-red">
                    ثبت نام کاربر
                    <i class="fa fa-home float-start pointer" onclick="return changeUrl('../');"></i>
                </h4>
                <hr class="text-red">
                <form action="index.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="fname" class="form-label text-red">نام خود را وارد کنید</label>
                                <input id="fname" name="fname" type="text" class="form-control border-red"
                                       placeholder="نام">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="lname" class="form-label text-red">نام خانوادگی خود را وارد کنید</label>
                                <input id="lname" name="lname" type="text" class="form-control border-red"
                                       placeholder="نام خانوادگی">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="mail" class="form-label text-red">ایمیل خود را وارد کنید</label>
                                <input id="mail" name="mail" type="email" class="form-control border-red"
                                       placeholder="ایمیل">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="phone" class="form-label text-red">موبایل خود را وارد کنید</label>
                                <input id="phone" name="phone" type="number" class="form-control border-red"
                                       placeholder="9---">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="pass" class="form-label text-red">رمز خود را وارد کنید</label>
                                <input id="pass" name="pass" type="password" class="form-control border-red"
                                       placeholder="رمز">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-1 m-1">
                                <label for="rpass" class="form-label text-red">تکرار رمز خود را وارد کنید</label>
                                <input id="rpass" name="rpass" type="password" class="form-control border-red"
                                       placeholder="تایید رمز">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <input id="agree" name="agree" class="form-check-input" value="agree" type="checkbox">
                        <label for="agree" class="form-check-label text-red">با ثبت نام و کلیک روی دکمه ثبت نام با
                            قوانین دکوراسیون ایران موافق هستم.</label>
                    </div>
                    <br>
                    <button name="register" class="ibtn btn-red" type="submit">ثبت نام</button>
                </form>
                <hr class="text-red">
                <a class="text-decoration-none a-red" onclick="return changeBox('register-box', 'login-box');">ورود</a>
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
        <div class="col-md-6 artpic">
        </div>
    </div>
</div>
<script src="../resources/js/jquery-3.6.0.min.js"></script>
<script src="../resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>
