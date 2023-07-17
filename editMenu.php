<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Menu</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="background-color: #C38154;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3 class="text-light">Edit Menu</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM menus WHERE idMenu='$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <input type="number" class="form-control mb-3" name="idMenu" value="<?= $row['idMenu'] ?>" hidden>
                        </div>

                        <div class="form-group">
                            <label for="namaMenu" class="text-light">Nama Menu</label>
                            <input type="text" class="form-control mb-3" name="namaMenu" placeholder="Nama Menu" value="<?= $row['namaMenu'] ?>">
                        </div>

                        <div class="form-group mt-3">
                            <label for="desk" class="text-light">Deskripsi</label>
                            <textarea class="form-control" name="desk" id="desk" cols="5" rows="3" placeholder="Deskripsi"><?= $row['desk'] ?></textarea>
                        </div>

                        <!-- <div class="input-group mt-3">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div> -->

                        <div class="form-group">
                            <label for="harga" class="text-light">Harga Menu</label>
                            <input type="number" class="form-control mb-3" name="harga" placeholder="Harga Menu" value="<?= $row['harga'] ?>">
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>