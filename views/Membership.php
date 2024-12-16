<?php
$number = 1;
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}

if (isset($_SESSION['is_register']) == false) {
    header("location: /register");
}

include('templates/header.php') ?>


<?php include('templates/footer.php') ?>