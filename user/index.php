<?php

session_start();

$session_status = $_SESSION['status'];

include('../resources/config/config.php');
include('../resources/routes/route.php');

if (!$session_status) {
    header('Location: ' . $home . '/client');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>داشبورد کاربر</title>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="<?php echo $home; ?>/resources/css/main.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-blur fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $home; ?>">دکوراسیون ایران زمین</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span id="overview-link" class="nav-link user-nav-link text-red">نگاه کلی</span>
                </li>
                <li class="nav-item">
                    <span id="requests-link" class="nav-link user-nav-link">درخواست ها</span>
                </li>
                <li class="nav-item">
                    <span id="ads-link" class="nav-link user-nav-link">آگهی ها</span>
                </li>
                <li class="nav-item">
                    <span id="settings-link" class="nav-link user-nav-link">تنظیمات</span>
                </li>
                <li class="nav-item">
                    <span id="add-ad-link" class="nav-link user-nav-link">اگهی جدید</span>
                </li>
            </ul>
            <div class="me-auto">
                <a href="../client/logout.php" class="nav-link">خروج از حساب</a>
            </div>
        </div>
    </div>
</nav>
<div class="main">
    <div class="overview block">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">باکس خالی یک</h4>
                    <hr class="text-red">
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">باکس خالی دو</h4>
                    <hr class="text-red">
                </div>
            </div>
        </div>
    </div>
    <div class="requests none">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">لیست درخواست ها</h4>
                    <hr class="text-red">
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">نمایش درخواست به خصوص</h4>
                    <hr class="text-red">
                </div>
            </div>
        </div>
    </div>
    <div class="ads none">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">لیست آگهی ها</h4>
                    <hr class="text-red">
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">نمایش آگهی به خصوص</h4>
                    <hr class="text-red">
                </div>
            </div>
        </div>
    </div>
    <div class="settings none">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">تنظیمات ظاهر</h4>
                    <hr class="text-red">
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-red">
                    <h4 class="text-red">تنظیمات کاربر</h4>
                    <hr class="text-red">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $home; ?>/resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>
