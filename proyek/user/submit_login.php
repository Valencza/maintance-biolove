<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    $data = mysqli_fetch_array($hasil);

    if ($data) {
        $storedPassword = $data['password'];
        $userLevel = $data['level'];

        if (password_verify($password, $storedPassword)) {
            $_SESSION['level'] = $userLevel;
            $_SESSION['username'] = $data['username'];

            if ($userLevel == "admin") {
                // Mengarahkan admin ke dashboard
                header('Location: ../admin/index.php');
                exit;
            } elseif ($userLevel == "user") {
                // Mengarahkan pengguna biasa ke beranda
                header('Location: berandauser.php');
                exit;
            }
        } else {
            echo "<h2>Login gagal!!</h2>";
        }
    } else {
        echo "<h2>Username tidak ditemukan</h2>";
    }
} else {
    echo "<h2>Kesalahan dalam query: " . mysqli_error($koneksi) . "</h2>";
}
?>
