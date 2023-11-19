<?php
include '../../koneksi.php';

if (isset($_POST['submit'])) {
    $id_kelas = isset($_POST['id_kelas']) ? $_POST['id_kelas'] : null;
    $kelas = $_POST['kelas'];
    $keterangan = $_POST['keterangan'];

    if ($id_kelas !== null) {
        // Proses edit gambar jika pengguna memilih untuk menggantinya
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
            $gambar_name = $_FILES['gambar']['name'];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
            $gambar_path = "img/" . $gambar_name;

            if (move_uploaded_file($gambar_tmp, $gambar_path)) {
                // Gambar berhasil diupload, ganti gambar lama dengan gambar baru
                $sql = "UPDATE tbl_kelas SET gambar=?, kelas=?, keterangan=? WHERE id_kelas=?";
                $stmt = $koneksi->prepare($sql);

                // Bind parameter
                $stmt->bind_param("sssi", $gambar_path, $kelas, $keterangan, $id_kelas);

                if ($stmt->execute()) {
                    echo "Data berhasil diupdate.";
                    header('Location: tables_kelas.php');
                    exit;
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Gagal mengupload gambar.";
            }
        } else {
            // Jika tidak ada gambar yang diupload, hanya update data teks
            $sql = "UPDATE tbl_kelas SET kelas=?, keterangan=? WHERE id_kelas=?";
            $stmt = $koneksi->prepare($sql);

            // Bind parameter
            $stmt->bind_param("ssi", $kelas, $keterangan, $id_kelas);

            if ($stmt->execute()) {
                echo "Data kelas dan keterangan berhasil diupdate.";
                header('Location: tables_kelas.php');
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        echo "ID Kelas tidak valid.";
    }
}

// Tutup koneksi database
$koneksi->close();
?>
