<?php
    require_once "controller.php";

    class LoginController extends Controller
    {
        public static function index()
        {
            return self::view("views/login.php");
        }
    }
  
    LoginController::index();
?>