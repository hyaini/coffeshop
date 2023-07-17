<?php
$koneksi = mysqli_connect("localhost", "root", "", "coffeshop") or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $namaMenu = $_POST['namaMenu'];
    $desk = $_POST['desk'];
    $harga = $_POST['harga'];

    // Upload Gambar
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama = $_FILES['gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];

    // Mengecek Extensi Gambar
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'assets/uploads/' . $nama);
        $koneksi->query("INSERT INTO menus (namaMenu, desk, gambar, harga) VALUES ('$namaMenu', '$desk', '$nama','$harga')");

        header("location:admin.php?pesan=berhasil");
    } else {
        header("location:admin.php?pesan=gagal");
    }
}

if (isset($_GET['idMenu'])) {
    $idMenu = $_GET['idMenu'];
    $koneksi->query("DELETE FROM menus WHERE idMenu = '$idMenu'");
    header("location:admin.php");
}

if (isset($_POST['edit'])) {
    $idMenu = $_POST['idMenu'];
    $namaMenu = $_POST['namaMenu'];
    $desk = $_POST['desk'];
    $harga = $_POST['harga'];

    $koneksi->query("UPDATE menus SET namaMenu = '$namaMenu', desk = '$desk', harga = '$harga' WHERE idMenu = '$idMenu'");
    header("location:admin.php");
}
