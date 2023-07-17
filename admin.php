<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Admin</title>

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
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Tambah Menu</a>
                    </li>
                    <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-none d-block">Logout</a>
                </ul>
            </div>
            <a href="logout.php" class="btn btn-sm btn-danger btn-large d-md-block d-none">Logout</a>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- TABEL DATA MENU -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-light">Data Menu</h2>
                    <?php
                    session_start();
                    if ($_SESSION['status'] == 'Administrator') { ?>
                        <a href="tambahMenu.php" class="btn text-light" style="background-color: #884A39;">Tambah Menu</a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] === 'berhasil') { ?>
                        <div class="alert alert-success" role="alert">
                            Data Berhasil Ditambahkan!
                        </div>
                    <?php } elseif ($_GET['pesan'] === 'gagal') { ?>
                        <div class="alert alert-danger" role="alert">
                            Ekstensi Gambar yang di upload tidak diperbolehkan (diharuskan .png/.jpg)
                        </div>
                    <?php } ?>
                <?php } ?>

                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <?php
                        if ($_SESSION['status'] == 'Administrator') { ?>
                            <th>Action</th>
                        <?php } ?>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM menus");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['namaMenu']; ?></td>
                            <td><?= $row['desk']; ?></td>
                            <td><img src="assets/uploads/<?= $row['gambar']; ?>" style="width: 100px;"></td>
                            <td><?= $row['harga']; ?></td>
                            <?php
                            if ($_SESSION['status'] == 'Administrator') { ?>
                                <td>
                                    <a href="editMenu.php?edit=<?= $row['idMenu']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- Button trigger modal alert -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusData<?= $row['idMenu']; ?>">
                                        Hapus
                                    </button>

                                    <!-- Modal Alert -->
                                    <div class="modal fade" id="hapusData<?= $row['idMenu']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin Ingin Menghapus Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <a href="koneksi.php?idMenu=<?= $row['idMenu']; ?>" type="button" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.esm.min.js"></script>
</body>

</html>