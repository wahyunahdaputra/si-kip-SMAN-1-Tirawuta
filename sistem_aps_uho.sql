-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2024 pada 02.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_aps_uho`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_ps` int(11) NOT NULL,
  `fakultas` varchar(245) NOT NULL,
  `program` varchar(245) NOT NULL,
  `program_studi` varchar(245) NOT NULL,
  `pr_akreditasi` varchar(245) NOT NULL,
  `tgl_sk` varchar(245) NOT NULL,
  `tgl_kadaluarsa` varchar(245) NOT NULL,
  `no_sk` varchar(200) NOT NULL,
  `tgl_hariini` date NOT NULL,
  `status_kadaluarsa` varchar(100) NOT NULL,
  `akr_oleh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_ps`, `fakultas`, `program`, `program_studi`, `pr_akreditasi`, `tgl_sk`, `tgl_kadaluarsa`, `no_sk`, `tgl_hariini`, `status_kadaluarsa`, `akr_oleh`) VALUES
(1, 'FT', 'Diploma Tiga', 'Teknik Arsitektur', 'Terakreditasi B', '8/1/2023', '8/1/2024', '3493/SK/BAN-PT/Ak.S/D3/VIII/2023', '0000-00-00', '177', 'BAN PT'),
(2, 'FMIPA', 'Diploma Tiga', 'Statistika', 'Terakreditasi B', '04/19/2020', '9/4/2025', '6803/SK/BAN-PT/Ak-PPJ/Dipl-III/X/2020', '0000-00-00', '576', 'LAMSAMA'),
(3, 'FT', 'Diploma Tiga', 'Teknik Mesin', 'Terakreditasi BAIK SEKALI', '20/12/2022', '12/20/2027', '0264/SK/LAM TEKNIK/VD3/XII/2022', '0000-00-00', '1413', 'LAM TEKNIK'),
(4, 'FT', 'Diploma Tiga', 'Teknik Elektronika', 'Terakreditasi BAIK SEKALI', '12/21/2022', '12/21/2027', '0144/SK/LAM Teknik/vD3/XII/2022', '0000-00-00', '1414', 'LAM TEKNIK'),
(5, 'FT', 'Diploma Tiga', 'Teknik Sipil', 'Terakreditasi BAIK SEKALI', '207/04/2018', '20/04/2028', '0090/SK/LAM Teknik/VD3/IV/2023', '0000-00-00', '1535', 'LAM TEKNIK'),
(6, 'PASCASARJANA', 'Doktor', 'Ilmu Pertanian', 'Terakreditasi A', '12/21/2021', '12/21/2026', '12890/SK/BAN-PT/Ak-PPJ/D/XII/2021', '0000-00-00', '1049', 'BAN PT'),
(7, 'PASCASARJANA', 'Doktor', 'Ilmu Manajemen', 'Terakreditasi A', '10/13/2020', '10/13/2025', '6405/SK/BAN-PT/Akred/D/X/2020', '0000-00-00', '615', 'LAMEMBA'),
(8, 'PASCASARJANA', 'Doktor', 'Ilmu Ekonomi', 'Terakreditasi BAIK SEKALI', '4/4/2028', '4/4/2028', '	1195/SK/BAN-PT/Ak.Ppj/D/IV/2023', '0000-00-00', '1519', 'LAMEMBA'),
(9, 'PASCASARJANA', 'Magister', 'Kajian Budaya', 'Terakreditasi B', '4/9/2019', '4/9/2024', '733/SK/BAN-PT/Akred/M/IV/2019', '0000-00-00', '63', 'BAN PT'),
(10, 'PASCASARJANA', 'Magister', 'Perencanaan dan Pengembangan Wilayah', 'Terakreditasi B', '3/29/2020', '3/29/2025', '2624/SK/BAN-PT/Ak-PPJ/M/IV/2020', '0000-00-00', '417', 'BAN PT'),
(11, 'PASCASARJANA', 'Magister', 'Administrasi Pembangunan', 'Terakreditasi B', '5/3/2020', '5/3/2025', '4195/SK/BAN-PT/Ak-PPJ/M/VII/2020', '0000-00-00', '452', 'BAN PT'),
(12, 'FP', 'Magister', 'Agribisnis', 'Terakreditasi UNGGUL', '9/1/2023', '7/21/2025', '3841/SK/BAN-PT/Ak.KP/M/IX/2023', '0000-00-00', '531', 'BAN PT'),
(13, 'FP', 'Magister', 'Agronomi', 'Terakreditasi UNGGUL', '10/1/2023', '8/11/2025', '3933/SK/BAN-PT/Ak.KP/M/X/2023', '0000-00-00', '552', 'BAN PT'),
(14, 'PASCASARJANA', 'Magister', 'Ilmu Perikanan', 'Terakreditasi A', '10/6/2020', '10/6/2025', '6210/SK/BAN-PT/Akred/M/X/2020', '0000-00-00', '608', 'BAN PT'),
(15, 'FPt', 'Magister', 'Peternakan', 'Terakreditasi A', '10/13/2020', '10/13/2025', '6397/SK/BAN-PT/Akred/M/X/2020', '0000-00-00', '615', 'BAN PT'),
(16, 'FH', 'Magister', 'Hukum', 'Terakreditasi B', '11/11/2020', '11/11/2025', '7266/SK/BAN-PT/Akred/M/XI/2020', '0000-00-00', '644', 'BAN PT'),
(17, 'PASCASARJANA', 'Magister', 'Magister Keguruan Bahasa', 'Terakreditasi B', '11/24/2020', '11/24/2025', '	7759/SK/BAN-PT/Akred/M/XI/2020', '0000-00-00', '657', 'BAN PT'),
(18, 'FKIP', 'Magister', 'Pendidikan Bahasa dan Sastra Indonesia', 'Terakreditasi B', '4/7/2020', '4/7/2025', '	2350/SK/BAN-PT/Ak-PPJ/M/IV/2020', '0000-00-00', '426', 'LAMDIK'),
(19, 'PASCASARJANA', 'Magister', 'Pendidikan IPA', 'Terakreditasi B', '5/31/2020', '5/31/2025', '4185/SK/BAN-PT/Ak-PPJ/M/VII/2020', '0000-00-00', '480', 'LAMDIK'),
(20, 'FMIPA', 'Magister', 'Geografi', 'Terakreditasi B', '6/23/2020', '6/23/2025', '3549/SK/BAN-PT/Akred/M/VI/2020', '0000-00-00', '503', 'LAMSAMA'),
(21, 'FMIPA', 'Magister', 'Fisika', 'Terakreditasi B', '9/30/2020', '9/30/2025', '6125/SK/BAN-PT/Akred/M/IX/2020', '0000-00-00', '602', 'LAMSAMA'),
(22, 'PASCASARJANA', 'Magister', 'Ilmu Manajemen', 'Terakreditasi UNGGUL', '10/20/2020', '10/20/2025', '2587/SK/BAN-PT/AK-ISK/M/IV/2022', '0000-00-00', '622', 'LAMEMBA'),
(23, 'FMIPA', 'Magister', 'Kimia', 'Terakreditasi B', '12/1/2020', '12/1/2025', '	7873/SK/BAN-PT/Akred/M/XII/2020', '0000-00-00', '664', 'LAMSAMA'),
(24, 'PASCASARJANA', 'Magister', 'Pendidikan Seni', 'Terakreditasi B', '2/3/2026', '2/3/2026', '	10032/SK/BAN-PT/Akred/M/VIII/2021', '0000-00-00', '728', 'LAMDIK'),
(25, 'FKIP', 'Magister', 'Pendidikan Ilmu Pengetahuan Sosial', 'Terakreditasi UNGGUL', '7/7/2021', '7/7/2026', '9360/SK/BAN-PT/Akred/M/VII/2021	', '0000-00-00', '882', 'LAMDIK'),
(26, 'FEB', 'Magister', 'Manajemen', 'Terakreditasi B', '1/11/2022', '1/11/2027', '14024/SK/BAN-PT/Ak-PPJ/M/XII/2021', '0000-00-00', '1070', 'LAMEMBA'),
(27, 'FKESMAS', 'Magister', 'Kesehatan Masyarakat', 'Terakreditasi BAIK SEKALI', '1/13/2022', '1/13/2027', '0020/LAM-PTKes/Akr/Mag/I/2022	', '0000-00-00', '1072', 'LAMPTKES'),
(28, 'FKIP', 'Magister', 'Pendidikan Matematika', 'Terakreditasi BAIK SEKALI', '9/6/2022', '9/6/2027', '5902/SK/BAN-PT/Ak.Ppj/M/IX/2022', '0000-00-00', '1308', 'LAMDIK'),
(29, 'PASCASARJANA', 'Magister', 'Manajemen Rekayasa', 'Terakreditasi BAIK SEKALI', '12/20/2022', '12/20/2027', '0227/SK/LAM Teknik/AM/XII/2022', '0000-00-00', '1413', 'LAM TEKNIK'),
(30, 'PASCASARJANA', 'Magister', 'Ilmu Ekonomi', 'Terakreditasi BAIK SEKALI', '4/18/2023', '4/18/2028', '1499/SK/BAN-PT/Ak.Ppj/M/IV/2023', '0000-00-00', '1533', 'LAMEMBA'),
(31, 'FEB', 'Magister', 'Jurusan Akuntansi', 'Tidak Terakreditasi', '', '', '', '0000-00-00', '-45328', 'LAMEMBA'),
(32, 'FK', 'Profesi', 'Pendidikan Profesi Ners', 'Terakreditasi BAIK', '10/1/2023', '10/26/2028', '0764/LAM-PTKes/Akr/Pro/X/2023', '0000-00-00', '1724', 'LAMPTKES'),
(33, 'FF', 'Profesi', 'Pendidikan Profesi Apoteker', 'Terakreditasi B', '12/28/2019', '12/28/2024', '0737/LAM-PTKes/Akr/Pro/XII/2019	', '0000-00-00', '326', 'LAMPTKES'),
(34, 'FKIP', 'Profesi', 'Pendidikan Profesi Guru', 'Terakreditasi B', '3/24/2021', '3/24/2026', '1651/SK/BAN-PT/Akred/PP/III/2021', '0000-00-00', '777', 'LAMDIK'),
(35, 'FK', 'Profesi', 'Profesi Dokter', 'Terakreditasi BAIK SEKALI', '8/11/2022', '8/11/2027', '0639/LAM-PTKes/Akr/Pro/VIII/2023', '0000-00-00', '1282', 'LAMPTKES'),
(36, 'FP', 'Sarjana', 'Proteksi Tanaman', 'Terakreditasi B', '2/19/2019', '2/19/2024', '	140/SK/BAN-PT/Akred/S/II/2019', '0000-00-00', '13', 'BAN PT'),
(37, 'FP', 'Sarjana', 'Ilmu Tanah', 'Terakreditasi B', '3/5/2019', '3/5/2024', '	266/SK/BAN-PT/Akred/S/III/2019', '0000-00-00', '28', 'BAN PT'),
(38, 'FISIP', 'Sarjana', 'Ilmu Komunikasi', 'Terakreditasi A', '3/26/2019', '3/26/2024', '	497/SK/BAN-PT/Akred/S/III/2019', '0000-00-00', '49', 'BAN PT'),
(39, 'FISIP', 'Sarjana', 'Sosiologi', 'Terakreditasi A', '4/9/2019', '4/9/2024', '693/SK/BAN-PT/Akred/S/IV/2019	', '0000-00-00', '63', 'BAN PT'),
(40, 'FP', 'Sarjana', 'Penyuluhan Pertanian', 'Terakreditasi B', '4/9/2019', '4/9/2024', '	772/SK/BAN-PT/Akred/S/IV/2019', '0000-00-00', '63', 'BAN PT'),
(41, 'FISIP', 'Sarjana', 'Ilmu Politik', 'Terakreditasi B', '5/21/2019', '5/21/2024', '1626/SK/BAN-PT/Akred/S/V/2019', '0000-00-00', '105', 'BAN PT'),
(42, 'FPIK', 'Sarjana', 'Budidaya Perairan', 'Terakreditasi A', '5/31/2023', '5/31/2024', '2409/SK/BAN-PT/Ak.PEPS/S/VI/2023', '0000-00-00', '115', 'BAN PT'),
(43, 'FKIP', 'Sarjana', 'Psikologi', 'Terakreditasi BAIK', '7/30/2019', '7/30/2024', '7479/SK/BAN-PT/Ak.KP/S/X/2022', '0000-00-00', '175', 'BAN PT'),
(44, 'FMIPA', 'Sarjana', 'Oseanografi', 'Terakreditasi B', '8/27/2019', '8/27/2024', '3231/SK/BAN-PT/Akred/S/VIII/2019	', '0000-00-00', '203', 'BAN PT'),
(45, 'FPIK', 'Sarjana', 'Perikanan Tangkap', 'Terakreditasi B', '9/3/2019', '9/3/2024', '3329/SK/BAN-PT/Akred/S/IX/2019	', '0000-00-00', '210', 'BAN PT'),
(46, 'FIB', 'Sarjana', 'Sastra Indonesia', 'Terakreditasi B', '4/11/2020', '4/11/2025', '4428/SK/BAN-PT/Ak-PPJ/S/VIII/2020', '0000-00-00', '430', 'BAN PT'),
(47, 'FISIP', 'Sarjana', 'Ilmu Pemerintahan', 'Terakreditasi BAIK', '7/21/2020', '7/21/2025', '6188/SK/BAN-PT/Ak.KP/S/IX/2022', '0000-00-00', '531', 'BAN PT'),
(48, 'FPIK', 'Sarjana', 'Teknologi Hasil Perikanan', 'Terakreditasi BAIK SEKALI', '10/1/2023', '8/16/2025', '3927/SK/BAN-PT/Ak.KP/S/X/2023', '0000-00-00', '557', 'BAN PT'),
(49, 'FIB', 'Sarjana', 'Ilmu Sejarah', 'Terakreditasi BAIK SEKALI', '9/8/2023', '9/8/2025', ' 3852/SK/BAN-PT/Ak.KP/S/IX/2023', '0000-00-00', '580', 'BAN PT'),
(50, 'FHIL', 'Sarjana', 'Ilmu Lingkungan', 'Terakreditasi BAIK SEKALI', '9/9/2020', '9/9/2025', '2883/SK/BAN-PT/AK-ISK/S/V/2022', '0000-00-00', '581', 'BAN PT'),
(51, 'FIB', 'Sarjana', 'Tradisi Lisan', 'Terakreditasi A', '9/23/2020', '9/23/2025', '5939/SK/BAN-PT/Akred/S/IX/2020	', '0000-00-00', '595', 'BAN PT'),
(52, 'FISIP', 'Sarjana', 'Ilmu Kesejahteraan Sosial', 'Terakreditasi A', '10/13/2020', '10/13/2025', '	6403/SK/BAN-PT/Akred/S/X/2020', '0000-00-00', '615', 'BAN PT'),
(53, 'FIB', 'Sarjana', 'Sastra Inggris', 'Terakreditasi B', '11/3/2020', '11/3/2025', '	6977/SK/BAN-PT/Akred/S/XI/2020', '0000-00-00', '636', 'BAN PT'),
(54, 'FPIK', 'Sarjana', 'Ilmu Kelautan', 'Terakreditasi UNGGUL', '10/1/2023', '11/3/2025', '3930/SK/BAN-PT/Ak.KP/S/X/2023', '0000-00-00', '636', 'BAN PT'),
(55, 'FIB', 'Sarjana', 'Arkeologi', 'Terakreditasi A', '11/10/2020', '11/10/2025', '7156/SK/BAN-PT/Akred/S/XI/2020', '0000-00-00', '643', 'BAN PT'),
(56, 'FIB', 'Sarjana', 'Antropologi', 'Terakreditasi UNGGUL', '9/1/2023', '11/10/2025', '3853/SK/BAN-PT/Ak.KP/S/IX/2023', '0000-00-00', '643', 'BAN PT'),
(57, 'FH', 'Sarjana', 'Ilmu Hukum', 'Terakreditasi A', '11/17/2020', '11/17/2025', '7344/SK/BAN-PT/Akred/S/XI/2020', '0000-00-00', '650', 'BAN PT'),
(58, 'FIB', 'Sarjana', 'Sastra Prancis', 'Terakreditasi B', '5/18/2021', '11/19/2025', '3079/SK/BAN-PT/Akred/S/V/2021', '0000-00-00', '652', 'BAN PT'),
(59, 'FPIK', 'Sarjana', 'Agrobisnis Perikanan', 'Terakreditasi BAIK SEKALI', '12/15/2020', '12/15/2025', '8273/SK/BAN-PT/Akred/S/XII/2020', '0000-00-00', '678', 'BAN PT'),
(60, 'FP', 'Sarjana', 'Agribisnis', 'Terakreditasi UNGGUL', '5/21/2026', '5/21/2026', '2184/SK/BAN-PT/AK-ISK/S/IV/2022', '0000-00-00', '835', 'BAN PT'),
(61, 'FP', 'Sarjana', 'Agroteknologi', 'Terakreditasi UNGGUL', '5/21/2022', '5/21/2026', '2239/SK/BAN-PT/AK-ISK/S/IV/2022', '0000-00-00', '835', 'BAN PT'),
(62, 'FISIP', 'Sarjana', 'Perpustakaan dan Ilmu Informasi', 'Terakreditasi BAIK', '7/13/2021', '7/13/2026', '9438/SK/BAN-PT/Akred/S/VII/2021	', '0000-00-00', '888', 'BAN PT'),
(63, 'FISIP', 'Sarjana', 'Jurnalistik', 'Terakreditasi BAIK SEKALI', '8/31/2021', '8/31/2026', '10450/SK/BAN-PT/Akred/S/VIII/2021	', '0000-00-00', '937', 'BAN PT'),
(64, 'FPIK', 'Sarjana', 'Manajemen Sumber Daya Perairan', 'Terakreditasi UNGGUL', '10/1/2023', '12/28/2026', '3924/SK/BAN-PT/Ak.KP/S/X/2023', '0000-00-00', '1056', 'BAN PT'),
(65, 'FT', 'Sarjana', 'Arsitektur', 'Terakreditasi B', '8/16/2022', '8/16/2027', '189/SK/BAN-PT/Ak.Ppj/S/I/2023', '0000-00-00', '1287', 'BAN PT'),
(66, 'FISIP', 'Sarjana', 'Ilmu Administrasi Negara', 'Terakreditasi BAIK SEKALI', '2/27/2023', '2/27/2028', '654/SK/BAN-PT/Ak/S/II/2023', '0000-00-00', '1482', 'BAN PT'),
(67, 'FP', 'Sarjana', 'Teknologi Pangan', 'Terakreditasi BAIK SEKALI', '7/4/2023', '7/4/2028', '2593/SK/BAN-PT/Ak/S/VII/2023', '0000-00-00', '1610', 'BAN PT'),
(68, 'FHIL', 'Sarjana', 'Kehutanan', 'Tidak Terakreditasi', '', '', '', '0000-00-00', '-45328', 'BAN PT'),
(69, 'FPt', 'Sarjana', 'Peternakan', 'Tidak Terakreditasi', '', '', '', '0000-00-00', '-45328', 'BAN PT'),
(70, 'FMIPA', 'Sarjana', 'Ilmu Komputer', 'Terakreditasi BAIK', '7/30/2019', '7/30/2024', '7280/SK/BAN-PT/Ak.KP/S/X/2022', '0000-00-00', '175', 'LAM INFOKOM'),
(71, 'FKESMAS', 'Sarjana', 'Kesehatan Masyarakat', 'Terakreditasi B', '3/22/2019', '3/22/2024', '0150/LAM-PTKes/Akr/Sar/III/2019', '0000-00-00', '45', 'LAMPTKES'),
(72, 'FKIP', 'Sarjana', 'Pendidikan Akuntansi', 'Terakreditasi BAIK', '4/9/2019', '4/9/2024', '7440/SK/BAN-PT/Ak.KP/S/X/2022', '0000-00-00', '63', 'LAMDIK'),
(73, 'FMIPA', 'Sarjana', 'Bioteknologi', 'Terakreditasi B', '7/16/2019', '7/16/2024', '2435/SK/BAN-PT/Akred/S/VII/2019	', '0000-00-00', '161', 'Lebih dari 1 LAM'),
(74, 'FMIPA', 'Sarjana', 'Statistika', 'Terakreditasi B', '7/30/2019', '7/30/2024', '2744/SK/BAN-PT/Akred/S/VII/2019', '0000-00-00', '175', 'LAMSAMA'),
(75, 'FKIP', 'Sarjana', 'Pendidikan Fisika', 'Terakreditasi BAIK SEKALI', '-', '8/6/2024', '	2607/SK/BAN-PT/AK-ISK/S/IV/2022', '0000-00-00', '182', 'LAMDIK'),
(76, 'FKIP', 'Sarjana', 'Pendidikan Bahasa dan Sastra Indonesia', 'Terakreditasi B', '8/7/2019', '8/7/2024', '2952/SK/BAN-PT/Akred/S/VIII/2019', '0000-00-00', '183', 'LAMDIK'),
(77, 'FKIP', 'Sarjana', 'Pendidikan Bahasa Inggris', 'Terakreditasi B', '10/22/2019', '10/22/2024', '3989/SK/BAN-PT/Akred/S/X/2019', '0000-00-00', '259', 'LAMDIK'),
(78, 'FMIPA', 'Sarjana', 'Geografi', 'Terakreditasi B', '4/7/2020', '4/7/2025', '2351/SK/BAN-PT/Ak-PPJ/S/IV/2020	', '0000-00-00', '426', 'LAMSAMA'),
(79, 'FMIPA', 'Sarjana', 'Matematika', 'Terakreditasi A', '5/5/2020', '5/5/2025', '	2855/SK/BAN-PT/Ak-PPJ/S/V/2020', '0000-00-00', '454', 'LAMSAMA'),
(80, 'FMIPA', 'Sarjana', 'Teknik Pertambangan', 'Terakreditasi BAIK', '5/10/2020', '5/10/2025', '9886/SK/BAN-PT/Ak.KP/S/XI/2022', '0000-00-00', '459', 'LAM TEKNIK'),
(81, 'FKIP', 'Sarjana', 'Pendidikan Geografi', 'Terakreditasi BAIK SEKALI', '5/31/2020', '5/31/2025', '2900/SK/BAN-PT/AK-ISK/S/V/2022', '0000-00-00', '480', 'LAMDIK'),
(82, 'FMIPA', 'Sarjana', 'Teknik Geofisika', 'Terakreditasi B', '7/25/2020', '7/25/2025', '4301/SK/BAN-PT/Ak-PPJ/S/VII/2020', '0000-00-00', '535', 'LAM TEKNIK'),
(83, 'FKIP', 'Sarjana', 'Pendidikan Pancasila dan Kewarganegaraan', 'Terakreditasi B', '8/16/2020', '8/16/2025', '4724/SK/BAN-PT/Ak-PPJ/S/VIII/2020', '0000-00-00', '557', 'LAMDIK'),
(84, 'FT', 'Sarjana', 'Teknik Rekayasa Infrastruktur dan Lingkungan', 'Terakreditasi B', '8/25/2020', '8/25/2025', '4892/SK/BAN-PT/Akred/S/VIII/2020', '0000-00-00', '566', 'LAM TEKNIK'),
(85, 'FT', 'Sarjana', 'Teknik Kelautan', 'Terakreditasi B', '9/1/2020', '9/1/2025', '5112/SK/BAN-PT/Akred/S/IX/2020', '0000-00-00', '573', 'LAM TEKNIK'),
(86, 'FKIP', 'Sarjana', 'Pendidikan Biologi', 'Terakreditasi UNGGUL', '9/9/2022', '9/9/2025', '2589/SK/BAN-PT/AK-ISK/S/IV/2022', '0000-00-00', '581', 'LAMDIK'),
(87, 'FKIP', 'Sarjana', 'Bimbingan dan Konseling', 'Terakreditasi B', '9/30/2020', '9/30/2025', '6128/SK/BAN-PT/Akred/S/IX/2020', '0000-00-00', '602', 'LAMDIK'),
(88, 'FEB', 'Sarjana', 'Manajemen', 'Terakreditasi UNGGUL', '11/1/2020', '11/1/2025', '11896/SK/BAN-PT/AK-ISK/S/X/2021	', '0000-00-00', '634', 'LAMEMBA'),
(89, 'FKIP', 'Sarjana', 'Pendidikan Matematika', 'Terakreditasi UNGGUL', '11/8/2022', '11/8/2025', '2878/SK/BAN-PT/AK-ISK/S/V/2022', '0000-00-00', '641', 'LAMDIK'),
(90, 'FKIP', 'Sarjana', 'Pendidikan Kimia', 'Terakreditasi BAIK SEKALI', '2/16/2022', '2/16/2026', '2601/SK/BAN-PT/AK-ISK/S/IV/2022', '0000-00-00', '741', 'LAMDIK'),
(91, 'FKIP', 'Sarjana', 'Pendidikan Ekonomi', 'Terakreditasi BAIK SEKALI', '3/2/2021', '3/2/2026', '1132/SK/BAN-PT/Akred/S/III/2021', '0000-00-00', '755', 'LAMDIK'),
(92, 'FKIP', 'Sarjana', 'Ilmu Keolahragaan', 'Terakreditasi BAIK', '3/16/2021', '3/16/2026', '1483/SK/BAN-PT/Akred/S/III/2021	', '0000-00-00', '769', 'LAMDIK'),
(93, 'FKIP', 'Sarjana', 'Pendidikan Sejarah', 'Terakreditasi B', '3/18/2021', '3/18/2026', '	1585/SK/BAN-PT/Ak-PPJ/S/III/2021', '0000-00-00', '771', 'LAMDIK'),
(94, 'FKIP', 'Sarjana', 'Pendidikan Jasmani; Kesehatan dan Rekreasi', 'Terakreditasi BAIK', '3/23/2021', '3/23/2026', '	1602/SK/BAN-PT/Akred/S/III/2021', '0000-00-00', '776', 'LAMDIK'),
(95, 'FMIPA', 'Sarjana', 'Teknik Geologi', 'Terakreditasi BAIK', '7/21/2021', '7/21/2026', '9638/SK/BAN-PT/Akred/S/VII/2021	', '0000-00-00', '896', 'LAM TEKNIK'),
(96, 'FISIP', 'Sarjana', 'Administrasi Bisnis', 'Terakreditasi B', '12/28/2022', '12/28/2026', '	564/SK/BAN-PT/Ak-PPJ/S/I/2022', '0000-00-00', '1056', 'LAMEMBA'),
(97, 'FF', 'Sarjana', 'Farmasi', 'Terakreditasi BAIK SEKALI', '12/29/2022', '12/29/2026', ' 0961/LAM-PTKes/Akr/Sar/XI/2022', '0000-00-00', '1057', 'LAMPTKES'),
(98, 'FK', 'Sarjana', 'Kedokteran', 'Terakreditasi BAIK SEKALI', '8/11/2022', '8/11/2027', '0638/LAM-PTKes/Akr/Sar/VIII/2022', '0000-00-00', '1282', 'LAMPTKES'),
(99, 'FT', 'Sarjana', 'Teknik Mesin', 'Terakreditasi BAIK SEKALI', '8/21/2022', '8/20/2027', '0018/SK/LAM Teknik/AS/VIII/2022', '0000-00-00', '1291', 'LAM TEKNIK'),
(100, 'FT', 'Sarjana', 'Teknik Elektro', 'Terakreditasi UNGGUL', '4/21/2023', '8/20/2027', '0003/SK/LAM Teknik/AS/IV/2023', '0000-00-00', '1291', 'LAM TEKNIK'),
(101, 'FMIPA', 'Sarjana', 'Fisika', 'Terakreditasi UNGGUL', '12/13/2022', '12/13/2027', '017/SK/LAMSAMA/Akred/S/XII/2022', '0000-00-00', '1406', 'LAMSAMA'),
(102, 'FT', 'Sarjana', 'Teknik Informatika', 'Terakreditasi BAIK SEKALI', '12/15/2022', '12/15/2027', '090/SK/LAM-INFOKOM/Ak/S/XII/2022', '0000-00-00', '1408', 'LAM INFOKOM'),
(103, 'FKESMAS', 'Sarjana', 'Gizi', 'Terakreditasi BAIK', '12/16/2022', '12/16/2027', '1078/LAM-PTKes/Sar/XII/2022', '0000-00-00', '1409', 'LAMPTKES'),
(104, 'FT', 'Sarjana', 'Teknik Sipil', 'Terakreditasi UNGGUL', '12/21/2022', '12/20/2027', '0254/SK/LAM Teknik/AS/XII/2022', '0000-00-00', '1413', 'LAM TEKNIK'),
(105, 'FEB', 'Sarjana', 'Akuntansi', 'Terakreditasi BAIK SEKALI', '12/22/2022', '12/22/2027', ' 088/DE/A.5/AR.10/XII/2022', '0000-00-00', '1415', 'LAMEMBA'),
(106, 'FMIPA', 'Sarjana', 'Biologi', 'Terakreditasi BAIK SEKALI', '2/16/2023', '2/16/2028', '001/SK/LAMSAMA/Akred/S/II/2023', '0000-00-00', '1471', 'LAMSAMA'),
(107, 'FEB', 'Sarjana', 'Ekonomi Pembangunan', 'Terakreditasi UNGGUL', '2/26/2023', '2/26/2028', '216/DE/A.5/AR.10/II/2023', '0000-00-00', '1481', 'LAMEMBA'),
(108, 'FMIPA', 'Sarjana', 'Kimia', 'Terakreditasi UNGGUL', '4/17/2023', '4/17/2028', '023/SK/LAMSAMA/Akred/S/IV/2023', '0000-00-00', '1532', 'LAMSAMA'),
(109, 'FKIP', 'Sarjana', 'Pendidikan Guru Sekolah Dasar', 'Terakreditasi BAIK SEKALI', '7/17/2023', '7/17/2028', '754/SK/LAMDIK/Ak/S/VII/2023', '0000-00-00', '1623', 'LAMDIK'),
(110, 'FKIP', 'Sarjana', 'Pendidikan Guru Pendidikan Anak Usia Dini', 'Terakreditasi BAIK SEKALI', '7/18/2023', '7/18/2028', '754/SK/LAMDIK/Ak/S/VVII/2023', '0000-00-00', '1624', 'LAMDIK'),
(111, 'FK', 'Sarjana', 'Keperawatan', 'Terakreditasi BAIK', '10/1/2023', '10/26/2028', '0763/LAM-PTKes/Akr/Sar/X/2023', '0000-00-00', '1724', 'LAMPTKES'),
(112, 'FKIP', 'Sarjana', 'Pendidikan Vokasional Teknik', 'Tidak Terakreditasi', '', '', '', '0000-00-00', '-45328', 'LAMDIK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_ps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
