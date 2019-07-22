-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 02:32 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedestana`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(11) NOT NULL,
  `variable1` varchar(255) NOT NULL,
  `logika` varchar(255) NOT NULL,
  `variable2` varchar(255) NOT NULL,
  `kesimpulan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `variable1`, `logika`, `variable2`, `kesimpulan`) VALUES
(1, 'banyak', 'dan', 'tinggi', 'tinggi'),
(2, 'banyak', 'dan', 'rendah', 'tinggi'),
(3, 'sedikit', 'dan', 'tinggi', 'rendah'),
(4, 'sedikit', 'dan', 'rendah', 'rendah');

-- --------------------------------------------------------

--
-- Table structure for table `bnpb`
--

CREATE TABLE `bnpb` (
  `ID_bnpb` int(100) NOT NULL,
  `Nama_bnpb` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bnpb`
--

INSERT INTO `bnpb` (`ID_bnpb`, `Nama_bnpb`, `Tanggal_Lahir`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '1997-02-27', 'SMA', '787878'),
(8, 'Retno Ayu', '1990-07-19', 'D3', '0816565279'),
(9, 'axel', '1990-12-27', 'S1', '723878');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_kecamatan` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_BNPB` int(11) NOT NULL,
  `id_fasilitator` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bencana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kecamatan`, `nama`, `kategori`, `id_BNPB`, `id_fasilitator`, `tanggal`, `bencana`) VALUES
