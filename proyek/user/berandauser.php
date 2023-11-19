<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>landing page</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }

    ul {
        position: absolute;
        list-style-type: none;
        list-style-type: none;
        margin: 0;
        padding: 0;
        width:100%;
        height:415px;
        overflow: hidden;
        background: linear-gradient(180deg, rgb(78, 134, 166) 0%, rgba(8.5, 157.08, 204, 0) 100%);
        background-position: center;
        background-size: cover;
    }

    .nav{
        position: relative;
        margin: 7px;
    }

    .img{
        position: absolute;
        width: 692px;
        height: 373px;
        top: 20px   ;
        left: 826px;
        object-fit: cover;
    }

    li {
        float: left;
        width: 119px;
        top: 15px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 25px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
        display: flex;
    }

    .logo{
        margin: 10px;
        position: relative;
        width: 80px;
        height: 94px;
        top: 0;
        left: 20px;
        object-fit: cover;
    }

    .biolove{
        margin: 24px;
        position: absolute;
        width: 180px;
        height: 69px;
        top: 0;
        left: 90px;
        object-fit: cover;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
         border-radius: 35px;
    }

    li a:hover {
        background-color: #ffffff;
        color: rgb(78, 134, 166) ;
        transition-timing-function: ease-in-out;
        transition-duration: 0.10s;
        border-radius: 35px;
    }

    .awalan{
        position: relative;
        top: 145px;
        left: 87px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
    }

    .awalan2{
        position: relative;
        top: 145px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        left: 157px;
    }

    .button .btn{
        position: relative;
        border-radius: 24px;
        border: 1px solid;
        width: 200px;
        height: 50px;
        font-size: 25px;
        left: 250px;
        top: 180px;
        text-decoration: none;
    }

    .button .btn:hover{
        background-color: #ffffff;
        color: rgb(78, 134, 166) ;
        border-radius: 35px;
    }

    .footer{
        position:absolute ;
        background-color: #2b5b75;
        flex-shrink: none;
        background-size: cover;
    }

    .logo-footer{
        position: relative;
        width: 180px;
        height: 69px;
    }
    
    .card-border{
        position: absolute;
        top: 569px;
        left: 250px;
        border: 1px solid;
        border-radius: 20px;
    }

    .card-img-top{
        position: relative;
    }

    .keterangan {
        position: absolute;
        width: 647px;
        height: 352px;
        top: 600px;
        left: 640px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 27px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .kelas-lain .btn{
        margin: 550px;
        position: relative;
        border-radius: 30px;
        border: 1px solid;
        width: 230px;
        height: 60px;
        font-size: 25px;
        left: 300px;
        top: 220px;
        text-decoration: none;
    }

    .kelas-lain .btn:hover{
        background-color: #2B5B76;
        color: #ffffff ;
        border-radius: 35px;
    }

    .card-border .btn{
        position: relative;
        border-radius: 24px;
        border: 1px solid;
        width: 200px;
        height: 50px;
        font-size: 25px;
        left: 30px;
        top: 10px;
        text-decoration: none;
    }

    .card-border .btn:hover{
        background-color: #2B5B76;
        color: #ffffff ;
        border-radius: 35px;
    }
    
    .border{
        position: absolute;
        width: 100%;
        height: 436px;
        top: 1155px;
        left: 0;
        background-color: #ffffff;
        border: 1px solid;
        border-color: #000000;
    }

    .text-wrapper-20 {
        position: absolute;
        width: 133px;
        top: 164px;
        left: 287px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .border .deskripsi{
        position: absolute;
        width: 647px;
        height: 352px;
        top: 180px;
        left: 785px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 32px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .line {
        position: absolute;
        width: 1px;
        height: 374px;
        top: 30px;
        left: 724px;
        object-fit: cover;
    }

    .deskripsi2{
        position: absolute;
        width: 454px;
        top: 216px;
        left: 100px;
        font-family: "Katibeh", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 56px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .gambar2 {
        position: absolute;
        width: 540px;
        height: 392px;
        top: 1795px;
        left: 185px;
        object-fit: cover;
    }

    .group-4 {
        position: absolute;
        width: 453px;
        height: 455px;
        top: 1872px;
        left: 845px;
    }

    .keterangan-gambar2{
        position: absolute;
        width: 455px;
        height: 455px;
        top: 0;
        left: 0;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 36px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .gambar{
        position: absolute;
        width: 590px;
        height: 405px;
        top: 2625px;
        left: 175px;
        object-fit: cover;
        border-radius: 25px;    
    }

    .group-5{
        position: absolute;
        width: 426px;
        height: 352px;
        top: 2761px;
        left: 904px;
    }

    .keterangan-gambar{
        position: absolute;
        width: 400px;
        height: 300px;
        top: 0;
        left: 0;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 36px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .solusi{
        position: absolute;
        top: 3426px;
        left: 175px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 56px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .latihan{
        position: absolute;
        width: 381px;
        height: 391px;
        top: 3594px;
        left: 257px;
        background-color: #ededed;
        border-radius: 24px;
        border: 1px solid;
        border-color: #000000;
    }

    .latihan-soal{
        position: absolute;
        top: 135px;
        left: 40px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 40px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .p{
        position: absolute;
        width: 319px;
        top: 218px;
        left: 40px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 16px;
        letter-spacing: 0;
        line-height: normal;
    }

    .overlap-3 {
        position: absolute;
        width: 101px;
        height: 100px;
        top: 21px;
        left: 19px;
    }

    .ellipse{
        top: 0;
        left: 1px;
        background-color: #d9d9d9;
        border-radius: 50px;
        position: absolute;
        width: 85px;
        height: 85px;
        border: 1px;
    }

    .image-latihan{
        width: 86px;
        height: 85px;
        top: 0;
        position: absolute;
        left: 0;
        object-fit: cover;
    }

    .latihan .btn{
        position: relative;
        border-radius: 24px;
        border: 1px solid;
        width: 250px;
        height: 50px;
        font-size: 25px;
        left: 65px;
        top: 310px;
        text-decoration: none;
    }

    .latihan .btn:hover{
        background-color: black;
        color: white;
        border: 1px solid;
    }

    .materi{
        position: absolute;
        width: 381px;
        height: 391px;
        top: 3594px;
        left: 860px;
        background-color: #ededed;
        border-radius: 24px;
        border: 1px solid;
        border-color: #000000;
    }

    .image-materi {
        top: 20px;
        left: 32px;
        object-fit: cover;
        position: absolute;
        width: 86px;
        height: 85px;
    }

    .materijudul {
        position: absolute;
        top: 135px;
        left: 32px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 40px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .p2{
        position: absolute;
        width: 319px;
        top: 218px;
        left: 32px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 16px;
        letter-spacing: 0;
        line-height: normal;
    }

    .materi .btn{
        position: relative;
        border-radius: 24px;
        border: 1px solid;
        width: 250px;
        height: 50px;
        font-size: 25px;
        left: 65px;
        top: 310px;
        text-decoration: none;
    }

    .materi .btn:hover{
        background-color: black;
        color: white;
        border: 1px solid;
    }

    .footer{
        position: absolute;
        width: 100%;
        height: 178px;
        top: 4130px;
        left: -7px;
        background-color: #2b5b75;
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

    @media screen and (max-width: 768px) {
        .nav {
            display: none;
        }

        .awalan,
        .awalan2,
        .btn {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .img {
            width: auto;
            height: auto;
        }
    }

</style>
</head>
<body>

    <ul>
        <li>
            <img class="img" src="img/cover.png">
            <img class="logo" src="img/logo.png">
            <img class="biolove" src="img/biolove.png">
        </li>
        <li>&ensp;</li>
        <li>&ensp;</li>
        <li class="nav"><a href="about_us_user.php">About Us</a></li>
        <li>&ensp;</li>
        <li class="nav"><a href="rangkuman.php">Rangkuman</a></li>
        <li>&ensp;</li>
        <li class="nav"><a href="rekomendasi.php">Rekomendasi</a></li>
        <li>&ensp;</li>
        <li class="nav"><a href="kelas_user.php">Kelas</a></li>
        <li>&ensp;</li>
        <li class="nav logout"><a href="logout.php">Log Out</a></li>
    </ul>

    <p class="awalan">Kursus online untuk belajar Biologi</p>
    <p class="awalan2">Selamat Datang <?php echo $_SESSION['username']; ?>!!</p>
    
    <div class="card-border" style="width: 18rem;">
        <img class="card-img-top" src="img/card.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Kelas 4 SD</h5>
            <p class="card-text">Didukung video pembelajaran, rangkuman, dan latihan soal</p>
            <p class="lihat-kelas"><a href="#lihatkelas" class="btn btn-primary">Lihat kelas</a></p>
        </div>
    </div>

    <p class="keterangan">
        BIOLOVE adalah website belajar (e-learning) yang dikhususkan untuk belajar Biologi. Pada website ini, kalian
        akan mendapatkan materi pembelajaran, rekomendasi video, dan latihan soal untuk mengetes kemampuan kalian.
        Bagaimana? Sudah cukup penasaran dengan BIOLOVE? Ayo daftar dan dapatkan pengalaman baru dalam belajar
        Biologi!!
    </p>
    
    <p class="kelas-lain"><a href="kelas_user.php" class="btn btn-primary">Kelas lainnya</a></p>

    <div class="border">
        <div class="text-wrapper-20">BIOLOGI</div>
        <p class="deskripsi">Belajar Biologi kini lebih mudah dengan BIOLOVE</p>
        <img class="line" src="img/line-2.svg" />
        <div class="deskripsi2">E-Learning BIOLOVE</div>
    </div>

    <img class="gambar2" src="img/gambar2.png" />
    <div class="group-4">
        <p class="keterangan-gambar2">Kamu hanya perlu mendaftar untuk mendapatkan akses belajar selama 2 semester, dengan full akses ke seluruh fitur di BIOLOVE.</p>
    </div>

    <img class="gambar" src="img/gambar.png" />
    <div class="group-5">
        <p class="keterangan-gambar">Ayo coba mendaftar, dan bergabung dengan BIOLOVE, lalu dapatkan akses belajar yang lebih banyak</p>
    </div>

    <h4 class="solusi">Solusi belajar</h4>

    <div class="latihan">
        <div class="latihan-soal">Latihan Soal</div>
            <p class="p">Soal soal untuk menguji pemahamanmu terhadap materi yang telah kamu baca</p>
            <a class="btn btn-light" href="latihanSoal.php"><b>Lihat Detail</b></a>
            <div class="overlap-3">
            <div class="ellipse"></div>
            <img class="image-latihan" src="img/latihan-soal.png" />
        </div>
    </div>

    <div class="materi">
        <img class="image-materi" src="img/materi.png" />
        <div class="materijudul">Materi</div>
        <p class="p2">Materi materi yang harus kamu&nbsp;&nbsp;pelajari sebelum mengerjakan latihan soal</p>
        <a class="btn btn-light" href="materi.php"><b>Lihat Detail</b></a>
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