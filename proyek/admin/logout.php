<?php
// Mulai atau lanjutkan sesi yang ada
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi
session_destroy();

// Alihkan pengguna ke halaman login atau halaman lain yang sesuai
header("Location: login.php");
exit();
?>
