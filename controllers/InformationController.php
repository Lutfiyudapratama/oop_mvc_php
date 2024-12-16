<?php
require_once 'Controller.php';
require_once 'models/Book.php';
class InformationController extends Controller
{
    public static function index()
    {
        if (isset($_POST['submit']))
            $username = $_POST['username'];
            $start_Peminjaman = $_POST['start_peminjaman'];
            $buku_Yang_Di_Pinjam = $_POST['buku_yang_di_pinjam'];
            $end_Peminjaman = $_POST['end_peminjaman'];
        
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Start Peminjaman: " . htmlspecialchars($start_Peminjaman) . "<br>";
            echo "Buku yang dipinjam: " . htmlspecialchars($buku_Yang_Di_Pinjam) . "<br>";
            echo "End Peminjaman: " . htmlspecialchars($end_Peminjaman) . "<br>";
    }
    
}
InformationController::index();