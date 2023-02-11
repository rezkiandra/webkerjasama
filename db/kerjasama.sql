-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2023 pada 16.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerjasama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `deskripsi`, `lokasi`, `tanggal`, `gambar`) VALUES
(63, 'Hello ReactJS', 'ReactJS', 'Dalam Negeri', '2023-02-17', 'Screenshot (69).png'),
(64, 'Hello Laravel', 'Laravel', 'Dalam Negeri', '2023-01-12', 'Screenshot (73).png'),
(65, 'Hello VueJS', 'VueJS', 'Kampus', '2023-02-08', 'Screenshot (74).png'),
(66, 'Test', 'Hello', 'Dalam Negeri', '2023-02-23', 'Screenshot (67).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id` int(11) NOT NULL,
  `judul_foto` varchar(50) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id`, `judul_foto`, `lokasi`, `tanggal`, `gambar`) VALUES
(1, 'Hello', 'Kampus', '2023-02-15', 'download2.jpg'),
(2, 'Hello', 'Dalam Negeri', '2023-02-15', 'download2.jpg'),
(3, 'Rumah Penginapan Poltesa Untuk Mahasiswa Baru', 'Kampus', '2023-02-07', 'download2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama_dalam`
--

CREATE TABLE `tb_kerjasama_dalam` (
  `id` int(11) NOT NULL,
  `mitra_kerjasama` varchar(100) DEFAULT NULL,
  `bentuk_lembaga` varchar(100) DEFAULT NULL,
  `jenis_kegiatan` varchar(255) DEFAULT NULL,
  `waktu_mulai` date DEFAULT NULL,
  `waktu_berakhir` date DEFAULT NULL,
  `mou_poltesa` varchar(50) DEFAULT NULL,
  `mou_mitra` varchar(50) DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  `lokasi` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kerjasama_dalam`
--

INSERT INTO `tb_kerjasama_dalam` (`id`, `mitra_kerjasama`, `bentuk_lembaga`, `jenis_kegiatan`, `waktu_mulai`, `waktu_berakhir`, `mou_poltesa`, `mou_mitra`, `status`, `lokasi`) VALUES
(1, 'Dinas Pertanian Kab. Sambas', 'Lembaga Daerah', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0853/PL37/KL/2018', '074/388/Distan-KP/2018', 'Aktif', 'Dalam Negeri'),
(2, 'SMKN 2 Teluk Keramat', 'Lembaga Pendidikan', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1829/PL37/KL/2018', '421.5/137/SMKN.2/2018', 'Aktif', 'Dalam Negeri'),
(3, 'Lembaga Swabina Prakarsa', 'Lembaga Swadaya Masyarakat', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1928/PL37/KL/2018', '-', 'Aktif', 'Dalam Negeri'),
(4, 'Badan Pengelola Lab. School Uad Sambas', 'Lembaga Pendidikan', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '02/II.a/BPLUS/XII/2018', 'Aktif', 'Dalam Negeri'),
(5, 'Parmusi Kab. Sambas', 'Lembaga Swadaya Masyarakat', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1917/PL37/KL/2018', '-', 'Aktif', 'Dalam Negeri'),
(6, 'Lpk Borneo Raya Khatulistiwa', 'Lembaga Pelatihan', 'Program Magang dan Internship ke Jepang', '0000-00-00', '0000-00-00', '0989/PL37/KL/2018', '001/LPK-BR.KHATULISTIWA/MoU.POLTESA/VI/2018', 'Aktif', 'Dalam Negeri'),
(7, 'Ikatan Dosen Vokasi Indonesia', 'Industri', 'Pengembangan Bidang Pariwisata Dan Perhotelan', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(8, 'Dpd Asita', 'Industri', 'Pengembangan Kemajuan Pariwisata', '0000-00-00', '0000-00-00', '1481/PL37/KL/2018', '60/DVD-ASITA/KB/VIII/2018', 'Aktif', 'Dalam Negeri'),
(9, 'Fhci', 'Lembaga Negara', 'Kerjasama Antar Lembaga', '0000-00-00', '0000-00-00', '1995.1/PL37/KL/2018', '145/SK/FHCI/XI/2018', 'Aktif', 'Dalam Negeri'),
(10, 'Kantor Camat Sambas', 'Lembaga Negara', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(11, 'Kelompok Toga Setiva', 'Lembaga Swadaya Masyarakat', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(12, 'Politeknik Negeri Ketapang', 'Lembaga Pendidikan', 'Dukungan Pengembangan Kerjasama Akademik', '0000-00-00', '0000-00-00', '546/PL37/KL/2018', '546/PL39/LS/2018', 'Aktif', 'Dalam Negeri'),
(13, 'Baznas', 'Lembaga Daerah', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0020/PL37/KL/2018', '007/BAZNAS-SBS/K/1/2018', 'Aktif', 'Dalam Negeri'),
(14, 'Desa Sebubus', 'Pemerintah Desa', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1334/PL37/KL/2018', '400/26/KS-2001/2018', 'Aktif', 'Dalam Negeri'),
(15, 'Koperasi Citra Arsa Mandiri', 'Industri', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0364/PL37/KL/2018', '002/TIL.5/III/2018', 'Aktif', 'Dalam Negeri'),
(16, 'Smk Labschool Uas', 'Lembaga Pendidikan', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(20, 'Politeknik Tangga Equator Pontianak', 'Lembaga Pendidikan', 'Dukungan Pengembangan Dan Kerjasma Masyrakat Terintitusi', '0000-00-00', '0000-00-00', '2022/PL37/KL/2019', '44/APQ/MoU/XII/2019', 'Aktif', 'Dalam Negeri'),
(21, 'Kantor Kementerian Agama Sambas dan Baznas Sambas', 'Lembaga Negara', 'Dukungan Pengembangan Dan Kerjasma Masyrakat Terintitusi', '0000-00-00', '0000-00-00', '1968/PL37/KL/2019', '100/BAZNAS-SBS/K/XI/2019', 'Aktif', 'Dalam Negeri'),
(22, 'Fhci (keg. Pmmb)', 'Lembaga Negara', 'PMMB', '0000-00-00', '0000-00-00', '451/PL37/KL/2019', '172/SK/FHCI/IV/2019', 'Aktif', 'Dalam Negeri'),
(23, 'Pt. Bni', 'Industri', 'Penerbitan Kartu Kredit Pemerintah', '0000-00-00', '0000-00-00', '1034/PL37/KL/2019', 'SBS/007/2019', 'Aktif', 'Dalam Negeri'),
(24, 'Pt. Pundi Lahan Khatulistiwa', 'Industri', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1839.2/PL37/KL/2019', '-', 'Aktif', 'Dalam Negeri'),
(25, 'Pt. Bhakti Karya Mandiri', 'Industri', 'Pengembangan Dan Kerjasama Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1839.1/PL37/KL/2019', '-', 'Aktif', 'Dalam Negeri'),
(26, 'Politeknik Negeri Jakarta', 'Lembaga Pendidikan', 'Perjanjian Kerjasama Program Mobilisasi Dosen', '0000-00-00', '0000-00-00', '0660/PL37/KL/2019', '29/PL.D/HK.05.00/2019', 'Aktif', 'Dalam Negeri'),
(27, 'Djp Kalbar', 'Lembaga Negara', 'Tax Center ', '0000-00-00', '0000-00-00', '0018.01/PL37/KL/2019', 'KEP-14/WPJ.23/2019', 'Aktif', 'Dalam Negeri'),
(28, 'Politeknik Harapan Bersama Kota Tegal', 'Lembaga Pendidikan', 'Pendidikan dan Pelatihan PKM', '0000-00-00', '0000-00-00', '0351/PL37/KL/2019', '008.17/PHB/III/2019', 'Aktif', 'Dalam Negeri'),
(29, 'Pt Hutama Karya (Persero)', 'Industri', 'Program Magang Mahasiswa Bersertifikat', '0000-00-00', '0000-00-00', '1174/PL37/KL/2019', 'HC/My.1237/S.Perj/33-2019', 'Aktif', 'Dalam Negeri'),
(30, 'Pt. Bursa Efekindonesia', 'Industri', 'Pendirian Galeri Investasi', '0000-00-00', '0000-00-00', '0762/PL37/KS/2020', 'SP-00426/BEI.HKM/09-2020', 'Aktif', 'Dalam Negeri'),
(31, 'Pt. Phintraco Sekuritas', 'Industri', 'Pendirian Galeri Investasi', '0000-00-00', '0000-00-00', '0762/PL37/KS/2020', '26/PS/PERJ/VIII/2020', 'Aktif', 'Dalam Negeri'),
(32, 'Politeknik Negeri Pontianak', 'Lembaga', 'Pengembangan Penilaian Mutu Pendidikan Tinggi Vokasi Berstandar Industri', '2018-02-17', '2023-02-17', '1313/PL37/TU/2020', '0319/PL16/KS.BIV/2020', 'Aktif', 'Dalam Negeri'),
(33, 'Fakultas Perikanan Dan Ilmu Kelautan Univesitas Brawijaya', 'Lembaga', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0940/PL37/KL\'/2020', 'UN10.F06/KS/2020', 'Aktif', 'Dalam Negeri'),
(34, 'Pt. Bank Negara Indonesia Tb.K', 'Industri', 'PMMB', '0000-00-00', '0000-00-00', '0169/PL37/KL/2020', 'BCV/1/124/R', 'Aktif', 'Dalam Negeri'),
(35, 'Universitas Negeri Malang', 'Lembaga Pendidikan', 'Pengembangan PPPM', '0000-00-00', '0000-00-00', '1981/PL37', '7.12.273/UN32/KS/2020', 'Aktif', 'Dalam Negeri'),
(36, 'Dpd Iapi Kalbar', 'Organisasi Profesi', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '1312/PL37', '25/DPD-KB/12/2020', 'Aktif', 'Dalam Negeri'),
(37, 'Universitas Panca Bhakti Pontianak', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0563/PL37', '486/UPB/E.042020', 'Aktif', 'Dalam Negeri'),
(38, 'Iais Sambas', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0527/PL37', '354/KHSI/IAIS-SBS/VII/2020', 'Aktif', 'Dalam Negeri'),
(39, 'Smkn 1 Paloh', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '6943/PL37', '-', 'Aktif', 'Dalam Negeri'),
(40, 'Smkn 3 Singkawang', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '420/230/SMKN3-SKW/2020', 'Aktif', 'Dalam Negeri'),
(41, 'Baristan Pontianak', 'Lembaga Negara', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0691.1/PL37', 'B/847/BPPI/VIII/2020', 'Aktif', 'Dalam Negeri'),
(42, 'Smkn 1 Selakau Timur', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0916/PL37', '421.5/362/SMK.1/2020', 'Aktif', 'Dalam Negeri'),
(43, 'Bni Sambas', 'Industri', 'Penerbitan Dan Pengelolaan Kartu Mahasiswa', '0000-00-00', '0000-00-00', '0304.1/PL37/KS', 'SBS/PKS/002/2020', 'Aktif', 'Dalam Negeri'),
(44, 'Untan', 'Lembaga Pendidikan', 'P3M', '0000-00-00', '0000-00-00', '0701/PL37', '9052/UN22/KS/2020', 'Aktif', 'Dalam Negeri'),
(45, 'Kejaksaan Negeri Sambas', 'Lembaga Negara', 'Program Sadar Hukum', '0000-00-00', '0000-00-00', '0231/PL37/KL/2020', 'B-404/Q.1.17/Gs.2/03/2020', 'Aktif', 'Dalam Negeri'),
(46, 'Fakultas Perikanan Dan Ilmu Kelautan Unbraw', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(47, 'Bei Dan Phyntraco', 'Industri', 'Pendirian Galeri Investasi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(48, 'Virtual Education Academy', 'Lembaga Pendidikan', 'Hal Kerjasama Pelatihan, Layanan Beasiswa, Test Toefl,Pendidikan Karakter, Kampus Uni Eropa', '0000-00-00', '0000-00-00', '2341/PL37/KS/2021', '00021/VEA/KS/2021', 'Aktif', 'Dalam Negeri'),
(49, 'Balai Riset Dan Standarisasi Industri Pontianak', 'Lembaga', 'Standarisasi Dan Sertifikasi Produk Kopi Bubuk Pada Tenant Di Lingkungan Inkubator Bisnis Swabina Tech\'S Politeknik Negeri Sambas', '0000-00-00', '0000-00-00', '2617/PL37/KL/2021', 'B/1215/BPPI/Baristand-Pontianak/LP-SPK/X/2021', 'Aktif', 'Dalam Negeri'),
(50, 'Pt. Tourindo Guide Indonesia Tbk', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0768/PL37/KS/2021', '019/MoU/IAGI-Kalbar/IV/2021', 'Aktif', 'Dalam Negeri'),
(51, 'Pt. Tourindo Guide Indonesia Tbk (Magang)', 'Industri', 'Program Magang', '0000-00-00', '0000-00-00', '1942/PL37/KS/2021', '21/PKS/IAGI-Kalbar/IV/2021', 'Aktif', 'Dalam Negeri'),
(52, 'Ikatan Ahli Geologi Indonesia Pengurus Daerah Kalbar', 'Industri', 'Pengembangan Dan Pemanfaatan Informasi Geospasial Untuk Pengabdian Kepada Masyarakat Kabupaten Sambas', '0000-00-00', '0000-00-00', '0768/PL37/KS/2021', '019/MoU/IAGI-Kalbar/IV/2021', 'Aktif', 'Dalam Negeri'),
(53, 'Ikatan Ahli Geologi Indonesia Pengurus Daerah Kalbar (Pkm)', 'Industri', 'Pengembangan Dan Pemanfaatan Informasi Geospasial Untuk Pengabdian Kepada Masyarakat Kabupaten Sambas', '0000-00-00', '0000-00-00', '1942/PL37/KS/2021', '21/PKS/IAGI-Kalbar/IV/2021', 'Aktif', 'Dalam Negeri'),
(54, 'Lembaga Sertifikasi Profesi Agribisnis Ambissi', 'Lembaga', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0776/PL37/KL/2021', '019/MOU-LSP/IV/2021', 'Aktif', 'Dalam Negeri'),
(55, 'Antara Biro Kalbar', 'Lembaga', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0689/PL37/KL/2021', 'HK.08.00/048/PTN.ANT/MOU/2021', 'Aktif', 'Dalam Negeri'),
(56, 'Dpd Hpi Kalbar', 'Industri', '-', '0000-00-00', '0000-00-00', '0687/PL37/KL/2021', '-', 'Aktif', 'Dalam Negeri'),
(57, 'STKIP', 'Lembaga', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0686/PL37/KL/2021', '0327/E.3/U/IV/2021', 'Aktif', 'Dalam Negeri'),
(58, 'Universitas Terbuka', 'Lembaga', 'Peningkatan Penyelenggaraan Tri Dharma Perguruan Tinggi', '0000-00-00', '0000-00-00', '0688/PL37/KL/2021', '0476/UN31/UPBJJ.23/KS/2021', 'Aktif', 'Dalam Negeri'),
(59, 'Swiss Belinn Singkawang', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '0547/PL37/KL/2021', '-', 'Aktif', 'Dalam Negeri'),
(60, 'Kelompok Asuhan Mandiri Akupresur Gaharu', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(61, 'Hpi Kalbar', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(62, 'Lsp Ambissi', 'Industri', 'Pengembangan SDM Agribisnis', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(63, 'SMKN Sajingan Besar', 'Lembaga Pendidikan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(64, 'STKIP Singkawang', 'Lembaga Pendidikan', 'Dukungan Penyelenggaraan Tri Dharma', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(65, 'Kelompok Asuhan Mandiri', 'Kelompok Binaan', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(66, 'Telkomsel', 'Industri', 'Pengembangan Soft Skill Mahasiswa', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(67, 'Taman Mini Strobery', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(68, 'P4S Alam Cemerlang', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(69, 'Pks Swiss Belinn', 'Industri', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(70, 'Pks. Iagi', 'Industri', 'Pemanfaatan Informasi Geospasial', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(71, 'Pks. Dukcapil Sambas', 'Lembaga Negara', 'Pemuktahiran Data', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri'),
(72, 'Pks. Baristan', 'Lembaga Negara', 'Standar Dan Sertifikasi Produk Kopi', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Dalam Negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama_luar`
--

CREATE TABLE `tb_kerjasama_luar` (
  `id` int(11) NOT NULL,
  `mitra_kerjasama` varchar(100) DEFAULT NULL,
  `bentuk_lembaga` varchar(100) DEFAULT NULL,
  `jenis_kegiatan` varchar(100) DEFAULT NULL,
  `waktu_mulai` date DEFAULT NULL,
  `waktu_berakhir` date DEFAULT NULL,
  `mou_poltesa` varchar(50) DEFAULT NULL,
  `mou_mitra` varchar(50) DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  `lokasi` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kerjasama_luar`
--

INSERT INTO `tb_kerjasama_luar` (`id`, `mitra_kerjasama`, `bentuk_lembaga`, `jenis_kegiatan`, `waktu_mulai`, `waktu_berakhir`, `mou_poltesa`, `mou_mitra`, `status`, `lokasi`) VALUES
(1, 'Politeknik Mukah Serawak', 'Lembaga Pendidikan', 'Dukungan Pengembangan Akademik Antar Lembaga', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Luar Negeri'),
(2, 'KABUSHUKIGAISYA WILLTOS', 'Industri', 'Program Rekrutmen PKL di Jepang', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Luar Negeri'),
(3, 'KANKYO MIRAI KABUSHUKIGAISYA', 'Industri', 'Program Rekrutmen PKL di Jepang', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Luar Negeri'),
(4, 'RISE NEO COOPERATIVE', 'Industri', 'Program Rekrutmen PKL di Jepang', '0000-00-00', '0000-00-00', '-', '-', 'Aktif', 'Luar Negeri'),
(5, 'POLITEKNIK METRO BETONG SERAWAK', 'Penelitian dan Pengembangan Lembaga', 'Dukungan Pengembangan Masyarakat Terinstitusi', '0000-00-00', '0000-00-00', '-', '-', 'Tidak Aktif', 'Luar Negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mitra`
--

INSERT INTO `tb_mitra` (`id`, `nama_mitra`, `lokasi`, `tanggal`, `gambar`) VALUES
(3, 'Politeknik Negeri Pontianak', 'Luar Negeri', '2023-02-02', 'Screenshot (217).png'),
(4, 'Politeknik Negeri Sambas', 'Dalam Negeri', '2023-02-15', 'Screenshot (347).png'),
(5, 'Politeknik Negeri Ketapang', 'Dalam Negeri', '2023-02-15', 'politap.png'),
(6, 'Politeknik Negeri Ketapang', 'Dalam Negeri', '2023-02-21', 'politap.png'),
(7, 'UGM', 'Dalam Negeri', '2023-03-03', 'poltesa-logo.png'),
(8, 'Politeknik Metro Betong', 'Dalam Negeri', '2023-02-21', 'cart.png'),
(9, 'Universitas Jepang', 'Luar Negeri', '2023-02-15', 'poltesa-logo.png'),
(10, 'Politeknik Negeri Batam', 'Dalam Negeri', '2023-02-14', 'politap.png'),
(11, 'Politeknik Negeri Serawak', 'Dalam Negeri', '2023-02-15', 'politap.png'),
(12, 'Univ Jepang', 'Luar Negeri', '2023-02-15', 'politap.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id` int(11) NOT NULL,
  `banner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tentang`
--

INSERT INTO `tb_tentang` (`id`, `banner`) VALUES
(11, 'Struktur Bagan Kerja Sama.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ebc1335eb1ddbd1f297a4cbb3a88264a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video`
--

CREATE TABLE `tb_video` (
  `id` int(11) NOT NULL,
  `judul_video` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_video`
--

INSERT INTO `tb_video` (`id`, `judul_video`, `deskripsi`, `link`) VALUES
(1, 'Profil Politeknik Negeri Sambas', 'Profil Politeknik Negeri Sambas', 'https://www.youtube.com/embed/X3wXl_KM7Jo'),
(2, 'Cobalagi', 'Hello', 'https://www.youtube.com/embed/X3wXl_KM7Jo'),
(5, 'Video Baris ke-2', 'Hello World', 'https://www.youtube.com/embed/X3wXl_KM7Jo'),
(6, 'Hello Lagi !!', 'Hello World Ke-02', 'https://www.youtube.com/embed/X3wXl_KM7Jo'),
(7, 'Hello React JS', 'React JS adalah sebuah library dari javascript untuk frontend', 'https://www.youtube.com/embed/X3wXl_KM7Jo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kerjasama_dalam`
--
ALTER TABLE `tb_kerjasama_dalam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kerjasama_luar`
--
ALTER TABLE `tb_kerjasama_luar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama_dalam`
--
ALTER TABLE `tb_kerjasama_dalam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama_luar`
--
ALTER TABLE `tb_kerjasama_luar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
