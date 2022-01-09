<?php

include('config.php');

function cssMaterial()
{
    ?>
    <link href="<?php echo $home; ?>/resources/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
    <?php
}

function jsMaterial()
{
    ?>
    <script src="<?php echo $home; ?>/resources/js/script.js"></script>
    <script src="<?php echo $home; ?>/resources/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    <?php
}

function fontAwesome()
{
    ?>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <?php
}