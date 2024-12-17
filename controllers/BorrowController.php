<?php
require_once 'Controller.php';
require_once 'models/Book.php';
require_once 'views/borrow.php';

class BorrowController extends Controller
{
    public static function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $book->getId();
            $book->getTitle();
            $book->getAuthor();
        }
    }
}
BorrowController::index()
?>