('3404010001', '3404010', 'SUMBERRAHAYU', 'Madya', 0, 0, '2019-07-08', 30),
('3404010002', '3404010', 'SUMBERSARI', 'Madya', 0, 0, '2019-07-08', 50),
('3404010003', '3404010', 'SUMBER AGUNG', 'Pratama', 0, 0, '2019-07-08', 20),
('3404010004', '3404010', 'SUMBERARUM', 'belum', 0, 0, '0000-00-00', 10),
('3404020001', '3404020', 'SENDANG MULYO', 'belum', 0, 0, '0000-00-00', 24),
('3404020002', '3404020', 'SENDANG ARUM', 'belum', 0, 0, '0000-00-00', 33),
('3404020003', '3404020', 'SENDANG REJO', 'belum', 0, 0, '0000-00-00', 45),
('3404020004', '3404020', 'SENDANGSARI', 'Utama', 0, 0, '2019-07-08', 19),
('3404020005', '3404020', 'SENDANGAGUNG', 'belum', 0, 0, '0000-00-00', 36),
('3404030001', '3404030', 'MARGOLUWIH', 'belum', 0, 0, '0000-00-00', 40),
('3404030002', '3404030', 'MARGODADI', 'belum', 0, 0, '0000-00-00', 25),
('3404030003', '3404030', 'MARGOMULYO', 'belum', 0, 0, '0000-00-00', 25),
('3404030004', '3404030', 'MARGOAGUNG', 'belum', 0, 0, '0000-00-00', 30),
('3404030005', '3404030', 'MARGOKATON', 'belum', 0, 0, '0000-00-00', 40),
('3404040001', '3404040', 'SIDOREJO', 'belum', 0, 0, '0000-00-00', 35),
('3404040002', '3404040', 'SIDOLUHUR', 'belum', 0, 0, '0000-00-00', 46),
('3404040003', '3404040', 'SIDOMULYO', 'belum', 0, 0, '0000-00-00', 70),
('3404040004', '3404040', 'SIDOAGUNG', 'belum', 0, 0, '0000-00-00', 28),
('3404040005', '3404040', 'SIDOKARTO', 'belum', 0, 0, '0000-00-00', 40),
('3404040006', '3404040', 'SIDOARUM', 'belum', 0, 0, '0000-00-00', 57),
('3404040007', '3404040', 'SIDOMOYO', 'belum', 0, 0, '0000-00-00', 70),
('3404050001', '3404050', 'BALECATUR', 'belum', 0, 0, '0000-00-00', 67),
('3404050002', '3404050', 'AMBARKETAWANG', 'belum', 0, 0, '0000-00-00', 45),
('3404050003', '3404050', 'BANYURADEN', 'belum', 0, 0, '0000-00-00', 55),
('3404050004', '3404050', 'NOGOTIRTO', 'belum', 0, 0, '0000-00-00', 57),
('3404050005', '3404050', 'TRIHANGGO', 'Madya', 0, 0, '2019-07-08', 45),
('3404060001', '3404060', 'TIRTOADI', 'belum', 0, 0, '0000-00-00', 33),
('3404060002', '3404060', 'SUMBERADI', 'belum', 0, 0, '0000-00-00', 29),
('3404060003', '3404060', 'TLOGOADI', 'belum', 0, 0, '0000-00-00', 51),
('3404060004', '3404060', 'SENDANGADI', 'belum', 0, 0, '0000-00-00', 20),
('3404060005', '3404060', 'SINDUADI', 'belum', 0, 0, '0000-00-00', 0),
('3404070001', '3404070', 'CATUR TUNGGAL', 'belum', 0, 0, '0000-00-00', 19),
('3404070002', '3404070', 'MAGUWOHARJO', 'belum', 0, 0, '0000-00-00', 60),
('3404070003', '3404070', 'CONDONG CATUR', 'belum', 0, 0, '0000-00-00', 60),
('3404080001', '3404080', 'SENDANG TIRTO', 'belum', 0, 0, '0000-00-00', 50),
('3404080002', '3404080', 'TEGAL TIRTO', 'belum', 0, 0, '0000-00-00', 40),
('3404080003', '3404080', 'JOGO TIRTO', 'belum', 0, 0, '0000-00-00', 38),
('3404080004', '3404080', 'KALI TIRTO', 'belum', 0, 0, '0000-00-00', 46),
('3404090001', '3404090', 'SUMBER HARJO', 'belum', 0, 0, '0000-00-00', 22),
('3404090002', '3404090', 'WUKIR HARJO', 'belum', 0, 0, '0000-00-00', 36),
('3404090003', '3404090', 'GAYAM HARJO', 'belum', 0, 0, '0000-00-00', 42),
('3404090004', '3404090', 'SAMBI REJO', 'belum', 0, 0, '0000-00-00', 18),
('3404090005', '3404090', 'MADU REJO', 'belum', 0, 0, '0000-00-00', 11),
('3404090006', '3404090', 'BOKO HARJO', 'belum', 0, 0, '0000-00-00', 25),
('3404100001', '3404100', 'PURWO MARTANI', 'belum', 0, 0, '0000-00-00', 40),
('3404100002', '3404100', 'TIRTO MARTANI', 'belum', 0, 0, '0000-00-00', 55),
('3404100003', '3404100', 'TAMAN MARTANI', 'belum', 0, 0, '0000-00-00', 53),
('3404100004', '3404100', 'SELO MARTANI', 'belum', 0, 0, '0000-00-00', 35),
('3404110001', '3404110', 'WEDOMARTANI', 'belum', 0, 0, '0000-00-00', 23),
('3404110002', '3404110', 'UMBULMARTANI', 'belum', 0, 0, '0000-00-00', 26),
('3404110003', '3404110', 'WIDODO MARTANI', 'belum', 0, 0, '0000-00-00', 35),
('3404110004', '3404110', 'BIMO MARTANI', 'belum', 0, 0, '0000-00-00', 23),
('3404110005', '3404110', 'SINDUMARTANI', 'belum', 0, 0, '0000-00-00', 35),
('3404120001', '3404120', 'SARI HARJO', 'belum', 0, 0, '0000-00-00', 56),
('3404120002', '3404120', 'SINDUHARJO', 'belum', 0, 0, '0000-00-00', 25),
('3404120003', '3404120', 'MINOMARTANI', 'belum', 0, 0, '0000-00-00', 23),
('3404120004', '3404120', 'SUKO HARJO', 'belum', 0, 0, '0000-00-00', 29),
('3404120005', '3404120', 'SARDONOHARJO', 'belum', 0, 0, '0000-00-00', 5),
('3404120006', '3404120', 'DONOHARJO', 'belum', 0, 0, '0000-00-00', 33),
('3404130001', '3404130', 'CATUR HARJO', 'belum', 0, 0, '0000-00-00', 35),
('3404130002', '3404130', 'TRIHARJO', 'belum', 0, 0, '0000-00-00', 35),
('3404130003', '3404130', 'TRIDADI', 'belum', 0, 0, '0000-00-00', 45),
('3404130004', '3404130', 'PANDOWO HARJO', 'belum', 0, 0, '0000-00-00', 26),
('3404130005', '3404130', 'TRI MULYO', 'belum', 0, 0, '0000-00-00', 45),
('3404140001', '3404140', 'BANYU REJO', 'belum', 0, 0, '0000-00-00', 45),
('3404140002', '3404140', 'TAMBAK REJO', 'belum', 0, 0, '0000-00-00', 39),
('3404140003', '3404140', 'SUMBER REJO', 'belum', 0, 0, '0000-00-00', 12),
('3404140004', '3404140', 'PONDOK REJO', 'belum', 0, 0, '0000-00-00', 13),
('3404140005', '3404140', 'MORO REJO', 'belum', 0, 0, '0000-00-00', 23),
('3404140006', '3404140', 'MARGO REJO', 'belum', 0, 0, '0000-00-00', 13),
('3404140007', '3404140', 'LUMBUNG REJO', 'belum', 0, 0, '0000-00-00', 25),
('3404140008', '3404140', 'MERDIKO REJO', 'belum', 0, 0, '0000-00-00', 22),
('3404150001', '3404150', 'BANGUN KERTO', 'belum', 0, 0, '0000-00-00', 50),
('3404150002', '3404150', 'DONOKERTO', 'belum', 0, 0, '0000-00-00', 36),
('3404150003', '3404150', 'GIRI KERTO', 'belum', 0, 0, '0000-00-00', 5),
('3404150004', '3404150', 'WONO KERTO', 'belum', 0, 0, '0000-00-00', 56),
('3404160001', '3404160', 'PURWO BINANGUN', 'belum', 0, 0, '0000-00-00', 22),
('3404160002', '3404160', 'CANDI BINANGUN', 'belum', 0, 0, '0000-00-00', 35),
('3404160003', '3404160', 'HARJO BINANGUN', 'belum', 0, 0, '0000-00-00', 36),
('3404160004', '3404160', 'PAKEM BINANGUN', 'belum', 0, 0, '0000-00-00', 36),
('3404160005', '3404160', 'HARGO BINANGUN', 'belum', 0, 0, '0000-00-00', 55),
('3404170001', '3404170', 'WUKIR SARI', 'belum', 0, 0, '0000-00-00', 45),
('3404170002', '3404170', 'ARGO MULYO', 'belum', 0, 0, '0000-00-00', 32),
('3404170003', '3404170', 'GLAGAH HARJO', 'belum', 0, 0, '0000-00-00', 32),
('3404170004', '3404170', 'KEPUH HARJO', 'belum', 0, 0, '0000-00-00', 34),
('3404170005', '3404170', 'UMBUL HARJO', 'belum', 0, 0, '0000-00-00', 36);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitator`
--

CREATE TABLE `fasilitator` (
  `ID_fasilitator` int(11) NOT NULL,
  `Nama_fasilitator` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitator`
