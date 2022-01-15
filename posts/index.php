<?php

session_start();

include('../resources/config/config.php');

$session_status = $_SESSION['status'];

$get_all_posts = mysqli_query($connection, 'SELECT * FROM posts ORDER BY row DESC');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>آگهی ها</title>
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
    <h1 class="text-main">آگهی ها</h1>
    <br>
    <p>
        آگهی هایی که مردم که نیاز به یک طراح، دیزایتر و حتی نضاب دارند در این قسمت قابل مشاهده دارند. اگه ورود به آگهی و نمایش کامل آگهی باید وارد حساب خود شوید.
    </p>
    <hr class="text-main">
    <div class="row">
        <?php
        if (mysqli_num_rows($get_all_posts) != 0) {
            while ($post = mysqli_fetch_assoc($get_all_posts)) {
                ?>
                <div class="col-md-3">
                    <div class="post border-main m-1 pointer" onclick="changeUrl('post.php?post=<?php echo $post['id']; ?>');">
                        <div class="post-head">
                            <p class="text-main"><?php echo $post['name']; ?></p>
                        </div>
                        <div class="post-content">
                            <p><?php echo $post['caption']; ?></p>
                        </div>
                        <hr class="text-main">
                        <span class="post-more pointer text-main">اطلاعات بیشتر</span>
                        <div class="post-footer">
                            <br>
                            <p><i class="text-main fa fa-map-marker"></i> <?php echo $post['city']; ?></p>
                            <p><i class="text-main fa fa-calendar"></i> <?php echo $post['date']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        else {
            echo '<h3>آگهی جدیدی ثبت نشده است.</h3>';
        }
        ?>
    </div>
</div>
<?php include('../resources/widgets/footer.php'); ?>
<script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $home; ?>/resources/js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</body>
</html>
