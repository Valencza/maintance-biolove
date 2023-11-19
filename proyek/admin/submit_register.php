<?php
include "koneksi.php";

$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$nama_lengkap = $_POST['nama_lengkap'];
$email_no_telp = $_POST['email_no_telp'];

if (!empty($username) && !empty($pass1) && !empty($pass2) && !empty($nama_lengkap) && !empty($email_no_telp)) {
    if ($pass1 == $pass2) {
        // Hash password sebelum menyimpannya
        $hashedPassword = password_hash($pass1, PASSWORD_BCRYPT);

        // Selanjutnya, Anda harus memasukkan data pengguna ke dalam tabel database
        $query = "INSERT INTO tbl_user (username, password, nama_lengkap, email_no_telp, level) VALUES ('$username', '$hashedPassword', '$nama_lengkap', '$email_no_telp', 'admin')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {  
            echo "<script>alert('Registrasi berhasil. Silakan login.');</script>";
            echo "<script>window.location = 'login.php';</script>";
        } else {
            echo "<h2>Registrasi gagal: " . mysqli_error($koneksi) . "</h2>";
        }
    } else {
        echo "<h2>Password tidak cocok. Silakan coba lagi.</h2>";
    }
} else {
    echo "<h2>Semua bidang harus diisi.</h2>";
}
?>