--

INSERT INTO `fasilitator` (`ID_fasilitator`, `Nama_fasilitator`, `Tanggal_Lahir`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '0007-07-07', 'SD', '72'),
(12, 'Priyanda', '1990-07-19', 'S2', '081328151474'),
(13, 'Bayu Seto', '1990-12-17', 'D3', '08181818'),
(14, 'axel', '1990-12-27', 'S2', '812112');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `No` int(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`No`, `Deskripsi`) VALUES
(1, 'Apakah telah ada upaya-upaya awal untuk menyusun kebijakan PRB di tingkat desa atau kelurahan? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 4, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(2, 'Apakah kebijakan PRB di tingkat desa atau kelurahan telah tersusun secara konsultatif dan					melibatkan seluruh pemangku kepentingan?\r\n \r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 4, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(3, 'Apakah kebijakan PRB di tingkat desa atau kelurahan telah dilegalkan dalam bentuk Perdes atau perangkat hukum serupa di kelurahan? (Lanjutkan ke pertanyaan selanjutnya)'),
(4, ' Apakah telah ada upaya-upaya awal untuk menyusun dokumen perencanaan penanggulangan bencana\r\n						seperti Rencana Penanggulangan Bencana, Rencana Aksi PRB atau Rencana Kontinjensi? (Bila ‘Tidak’ lanjutkan ke pertanyaan no. 7, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(5, 'Apakah dokumen perencanaan penanggulangan bencana seperti Rencana Penanggulangan Bencana,\r\n						Rencana Aksi PRB atau Rencana Kontinjensi telah tersusun? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 7, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(6, 'Apakah dokumen perencanaan penanggulangan bencana seperti Rencana Penanggulangan Bencana\r\n						dan Rencana Aksi PRB yang tersusun telah dipadukan ke dalam Rencana Pembangunan Desa atau\r\n						Kelurahan? \r\n						(Lanjutkan ke pertanyaan selanjutnya)'),
(7, 'Apakah telah ada upaya-upaya awal untuk membentuk forum PRB? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 10, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(8, 'Apakah forum PRB yang beranggotakan wakil-wakil dari masyarakat dan pemerintah, termasuk kelompok perempuan dan kelompok rentan telah terbentuk dan mulai berfungsi walau belum terlalu aktif? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 10, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(9, 'Apakah forum PRB yang terbentuk telah berfungsi aktif dengan program-program pengurangan risiko yang terencana dan diimplementasikan dengan baik? \r\n						(Lanjutkan ke pertanyaan selanjutnya)'),
(10, 'Apakah telah ada upaya-upaya awal untuk membentuk tim relawan/siaga PB Desa/Kelurahan yang terutama akan terlibat dalam tanggap darurat bencana, PRB dan pendidikan kebencanaan? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 13, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(11, 'Apakah tim relawan/siaga PB Desa/Kelurahan telah terbentuk dan memiliki kelengkapan personil dan peralatan yang memadai untuk melaksanakan tugasnya?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 13, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(12, 'Apakah tim relawan/siaga PB Desa/Kelurahan telah secara rutin melakukan kegiatan pelatihan, praktik simulasi, dan geladi respons tanggap darurat bagi para anggotanya dan masyarakat, melalui kegiatan-kegiatan yang terencana dan terprogram dengan baik?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(13, 'Dalam upaya pengurangan risiko bencana, apakah sudah ada pembicaraan untuk menjalin kerjasama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 16, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(14, 'Apakah sudah ada perjanjian kerjasama yang disepakati bersama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial, dll?\r\n\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 16, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(15, 'Apakah sudah ada kegiatan-kegiatan pengurangan risiko bencana yang dilakukan dengan cara bekerjasama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial dll?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(16, 'Apakah sudah ada upaya-upaya untuk mengumpulkan dan mengalokasikan dana khusus yang akan digunakan untuk upaya tanggap darurat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no.19, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(17, 'Apakah sudah ada dana khusus yang dikumpulkan baik dari masyarakat, kelompok-kelompok di desa, atau pemerintah desa/kelurahan yang dialokasikan untuk tanggap darurat ketika terjadi bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no.19, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(18, 'Apakah sudah ada pengelola dan mekanisme penggunaan dana khusus tersebut untuk tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(19, 'Apakah ada upaya-upaya untuk mengalokasikan anggaran desa/kelurahan untuk kegiatan-kegiatan pengurangan risiko bencana, seperti pembangunan tanggul sungai, pemecah gelombang, penanaman pohon, pelatihan kebencanaan, penataan pemukiman, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 22, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(20, 'Apakah sudah ada alokasi anggaran desa/kelurahan yang ditetapkan untuk kegiatan-kegiatan pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 22, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(21, 'Apakah sudah ada pengelola dan mekanisme penggunaan anggaran tersebut untuk kegiatan-kegiatan pengurangan risiko bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(22, 'Apakah ada upaya-upaya bagi pemerintah desa/kelurahan untuk melaksanakan/mengikuti pelatihan kebencanaan bagi aparatnya, dan menyediakan perlengkapan dan peralatan, sarana dan pra-sarana, logistik, dan personil untuk penanggulangan bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 25, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(23, 'Apakah pemerintah desa/kelurahan sudah memiliki personil terlatih, perlengkapan dan peralatan, sarana dan pra-sarana, dan logistik untuk melaksanakan upaya pengurangan risiko bencana, operasi tanggap darurat, dan pemulihan paska bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 25, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(24, 'Apakah pemerintah desa/kelurahan sudah memiliki mekanisme pemeliharaan, pemakaian, dan pengembangan personil terlatih, perlengkapan dan peralatan, sarana dan pra-sarana, dan logistik untuk melaksanakan upaya pengurangan risiko bencana, operasi tanggap darurat, dan pemulihan paska bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(25, 'pakah ada upaya-upaya awal untuk memberikan pengetahuan dan kemampuan, kepada tim relawan/siaga bencana desa/kelurahan, tentang analisis risiko, manajemen bencana, kesiapsiagaan, operasi tanggap darurat, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 28, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(26, 'Apakah sudah ada pelatihan-pelatihan yang diberikan kepada tim relawan/siaga bencana desa tentang analisis risiko, manajemen bencana, kesiapsiagaan, operasi tanggap darurat, dan pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 28, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(27, 'Apakah ada praktik-praktik evakuasi dan operasi tanggap darurat bencana yang dilakukan oleh tim relawan/siaga bencana desa?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(28, 'Apakah ada upaya-upaya memberikan pengetahuan dan kemampuan dalam bentuk penyuluhan dan penyebaran informasi, kepada warga desa tentang risiko bencana, tanda-tanda ancaman bencana, upaya penyelamatan diri, evakuasi, dan upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 31, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(29, 'Apakah ada pelatihan-pelatihan yang diberikan kepada masyarakat tentang risiko bencana, penyelamatan darurat dan upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 31, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(30, 'Apakah sudah ada praktik simulasi rutin untuk evakuasi dan penyelamatan darurat yang dilakukan oleh masyarakat bersama dengan tim relawan dan siaga bencana desa?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(31, 'Apakah ada upaya-upaya untuk melibatkan warga desa/kelurahan (selain aparat desa/kelurahan) dalam tim relawan/siaga bencana serta kelompok-kelompok untuk tanggap bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 34, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(32, 'Apakah ada lebih dari 30 warga yang menjadi anggota tim relawan/siaga bencana desa/kelurahan, dan terlibat aktif dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 34, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(33, 'Apakah ada kelompok-kelompok masyarakat, baik di tingkat RT atau RW atau kelompok lainnya, seperti Karang Taruna dll, yang menyatakan diri sebagai relawan siaga bencana dan melibatkan diri dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(34, 'Apakah ada upaya-upaya untuk melibatkan perempuan dalam tim relawan/siaga bencana serta kelompok-kelompok untuk tanggap bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 37, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(35, 'Apakah ada lebih dari 15 perempuan yang menjadi anggota tim relawan/siaga bencana desa/kelurahan, dan terlibat aktif dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 37, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(36, 'Apakah ada kelompok-kelompok perempuan di desa/kelurahan seperti kelompok PKK, dasa wisma, kader posyandu dll, yang menyatakan diri sebagai relawan siaga bencana dan melibatkan diri dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(37, 'Apakah ada upaya-upaya untuk melakukan pemetaan dan analisis ancaman, kerentanan, dan kapasitas desa/kelurahan untuk melihat risiko di desa/kelurahan tersebut?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 40, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(38, 'Apakah ada dokumen hasil analisis risiko di desa/kelurahan yang dibangun berdasarkan keterlibatan seluruh masyarakat, termasuk kelompok rentan seperti orang tua, anak-anak, penyandang cacat, ibu hamil, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 40, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(39, 'Apakah ada kegiatan-kegiatan di desa/kelurahan yang dilaksanakan berdasarkan hasil analisis risiko tersebut, yang kemudian berdampak pada berkurangnya risiko?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(40, 'Apakah sudah ada rencana untuk membuat peta dan jalur evakuasi, dan menyediakan tempat evakuasi khusus untuk tempat pengungsian ketika terjadi bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 43, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(41, 'Apakah peta dan jalur evakuasi sudah dibuat, dan tempat evakuasi untuk tempat pengungsian sudah ditentukan dan dilengkapi dengan perlengkapan dasar seperti P3K, obat-obatan, penerangan darurat dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 43, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(42, 'Apakah sudah sering dilakukan praktik simulasi evakuasi dan penyelamatan diri bersama warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(43, 'Apakah ada upaya-upaya untuk membangun sistem peringatan dini yang berbasis masyarakat untuk memberikan waktu penyelamatan diri dan aset bagi masyarakat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 46, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(44, 'Apakah sistem peringatan dini sudah dilengkapi dengan data/informasi, peralatan dan personil yang memadai untuk menjalankan fungsinya, serta mekanisme penyampaian informasi yang cepat, akurat dan jelas kepada seluruh warga?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 46, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(45, 'Apakah sudah sering dilakukan praktik simulasi pelaksanaan sistem peringatan dini bersama warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(46, 'Apakah sudah ada rencana untuk melakukan pembangunan fisik (mitigasi) untuk mengurangi risiko bencana di desa/kelurahan, seperti memperkuat tanggul sungai, pemecah gelombang, bangunan tahan gempa, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 49, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(47, 'Apakah sudah ada kegiatan pembangunan fisik (mitigasi) yang dilaksanakan untuk mengurangi risiko bencana di desa/kelurahan, seperti memperkuat tanggul sungai, pemecah gelombang, bangunan tahan gempa dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 49, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(48, 'pakah ada mekanisme pengelolaan dan pemeliharaan pembangunan fisik tersebut untuk menjamin kelestariannya serta upaya untuk menyebar-luaskannya?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(49, 'Apakah ada rencana pengembangan ekonomi untuk mengurangi kerentanan masyarakat, baik berupa meningkatkan produksi, memperluas akses pasar, maupun membuat sumber ekonomi lain yang lebih aman dari ancaman bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 52, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(50, 'Apakah sudah ada kegiatan-kegiatan pengembangan ekonomi yang dilaksanakan untuk mengurangi kerentanan masyarakat, baik berupa meningkatkan produksi, memperluas akses pasar, maupun membuat sumber ekonomi lain yang lebih aman dari ancaman bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 52, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(51, 'Apakah ada mekanisme untuk menjamin keberlanjutan pengembangan ekonomi tersebut dan upaya untuk memperluas pelaku ekonomi sampai pada seluruh warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(52, 'Apakah ada rencana untuk memberikan perlindungan kesehatan kepada kelompok-kelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 55, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(53, 'Apakah sudah ada skema program perlindungan kesehatan dan santunan sosial kepada kelompokkelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 55, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(54, 'Apakah sudah ada pengelola, mekanisme dan prosedur pelaksanaan program perlindungan kesehatan dan santunan sosial kepada kelompok-kelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(55, 'Apakah ada rencana untuk pengelolaan sumber daya alam, seperti hutan, sungai, pantai dll, untuk upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 58, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(56, 'Apakah sudah ada kegiatan-kegiatan pengelolaan sumber daya alam, seperti pengelolaan hutan, sungai, pantai dll, yang dilaksanakan untuk upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 58, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(57, 'Apakah sudah ada mekanisme untuk menjamin keberlanjutan pengelolaan sumber daya alam untuk pengurangan risiko bencana dalam kurun waktu yang panjang?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(58, 'Apakah ada upaya-upaya untuk melakukan perlindungan aset-aset produktif utama masyarakat dari dampak bencana?\r\n\r\n(Bila ‘Tidak’ pertanyaan selesai, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(59, 'Apakah ada kegiatan yang jelas untuk melakukan perlindungan aset produktif masyarakat seperti asuransi komunitas, gudang bersama, dll?\r\n\r\n(Bila ‘Tidak’ pertanyaan selesai, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(60, 'Apakah ada pengelola dan mekanisme yang jelas untuk menjalankan dan memelihara perlindungan aset produktif masyarakat?\r\n\r\n(Pertanyaan selesai)');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_Kecamatan` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_Kecamatan`, `nama_kecamatan`) VALUES
('3404010', 'MOYUDAN'),
('3404020', 'MINGGIR'),
('3404030', 'SEYEGAN'),
('3404040', 'GODEAN'),
('3404050', 'GAMPING'),
('3404060', 'MLATI'),
('3404070', 'DEPOK'),
('3404080', 'BERBAH'),
('3404090', 'PRAMBANAN'),
('3404100', 'KALASAN'),
('3404110', 'NGEMPLAK'),
('3404120', 'NGAGLIK'),
('3404130', 'SLEMAN'),
('3404140', 'TEMPEL'),
('3404150', 'TURI'),
('3404160', 'PAKEM'),
('3404170', 'CANGKRINGAN');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(11) NOT NULL,
  `Indikator` varchar(100) DEFAULT NULL,
  `ID_FASILITATOR` int(100) DEFAULT '0',
  `ID_BNPB` int(100) DEFAULT '0',
  `Status` varchar(100) NOT NULL,
  `ID_DESA` char(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`ID`, `Indikator`, `ID_FASILITATOR`, `ID_BNPB`, `Status`, `ID_DESA`, `tanggal`) VALUES
(13, '232323232221111111111111111111111111111111111111111111111111', 13, NULL, 'Verified', '3404010003', '2019-07-08'),
(14, '222222222211111122222222111111111111111111111111111111111111', 12, NULL, 'Verified', '3404020004', '2019-07-08'),
(16, '221111111111111111111111111111111111111111111111111111111111', 12, 8, 'Waiting', '3404120005', '2019-07-03'),
(17, '111111111111111112211111111111111111111111111111111111111111', 14, NULL, 'Verified', '3404010002', '2019-07-08'),
(18, '231111111111111111111111111111111111111121111111111111111111', 14, NULL, 'Verified', '3404010001', '2019-07-08'),
(19, '211111111111111111111111111111111111111111111111111111111111', 14, 9, 'Waiting', '3404040003', '2019-07-08'),
(20, '232111111111111121111111111111111111111111111111111111111111', 14, NULL, 'Verified', '3404050005', '2019-07-08'),
(21, '', 14, 9, 'Proses Pelaporan', '3404080003', '2019-07-10'),
(22, '221111111111111111111111111111111111111111111111111111111111', 12, 9, 'Waiting', '3404090001', '2019-07-10'),
(23, '111111111111111111111231111121111111111111111111111111111111', 14, 9, 'Waiting', '3404170005', '2019-07-10'),
(24, '', 14, 9, 'Proses Pelaporan', '3404070001', '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `ID_fasilitator` int(11) NOT NULL,
  `ID_bnpb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `job`, `ID_fasilitator`, `ID_bnpb`) VALUES
(1, 'axel@admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0, 0),
(14, 'Priyandi@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 12, 0),
(15, 'RetnoAyu@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 8),
(16, 'Bayu Seto@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 13, 0),
(19, 'pakar', '87b7cf2448de01f22b0c016b272f2ec0', 'pakar', 0, 0),
(20, 'axel@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 14, 0),
(21, 'axel@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `variable`
--

CREATE TABLE `variable` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `himpunan1` varchar(255) NOT NULL,
  `himpunan2` varchar(255) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variable`
--

INSERT INTO `variable` (`id`, `nama`, `himpunan1`, `himpunan2`, `min`, `max`) VALUES
(1, 'prioritas', 'rendah', 'tinggi', 1, 10),
(2, 'indikator', 'sedikit', 'banyak', 0, 60),
(3, 'resiko bencana', 'rendah', 'tinggi', 0, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnpb`
--
ALTER TABLE `bnpb`
  ADD PRIMARY KEY (`ID_bnpb`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `villages_district_id_index` (`id_kecamatan`);

--
-- Indexes for table `fasilitator`
--
ALTER TABLE `fasilitator`
  ADD PRIMARY KEY (`ID_fasilitator`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_Kecamatan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_FASILITATOR` (`ID_FASILITATOR`),
  ADD KEY `ID_BNPB` (`ID_BNPB`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variable`
--
ALTER TABLE `variable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bnpb`
--
ALTER TABLE `bnpb`
  MODIFY `ID_bnpb` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fasilitator`
--
ALTER TABLE `fasilitator`
  MODIFY `ID_fasilitator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `variable`
--
ALTER TABLE `variable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_bnpb` FOREIGN KEY (`ID_BNPB`) REFERENCES `bnpb` (`ID_bnpb`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_laporan_fasilitator` FOREIGN KEY (`ID_FASILITATOR`) REFERENCES `fasilitator` (`ID_fasilitator`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
