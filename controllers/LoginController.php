<?php
require_once "controller.php";

class LoginController extends Controller
{
    public static function index()
    {
        return self::view("views/login.php");
    }
}
if (count($_POST) > 0) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    if ($username == "" || $_POST['password'] == "") {
        $_SESSION["error"] = "All fields must be filled!";
        $_SESSION["username"] = $username;
        header("location: /login");
        die();
    }
    $user = new User;
    $user->auth($username, $password);
    // // var_dump($user); 
    die();
    return self::view("views/login.php");
}

if ($uri == '/login  ') {
    return LoginController::index();
}

LoginController::index();
