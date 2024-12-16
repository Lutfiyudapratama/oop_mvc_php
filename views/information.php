<?php
$number = 1;
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}

include('templates/header.php') ?>

<div class="main-content bg-white">
    <section class="container my-5">
        <h3 class="panel-title text-center">Fiiiiiiilfi LIBRARY</h3>
        <div class="table table-responsive my-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Start date</th>
                        <th>Name book</th>
                        <th>End date</th>
                    </tr>
                </thead>
            </table>
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

<?php include('templates/footer.php') ?>