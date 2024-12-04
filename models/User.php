<?php

require_once "config/database.php";
class User{
    private $name, $username, $password, $role_id;
    // public function __construct ($name, $username, $password, $role_id)
    // {
    //     $this->name = $name;
    //     $this->username = $username;
    //     $this->password = $password;
    //     $this->role_id = $role_id;
    // }
    public function auth($username, $password)
    {
        try {
            global $pdo;
           // $username = $this->getUsername();
            $select = "SELECT * FROM users WHERE username = '" . $username . "'";
            $query = $pdo->query($select);
            $user = $query->fetch(pdo::FETCH_CLASS, 'user');
            
            if(count($user) == 0)
            {
                $_SESSION['error'] = "ga iso regis";
                header("location: /login");
                die;
            }
            if (password_verify($password, $user[0]->password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $this->username;
                header("location: /membership");
                die();
            }

            $_SESSION['error'] = "wrong password";
            header('location: /login');
            var_dump($user);
            die;
           
            $_SESSION['success'] = "success";
            header('location: /membership');

        }catch(PDOexception $e){
        echo $user . "<br>" . $e->getmessage();
       
    } 
    }
    public function register()
    {
        try {
            global $pdo;
            $user = "INSERT INTO users (name, username, password, role_id)
            VALUES ('$this->name', '$this->username', '$this->password', $this->role_id)";
            $pdo->exec($user);
            $_SESSION['success'] = "success";
            header('location: /register');

        }catch(PDOexception $e){
        echo $user . "<br>" . $e->getmessage();
       
    } 
 
    }
}
?>
