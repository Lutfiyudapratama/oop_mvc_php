<?php 
$number = 1;
if (!defined('SECURE_ACCES')){
    die('ga ndue akses bolo');
}
include('templates/header.php') ?>

<div class="main-content bg-white">
    <section class="container my-5">
    <h3 class="panel-title text-center"><b>Fila LIBRARY</b></h3>
    <center><div class="login-body login-body-2 p-4">
        <form action="" class="d-flex justify-content-between align-items-center">
            <input 
            type="text" 
            class="form-control" 
            placeholder="Cari Buku" 
            name="search"
            required/>
            <button class="btn btn-sm btn-primary mx-3">Search</button>

            
        </form>
       
</center>
    <div class="tables table-responsive my-4">
        <table class="table">
            
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>pinjam buku</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $book) : ?>
            <tr>
                <th><?= $number++ ?></th>
                <th><?= $book->getTitle()?></th>
                <th><?= $book->getAuthor()?></th>
                <th><?= $book->getYear()?></th>
                <th>
                <button onclick="window.location.href='pinjambuku.php?id=<?= $index ?>'">See More</button>
                </th>
            </tr>
            <?php endforeach ?>
        </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <div class="my-4">
                <a href="/">Back to Home</a>
            </div>
        </div>
    </div>
        
        
    </div>
   
    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
    </div>
</div>

<?php include('templates/footer.php') ?>