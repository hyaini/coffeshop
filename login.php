<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="height:100vh">
    <div class="h-100 d-flex justify-content-center align-items-center" style="background-image: url('assets/img/pexels-emre-can-acer-2079438.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="col-10 col-md-6 col-lg-3">
            <div class="card shadow">
                <div class="card-body py-4">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger' role='alert'>Username / Password Yang Anda Masukkan Salah! </div>";
                        }
                    }
                    ?>
                    <h2 class="card-title text-center mt-2 mb-4 fs-1" style="color: #884A39">Login</h2>

                    <form action="loginAction.php" method="post" class="col-10 mx-auto">
                        <div class="form-group mt-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group mt-4 mb-3">
                            <input type="submit" name="login" value="Login" class="form-control btn btn-lg text-light" style="background-color: #884A39;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>