<?php
session_start();

// Data pengguna untuk validasi
$valid_username = "Ajid";
$valid_password = "Jidrahman.h20"; // Gantilah dengan password yang lebih aman

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi pengguna
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        echo "<h3>Login gagal! Username atau password salah.</h3>";
        echo '<a href="index.php">Kembali ke halaman login</a>';
    }
}
?>
