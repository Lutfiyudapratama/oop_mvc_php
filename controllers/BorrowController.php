<?php
require_once 'Controller.php';
require_once 'models/Borrow.php';

class BorrowController extends Controller
{
    public static function index()
    {
        $query_string = $_SERVER['QUERY_STRING'] ?? NULL;

        if (isset($query_string)) {
            $filter = explode('=', $query_string);
            $data = Book::filter($filter[1]);
            return self::view("views/Borrow.php", $data);
        }
        $listBook = Book::get();
        return self::view("views/Borrow.php", $listBook);
    }
}
?>