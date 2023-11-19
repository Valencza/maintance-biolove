<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username'])) {

    if (isset($_POST['submit'])) {
        $pilihan = $_POST["pilihan"];
        $id_soal = array_keys($pilihan);
        $jumlah = count($id_soal);

        $score = 0;
        $benar = 0;
        $salah = 0;
        $kosong = 0;

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id_soal[$i];

            if (empty($pilihan[$nomor])) {
                $kosong++;
            } else {
                $jawaban = trim($pilihan[$nomor]);

                $query = mysqli_query($koneksi, "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci_jawaban='$jawaban' AND aktif='Y'");

                $cek = mysqli_num_rows($query);

                if ($cek) {
                    $benar++;
                } else {
                    $salah++;
                }
            }
        }

        // Calculate the score if there are active questions
        if ($benar > 0) {
            $result = mysqli_query($koneksi, "SELECT * FROM tbl_soal WHERE aktif='Y'");
            $jumlah_soal = mysqli_num_rows($result);
            $score = 100 / $jumlah_soal * $benar;
            $hasil = number_format($score, 1);

            // Insert the result into the database
            $username = $_SESSION['username'];
            $insertQuery = "INSERT INTO tbl_skor (username, score) VALUES ('$username', $hasil)";
            mysqli_query($koneksi, $insertQuery);
        } else {
            $hasil = 0; // No active questions, so the score is 0
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Hasil Soal</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2 class="text-center mb-4">Hasil Ujian <?php echo $_SESSION['username']; ?> </h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Ringkasan Hasil </h4>
                            <hr>

                            <div class="mb-3">
                                <p class="card-text">Jumlah Jawaban Benar: <?php echo $benar; ?></p>
                                <p class="card-text">Jumlah Jawaban Salah: <?php echo $salah; ?></p>
                                <p class="card-text">Skor Anda: <?php echo $hasil; ?></p>
                            </div>

                            <div class="text-center">
                                <a href="berandauser.php" class="btn btn-primary">Kembali ke Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>

    <?php

} else {
    echo "<h2
    style ='
    text-align: center;
    color: #333;
    font-family: 'Arial', 
    '>anda belum login</h2>";
}
?>
