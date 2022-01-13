<?php

session_start();

include('../resources/config/config.php');

$session_status = $_SESSION['status'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سوالات متداول</title>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="<?php echo $home; ?>/resources/css/main.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-blur fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-red" href="<?php echo $home; ?>">دکوراسیون ایران زمین</a>
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
                    <a class="nav-link active" aria-current="page" href="<?php echo $home; ?>/pages/faq.php">سوالات متداول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $home; ?>/pages/contact.php">ارتباط با ما</a>
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
    <h1 class="text-red">سوالات متداول</h1>
    <br>
    <p>
        در اینجا سعی میکنیم به مرتبط ترین سوالات شما جواب دهیم. اما اگر سوال شما در بین سوال های نوشته شده نبود، میتوانید سوال خود را با ما از طریق فرم ارتباط با ما به اشتراک بزارید.
    </p>
    <hr class="text-red">
    <div class="row">
        <div class="col-md-6">
            <div class="faq border-red m-1">
                <div class="faq-question">
                    <h3 class="text-red">ایران دکوراسیون چیست؟</h3>
                </div>
                <div class="faq-answer">
                    <hr class="text-red">
                    <p>ایران دکوراسیون یا دکوراسیون ایران زمین یک سرویس برای کمک به معماران، طراحان و نصاب ها میباشد تا دیواری برای کار آنها فراهم کند.</p>
                    <p>مردم و شهروندان کشور میتوانند با ثبت آگهی های خودشان در دکوراسیون ایران زمین، امکان پیدا کردن یک شخص مورد نظر در شهر وارد شده میباشند.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="faq border-red m-1">
                <div class="faq-question">
                    <h3 class="text-red">چرا دکوراسیون ایران زمین؟</h3>
                </div>
                <div class="faq-answer">
                    <hr class="text-red">
                    <p>دکوراسیون ایران زمین سریع ترین روش برای پیدا کردن فرد مورد نظر برای کار میباشد.</p>
                </div>
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
