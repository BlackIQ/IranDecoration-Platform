<?php

session_start();

$session_status = $_SESSION['status'];

include('../resources/config/config.php');
include('../resources/routes/route.php');

if (!$session_status) {
    header('Location: ' . $home . '/client');
}

$_USER = $_SESSION['user'];

$user_id = $_USER['id'];

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
    <link href="<?php echo $home; ?>/resources/sass/main.css" type="text/css" rel="stylesheet">
<!--    <link href="--><?php //echo $home; ?><!--/resources/css/style.css" type="text/css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-blur fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-main" href="<?php echo $home; ?>">دکوراسیون ایران زمین</a>
        <button class="navbar-toggler text-main" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span id="overview-link" class="nav-link user-nav-link active text-main">نگاه کلی</span>
                </li>
                <li class="nav-item">
                    <span id="requests-link" class="nav-link deactive user-nav-link">درخواست ها</span>
                </li>
                <li class="nav-item">
                    <span id="ads-link" class="nav-link deactive user-nav-link">آگهی ها</span>
                </li>
                <li class="nav-item">
                    <span id="add-ad-link" data-mdb-toggle="modal" data-mdb-target="#addNewPost"
                          class="nav-link deactive user-nav-link">اگهی جدید</span>
                </li>
            </ul>
            <div class="me-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?logout=true" class="nav-link auth-link">خروج از حساب</a>
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
    <div class="overview block">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">باکس خالی یک</h4>
                    <hr class="text-main">
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">باکس خالی دو</h4>
                    <hr class="text-main">
                </div>
            </div>
        </div>
    </div>
    <div class="requests none">
        <div class="row">
            <div class="col-md-6">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">لیست درخواست ها</h4>
                    <hr class="text-main">
                    <div>
                        <?php
                        $get_applies = mysqli_query($connection, "SELECT * FROM applies WHERE user = '$user_id'");
                        if (mysqli_num_rows($get_applies) != 0) {
                            while ($apply = mysqli_fetch_assoc($get_applies)) {
                                $post_id = $apply['post'];
                                $post = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM posts WHERE id = '$post_id'"));
                                ?>
                                <p onclick="changeUrl('?postid=<?php echo $apply['apply_id']; ?>');" class="pointer">
                                    <span class="font-weight-bold"><?php echo $post['name']; ?></span>
                                    <span class="float-start">
                                        <?php echo $apply['date']; ?>
                                    </span>
                                </p>
                                <?php
                            }
                        }
                        else {
                            echo '<h5 class="null">شما تا کنون آگهی ثبت نکرده اید.</h5>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">نمایش اطلاعات درخواست</h4>
                    <hr class="text-main">
                </div>
            </div>
        </div>
    </div>
    <div class="ads none">
        <div class="row">
            <div class="col-md-4">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">لیست آگهی ها</h4>
                    <hr class="text-main">
                    <div>
                        <?php
                        $get_posts = mysqli_query($connection, "SELECT * FROM posts WHERE user = '$user_id'");
                        if (mysqli_num_rows($get_posts) != 0) {
                            while ($post = mysqli_fetch_assoc($get_posts)) {
                                $post_id = $post['id'];
                                $count = mysqli_fetch_assoc(mysqli_query($connection, "SELECT COUNT(post) AS `count` FROM applies WHERE post = '$post_id'"));
                                ?>
                                <p onclick="changeUrl('?postid=<?php echo $post['id']; ?>');" class="pointer">
                                    <span class="font-weight-bold"><?php echo $post['name']; ?></span>
                                    -
                                    <span class="count-requests"><?php echo $count['count']; ?></span>
                                    <span class="float-start">
                                        <?php echo $post['date']; ?>
                                    </span>
                                </p>
                                <?php
                            }
                        }
                        else {
                            echo '<h5 class="null">شما تا کنون آگهی ثبت نکرده اید.</h5>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">لیست درخواست ها</h4>
                    <hr class="text-main">
                    <h5 class="null">یک آگهی را انتخاب کنید.</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-1 ibox border-main">
                    <h4 class="text-main">اطلاعات درخواست</h4>
                    <hr class="text-main">
                    <h5 class="null">یک درخواست را انتخاب کنید.</h5>
                </div>
            </div>
        </div>
    </div>
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
<div><?php include('../resources/widgets/footer.php'); ?></div>
<script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $home; ?>/resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="addNewPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <form action="index.php" method="post" autocomplete="off">
            <div class="modal-content bg-modal">
                <div class="modal-header">
                    <h5 class="modal-title title-modal" id="exampleModalLabel">اضافه کردن آگهی جدید</h5>
                </div>
                <div class="modal-body">
                    <div class="m-1">
                        <label for="adname" class="form-label text-main">نام آگهی *</label>
                        <input id="adname" name="adname" type="text" class="form-control border-main"
                               placeholder="نام آگهی" required>
                    </div>
                    <div class="m-1">
                        <label for="caption" class="form-label text-main">توضیحات آگهی *</label>
                        <textarea name="caption" rows="5" id="caption" class="form-control border-main"
                                  placeholder="توضیحات آگهی" required></textarea>
                    </div>
                    <div class="m-1">
                        <label for="city" class="form-label text-main">شهر *</label>
                        <input id="city" name="city" type="text" class="form-control border-main"
                               placeholder="شهر" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="addnewad" class="wbtn btn-main" type="submit">ثبت آگهی</button>
                </div>
            </div>
        </form>
    </div>
</div>