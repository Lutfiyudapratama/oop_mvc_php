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
                                <div class="input-group mb-25">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Username"
                                        name="username">
                                </div>
                                <div class="input-group mb-25">
                                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Password"
                                        name="Password">
                                </div>
                                <div class="input-group mb-25">
                                    <span class="input-group-text"><i class="fa-regular fa-shopping-cart"></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Buku yg di pinjam"
                                        name="Buku yang di pinjam">
                                </div>
                                <button class="btn btn-primary w-100 login-btn" type="submit" action="/borrow" method="POST">submit</button>

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