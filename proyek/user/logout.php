<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Hapus cookie login jika ada
if (isset($_COOKIE['login'])) {
    setcookie('login', '', time() - 3600, '/');
}

// Redirect ke halaman login
header('Location: login.php');
exit();
?>
