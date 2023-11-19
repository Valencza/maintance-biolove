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
        position: absolute;
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
        /* top: 1610px; */
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

    .kategori{
        position: relative;
        border-radius: 40px;
        margin-bottom: 50px;
        margin-right: 50px;
    }

    .sticky {
        position: sticky;
        top: 0;
        background-color: white;
    }
    
</style>
<body>
    
    <ul class="">
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
            
        <span class="ms-5 mt-5 mb-5 kategori" style="display: flex; flex-wrap: wrap;">
            <div>
            <?php
                include "koneksi.php"; // Sesuaikan dengan nama file koneksi Anda

                $query = "SELECT k.kategori AS kategori
                          FROM tbl_soal ts
                          JOIN tbl_kategori k ON ts.id_kategori = k.id_kategori"; // Gantilah dengan nama tabel dan kolom yang sesuai
                $result = mysqli_query($koneksi, $query);
            
                $counter = 0; // Menambahkan variabel counter
                $borderCounter = 0; // Menambahkan variabel counter untuk border
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Membuka div border baru setiap kali mencapai 6 kategori
                        if ($counter % 6 == 0) {
                            if ($borderCounter > 0) {
                                // Menutup div border setiap kali mencapai 6 kategori dan bukan border pertama
                                echo '</div>';
                            }
                            echo '<div class="border border-dark p-3 mb-3 kategori" style="margin-right: 50px; margin-bottom: 40px; display: inline-block;">';
                            echo '<br><h4>&nbsp&nbsp&nbspSemester 1 & 2</h4><br>';
                            $borderCounter++;
                        }
            
                        $kategori = $row['kategori'];
                        echo '<span class="" style="margin-bottom: 20px; display: inline-block;">';
                        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal" class="btn btn-light border-secondary rounded-pill" style="font-size: 20px; font-family: \'Judson\', Helvetica;">&nbsp' . $kategori . '&nbsp</a>&nbsp&nbsp&nbsp';
                        echo '</span>';

                        $counter++;
            
                        // Menutup div border setiap kali mencapai 6 kategori
                        if ($counter % 6 == 0) {
                            echo '</div>';
                        } elseif ($counter % 3 == 0) {
                            // Menambahkan baris baru setiap kali mencapai 3 kategori dalam satu border
                            echo '<br>';
                        }
                    }
            
                    // Menutup div border jika total kategori tidak habis dibagi 6
                    if ($counter % 6 != 0) {
                        echo '</div>';
                    }
                } else {
                    echo "Data tidak ditemukan.";
                }
                ?>
            </div>
        </span>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Anda Belum Login</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Tekan tombol Login dibawah ini untuk melanjutkan akses</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Log In</a>
                    </div>
                </div>
            </div>
        </div>

    <footer class="footer">
        <div class="background">
            <div class="kontak">
                <div class="hubungi-kami">Hubungi kami :</div>
                <div class="instagram">@biolove_id</div>
                <div class="email">biolearnsite@gmail.com</div>
                <a href="https://www.instagram.com/ash_shafira_/"><img class="instagram-image" src="img/instagram.png"/></a>
                <a href="#email"><img class="email-image" src="img/email.png" /></a>
            </div>
        </div>
        <img class="biolove-image" src="img/biolove.png" />
    </footer>

    <!-- Sertakan file jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Sertakan file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


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