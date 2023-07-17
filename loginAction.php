<?php
include 'koneksi.php';

session_start();

// Mengambil data Login
$name = $_POST['name'];
$password = md5($_POST['password']);

// Mengambil data dari tabel users
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE name = '$name' AND password = '$password'");
// Menghitung jumlah data
$cek = mysqli_num_rows($query);

// Jika User ditemukan lebih dari 1 maka user di temukann
if ($cek > 0) {
    $qry = mysqli_fetch_array($query);
    $_SESSION['id'] = $qry['id'];
    $_SESSION['name'] = $qry['name'];
    $_SESSION['password'] = $qry['password'];
    $_SESSION['status'] = $qry['status'];

    if ($_SESSION['status'] === 'Administrator') {
        $_SESSION['name'];
        $_SESSION['status'];
        header("location:admin.php");
    } else {
        $_SESSION['name'];
        $_SESSION['status'];
        header("location:index.php");
    }
} else {
    header("location:login.php?pesan=gagal");
}


// Logout
if ($_GET['logout']) {
    session_destroy();
    header("location:login.php");
}
