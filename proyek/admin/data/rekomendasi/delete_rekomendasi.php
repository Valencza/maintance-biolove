<?php
include "../../koneksi.php";

// Periksa apakah parameter id_rekomendasi ada dan merupakan bilangan bulat
if (isset($_GET['id_rekomendasi']) && is_numeric($_GET['id_rekomendasi'])) {
    $id_rekomendasi = $_GET['id_rekomendasi'];

    // Periksa apakah data dengan id_rekomendasi yang diberikan ada
    $query = "SELECT * FROM tbl_rekomendasi WHERE id_rekomendasi = $id_rekomendasi";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan, maka lakukan penghapusan
        $delete_query = "DELETE FROM tbl_rekomendasi WHERE id_rekomendasi = $id_rekomendasi";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil
            header("Location: tables_rekomendasi.php");
        } else {
            // Penghapusan gagal
            echo "Penghapusan data gagal: " . mysqli_error($koneksi);
        }
    } else {
        // Data tidak ditemukan
        echo "Data dengan ID $id_rekomendasi tidak ditemukan.";
    }
} else {
    // ID tidak valid atau tidak ada
    echo "ID Rekomendasi tidak valid.";
}

mysqli_close($koneksi);
?>
