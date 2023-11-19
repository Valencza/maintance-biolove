<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username'])) {
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>latihan soal</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: #ffffff;
        background-position: center;
        background-size: cover;
        width:100%;
        height:415px;
    }      
    
    .nav{
        position: relative;
        margin: 20px;
        text-decoration: none;
        color: black;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        left: 100px;
        top: 5px;
    }

    li {
        float: left;
        width: 119px;
        top: 15px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        font-size: 25px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
        display: flex;
    }

    .login{
        position: relative;
        color: white;
        border-radius: 30px;
        border: 1px solid;
        width: 200px;
        height: 55px;
        background-color: orange;
        font-size: 25px;
        left: 100px;
        top: 25px;
        text-decoration: none;
    }

    .login:hover{
        background-color: white;
        color: orange;
        decoration: none;
        border-radius: 35px;
        width: 250px;
    }

    li .nav:hover {
        background-color: #000000;
        color: white;
        border-radius: 40px;
        width: 250px;
        transition-timing-function: ease-in-out;
        transition-duration: 0.10s;
    }

    .biolove{
        margin: 12px;
        position: absolute;
        width: 200px;
        height: 89px;
        top: 0;
        left: 65px;
        object-fit: cover;
    }

    .cover {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 250px;
        top: 109px;
        left: 0;
        overflow: hidden;
        background: rgb(78, 134, 166);
        background-position: center;
    }

    .judul{
        color: white;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        font-size: 48px;
        margin: 40px;
        left: 30px;
    }

    .logo2{
        position: relative;
        width: 379px;
        height: 167px;
        top: 178px;
        left: 550px;
        object-fit: cover;
    }

    .aboutus1{
        position: absolute;
        width: 508px;
        height: 318px;
        top: 655px;
        left: 185px;
        object-fit: cover;
        border-radius: 35px;
    }

    .keterangan-1{
        position: absolute;
        width: 503px;
        height: 352px;
        top: 777px;
        left: 840px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 25px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .aboutus2{
        position: absolute;
        width: 508px;
        height: 318px;
        top: 1132px;
        left: 830px;
        object-fit: cover;
        border-radius: 30px;
    }

    .keterangan-2{
        position: absolute;
        width: 459px;
        height: 352px;
        top: 1232px;
        left: 200px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 25px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    
    .footer{
        position: absolute;
        width: 100%;
        height: 178px;
        left: -7px;
        background-color: #2b5b75;
        background-size: cover;
    }

    .background{
        position: absolute;
        width: 318px;
        height: 117px;
        top: 24px;
        left: 1037px;
    }

    .kontak {
        position: absolute;
        width: 318px;
        height: 117px;
        top: 0;
        left: 0;
    }

    .hubungi-kami {
        position: absolute;
        width: 163px;
        height: 35px;
        top: 0;
        left: 0;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 24px;
        letter-spacing: 0;
        line-height: normal;
    }

    .instagram {
        position: absolute;
        width: 164px;
        top: 80px;
        left: 43px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .email {
        position: absolute;
        width: 269px;
        top: 39px;
        left: 43px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .instagram-image{
        position: absolute;
        width: 31px;
        height: 31px;
        top: 83px;
        left: 0;
        object-fit: cover;
    }

    .email-image {
        width: 32px;
        height: 32px;
        top: 41px;
        position: absolute;
        left: 0;
        object-fit: cover;
    }

    .biolove-image{
        position: absolute;
        width: 213px;
        height: 86px;
        top: 52px;
        left: 48px;
        object-fit: cover;
    }
    
    body {
        overflow-x: hidden; /* Hide vertical scrollbar */
    }
    
</style>
<body>
    
    <ul>
        <li>
            <a href="berandauser.php"><img class="biolove" src="img/logo_hitam.png"></a>
        </li>
        <li>&ensp;</li>
        <li>&ensp;</li>
        <li><a class="nav" href="about_us_user.php">About Us</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="rangkuman.php">Rangkuman</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="rekomendasi.php">Rekomendasi</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="kelas_user.php">Kelas</a></li>
        <li>&ensp;</li>
        <li><a class="btn btn-warning login" href="logout.php"><b>Log Out</b></a></li>
    </ul>

    <div class="cover">
        <p class="judul">Latihan Soal</p>
    </div>

    <table border="0" style="width: 100%; min-height: 100vh; margin-bottom: 60px; font-size:20px; margin-left: 70px;">
        <tbody>
            
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_soal");
            $jumlah = mysqli_num_rows($query);
            $no = 0;
            while ($data = mysqli_fetch_array($query)) :
                $no++
                ?>
                <form action="jawab.php" method="POST" style="left: 50px;">
                    <input type="hidden" name="id[]" value="<?php echo $data['id_soal']; ?>">
                    <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                    <tr>
                        <td style="width: 30px;"><?php echo $no ?>.</td>
                        <td style="padding: 10px;"><?php echo $data['soal']; ?></td>
                    </tr>
                    <?php
                    if (!empty($data['gambar'])) {
                        echo "<tr><td></td><td><img src='assets/img/$data[gambar]' width='80' height='80'></td></tr>";
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td style="padding: 5px;">
                            <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="A"> a. <?php echo $data['a']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="padding: 5px;">
                            <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="B"> b. <?php echo $data['b']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="padding: 5px;">
                            <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="C"> c. <?php echo $data['c']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="padding: 5px;">
                            <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="D"> d. <?php echo $data['d']; ?>
                        </td>
                    </tr>
                    <?php
                    endwhile
                    ?>
                    <tr>
                        <td height="100" ></td>
                        <td>
                            <input type="submit" name="submit" value="Jawab" class="btn btn-light border-secondary" style="border-radius: 30px;"
                                onclick="return confirm('Perhatian! Apakah Anda sudah yakin dengan semua jawaban Anda?')">&nbsp&nbsp&nbsp
                            <input type="reset" value="Reset" class="btn btn-light border-secondary" style="border-radius: 30px;">
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>

        <?php
        // Check if the form has been submitted and display results
        if (isset($_POST['submit'])) {
            // Your code to calculate "jawaban benar," "jawaban salah," and "score" here
            // Replace the placeholders below with the actual values
            $jawabanBenar = 5;
            $jawabanSalah = 2;
            $score = 70.0;
            ?>

            <div class="results">
                <p>Jawaban Benar: <?php echo $jawabanBenar; ?></p>
                <p>Jawaban Salah: <?php echo $jawabanSalah; ?></p>
                <p>Score: <?php echo $score; ?></p>
            </div>
        <?php } ?>

    <!-- <?php
    include "koneksi.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['pilihan'])){
        ?>
            <script language="JavaScript">
                alert('Oops! Serius. Anda tidak mengerjakan soal apapun ...');
                document.location='./';
            </script>
        <?php
        }
        
        $pilihan = $_POST["pilihan"];
        $id_soal = $_POST["id"];
        $jumlah = $_POST["jumlah"];
        
        $score = 0;
        $benar = 0;
        $salah = 0;
        $kosong = 0;

        for($i=0;$i<$jumlah;$i++){
            $nomor    =$id_soal[$i];
            
            // jika peserta tidak memilih jawaban
            if(empty($pilihan[$nomor])){
                $kosong++;
            }
            // jika memilih
            else {
                $jawaban    =$pilihan[$nomor];

                // cocokan kunci jawaban dengan database
                $query    =mysqli_query($conn, "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci='$jawaban'");
                $cek    =mysqli_num_rows($query);
                
                // jika jawaban benar (cocok dengan database)
                if($cek){
                    $benar++;
                }
                // jika jawaban salah (tidak cocok dengan database)
                else {
                    $salah++;
                }
            }
            /*
                ----------
                Nilai 100
                ----------
                Hasil = 100 / jumlah soal * Jawaban Benar
            */
            // script php membuat soal pilihan ganda
            // hitung skor
            $hitung =mysqli_query($koneksi, "SELECT * FROM tbl_soal");
            $jumlah_soal =mysqli_num_rows($hitung);
            $score =100 / $jumlah_soal * $benar;
            $hasil =number_format($score,2);
        }
    }

    // Tampilkan Hasil Ujian Soal Pilihan Ganda
    echo"
    <table border='0'>
        <tbody>
            <tr>
                <td colspan='4'><h4>Nilai Ujian Anda</h4></td>
            </tr>
            <tr>
                <td width='80'><u>Benar ✔</u></td>
                <td width='80'><u>Salah ✕</u></td>
                <td width='140'><u>Tidak Terjawab !</u></td>
                <td width='100'><u>Skor Akhir #</u></td>
            </tr>
            <tr>
                <td align='center'>$benar</td>
                <td align='center'>$salah</td>
                <td align='center'>$kosong</td>
                <td align='right'><b>$hasil</b></td>
            </tr>
        </tbody>
    </table>
    ";
    echo "<br /><a href='./'><< kembali</a>";
    ?> -->

    <footer class="footer">
        <div class="background">
            <div class="kontak">
                <div class="hubungi-kami">Hubungi kami :</div>
                <div class="instagram">@biolove_id</div>
                <div class="email">biolearnsite@gmail.com</div>
                <img class="instagram-image" src="img/instagram.png" />
            </div>
            <img class="email-image" src="img/email.png" />
        </div>
        <img class="biolove-image" src="img/biolove.png" />
    </footer>

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