<?php
include 'templates/header.php' ?>

<div class="main-content bg-white">
    <section class="container my-5">
        <h3 class="panel-title text-center">Fiiiiiiilfi LIBRARY</h3>
        <form class="d-flex justify-content-between align-items-center">
            <div>
                <div class="main-content login-panel">
                    <div class="main-content login-panel">
                        <div class="login-body">
                            <div class="top d-flex justify-content-between align-items-center">
                                <div class="logo">
                                    <img src="assets/images/logo-black.png" alt="Logo">
                                </div>
                                <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
                            </div>
                            <div class="bottom">
                                <h3 class="panel-title">Peminjaman buku</h3>
                                <!-- <label for="username" class="form-label">Username</label> -->
                                <form action="/information" method="POST">
                                    <div class="input-group mb-25">
                                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Username"
                                            name="username">
                                    </div>
                                    <div class="input-group mb-25">
                                        <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                                        <input
                                            type="date"
                                            class="form-control"
                                            placeholder="start_peminjaman"
                                            name="start_peminjaman">
                                    </div>
                                    <div class="input-group mb-25">
                                        <select name="book_id" class="form-select" aria-label="Pilih Buku">
                                            <option value="">Pilih Buku</option>
                                            <?php foreach ($data as $book) : 
                                                echo"<option value='{$book->getId()}'>{$book->getTitle()} - {$book->getAuthor()}</option>"?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="input-group mb-25">
                                        <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                                        <input
                                            type="date"
                                            class="form-control"
                                            placeholder="end_peminjaman"
                                            name="end_peminjaman">
                                    </div>
                                   
                                        <button class="btn btn-primary w-100 login-btn" type="submit">Pinjam buku</button>
                                    </form>
                            </div>
                            <div class="d-flex justify-content-center mb-0">
                                <div class="my-4">
                                    <a href="/">Back to Home</a>
                                </div>
                            </div>
                            <div class="footer mb-0">
                                <p>Copyright© <script>
                                        document.write(new Date().getFullYear())
                                    </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
                            </div>
    </section>
</div>

<?php include 'templates/footer.php' ?>