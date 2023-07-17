<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <header class="vh-100" style="background-image: url('assets/img/pexels-viktoria-alipatova-2074130.jpg'); background-repeat: no-repeat; background-size: cover;">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #884A39;">
            <div class="container">
                <a class="navbar-brand" href="#"><b>COFFEE SHOP</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <?php
                        include 'koneksi.php';
                        session_start();
                        if ($_SESSION['status'] === 'Administrator') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php">Tambah Menu</a>
                            </li>
                        <?php } ?>
                        <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-none d-block btn-lg">Logout</a>
                    </ul>
                </div>
                <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-block d-none">Logout</a>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <div class="vh-100" style="background-color: rgba(0, 0, 0, .6);">
            <div class="d-flex justify-content-center align-items-center vh-100 w-50 m-auto">
                <h1 class="text-white text-center display-1">
                    a bad day with coffee is better than a good day without it
                </h1>
            </div>
        </div>
    </header>

    <!-- JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.esm.min.js"></script>
</body>

</html>