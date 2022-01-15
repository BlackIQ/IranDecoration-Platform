<?php

session_start();

include('../resources/config/config.php');
include('../resources/routes/route.php');

$session_status = $_SESSION['status'];

$_post = $_GET['post'];

$get_post = mysqli_query($connection, "SELECT * FROM posts WHERE id = '$_post'");

if (mysqli_num_rows($get_post) == 1) {
    $post = mysqli_fetch_assoc($get_post);
    $user_from_ad = $post['user'];
    $user = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE id = '$user_from_ad'"));
}
else {
    echo 'پست پیدا نشد.';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نمایش آگهی</title>
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
                    <a class="nav-link deactive" href="<?php echo $home; ?>">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deactive" href="<?php echo $home; ?>/pages/about.php">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deactive" href="<?php echo $home; ?>/pages/faq.php">سوالات متداول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deactive" href="<?php echo $home; ?>/pages/contact.php">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $home; ?>/posts">اگهی ها</a>
                </li>
            </ul>
            <div class="me-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        if (!$session_status) {
                            ?><a href="<?php echo $home; ?>/client" class="nav-link auth-link">ورود به حساب</a><?php
                        } else {
                            ?><a href="<?php echo $home; ?>/client" class="nav-link auth-link">ورود به پنل</a><?php
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"></span>
                    </li>
                    <li class="nav-item">
                        <h4><i class="nav-link theme-changer pointer fa"></i></h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main">
    <div class="row">
        <div class="col-md-6">
            <div class="m-1 ibox border-right">
                <h3 class="text-main"><?php echo $post['name']; ?></h3>
                <br>
                <p><?php echo $post['caption']; ?></p>
                <br>
                <h6 class="text-main">اطلاعات تماس</h6>
                <br>
                <p>
                    <i class="fa fa-mobile text-main"></i>
                    <span class="phone"><?php echo $user['phone']; ?></span>
                </p>
                <p>
                    <i class="fa fa-envelope text-main"></i>
                    <span class="phone"><?php echo $user['mail']; ?></span>
                </p>
                <br>
                <p>
                    <i class="fa fa-map-marker text-main"></i>
                    <span class="phone"><?php echo $post['city']; ?></span>
                </p>
                <p>
                    <i class="fa fa-calendar text-main"></i>
                    <span class="phone"><?php echo $post['date']; ?></span>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="m-1 ibox border-right">
                <h4 class="text-main">ارسال درخواست</h4>
                <br>
                <?php
                $user = $_USER['id'];
                if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM applies WHERE user = '$user' AND post = '$_post'")) != 1) {
                    ?>
                    <form method="post" action="post.php" autocomplete="off">
                        <label class="form-label text-main" for="message">متن پیام خود را بنویسید</label>
                        <textarea name="message" id="message" class="form-control border-main" rows="5" placeholder="متن پیام" required></textarea>
                        <br>
                        <p class="text-main">* ابتدا متن ارسالی یا یک بار بازخوانی کنید و بعد روی دکمه زیر کلیک نمایید.</p>
                        <br>
                        <button class="wbtn btn-main" name="sendapply" type="submit" value="<?php echo $_post; ?>">ارسال درخواست</button>
                    </form>
                    <?php
                }
                else {
                    echo "<h5>درخواست شما برای این آگهی ارسال شده است.</h5>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('../resources/widgets/footer.php'); ?>
<script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $home; ?>/resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>