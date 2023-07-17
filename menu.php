<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Menu</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="background-color: #C38154;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #884A39;">
        <div class="container">
            <a class="navbar-brand" href="#"><b>COFFEE SHOP</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Menu</a>
                    </li>
                    <?php
                    include 'koneksi.php';
                    session_start();
                    if ($_SESSION['status'] === 'Administrator') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Tambah Menu</a>
                        </li>
                    <?php } ?>
                    <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-none d-block">Logout</a>
                </ul>
            </div>
            <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-block d-none">Logout</a>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <main>
        <div class="container">
            <div class="row mt-5">
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM menus");
                while ($row = $panggil->fetch_assoc()) { ?>
                    <div class="col-md-4 col-lg-3 col-12">
                        <div class="card">
                            <img src="assets/uploads/<?= $row['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['namaMenu'] ?></h5>
                                <p class="card-text"><?= $row['desk'] ?></p>
                                <h4 class="card-text text-end">RP <?= $row['harga'] ?></h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.esm.min.js"></script>
</body>

</html>