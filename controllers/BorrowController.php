<?php
require_once 'Controller.php';
require_once 'models/Book.php';

class BorrowController extends Controller
{
    public static function index()
    {
        return self::view("views/borrow.php");
        if (isset($_POST['submit'])) {
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $start_Peminjaman = isset($_POST['start_peminjaman']) ? $_POST['start_peminjaman'] : '';
            $buku_Yang_Di_Pinjam = isset($_POST['buku_yang_di_pinjam']) ? $_POST['buku_yang_di_pinjam'] : '';
            $end_Peminjaman = isset($_POST['end_peminjaman']) ? $_POST['end_peminjaman'] : '';
        
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Start Peminjaman: " . htmlspecialchars($start_Peminjaman) . "<br>";
            echo "Buku yang dipinjam: " . htmlspecialchars($buku_Yang_Di_Pinjam) . "<br>";
            echo "End Peminjaman: " . htmlspecialchars($end_Peminjaman) . "<br>";
            
        }
    }
}
BorrowController::index()
?>