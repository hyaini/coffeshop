<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="background-color: #C38154;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h2 class="text-light">Tambah Data Menu</h2>
                <form action="koneksi.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="namaMenu" class="text-light">Nama Menu</label>
                        <input type="text" class="form-control mb-3" name="namaMenu" placeholder="Nama Menu" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="desk" class="text-light">Deskripsi</label>
                        <textarea class="form-control" name="desk" id="desk" cols="5" rows="3" placeholder="Deskripsi" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="gambar" class="text-light">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="name" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="harga" class="text-light">Harga Menu</label>
                        <input type="number" class="form-control mb-3" name="harga" placeholder="Harga Menu">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn text-light" style="background-color: #884A39;" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>