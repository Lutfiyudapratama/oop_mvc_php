<?php
include 'templates/header.php' ?>

<div class="main-content bg-white">
    <section class="container my-5"> 
        <h3 class="panel-title text-center">Search Book @ PI SCHOOL LIBRARY</h3>
        <form class="d-flex justify-content-between align-items-center">
            <input
                type="text"
                class="form-control"
                placeholder="Cari Buku"
                name="search"
                required />
            <button class="btn btn-sm btn-primary mx-3">Search</button>
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