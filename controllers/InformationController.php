<?php
require_once 'Controller.php';
require_once 'models/Book.php';

class InformationController extends Controller
{
    public static function index()
    {
        $listBook = Book::get();
        return self::view("views/information.php", $listBook);
    }
}

InformationController::index();