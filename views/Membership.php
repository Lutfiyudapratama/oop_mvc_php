<?php

$number = 1;
if (!defined('SECURE_ACCES')){
    die('ga ndue akses bolo');
}

if (isset($_SESSION['is_register']) == false) {
    header("location: /register");
}

include('templates/header.php') ?>




<?php include('templates/footer.php') ?>

