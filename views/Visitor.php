<?php

$number = 1;
if (!defined('SECURE_ACCES')){
    die('ga ndue akses bolo');
}

if (isset($_SESSION['is_login']) == false) {
    header("location: /register");
}

if (isset($_SESSION['is_login']) == false) {
    header("location: /login");
}

include('templates/header.php') ?>




<?php include('templates/footer.php') ?>

