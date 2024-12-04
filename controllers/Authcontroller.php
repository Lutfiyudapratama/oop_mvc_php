<?php
require_once 'config/database.php';
require_once 'Controller.php';
require_once 'models/User.php';

class AuthController extends Controller{
  public static function index()
  {
    if(count($_POST) > 0){        
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
    } 

      return self::view("views/login.php");
  }

  
  public static function register()
  {
    if(count($_POST) > 0){
      
      $name = $_POST['name'];      
      $username = $_POST['username'];      
      $password = $_POST['password'];      
        
      $name = htmlspecialchars($_POST['name']);
      $username = htmlspecialchars($_POST['username']);
      $password = $_POST['password'];


      if ($name == "" || $username == "" || $_POST['password'] == "") {
          $_SESSION["error"] = "All fields must be filled!";
          $_SESSION["name"] = $name;
          $_SESSION["password"] = $password;
          header("location: /register");
          die();
      }
      $user = new User($name, $username, $password, 2);
      $user->register();
      // var_dump($user); 
      die();
    } 
      return self::view("views/register.php");
  }
}

if ($uri == '/login  ') {
  return AuthController::index();
}

AuthController::register();
?>