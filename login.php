<?php
error_reporting(E_ALL);
session_start();

// Cek apakah pengguna sudah login menggunakan session
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Jika sudah login, redirect ke halaman lain atau tampilkan pesan selamat datang
    header("Location: mahasiswa.php");
    exit;
}

// Include file konfigurasi database
require_once 'connection.php';

// Include file untuk melakukan validasi login
require_once 'login_process.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                        <?php if(isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    <h2 class="text-center">Form Login</h2>
                    <form method="POST" action="login_process.php">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.min.js"></script>
</body>
</html>
