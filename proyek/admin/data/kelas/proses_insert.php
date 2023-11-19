<?php
include '../../koneksi.php';

ini_set('upload_max_filesize', '20M');
ini_set('post_max_size', '20M');

if (isset($_POST['submit'])) {
    $kelas = $_POST['kelas'];
    $keterangan = $_POST['keterangan'];

    // Proses upload gambar jika diperlukan
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $gambar_name = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $gambar_path = "img/" . $gambar_name;

        if (move_uploaded_file($gambar_tmp, $gambar_path)) {
            // Gambar berhasil diupload, dan sekarang kita bisa menyimpan informasi ke dalam database
            $sql = "INSERT INTO tbl_kelas (gambar, kelas, keterangan) VALUES (?, ?, ?)";
            $stmt = $koneksi->prepare($sql);

            // Bind parameter
            $stmt->bind_param("sss", $gambar_path, $kelas, $keterangan);

            if ($stmt->execute()) {
                echo "Data berhasil ditambahkan ke database.";
                header("Location: tables_kelas.php"); // Arahkan ke halaman tables_kelas.php
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Gagal mengupload gambar.";
        }
    } else {
        // Jika tidak ada gambar yang diupload, Anda masih bisa menyimpan data ke dalam database
        $sql = "INSERT INTO tbl_kelas (kelas, keterangan) VALUES (?, ?)";
        $stmt = $koneksi->prepare($sql);

        // Bind parameter
        $stmt->bind_param("ss", $kelas, $keterangan);

        if ($stmt->execute()) {
            echo "Data berhasil ditambahkan ke database.";
        } else {
            echo "Error: " . $stmt->error;
        }        
        $stmt->close();
    }
}

// Tutup koneksi database
$koneksi->close();
?>
