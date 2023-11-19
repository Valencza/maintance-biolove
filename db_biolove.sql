-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 01:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_biolove`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Bab 1'),
(2, 'Bab 2'),
(3, 'pembuka'),
(4, 'Bab 3'),
(5, 'Bab 4'),
(6, 'Bab 5'),
(7, 'Bab 6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(20) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `kelas` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `id_mapel`, `id_kategori`, `gambar`, `kelas`, `keterangan`) VALUES
(20, 1, 1, 'img/card.png', 'Kelas 3 SD', 'Didukung video pembelajaran, rangkuman, dan latihan soal'),
(21, 1, 1, 'img/card.png', 'Kelas 4 SD', 'Didukung video pembelajaran, rangkuman, dan latihan soal'),
(22, 4, 2, 'img/card.png', 'Kelas 5 SD', 'Didukung video pembelajaran, rangkuman, dan latihan soal'),
(24, 5, 2, 'img/card.png', 'Kelas 6 SD', 'Didukung video pembelajaran, rangkuman, dan latihan soal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `mapel`) VALUES
(1, 'Biologi'),
(4, 'Idiologi'),
(5, 'Filsafat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paketbelajar`
--

CREATE TABLE `tbl_paketbelajar` (
  `id_paketBelajar` int(30) NOT NULL,
  `id_kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `materi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rangkuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_paketbelajar`
--

INSERT INTO `tbl_paketbelajar` (`id_paketBelajar`, `id_kategori`, `id_kelas`, `id_mapel`, `semester`, `nama`, `materi`, `rangkuman`) VALUES
(4, '1', '20', 1, 'Semester 1', 'Rangka Manusia', 'Pembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan\r\n                                                                                           ', 'sdasdasdasdabskdb asld'),
(6, '2', '21', 4, 'Semester 2', 'Tumbuhan', 'Pembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan', 'Pembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan'),
(7, '5', '20', 5, 'Semester 2', 'Reproduksi', 'Pembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan\r\n\r\nPembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan\r\n\r\nPembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan', 'Pembelajaran Biologi adalah pembelajaran yang berkaitan dengan cara mencari tahu dan memahami tentang alam secara sistematis sehingga pembelajaran biologi bukan hanya penguasaan kumpulan pengetahuan yang berupa fakta-fakta, konsep- konsep, tetapi juga merupakan suatu proses penemuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi`
--

CREATE TABLE `tbl_rekomendasi` (
  `id_rekomendasi` int(30) NOT NULL,
  `id_kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `rekomendasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rekomendasi`
--

INSERT INTO `tbl_rekomendasi` (`id_rekomendasi`, `id_kategori`, `id_kelas`, `id_mapel`, `semester`, `rekomendasi`) VALUES
(2, '1', '20', 1, 'Semester 1', 'https://www.youtube.com/watch?v=5RYHsBFT8Qw&ab_channel=HanumChannel'),
(3, '2', '20', 1, 'Semester 1', 'https://www.youtube.com/watch?v=5RYHsBFT8Qw&ab_channel=HanumChannel'),
(4, '4', '20', 1, 'Semester 1', 'https://www.youtube.com/watch?v=5RYHsBFT8Qw&ab_channel=HanumChannel'),
(5, '5', '20', 1, 'Semester 1', 'https://www.youtube.com/watch?v=5RYHsBFT8Qw&ab_channel=HanumChannel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`id_semester`, `semester`) VALUES
(1, 'Semester 1'),
(2, 'Semester 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skor`
--

CREATE TABLE `tbl_skor` (
  `id_skor` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `score` varchar(10) NOT NULL,
  `recorded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_skor`
--

INSERT INTO `tbl_skor` (`id_skor`, `username`, `score`, `recorded_at`) VALUES
(36, 'mayra', '100.0', '2023-11-19 09:39:30'),
(37, 'zara', '50.0', '2023-11-19 09:39:30'),
(38, 'zara', '50.0', '2023-11-19 09:39:53'),
(39, 'zara', '50.0', '2023-11-19 09:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(30) NOT NULL,
  `id_kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `soal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `kunci_jawaban` varchar(100) NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `id_kategori`, `id_kelas`, `id_mapel`, `semester`, `soal`, `a`, `b`, `c`, `d`, `kunci_jawaban`, `aktif`) VALUES
(19, '1', 20, 1, 'Semester 1', 'bsadaiusdiaus diasvdiasd aisdbaisdbisbABDI', 'siadiasd asidbausid', 'da shd iasdaisbduiasd', 'sdabdoas daihsdiasd aisdbaisd', 'daisdbias duasbdua sdiasbduoas', 'a', 'Y'),
(20, '2', 20, 1, 'Semester 2', 'dasdgias diasvdi', 's8yvdu sadvaysihd', 'daisdk askdsa', 'sidaidbasdabsdi', 'dsaidiasdh', 'd', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(30) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_lengkap` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_no_telp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `email_no_telp`, `level`) VALUES
(32, 'fairus', '$2y$10$m7KpDP8zKmQIvJMd/Ewf8.LQygxge29MiWWm47uF2sqFcGhJNYtHG', 'fairus ash shafira ', '123443215647', 'admin'),
(33, 'valen', '$2y$10$qouaGoe39n0X8sh0wDTGEOAZ8t4266CgFe/3Tp1rps8ynrrpdwoq6', 'sdakjdkajs', '1936918', 'admin'),
(37, 'mayra', '$2y$10$7kI4hfPeV/p0o1bjjROLbeA7Af2Jwmk/wVwmlRDA3cTyyFw2m3Ox2', 'mayrania', 'mayrania05@gmail.com', 'user'),
(39, 'zara', '$2y$10$5DgAJdhiBG8PFjM/Tu8zreq6udgIJlBpZIEIh933ZgFsogRu2xpT2', 'azara', 'azara@gmail..com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_paketbelajar`
--
ALTER TABLE `tbl_paketbelajar`
  ADD PRIMARY KEY (`id_paketBelajar`);

--
-- Indexes for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tbl_skor`
--
ALTER TABLE `tbl_skor`
  ADD PRIMARY KEY (`id_skor`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_paketbelajar`
--
ALTER TABLE `tbl_paketbelajar`
  MODIFY `id_paketBelajar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_skor`
--
ALTER TABLE `tbl_skor`
  MODIFY `id_skor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
