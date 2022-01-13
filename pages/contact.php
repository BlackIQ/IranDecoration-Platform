<?php

session_start();

include('../resources/config/config.php');
include('../resources/routes/route.php');

$session_status = $_SESSION['status'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارتباط با ما</title>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="<?php echo $home; ?>/resources/sass/main.css" type="text/css" rel="stylesheet">
<!--    <link href="--><?php //echo $home; ?><!--/resources/css/style.css" type="text/css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body">
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
                    <a class="nav-link active" aria-current="page" href="<?php echo $home; ?>/pages/contact.php">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/posts">اگهی ها</a>
                </li>
            </ul>
            <div class="me-auto">
                <?php
                if (!$session_status) {
                    echo '<a href="../client" class="nav-link">ورود به حساب</a>';
                } else {
                    echo '<a href="../client" class="nav-link">ورود به پنل</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>
<div class="main">
    <h1 class="text-main">ارتباط با ما</h1>
    <br>
    <p>
        برای داشتن ارتباط مستقیم با پشتیبان های دکوراسیون ایران زمین میتوانید از طریق فرم های زیر اقدام کنید. همچنین میتوانید از راه های دیگر مثل ارسال ایمیل، تماس مستقیم و غیره نیز با ما ار ارتباط باشید.
    </p>
    <hr class="text-main">
    <div class="row">
        <div class="col-md-6">
            <div class="m-1 p-1">
                <h3 class="text-main">ارتباط از طریق فرم</h3>
                <hr class="text-main">
                <form action="contact.php" method="post" autocomplete="off">
                    <div class="m-1">
                        <label for="name" class="form-label text-main">نام *</label>
                        <input id="name" name="name" type="text" class="form-control border-main"
                               placeholder="نام" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="m-1">
                                <label for="mail" class="form-label text-main">ایمیل *</label>
                                <input id="mail" name="mail" type="email" class="form-control border-main"
                                       placeholder="ایمیل" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-1">
                                <label for="mobile" class="form-label text-main">موبایل</label>
                                <input id="mobile" name="mobile" type="number" class="form-control border-main"
                                       placeholder="موبایل">
                            </div>
                        </div>
                    </div>
                    <div class="m-1">
                        <label for="subject" class="form-label text-main">موضوع پیام *</label>
                        <input id="subject" name="subject" type="text" class="form-control border-main"
                               placeholder="موضوع" required>
                    </div>
                    <div class="m-1">
                        <label for="text" class="form-label text-main">متن پیام *</label>
                        <textarea name="message" rows="5" id="text" class="form-control border-main" placeholder="متن پیام" required></textarea>
                    </div>
                    <br>
                    <button name="sendmessage" class="wbtn btn-main" type="submit">ارسال پیام</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-1 m-1">
                <h3 class="text-main">ارتباط به صورت تماس</h3>
                <hr class="text-main">
                <p>
                    <i class="fa fa-phone text-main"></i>
                    <span class="phone">021-361-56859</span>
                </p>
                <p>
                    <i class="fa fa-mobile text-main"></i>
                    <span class="phone">0901-478-4362</span>
                </p>
                <p>
                    <i class="fa fa-envelope text-main"></i>
                    <span class="phone">info@irandecoration.com</span>
                </p>
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
        </div>
    </div>
</div>
<div><?php include('../resources/widgets/footer.php'); ?></div>
<script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $home; ?>/resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>
