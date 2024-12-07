<?php
require_once 'Controller.php';
require_once 'models/Book.php';

class BorrowController extends Controller
{
    public static function index()
    {
        $listBook = Book::get();
        return self::view("views/borrow.php", $listBook);
    }
}
BorrowController::index()
?>