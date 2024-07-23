-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2024 pada 06.36
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
-- Struktur dari tabel `akreditasi_eksternal`
--

CREATE TABLE `akreditasi_eksternal` (
  `id` int(11) NOT NULL,
  `lembaga` varchar(245) NOT NULL,
  `jenis_sertifikat` varchar(245) NOT NULL,
  `lingkup` varchar(245) NOT NULL,
  `tingkat` varchar(245) NOT NULL,
  `masa_berlaku` varchar(200) NOT NULL,
  `keterangan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akreditasi_eksternal`
--

INSERT INTO `akreditasi_eksternal` (`id`, `lembaga`, `jenis_sertifikat`, `lingkup`, `tingkat`, `masa_berlaku`, `keterangan`) VALUES
(1, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'PT/ Fakultas', 'Internasional', '1 Juni 2025', 'Manajemen Fakultas Pertanian'),
(2, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Agribisnis'),
(3, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Agroteknologi'),
(4, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Ilmu Tanah'),
(5, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Proteksi Tanaman'),
(6, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Penyuluhan Pertanian'),
(7, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No: QMS.06.22.144)', 'Unit', 'Internasional', '1 Juni 2025', 'Fakultas Pertanian: Desain dan pengembangan kurikulum serta layanan sekunder Jurusan/PS Ilmu dan Teknologi'),
(8, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Agribisnis'),
(9, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Agribisnis'),
(10, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Agroteknologi'),
(11, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Agroteknologi'),
(12, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Ilmu Tanah'),
(13, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Jurusan/PS Ilmu Tanah'),
(14, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Proteksi Tanaman.'),
(15, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Proteksi Tanaman'),
(16, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Penyuluhan Pertanian'),
(17, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Penyuluhan Pertanian'),
(18, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Jurusan/PS Ilmu dan Teknologi Pangan'),
(19, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik dan akademik pada Laboratorium Jurusan/PS Ilmu dan Teknologi Pangan'),
(20, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 21001:2018 (No: SMOP.06.22.103)', 'Unit', 'Internasional', '1 Juni 2025', 'Seluruh proses non akademik pada Unit Jaminan Mutu dan Sistem Informasi'),
(21, 'Komite Akreditasi Nasional (KAN) - PT. Global Certification Indonesua (GCI Internasional)', 'ISO 9001:2015 (No: Q2210895)', 'PT/ Fakultas', 'Internasional', '30 Januari 2026', 'Kualitas Sistem Manajemen FMIPA, pada scope Pelayanan Administrasi Akademik'),
(22, 'Komite Akreditasi Nasional (KAN) - Sucofindo Internasional', 'ISO 21000:2018 (No: EOMS 00004)', 'Unit', 'Internasional', '30 Januari 2026', 'PS. Ilmu Kelautan FPIK, pada scope: 1). Pendidikan dan Pengajaran, 2). Penelitian & Pengabdian'),
(23, 'Komite Akreditasi Nasional (KAN) - Sucifindo International', 'ISO 9001:2015 (No. QSC 01542)', 'Unit', 'Internasional', '30 Maret 2023', 'Layanan pendidikan dan pengajaran program S1 pada Prodi MSP, BDP Manajemen fakultas Teknik'),
(24, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Manajemen fakultas Teknik'),
(25, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Sipil'),
(26, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Arsitektur'),
(27, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Mesin'),
(28, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Elektro'),
(29, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Informatika'),
(30, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Rekayasa Infrastruktur Lingkungan (RIL)'),
(31, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 02.23.153)', 'PT/ Fakultas', 'Internasional', '1 Februari 2026', 'Desain dan pengembangan kurikulum serta layanan sekunder pada Jurusan/PS Teknik Kelautan'),
(32, 'Komite Akreditasi Nasional (KAN) - Sakti Indonesia Sertifikasi', 'ISO 9001:2015 (No. QMS 09.22.148)', 'Unit', 'Internasional', '29-Sep-25', 'Manajemen SPI, pada scope: 1). Audit services (operational and audit objectives certain), 2). Review services (financial reports work plans and budgets. 3) monitoring services (follow up on audit results). 4). Other supervision services');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasi_internasional`
--

CREATE TABLE `akreditasi_internasional` (
  `id` int(11) NOT NULL,
  `lembaga_akrint` varchar(245) NOT NULL,
  `program_studi` varchar(245) NOT NULL,
  `status` varchar(245) NOT NULL,
  `masa_berlaku` varchar(245) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akreditasi_internasional`
--

INSERT INTO `akreditasi_internasional` (`id`, `lembaga_akrint`, `program_studi`, `status`, `masa_berlaku`, `keterangan`) VALUES
(4, 'wddddw', 'Sastra Mesin', 'aktif', '223222', 'fgf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `audit_keuangan_eks`
--

CREATE TABLE `audit_keuangan_eks` (
  `id` int(11) NOT NULL,
  `lembaga_audit` varchar(245) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `opini` varchar(245) NOT NULL,
  `keterangan` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `audit_keuangan_eks`
--

INSERT INTO `audit_keuangan_eks` (`id`, `lembaga_audit`, `tahun`, `opini`, `keterangan`) VALUES
(1, 'KAP S. Mannan, Ardiansyah & Rekan', '2020', 'WTP (Wajar Tanpa Pengecualian)', 'Laporan Auditor Independen. No: 00022/3.0382/AU.1/11/1585/1/X/2020. Tanggal 19 Oktober 2020'),
(2, 'KAP S. Mannan, Ardiansyah & Rekan', '2021', 'WTP (Wajar Tanpa Pengecualian)', 'Laporan Audit Independen Nomor : 00035/3.0382/AU.1/11/1585/IV/2021. Tanggal: 12 April 2021'),
(3, 'KAP S. Mannan, Ardiansyah & Rekan', '2022', 'WTP (Wajar Tanpa Pengecualian)', 'Laporan Audit Independen Nomor : 00035/3.0382/AU.1/11/1585-3/III/2022. Tanggal 1 Maret 2022'),
(4, 'KAP Annas Cahyadi', '2023', 'WTP (Wajar Tanpa Pengecualian)', 'Laporan Audit Independen Nomor : 00017/2.1034/AU.5/11/1162/III/2023. Tanggal 7 Maret 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_login`
--

CREATE TABLE `auth_login` (
  `id` int(11) NOT NULL,
  `username` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_login`
--

INSERT INTO `auth_login` (`id`, `username`, `password`) VALUES
(2, 'kplppmp2024', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bebankerja_dosen`
--

CREATE TABLE `bebankerja_dosen` (
  `id` int(11) NOT NULL,
  `unit_pengelola` varchar(245) NOT NULL,
  `jumlah_dosen` int(11) NOT NULL,
  `jumlah_mahasiswa` float NOT NULL,
  `jumlah_mahasiswata` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bebankerja_dosen`
--

INSERT INTO `bebankerja_dosen` (`id`, `unit_pengelola`, `jumlah_dosen`, `jumlah_mahasiswa`, `jumlah_mahasiswata`) VALUES
(1, 'Fakultas Keguruan dan Ilmu Pendidikan', 270, 7.189, 1.552),
(2, 'Fakultas Pertanian', 129, 2.256, 228),
(3, 'Fakultas Ekonomi dan Bisnis', 91, 4.047, 1.084),
(4, 'Fakultas Ilmu Sosial dan Ilmu Politik', 138, 5.582, 984),
(5, 'Fakultas Matematika dan ilmu Pengetahuan Alam', 163, 4, 537),
(6, 'Fakultas Perikanan dan Ilmu Kelautan', 78, 1, 34),
(7, 'Fakultas Teknik', 139, 3, 459),
(8, 'Fakultas Hukum', 57, 2, 546),
(9, 'Fakultas Kedokteran ', 48, 554, 44),
(10, 'Fakultas Peternakan', 41, 831, 8),
(11, 'Fakultas Farmasi', 40, 1, 158),
(12, 'Fakultas Imu Budaya', 119, 2, 663),
(13, 'Fakultas Kehutanan dan Ilmu Lingkungan', 45, 907, 6),
(14, 'Fakultas Kesehatan Masyarakat', 54, 2, 401),
(15, 'Pascasarjana', 89, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecukupan_dosen`
--

CREATE TABLE `kecukupan_dosen` (
  `id` int(11) NOT NULL,
  `unit_pengelola` varchar(245) NOT NULL,
  `doktor` int(11) NOT NULL,
  `magister` int(11) NOT NULL,
  `profesi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecukupan_dosen`
--

INSERT INTO `kecukupan_dosen` (`id`, `unit_pengelola`, `doktor`, `magister`, `profesi`, `jumlah`) VALUES
(1, 'Fakultas Keguruan dan Ilmu Pendidikan', 91, 179, 0, 270),
(2, 'Fakultas Pertanian', 58, 71, 0, 129),
(3, 'Fakultas Ekonomi dan Bisnis', 48, 43, 0, 91),
(4, 'Fakultas Ilmu Sosial dan Ilmu Politik', 38, 100, 0, 138),
(5, 'Fakultas Matematika dan ilmu Pengetahuan Alam', 68, 95, 0, 163),
(6, 'Fakultas Perikanan dan Ilmu Kelautan', 35, 43, 0, 78),
(7, 'Fakultas Teknik', 34, 105, 0, 139),
(8, 'Fakultas Hukum', 22, 35, 0, 57),
(9, 'Fakultas Kedokteran', 6, 42, 0, 48),
(10, 'Fakultas Peternakan', 14, 27, 0, 41),
(11, 'Fakultas Farmasi', 7, 33, 0, 40),
(12, 'Fakultas Imu Budaya', 20, 99, 0, 119),
(13, 'Fakultas Kehutanan dan Ilmu Lingkungan', 21, 24, 0, 45),
(14, 'Fakultas Kesehatan Masyarakat', 13, 41, 0, 54),
(15, 'Pascasarjana', 89, 0, 0, 89);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama_peneltian`
--

CREATE TABLE `kerjasama_peneltian` (
  `id` int(11) NOT NULL,
  `lembaga_mitra` varchar(245) NOT NULL,
  `bentuk_kegiatan` varchar(245) NOT NULL,
  `bukti_kerjasama` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerjasama_peneltian`
--

INSERT INTO `kerjasama_peneltian` (`id`, `lembaga_mitra`, `bentuk_kegiatan`, `bukti_kerjasama`) VALUES
(1, 'Research Institute for Humanity and Nature (RIHN-JAPAN)', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(2, 'Fuji Laboratory, Faculty of environmental earth science,Hokaido University and the Department of Marine Science, Halu Oleo Univeristy', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(3, 'Center for International forestry Research (CIFOR)', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(4, 'Fluid Dynamics Laboratory - Kanazawa University JAPAN', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(5, 'Research Center for Development of Far-Infrared Region, Fukui University', 'Join-research, Visiting Professor', 'https://bit.ly/dokmn-kerjasama'),
(6, 'Center for International Forestry Research (CIFOR)', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(7, 'Southeast Asian Regional Centre For Graduate Study And Research In Agriculture (Searca)', 'Join-research', 'https://bit.ly/dokmn-kerjasama'),
(8, 'Climate Foundation, Wood Hole, MA', 'Join-research', 'https://bit.ly/dokmn-kerjasama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama_pm`
--

CREATE TABLE `kerjasama_pm` (
  `id` int(11) NOT NULL,
  `lembaga` varchar(245) NOT NULL,
  `bentuk_kegiatan` varchar(245) NOT NULL,
  `bukti_kerjasama` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerjasama_pm`
--

INSERT INTO `kerjasama_pm` (`id`, `lembaga`, `bentuk_kegiatan`, `bukti_kerjasama`) VALUES
(1, 'Global Network Awarness, New York', 'Kerjasama pada pelatihan kewirausahaan yang diikuti oleh mahasiswa Pend. Bhs. Inggris FKIP UHO dengan mentor/narasumber dari pihak GEA New York USA, dilaksanakan sejak tahun 2022 hingga sekarang secara online, 1 kali dalam 1 semester', 'https://bit.ly/dokmn-kerjasama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama_pt`
--

CREATE TABLE `kerjasama_pt` (
  `id` int(11) NOT NULL,
  `lembaga_mitra` varchar(245) NOT NULL,
  `internasional` varchar(245) NOT NULL,
  `nasional` varchar(245) NOT NULL,
  `lokal` varchar(245) NOT NULL,
  `bentuk_kegiatan` varchar(245) NOT NULL,
  `bukti_kerjasama` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerjasama_pt`
--

INSERT INTO `kerjasama_pt` (`id`, `lembaga_mitra`, `internasional`, `nasional`, `lokal`, `bentuk_kegiatan`, `bukti_kerjasama`) VALUES
(1, 'The Flemish interuniversity Council (VLIR) ? KU Leuven Belgia', '1', '', '', 'Traning of Trainer', 'https://bit.ly/dokmn-kerjasama'),
(2, 'Institut Francais d\' Indonesia (IFI)', '1', '', '', 'Student/Staff Exchange', 'https://bit.ly/dokmn-kerjasama'),
(3, 'Universit? Lyon 2 Perancis', '', '1', '', 'Student/Staff Exchange', 'https://bit.ly/dokmn-kerjasama'),
(4, 'Fukui University', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(5, 'Yorozu corporation', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(6, 'Y-TEC CORPORATION', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(7, 'Daihatsu Motor Kyushu, Co.,Ltd', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(8, 'Yashiro kogyo', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(9, 'Yamaguchi Industry.co., ltd', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(10, 'FORCE ONE Co., Ltd', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(11, 'Showa kinzhoku', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(12, 'ICG', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(13, 'LOGICOM', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(14, 'TRUST INTERGRATOR', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(15, 'IWAKURA SEISHAKUSHO', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(16, 'NAGATO', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(17, 'SUGIHARA', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(18, 'TAKAYA KASEI', '', '', '0', 'Internship Mahasiswa', 'https://bit.ly/dokmn-kerjasama'),
(19, 'INTI INTERNATIONAL EDUCATION SDN BHD Malaysia', '', '', '0', 'Student Mobility', 'https://bit.ly/dokmn-kerjasama'),
(20, 'Faculty of Agriculture University of Miyazaki, Japan', '', '', '0', 'student exchange', 'https://bit.ly/dokmn-kerjasama'),
(21, 'SEAFDEC/IFRDMD-Indonesia', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(22, 'Australian National University', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(23, 'Tropical Biosphere Research Center, University of the Ryukyus', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(24, 'Universite de La Rochelle, France', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(25, 'Universitas Dian Nuswantoro', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(26, 'Universitas Khairun', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(27, 'Universitas Malikussaleh', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(28, 'Universitas Negeri Jakarta', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(29, 'Universitas Negeri Medan', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(30, 'Universitas Negeri Padang', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(31, 'Universitas Padjadjaran', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(32, 'Universitas Sriwijaya', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(33, 'Universitas Sultan Ageng TIrtayasa', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(34, 'Universitas Sumatera Utara', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(35, 'Universitas Brawijaya', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(36, 'Universitas Dian Nuswantoro', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(37, 'Universitas Diponegoro', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(38, 'Universitas Gadjah Mada', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(39, 'Universitas Indonesia', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(40, 'Universitas Jember', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(41, 'Universitas Negeri Jakarta', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(42, 'Universitas Negeri Malang', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(43, 'Universitas Padjadjaran', '', '', '0', 'MBKM', 'https://bit.ly/dokmn-kerjasama'),
(44, 'Universitas Hasanuddin', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(45, 'Bank Indonesia', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(46, 'PT JAPFA COMFEED INDONESIA Tbk', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(47, 'Kominfo RI', '', '', '0', 'Program Digital Talent Scholarship - FT', 'https://bit.ly/dokmn-kerjasama'),
(48, 'Universitas Terbuka', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(49, 'BPJS Kesehatan', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(50, 'PT Bank Syariah Indonesia', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(51, 'Tbk', '', '', '0', '', ''),
(52, 'PT Care Indonesia Solusi', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(53, 'PT Hashmicro Solusi', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(54, 'Indonesia', '', '', '0', '', ''),
(55, 'PT Industri Kereta Api', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(56, '(Persero)', '', '', '0', '', ''),
(57, 'PT Lentera Bumi Nusantara', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(58, 'PT Media Kreasi Abadi', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(59, 'PT Midi Utama Indonesia', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(60, 'Tbk', '', '', '0', '', ''),
(61, 'PT Petik Emas Consulting', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(62, 'PT Qatros Teknologi', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(63, 'Nusantara', '', '', '0', '', ''),
(64, 'PT Shippindo Teknologi', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(65, 'Logistik', '', '', '0', '', ''),
(66, 'PT Stechoq Robotika', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(67, 'Indonesia', '', '', '0', '', ''),
(68, 'PT Unicam Digital Pictvres', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(69, 'PT United Tractors Tbk', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(70, 'Yayasan Bakrie Center', '', '', '0', 'Magang', 'https://bit.ly/dokmn-kerjasama'),
(71, '', '', '', '0', '', ''),
(72, '', '', '', '0', '', 'Bukti Kerjasama'),
(73, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(74, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(75, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(76, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(77, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(78, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(79, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(80, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(81, '', '', '', '0', '', ''),
(82, '', '', '', '0', '', 'https://bit.ly/dokmn-kerjasama'),
(84, 'UHO', '1', '1', '1', 'sacas', 'https://drive.google.com/drive/folders/1OXS-y-Ao2aRALwjDDTuKjyZEfbjyk3VA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_asing`
--

CREATE TABLE `mhs_asing` (
  `id` int(11) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `nama_lengkap` varchar(245) NOT NULL,
  `gender` varchar(245) NOT NULL,
  `asal_universitas` varchar(245) NOT NULL,
  `negara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mhs_asing`
--

INSERT INTO `mhs_asing` (`id`, `batch`, `tahun_ajaran`, `nama_lengkap`, `gender`, `asal_universitas`, `negara`) VALUES
(1, '5th', '20172', 'Meryll Joyce Cayetano Cabinian', 'Perempuan', 'Central Luzon State University (CLSU)', 'Philippines'),
(2, '5th', '20172', 'Natthayakan Samart', 'Perempuan', 'Suan Sunandha Rajabhat University (SSRU)', 'Thailand'),
(3, '5th', '20172', 'Maytas Supangyut', 'Laki-Laki', 'Suan Sunandha Rajabhat University (SSRU)', 'Thailand'),
(4, '6th', '20181', 'Areerat Singhajutha', 'Perempuan', 'Phranakhon Si Ayutthaya Rajabhat University (ARU)', 'Thailand'),
(5, '6th', '20181', 'Natrumpai Hoysang', 'Perempuan', 'Phranakhon Si Ayutthaya Rajabhat University (ARU)', 'Thailand'),
(6, '6th', '20181', 'Suphannee Srinoy', 'Perempuan', 'Phranakhon Si Ayutthaya Rajabhat University (ARU)', 'Thailand'),
(7, '6th', '20181', 'Cherrie Mae Alaman Quinsay', 'Perempuan', 'Saint Mary?s University (SMU)', 'Philippines'),
(8, '6th', '20181', 'Shiera Mae Kimmayong Limangan', 'Perempuan', 'Saint Mary?s University (SMU)', 'Philippines'),
(9, '6th', '20181', 'Jefferyl Grospe Bagalayos', 'Laki-Laki', 'Saint Mary?s University (SMU)', 'Philippines'),
(10, '6th', '20181', 'Airalyn M. Orfiano', 'Perempuan', 'Mindoro State College of Agriculture and Technology (MinSCAT)', 'Philippines'),
(11, '7th', '20182', 'John Rey O. Pelila', 'Laki-Laki', 'Saint Louis University (SLU)', 'Philippines'),
(12, '7th', '20182', 'Jurell A. Ordanes', 'Perempuan', 'Saint Louis University (SLU)', 'Philippines'),
(13, '7th', '20182', 'Dominique Jeanne Claire J. Indon', 'Perempuan', 'Far Eastern University (FEU)', 'Philippines'),
(14, '7th', '20182', 'Rose Ann Danganan', 'Perempuan', 'Far Eastern University (FEU)', 'Philippines'),
(15, '7th', '20182', 'Allysia Mariefranz P. Rodriguez', 'Perempuan', 'Ateneo de Naga University (ADNU)', 'Philippines'),
(16, '8th', '20191', 'Apichaya Jantapoon', 'Perempuan', 'Chiang Rai Rajabhat University (CRRU)', 'Thailand'),
(17, '8th', '20191', 'Nootpraween Wanta', 'Perempuan', 'Chiang Rai Rajabhat University (CRRU)', 'Thailand'),
(18, '9th', '2023', 'Michaela Laurin Sydney June V. Bozar', 'Perempuan', 'Ateneo de Naga University (ADNU)', 'Philippines'),
(19, '9th', '2023', 'Ruth Marie A. Reyta', 'Perempuan', 'Ateneo de Naga University (ADNU)', 'Philippines'),
(20, '9th', '2023', 'Princess Ampie P. Bagaporo', 'Perempuan', 'Ateneo de Naga University (ADNU)', 'Philippines'),
(21, '9th', '2023', 'Beatriz Ivy S. Liban', 'Perempuan', 'Saint Mary?s University (SMU)', 'Philippines'),
(22, '9th', '2023', 'Gielliane Joy R. Guillermo', 'Perempuan', 'Saint Mary?s University (SMU)', 'Philippines'),
(23, '9th', '2023', 'Ian Krizell C. Zarate', 'Perempuan', 'Saint Mary?s University (SMU)', 'Philippines'),
(24, '9th', '2023', 'Jasmin Jayne N. Parallag', 'Perempuan', 'Saint Louis University (SLU)', 'Philippines'),
(25, '9th', '2023', 'Harold B. Balinhawang', 'Laki-Laki', 'Saint Louis University (SLU)', 'Philippines'),
(26, '9th', '2023', 'Reilly Raje C. Angeles', 'Perempuan', 'Far Eastern University (FEU)', 'Philippines'),
(27, '9th', '2023', 'Stephen Xian S. Habla', 'Laki-Laki', 'Far Eastern University (FEU)', 'Philippines');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelajaran_praktikum`
--

CREATE TABLE `pembelajaran_praktikum` (
  `id` int(11) NOT NULL,
  `prodi` varchar(245) NOT NULL,
  `teori` varchar(245) NOT NULL,
  `praktikum` varchar(245) NOT NULL,
  `praktik` varchar(245) NOT NULL,
  `praktik_lapangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_akademik`
--

CREATE TABLE `prestasi_akademik` (
  `id` int(11) NOT NULL,
  `nama` varchar(245) NOT NULL,
  `jenis_kelamin` varchar(245) NOT NULL,
  `nim` varchar(245) NOT NULL,
  `fakultas` varchar(245) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `waktu_kegiatan` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `tingkatan` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL,
  `dokumen_fisik` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi_akademik`
--

INSERT INTO `prestasi_akademik` (`id`, `nama`, `jenis_kelamin`, `nim`, `fakultas`, `nama_kegiatan`, `waktu_kegiatan`, `tempat`, `tingkatan`, `hasil`, `dokumen_fisik`) VALUES
(1, 'Idam Halik', 'L', 'F1B120008', '', 'Pemilihan Mahasiswa Berprestasi (PILMAPRES)', '9-10 Mei 2023', 'Fak. Kedokteran ', 'Regional', 'Juara I', ''),
(2, 'Idam Halik', 'L', 'F1B120008', '', 'Program Akademik dan Vokasi ', '', '', '', '', ''),
(3, 'Idam Halik', 'L', 'F1B120008', 'Teknik', 'Tingkat LLDIKTI Wilayah IX Tahun 2023', '', 'Univ. Muslim Indonesia', '', '', ''),
(4, 'Valentino Claus Parera', 'L', 'H1A121258', 'HUKUM', 'Kompetisi Surat Dakwaan Dies Natalis Ke-XI ', '2023', 'Univ. Islam Negeri Sunan Kalijaga', 'Nasional', 'Juara I', ''),
(5, 'Ananda Kamilah Lamima', 'P', 'H1A121279', 'HUKUM', 'Peran penting Perlindungan Hak Kekayaan ', '', 'Univ. Islam Negeri Sunan Kalijaga', 'Nasional', '', ''),
(6, 'Faradillah Dwi Cahyani', 'P', 'H1A122155', 'HUKUM', 'Intelektual Dlm meningkatkan Inovasi di Era?Globalisasi', '', 'Univ. Islam Negeri Sunan Kalijaga', 'Nasional', '', ''),
(7, 'Tiara Dian Nusantari', 'P', 'F1C121036', 'MIPA', 'Lomba Karya Tulis Ilmiah Maritim Nasional', '13-14 September 2023', 'Universitas Hasanuddin', 'Nasional', 'Juara III', ''),
(8, 'Eliya Dwi Arini', 'P', 'A1C120026', 'MIPA', 'Lomba Karya Tulis Ilmiah Maritim Nasional', '13-14 September 2023', 'Universitas Hasanuddin', 'Nasional', 'Juara III', ''),
(9, 'Alman Alifin', 'L', 'N1D220037', 'FIB', 'Lomba Orasi Ilmiah oleh Ikatan Lembaga Mahasiswa Ilmu Budaya dan Sastra Se-Indonesia (ILMIBSI)', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara IV', ''),
(10, 'Vivi Arlita', 'P', 'N1D120011', 'FIB', 'Lomba Orasi Ilmiah oleh Ikatan Lembaga Mahasiswa Ilmu Budaya dan Sastra Se-Indonesia (ILMIBSI)', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara II', ''),
(11, 'Febri Yani', 'P  ', 'N1D120065', 'FIB', 'Musikalisasi Puisi dalam rangka Festival Bulan Bahasa Universitas Jenderal Soedirman', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara II', ''),
(12, 'Hasrat', 'L', 'N1C120007', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara I', ''),
(13, 'Muhammad Ismi  ', 'L', 'N1C120058', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara I', ''),
(14, 'Rahman Daus', 'L', 'N1C121092', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara I', ''),
(15, 'Nur Falmin', 'P', 'N1D122036', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara III', ''),
(16, 'Sara Sari', 'P', 'N1D122101', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara III', ''),
(17, 'Dimas Ezy Yunus', 'L', 'N1D123002', 'FIB', 'Lomba Karya Tulis Ilmiah pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara III', ''),
(18, 'Yusuf Alfarizi', 'L', 'N1D222033', 'FIB', 'Lomba Cipta Puisi pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara III', ''),
(19, 'Harti Herman', 'P', 'N1C123002', 'FIB', 'Lomba Cipta Pantun pada Kompetisi Ilmiah, Seni,dan Budaya Tingkat Nasional dalam rangka Dies Natalis Ke-9 FIB UHO', '25-26 Oktober 2023', 'Universitas Halu Oleo Kendari', 'Nasional', 'Juara III', ''),
(20, 'Rizkita Nur Ainun ', '', '(O1A119121)', 'Farmasi', 'Kegiatan The 2nd Mandala Waluya International Conference on Pharmaceutical Science and Practice', '2 Februari 2023', 'Universitas Brawijaya', 'Internasional', 'The Best Oral Presenter', ''),
(21, 'MUH. HAKIM RIANTA', '', '', 'Hukum', 'Lomba Debat Hukum Integrity Scholarship II Tahun 2023', '2023', '', 'Nasional', 'Juara 1', ''),
(22, 'AUDINA AL AMIRA ABDIANSYAH', '', '', 'Hukum', 'Nasional Kompetisi Perancangan Undang-Undang pada Constitutisional Law Festival 2023 di Universitas Brawijaya, September 2023', '2023', 'Universitas Brawijaya', 'Nasional', 'Juara 2', ''),
(23, 'CITA MENTARI', '', '', 'Hukum', 'Nasional Kompetisi Perancangan Undang-Undang pada Constitutisional Law Festival 2023 di Universitas Brawijaya, September 2023', '2023', 'Universitas Brawijaya', 'Nasional', 'Juara 2', ''),
(24, 'L. M. BANGKIT SANJAYA', '', '', 'Hukum', 'Nasional Kompetisi Perancangan Undang-Undang pada Constitutisional Law Festival 2023 di Universitas Brawijaya, September 2023', '2023', 'Universitas Brawijaya', 'Nasional', 'Juara 2', ''),
(25, 'SERLYANA SAPUTRI', '', '', 'Hukum', 'Nasional Kompetisi Perancangan Undang-Undang pada Constitutisional Law Festival 2023 di Universitas Brawijaya, September 2023', '2023', 'Universitas Brawijaya', 'Nasional', 'Juara 2', ''),
(26, 'DWI SELVIANA', '', '', 'Hukum', 'Nasional Kompetisi Perancangan Undang-Undang pada Constitutisional Law Festival 2023 di Universitas Brawijaya, September 2023', '2023', 'Universitas Brawijaya', 'Nasional', 'Juara 2', ''),
(27, 'DESY GRACEA LIANDANY', '', '', 'Hukum', 'Nasional Kompetisi Debat Mahasiswa Indonesia (KDMI) Tahun 2023, Banten', '2023', 'BANTEN', 'Nasional', 'Juara 2', ''),
(28, 'ANGGUN DWI PARAMITHA', '', '', 'Hukum', 'Nasional Kompetisi Debat Mahasiswa Indonesia (KDMI) Tahun 2023, Banten', '2023', 'BANTEN', 'Nasional', 'Juara 2', ''),
(29, 'Rizkita Nur Ainun (O1A119121)', '', '', 'Farmasi', 'Kegiatan The 2nd Mandala Waluya International Conference on Pharmaceutical Science and Practice', '2 Februari 2023', '', 'Internasional', 'The Best Oral Presenter', ''),
(30, 'Rahman Daus', '', ' N1C121092', 'FIB', 'Lomba Poster', 'Okt-23', '', 'Nasional', 'Jurara Dua', ''),
(31, 'Kirana', '', '', 'FIB', 'Lomba Video', 'Nov-23', '', 'Nasional', 'Jurara Tiga', ''),
(32, 'Sara Sari', '', '', 'FIB', 'Lomba Karya Tulis Ilmiah', '2023', '', 'Nasional', 'Juara III', ''),
(33, 'Nur Falmin', '', '', 'FIB', 'Lomba Karya Tulis Ilmiah', '2023', '', 'Nasional', 'Juara III', ''),
(34, 'Dimas Ezy Yunus', '', '', 'FIB', 'Lomba Karya Tulis Ilmiah', '2023', '', 'Nasional', 'Juara III', ''),
(35, 'IRMAWATI', '', '', 'FKIP', 'Lomba Essay', '2023', '', 'Nasional', 'Juara 2', ''),
(36, 'Sulistiawati', '', '', 'FKIP', 'Lomba Media Pada PAMER Nasioonal', '21-26 Maret 2023', '', 'Nasional', 'Juara 3', ''),
(37, 'Al Amin A1I120002 (Juara 1)', '', '', 'FKIP', 'Lomba essai Matematika', '15-21 Mei 2023', '', 'Nasional', 'Juara 1', ''),
(38, 'Amarullah A1I120039 (Juara 2)', '', '', 'FKIP', 'Lomba essai Matematika', '15-21 Mei 2023', '', 'Nasional', 'Juara 2', ''),
(39, 'Nurhakiki Sri Rezeki', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 1', ''),
(40, 'Al Amin', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 3', ''),
(41, 'Kadek Supria Juli Ariawan', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 3', ''),
(42, 'Nilhakim Saifudin A1I120060', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 3', ''),
(43, 'Sulistiawati A1I120072', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 3', ''),
(44, 'Nur Aisyah A1I120102', '', '', 'FKIP', 'Video Edukatif', '15-21 Mei 2023', '', 'Nasional', 'Juara 3', ''),
(45, 'Al Amin A1I120002', '', '', 'FKIP', 'LKTI', '15-21 Mei 2023', '', 'Nasional', 'Juara 2', ''),
(46, 'Kadek Supria Juli Ariawan A1I120018', '', '', 'FKIP', 'LKTI', '15-21 Mei 2023', '', 'Nasional', 'Juara 2', ''),
(47, 'Nilhakim Saifudin A1I120060', '', '', 'FKIP', 'LKTI', '15-21 Mei 2023', '', 'Nasional', 'Juara 2', ''),
(48, 'Al Amin A1I120002', '', '', 'FKIP', 'Microteaching', '15-21 Mei 2023', '', 'Nasional', 'Juara 2', ''),
(49, 'La Ode Yusuf Zihandra', '', '', 'MIPA', 'Lomba Poster Eksternal BK3N', 'Feb. 2023', '', 'Nasional', 'Juara 2', ''),
(50, 'Muh. Nurdin Ardisyah', '', '', 'MIPA', 'Lomba Sketsa Geologi', '30 Jan. - 5 Feb. 2023', '', 'Nasional', 'Juara 1', ''),
(51, 'La Ode Yusuf Zihandra', '', '', 'MIPA', 'Lomba Digital Poster', '30 Jan. - 5 Feb. 2023', '', 'Nasional', 'Juara 1', ''),
(52, 'Wa Ode Nur Faila', '', '', 'MIPA', 'Lomba Digital Poster', '30 Jan. - 5 Feb. 2023', '', 'Nasional', 'Juara 1', ''),
(53, 'La Ode Yusuf Zihandra', '', '', 'MIPA', 'Lomba Photo Contest', '5 Des. 2022 - 15 Feb. 2023', '', 'Nasional', 'Juara 1', ''),
(54, 'Khaenun Nisa (R1D121012)', '', '', 'MIPA', 'Halu Oleo Mining Competition', '2023', '', 'Nasional', 'Juara III Poster Competition', ''),
(55, 'Yulia Anastasya Rahmawati (R1D12107)', '', '', 'MIPA', 'Halu Oleo Mining Competition', '2023', '', 'Nasional', 'Juara III Poster Competition', ''),
(56, 'M.Resky Prasetia. N (R1D120046)', '', '', 'MIPA', 'Halu Oleo Mining Competition', '2023', '', 'Nasional', 'Juara III Debate Competition', ''),
(57, 'Riyan Fansurya (R1D121062)', '', '', 'MIPA', 'Halu Oleo Mining Competition', '2023', '', 'Nasional', 'Juara III Debate Competition', ''),
(58, 'Fina Aulia (R1D121040)', '', '', 'MIPA', 'Halu Oleo Mining Competition', '2023', '', 'Nasional', 'Juara III Debate Competition', ''),
(59, 'Yuni Lestari (L1A120022)', '', '', 'FPT', 'Kegiatan Lomba Karya Tulis Ilmiah Tingkat Nasional Kategori Riset pada rangkaian Rapat Kerja Wilayah V Ikatan Senat Mahasiswa Peternakan Indonesia yang diselenggarakan Fakultas Peternakan UHO', '2023', 'UHO - Kendari ', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1bv0Lm8mSLQOznOFTDbxHtPfax8hkS2z1/view?usp=drive_link'),
(60, 'Muh. Arya Pratama (L1A120065)', '', '', 'FPT', 'Kegiatan Lomba Karya Tulis Ilmiah Tingkat Nasional Kategori Inovasi pada rangkaian Rapat Kerja Wilayah V Ikatan Senat Mahasiswa Peternakan Indonesia yang diselenggarakan Fakultas Peternakan UHO', '2023', 'UHO - Kendari ', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1uHL0NMiUHJ0Ki4cHjoPlfnu41Os-xORf/view?usp=drive_link'),
(61, 'Inul Said (L1A120008)', '', '', 'FPT', 'Kegiatan Lomba Karya Tulis Ilmiah Tingkat Nasional Kategori Inovasi pada rangkaian Rapat Kerja Wilayah V Ikatan Senat Mahasiswa Peternakan Indonesia yang diselenggarakan Fakultas Peternakan UHO', '2023', 'UHO - Kendari ', 'Nasional', 'Juara II', 'https://drive.google.com/file/d/1MXf27mWtkIoORwq99Hl9cn8Ht3fT-nzS/view?usp=drive_link'),
(62, 'Sastra Wijaya', '', '', 'FPT', 'Lomba Bisnis Plan Competition dalam acara Faterna Entrepeneur Competition Tingkat Nasional', '2023', '', 'Nasional', 'Juara II', 'https://drive.google.com/file/d/1idaaFkQuDHTFuGxgf1b5Haj5McDtl8Sn/view?usp=drive_link'),
(63, 'Yuni Lestari (L1A120022)', '', '', 'FPT', 'Lomba Bisnis Plan Competition dalam acara Faterna Entrepeneur Competition Tingkat Nasional', '2023', '', 'Nasional', 'Juara II', 'https://drive.google.com/file/d/1T78n7r8YlkDSKgb2P2jh5f6f779r95vD/view?usp=drive_link'),
(64, 'Mustari (I1A121040), ', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', 'Mei 2023', '', 'Nasional', 'Juara 3', ''),
(65, 'Tarman (I1A121008)', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', 'Mei 2023', '', 'Nasional', 'Juara 3', ''),
(66, 'Salam (I1A121006)', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', 'Mei 2023', '', 'Nasional', 'Juara 3', ''),
(67, 'Siti Nur Syafika (I1B120006), ', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN) 2023', '29-31 Mei 2023', '', 'Nasional', 'Juara 1', ''),
(68, 'Syukriah Kamilah (I1B120007), ', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN) 2023', '29-31 Mei 2023', '', 'Nasional', 'Juara 1', ''),
(69, 'Rahel Amanda (I1B120017)', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN) 2023', '29-31 Mei 2023', '', 'Nasional', 'Juara 1', ''),
(70, 'La Ifal (I1D121004', '', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional 2023', '2023', '', 'Nasional', 'Juara Dua', ''),
(71, 'Ananta Dara Dinanti', '', '', 'Teknik', 'Inovasi Karya Cipta Teknologi Mahasiswa Robot Competition', '27-28 Mei 2023', 'Politeknik Negeri Bali', 'Nasional', 'Juara III', ''),
(72, 'Idul Rahman', '', '', 'Teknik', 'Inovasi Karya Cipta Teknologi Mahasiswa Robot Competition', '27-28 Mei 2023', 'Politeknik Negeri Bali', 'Nasional', 'Juara III', ''),
(73, 'Muhammad Agus Saputra', '', '', 'Teknik', 'Inovasi Karya Cipta Teknologi Mahasiswa Robot Competition', '27-28 Mei 2023', 'Politeknik Negeri Bali', 'Nasional', 'Juara III', ''),
(74, 'LA ODE IKRAM RULAH AMIN', '', '', 'Teknik', 'Celebes BIM Competition', '2023', 'UGM - Jogjakarta', 'Nasional', 'Juara III', 'https://drive.google.com/file/d/1uwdk2a2rDntzmcfF6EOztPLH1xgAysIW/view?usp=drive_link'),
(75, 'Muh. Fajar Nurjaman Waji', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah', '2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(76, 'Ningsi Pebrianti', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah', '2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(77, 'Slamet', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah', '2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(78, 'La Ode Ikram Rulah Amin', '', '', 'Teknik', 'Social Project Competition Youth Inspiration Camp Etos ID', '16 Agustus 2023', 'Bogor', 'Nasional', 'Juara III', 'https://drive.google.com/file/d/1PLQcBTOs907qHw7LxOQ-LykJNXIosFjG/view?usp=drive_link'),
(79, 'La Ode Muhammad Ali', '', '', 'Teknik', 'Pekan Nasional Kemaritiman (PESIAR) 2022', '11 Agustus 2022', 'Univ. Hasanuddin - Makassar', 'Nasional', 'Juara III', ''),
(80, 'Muh. Fajar Nurjaman Waji', '', '', 'Teknik', 'Pekan Nasional Kemaritiman (PESIAR) 2022', '11 Agustus 2022', 'Univ. Hasanuddin - Makassar', 'Nasional', 'Juara III', ''),
(81, 'Muh. Fatwa R', '', '', 'Teknik', 'Pekan Nasional Kemaritiman (PESIAR) 2022', '11 Agustus 2022', 'Univ. Hasanuddin - Makassar', 'Nasional', 'Juara III', ''),
(82, 'Lalan', '', '', 'Teknik', 'Laomba Karya Tulis Ilmiah Nasional', '2023', 'UHO - Kendari', 'Nasional', 'Juara II', ''),
(83, 'Dwi Pratiwi Aprilya.W', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara I', ''),
(84, 'Annisa Nurfadilah', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara I', ''),
(85, 'Argitha Trihapsari', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara I', ''),
(86, 'St. Nur \'Afiah', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara II', ''),
(87, 'Ayustina Samudin', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara II', ''),
(88, 'Auliya Aififah Adnan Hakim', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara II', ''),
(89, 'Tim Fearless', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara II', 'https://drive.google.com/file/d/1ko6_MyIBgXqwDqzQFtmea3PLQZ37dmPV/view?usp=drive_link'),
(90, 'Muhammad Rahul Hidayat', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(91, 'Annisa Fauziyyah', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(92, 'Muhammad Ilham Jaya', '', '', 'Teknik', 'Lomba Karya Tulis Ilmiah Tingkat Nasional', '2 Oktober 2023', 'UHO - Kendari', 'Nasional', 'Juara III', ''),
(93, 'A. Ismawati', '', '', 'Pertanian', 'AS 2nd Best Presenter HICAFS 2023 Group Soil Science', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1bDS22vwR6irP65d6pHfW9j_avxFgzaWT/view?usp=drive_link'),
(94, 'Arisma', '', '', 'Pertanian', 'AS 3rd Best Scientific Paper HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1UnJUZ1d3wYziP2oItjW85ROz9Vcur9yv/view?usp=drive_link'),
(95, 'Darma', '', '', 'Pertanian', 'AS 2nd Best Presenter HICAFS 2023 Group Agribusiness', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1rM6LiKJQ61CC1t0HB70fiPHSEIfv5StH/view?usp=drive_link'),
(96, 'Desti Alvita Kakkan', '', '', 'Pertanian', 'AS 3rd Best Scientific Paper HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1CJ1kQq6wgw1URdwHfjmWI9nyNKXE3zg8/view?usp=drive_link'),
(97, 'Eka Juliawati', '', '', 'Pertanian', 'AS 3rd Best Scientific Paper HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/10U6IM0ITrgt4Uqy_ZV1CQJ7nnejYercI/view?usp=drive_link'),
(98, 'Fitri Wahyu Ningsi', '', '', 'Pertanian', 'AS 2nd Best Presenter HICAFS 2023 Group Soil Science', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1j1bvMNrF7wiB6n6zE1-L4C7WW_H5kGH5/view?usp=drive_link'),
(99, 'Gita Aryanti', '', '', 'Pertanian', 'AS 1st Best Presenter HICAFS 2023 Group Food Science and Technology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1YRVPIrqaxd5Kz7_0SOuKt3yRvSOQSQSu/view?usp=drive_link'),
(100, 'Hartuti', '', '', 'Pertanian', 'AS 3rd Best Scientific Paper HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1ZU6L2D4Bvvrz6nDr1-j9ElJj8VamDuH9/view?usp=drive_link'),
(101, 'Ikhtiana Annisa', '', '', 'Pertanian', 'AS 2nd Best Scientific Paper HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1VU-zOnie0P7V_Y-CtR5M1U8ha_2jfTBC/view?usp=drive_link'),
(102, 'Junianto Asraya', '', '', 'Pertanian', 'AS 3rd Best Poster Presentation HICAFS 2023', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1YJc1b8fq4rs9LAQY-8E5B3-UtUdKyBDJ/view?usp=drive_link'),
(103, 'Kadek Natalia', '', '', 'Pertanian', 'AS 2nd Best Presenter HICAFS 2023 Group Agriculture Extention', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1g_VhUqKxBk2lFEs_71vOrI5IfUxwjMIf/view?usp=drive_link'),
(104, 'Muhammad Baashil Aftar', '', '', 'Pertanian', 'AS 3rd Best Presenter HICAFS 2023 Group Agrotechnology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/16V_GVs3RNOlZF5BOaO-L9vnnC3Akokhz/view?usp=drive_link'),
(105, 'Nur Janah', '', '', 'Pertanian', 'AS 3rd Best Presenter HICAFS 2023 Group Agribusiness', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1zMrDA0IoUseHJCtOvYSMvLh_hji8jKKd/view?usp=drive_link'),
(106, 'Rosmida Teke', '', '', 'Pertanian', 'AS 1st Best Presenter HICAFS 2023 Group Agribusiness', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1_aTzyVChQNOiztL4L_HFJKDCVrf5x3Wk/view?usp=drive_link'),
(107, 'Siti Nurhaliza', '', '', 'Pertanian', 'AS 1rd Best Presenter HICAFS 2023 Group Agrotechnology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1twwl10s1r3KvjKR44uL3gUnla7i2m_Dg/view?usp=drive_link'),
(108, 'Sulistina Cahayani', '', '', 'Pertanian', 'AS 3rd Best Presenter HICAFS 2023 Group Food Science and Technology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1tD2IkJ_1Rk_K_9QS0iHhQd_fPERk2GsG/view?usp=drive_link'),
(109, 'Ukhwanur Azizah', '', '', 'Pertanian', 'AS 2rd Best Presenter HICAFS 2023 Group Food Science and Technology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/15L5T_AfiXO5D8w-__d--cYNFtn733iCa/view?usp=drive_link'),
(110, 'Vera Faradilla', '', '', 'Pertanian', 'AS 3rd Best Presenter HICAFS 2023 Group Agriculture Extention', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1Yqj2qaHFj3jljhuph2110xwlgm31A7gy/view?usp=drive_link'),
(111, 'Veren Regina Imanuella', '', '', 'Pertanian', 'AS 3rd Best Presenter HICAFS 2023 Group Soil Science', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 3', 'https://drive.google.com/file/d/1xD_578u9wmodjATTnhIcPL9f0S52yG1b/view?usp=drive_link'),
(112, 'Wa Ode Miftahul Jannah', '', '', 'Pertanian', 'AS 1st Best Presenter HICAFS 2023 Group Agriculture Extention', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 1', 'https://drive.google.com/file/d/1NFsdHu-YdWs9o5fUMDlL7QYI9NcXYqMv/view?usp=drive_link'),
(113, 'Wa Ode Rahmaniar', '', '', 'Pertanian', 'AS 2nd Best Presenter HICAFS 2023 Group Agrotechnology', '2023', 'Halu Oleo - Kendari', 'Internasional', 'Juara 2', 'https://drive.google.com/file/d/1IXuHZhRizbJlrSIvtX5Vp5BIHXuPoKU0/view?usp=drive_link'),
(114, 'Kresna Putra Ade Bimantoro', 'L', 'K1A119048', '', 'Regional Medical Olympiad (RMO)', '11-15 Juli 2022 ', 'Univ. Pattimura - Ambon', 'Nasional', 'Juara II', ''),
(115, 'Kukuh Endro Rinekso', 'L', 'K1A119048', '', 'Regional Medical Olympiad (RMO)', '11-15 Juli 2022 ', 'Univ. Pattimura - Ambon', 'Nasional', 'Juara II', ''),
(116, 'Finkyasti Nur Adman', 'p', 'F1C121039', 'MIPA', 'Pekan Ilmiah Lingkar Studi Ilmia dan Penalaran (PIL)', '25-27 november 2022', 'Universitas Halu Oleo', 'Regional', 'Juara I', ''),
(117, 'Eliya Dwi Arini', 'P', 'A1C120026', 'MIPA', 'Pekan Ilmiah Lingkar Studi Ilmia dan Penalaran (PIL)', '25-27 november 2022', 'Universitas Halu Oleo', 'Regional', 'Juara I', ''),
(118, 'Ridha Dwi Nurhanifah', 'P', 'F1C121023', 'MIPA', 'Pekan Ilmiah Lingkar Studi Ilmia dan Penalaran (PIL)', '25-27 november 2022', 'Universitas Halu Oleo', 'Regional', 'Juara I', ''),
(119, 'ANDI FIRDA ', 'L', '(O1A119002)', 'Farmasi', 'ALAUDDIN PHARMACEUTICAL COMPETITION (ALPHA C)', '23-26 Agustus 2022', 'Universitas Halu Oleo', 'Nasional', 'JUARA II LOMBA POSTER', ''),
(120, 'Munawar', 'P', '', 'Hukum', 'Lomba Debat Tingkat Regional Pusat Kajian Konstitusi FH-UHO', '2022', 'Universitas Halu Oleo', '', '', ''),
(121, 'Muhammad Jabarul Hidi', 'L', '', 'FIB', 'Lomba Karya Tulis Ilmiah', '2022', '', 'Nasional', 'Juara I', ''),
(122, 'Febri Yani', 'L', '', 'FIB', 'Lomba Musikalisasi Puisi', '2022', '', 'Nasional', 'Juara II', ''),
(123, 'Rahmawati K (A1A119046)', 'L', '', 'FKIP', 'Lomba Karya Tulis Ilmiah', 'Oktober 2022', '', 'Nasional', 'Juara II', ''),
(124, 'EKO BUDIONO', 'L', '', 'FKIP', 'Lomba Karya Ilmiah Tingkat Nasional', '2022', '', 'Nasional', 'Juara II', ''),
(125, 'AHMAD FAUZY AL QADRI', 'L', '', 'FKIP', 'Lomba Karya Ilmiah Tingkat Nasional', '2022', '', 'Nasional', 'Juara II', ''),
(126, 'ADIF ANANDITYO. W', 'L', '', 'FKIP', 'Lomba Karya Ilmiah Tingkat Nasional', '2022', '', 'Nasional', 'Juara II', ''),
(127, 'Heriyansyah', 'L', '', 'FKIP', 'Olimpide Nasional MIPA (ONMIPA)', '2022', '', 'Nasional', 'Juara 1', ''),
(128, 'Ahmad Kamrullah Aras', 'L', '', 'FKIP', 'lomba Inovasi Pemberdayaan dan Pembangunan Desa', '2022', '', 'Nasional', 'Juara 1', ''),
(129, 'LA ODE MUHAMAD ALWAN', 'L', '', 'FKIP', 'Lomba Cipta Puisi Matematika Pekan Matematika Kreatif Season XV se-Indonesia', '2022', '', 'Nasional', 'Juara 3', ''),
(130, 'Mutiara Ferbri', 'P', '', 'FKIP', 'Lomba Inovasi Pembangunan dan Pemberdayaan Desa', '2022', '', 'Nasional', 'Juara 1', ''),
(131, 'Rene Dharma Wangsyah', 'P', '', 'FKIP', 'Lomba Debat Bahasa Inggris pada Forum Komunikasi FKIP Negeri se-Indonesia', '26-29 Oktober 2022', '', 'Nasional', 'Juara 1', ''),
(132, 'Dita Aprilia', 'P', '', 'FKIP', 'Lomba Debat Bahasa Inggris pada Forum Komunikasi FKIP Negeri se-Indonesia', '26-29 Oktober 2022', '', 'Nasional', 'Juara 1', ''),
(133, 'YUNASTASYA YUNITA', 'P', '', 'FKIP', 'Lomba Karya Tulis Ilmiah(https://drive.google.com/file/d/1JK1cWVl3v701Yebctc-cVn1J00wdxQUs/view?usp=sharing)', '21-26 Maret 2022', '', 'Nasional', 'JUARA 1', ''),
(134, 'LISA ALBERTINA', 'P', '', 'FKIP', 'Lomba Karya Tulis Ilmiah(https://drive.google.com/file/d/1-S4fCgIdAfYl1klcXpbT-8rUVpCFVB4W/view?usp=sharing)', '21-26 Maret 2022', '', 'Nasional', 'JUARA 1', ''),
(135, 'YUYUN KARTIKA SARI', 'P', '', 'FKIP', 'Lomba Karya Tulis Ilmiah(https://drive.google.com/file/d/1JK1cWVl3v701Yebctc-cVn1J00wdxQUs/view?usp=sharing)', '21-26 Maret 2022', '', 'Nasional', 'JUARA 1', ''),
(136, 'AL AMIN', 'L', '', 'FKIP', 'LEARNING MEDIA COMPETITION(https://drive.google.com/file/d/1c2mnGyK-2XE2fDsL0rbbtH7MoxedTkUB/view?usp=sharing)', '24 Juli 2022', '', 'Nasional', 'JUARA 2', ''),
(137, 'Sulistiawati', 'P', '', 'FKIP', 'LEARNING MEDIA COMPETITION(https://drive.google.com/file/d/1c2mnGyK-2XE2fDsL0rbbtH7MoxedTkUB/view?usp=sharing)', '24 Juli 2022', '', 'Nasional', 'JUARA 2', ''),
(138, 'ASDAR', 'L', '', 'FKIP', 'LEARNING MEDIA COMPETITION (https://drive.google.com/file/d/1c2mnGyK-2XE2fDsL0rbbtH7MoxedTkUB/view?usp=sharing)', '24 Juli 2022', '', 'Nasional', 'JUARA 1', ''),
(139, 'Auliya ramadhani', 'P', '', 'FKIP', 'Lomba Media Pada PAMER Nasioonal', '21-26 Maret 2022', '', 'Nasional', 'JUARA 3', ''),
(140, 'Rahmi Nurul Maulidya', 'P', '', 'FKIP', 'Lomba Microteaching Pada PAMER Nasional', '21-26 Maret 2022', '', 'Nasional', 'JUARA 2', ''),
(141, 'YUNASTASYA YUNITA', 'P', '', 'FKIP', 'Lomba Karya Tulis Ilmiah', '29 Oktober 2022', '', 'Nasional', 'JUARA 3', ''),
(142, 'LISA ALBERTINA', 'P', '', 'FKIP', 'Lomba Karya Tulis Ilmiah', '29 Oktober 2022', '', 'Nasional', 'JUARA 3', ''),
(143, 'Muhammad Harun Hanafi (A1G120120)', 'L', '', 'FKIP', 'Lomba Media Pembelajaran FKIP FAIR 2022 \"Mewujudkan Merdeka Belajar Melalui Mahasiswa yang Kreatif dan Inovatif di Era 5.0:', '2022', '', 'Nasional', 'Juara 3', ''),
(144, 'Nur Husna Walima Salawati (A1G120126)', 'P', '', 'FKIP', 'Lomba Media Pembelajaran FKIP FAIR 2022 \"Mewujudkan Merdeka Belajar Melalui Mahasiswa yang Kreatif dan Inovatif di Era 5.0:', '2022', '', 'Nasional', 'Juara 3', ''),
(145, 'Waode Sitti Fatimah (A1G120078)', 'P', '', 'FKIP', 'Lomba Media Pembelajaran FKIP FAIR 2022 \"Mewujudkan Merdeka Belajar Melalui Mahasiswa yang Kreatif dan Inovatif di Era 5.0:', '2022', '', 'Nasional', 'Juara 3', ''),
(146, '', '', '', 'MIPA', 'ESSAY COMPETITION SULTRA ECOFEST BANK INDONESIA', '2022', '', 'Nasional', 'Juara III', ''),
(147, 'Garda Nusantara ', 'L', '(I1F122004)', 'MIPA', 'Festival dan Inovasi Mahasiswa Tingkat Nasional (FIESTA) III', '15-Nov-22', '', 'Nasional', 'Juara 3', ''),
(148, 'Rahel Eni Lastri Malau ', 'L', '(I1F122027)', 'MIPA', 'Festival dan Inovasi Mahasiswa Tingkat Nasional (FIESTA) III', '15-Nov-22', '', 'Nasional', 'Juara 3', ''),
(149, 'Randi Surahman', 'L', '', 'MIPA', 'Lomba Story Fieldtrip', 'Des. 2022', '', 'Nasional', 'Juara 2', ''),
(150, 'Dewi/', 'P', '', 'MIPA', 'Olimpiade Sains Akbar Nasional (Osan)', '2022', '', 'Nasional', 'Juara 3', ''),
(151, 'Arwan Prianto Mangidi (F1A316006)', 'L', '', 'MIPA', 'Arubalympics 2020', 'Agustus 2020', '', 'Nasional', 'Juara III', ''),
(152, 'Muhammad Ikbar (R1D120014)', 'L', '', 'MIPA', 'Parade Tambang', '2022', '', 'Nasional', 'Juara III Essay Competition', ''),
(153, 'Rion Setiawan (R1D120060)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara III Essay Competition', ''),
(154, 'Ulfa Oktaviana Salsa (R1D119061)', 'P', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Mock Up Competition', ''),
(155, 'Muhammad Syafril Madu (R1D119020)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Mock Up Competition', ''),
(156, 'La Eko (R1D119037)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Mock Up Competition', ''),
(157, 'Nur Arif Wibawa (R1D119021)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(158, 'Muhammad Yasser Arsy Akbar (R1D119050)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(159, 'Guslan Iju (R1D119033)', 'L', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(160, 'Ita Juita (R1D119009)', 'P', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(161, 'Intan Abdillah Arrasyid (R1D119008)', 'P', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(162, 'Resta Fitrah Ramadhani (R1D119056)', 'P', '', 'MIPA', 'Mining Engineering Student Parade and Competition', '2022', '', 'Nasional', 'Juara I Geolistrik Competition', ''),
(163, 'Nur Amalia (F1D219047)', 'P', '', 'MIPA', 'Juara 1 Lomba Karya Tulis Ilmiah', '2022', '', 'Nasional', 'Juara 1', ''),
(164, 'Siti Najar, ', 'P', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', '2022', '', 'Nasional', 'Juara 3', ''),
(165, 'Esti Rahayu ', 'P', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', '2022', '', 'Nasional', 'Juara 3', ''),
(166, 'Nur Vani Aprianty', 'P', '', 'FPIK', 'Kompetisi Esai Ilmiah Nasional (KEIN)', '2022', '', 'Nasional', 'Juara 3', ''),
(167, 'Nariswari Sulastri A. (I1C121006)', 'P', '', 'FPIK', 'Festifal Inovasi dan Kreativitas Mahasiswa TIngkat Nasional FIESTA III 2022', '2022', '', 'Nasional', 'Juara 3', ''),
(168, 'Abdul Bukit Jalil (I1D121001)', 'L', '', 'FPIK', 'Himateta Scientific Champion 2022', '2022', '', 'Nasional', 'Juara I', ''),
(169, 'Abdul Bukit Jalil (I1D121001)', 'L', '', 'FPIK', 'Himateta Scientific Champion 2022', '2022', '', 'Nasional', 'Silver Medal', ''),
(170, 'Abdul Bukit Jalil (I1D121001)', 'L', '', 'FPIK', 'Lomba Karya Tulis Ilmiah Tingkat Mahasiswa Biology Season Part X Se-Indonesia', '2022', '', 'Nasional', 'Juara Tiga', ''),
(171, 'Acmad Awal Notanda', '', '', 'Teknik', 'Communication Skill Contest for Engineering Students', '2022', 'Univ. Andalas Padang', 'Nasional', 'Juara II', ''),
(172, 'Andika Tarumidi ', 'L', '(B1C119005)', 'FEB', 'Indonesian Olypiad Of Science (IOS)', '2021', '', 'Nasional', '', ''),
(173, 'Afni Panca Nur Yufin A', 'P', '', 'Hukum', 'Kompetisi Perancangan Perundang-undangan Piala Bergilir Prof. Achmad Sodiki Constitutional Law Festival (CLFest) Universitas Brawijaya', '2021', 'Brawijaya ', 'Nasional', '', ''),
(174, 'Amar Mubaraq', 'L', '', 'Hukum', 'National Moot Court Competition Piala Abdul Kahar Muzzakir IX di Universitas Islam Indonesia, Yogyakarta', '2021', 'Jogjakarta', 'Nasional', '', ''),
(175, 'La Ode Andi Rahmat Jaya', 'L', '', 'Hukum', 'National Moot Court Competition Piala Abdul Kahar Muzzakir IX di Universitas Islam Indonesia, Yogyakarta', '2021', 'Jogjakarta', 'Nasional', '', ''),
(176, 'Gita Cahyani Triandari', 'P', '', 'Hukum', 'National Moot Court Competition Piala Abdul Kahar Muzzakir IX di Universitas Islam Indonesia, Yogyakarta', '2021', 'Jogjakarta', 'Nasional', '', ''),
(177, 'Egha Febriani Abbas ', 'P', 'M1A118015', 'FHIL', 'Presenter terbaik ', '2021', '', 'Nasional', '(Juara II Presentar Seminar)', ''),
(178, 'Ahmad Kamrullah Aras', 'L', '', 'FKIP', 'Olimpiade Kimia pada ajang Kompetisi Sains Indonesia (KSI) POSI', '2021', '', 'Nasional', 'Juara II', ''),
(179, 'Ahmad Kamrullah Aras', 'L', '', 'FKIP', 'Olimpiade Kimia pada ajang Kompetisi Hardiknas POSI', '2021', '', 'Nasional', 'Juara II', ''),
(180, 'Yuliana', 'P', '', 'FKIP', 'Poster Ilmiah FKM UHO Winslow Competition 2021', '2021', '', 'Nasional', 'Juara 1', ''),
(181, 'Citra Wati', 'P', '', 'FKIP', 'National AITC (Airlangga Innovaton Technology Competition)', '2021', '', 'Nasional', 'Juara 3', ''),
(182, 'Mutmainnah', 'P', '', 'FKIP', 'National AITC (Airlangga Innovaton Technology Competition)', '2021', '', 'Nasional', 'Juara 3', ''),
(183, 'Nurul Aulia Hikmah', 'P', '', 'FKIP', 'National AITC (Airlangga Innovaton Technology Competition)', '2021', '', 'Nasional', 'Juara 3', ''),
(184, 'Nurul Widya Febriza', 'P', '', 'FKIP', 'Pekan Ilmiah LSIP 2021', '2021', '', 'Nasional', 'Juara 2', ''),
(185, 'Nia Anggi Saputri,', 'P', '', 'FKIP', 'Pekan Ilmiah LSIP 2022', '2021', '', 'Nasional', 'Juara 2', ''),
(186, 'Amar Ma\'ruf', 'P', '', 'FKIP', 'Lomba Media Pembelajaran Online', '2021', '', 'Nasional', 'Juara 2', ''),
(187, 'Ramlah,', 'P', '', 'FKIP', 'Lomba Media Pembelajaran Online', '2021', '', 'Nasional', 'Juara 2', ''),
(188, ' Asri Salfitri', 'P', '', 'FKIP', 'Lomba Media Pembelajaran Online', '2021', '', 'Nasional', 'Juara 2', ''),
(189, 'Asdar Gusman', 'L', '', 'MIPA', 'Kompetisi Sains Indonesia (KSI) POSI 2021', '14 Pebruari 2021', '', 'Nasional', 'Juara 3', ''),
(190, 'Yuke Milen', 'P', '', 'MIPA', 'Lomba Karya Tulis Mahasiswa Online di Universitas Brawijaya', '1 juni - 30 September 2021', 'Brawijaya ', 'Nasional', 'Juara 3 / Saintek / Judul : Reformasi Hazmat Suit Covid-19 (HSC19) menjadi energi alternatif sebagai solusi cerdas penanganan limbah APD Nakes Covid-19', ''),
(191, 'Ude Rahman', 'L', '', 'MIPA', 'Lomba Karya Tulis Mahasiswa Online di Universitas Brawijaya', '1 juni - 30 September 2021', 'Brawijaya ', 'Nasional', 'Juara 3 / Saintek / Judul : Reformasi Hazmat Suit Covid-19 (HSC19) menjadi energi alternatif sebagai solusi cerdas penanganan limbah APD Nakes Covid-19', ''),
(192, 'Farhan Nur Al-Afandy', 'L', '', 'MIPA', 'Lomba Karya Tulis Mahasiswa Online di Universitas Brawijaya', '1 juni - 30 September 2021', 'Brawijaya ', 'Nasional', 'Juara 3 / Saintek / Judul : Reformasi Hazmat Suit Covid-19 (HSC19) menjadi energi alternatif sebagai solusi cerdas penanganan limbah APD Nakes Covid-19', ''),
(193, '', '', '', 'MIPA', 'LOMBA KARYA TULIS ILMIAH NASIONAL (LKTIN)', '2021', '', 'Nasional', 'Juara 1', ''),
(194, 'Muh. Adhim Adrian  ', 'L', '(I1F122021),', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 1', ''),
(195, 'Muh. Restu Mulawarman  ', 'L', '(I1F122020)', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 1', ''),
(196, 'Rahel Eni Lastri Malau ', '', '(I1F122027)', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 1', ''),
(197, 'Arin Jainur  ', '', '(I1F122010),', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 3', ''),
(198, 'M.Ipal Ardiansyah  ', 'L', '(I1F122038),', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 3', ''),
(199, 'Garda Nusantara ', '', '(I1F1220041)', 'MIPA', 'Kompetisi Esai Ilmiah Nasional', '22-28 Oktober 2021', '', 'Nasional', 'Juara 3', ''),
(200, 'YUYUN SULISTIAWATI (F1G119018)', 'P', '', 'MIPA', 'Lomba Karya Tulis Ilmiah Nasional (LKTIN) Masterpiece 2021 Fakultas Kesehatan Masyarakat Universitas Diponegoro', 'Oktober 2021', 'Universitas Ponegoro', 'Nasional', 'Juara II', ''),
(201, 'Ita Juita (R1D119009)', 'P', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Mining Enviroment and Safety', ''),
(202, 'Hamza (R1D118035)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Mining Enviroment and Safety', ''),
(203, 'Muhammad Rayyan Rasyid Guru (R1D118016)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Mining Enviroment and Safety', ''),
(204, 'La Ode Ibrahim Prima Elha (R1D118061)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Mining Enviroment and Safety', ''),
(205, 'Vinsentia Parissing (R1D118051)', 'P', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Mining Enviroment and Safety', ''),
(206, 'Ita Juita (R1D119009)', 'P', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Invesment and Feasibility Analysis', ''),
(207, 'Hamza (R1D118035)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Invesment and Feasibility Analysis', ''),
(208, 'Muhammad Rayyan Rasyid Guru (R1D118016)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Invesment and Feasibility Analysis', ''),
(209, 'La Ode Ibrahim Prima Elha (R1D118061)', 'L', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Invesment and Feasibility Analysis', ''),
(210, 'Vinsentia Parissing (R1D118051)', 'P', '', 'MIPA', 'Sriwijaya Mining Competition', '2021', '', 'Nasional', 'Juara III Invesment and Feasibility Analysis', ''),
(211, 'Adhen Surya Artama (R1D120028)', 'L', '', 'MIPA', 'Gebyar Statistika', '2021', '', 'Nasional', 'Juara II Kompetisi Esai', ''),
(212, 'Rion Setiawan (R1D120060)', 'L', '', 'MIPA', 'Gebyar Statistika', '2021', '', 'Nasional', 'Juara II Kompetisi Esai', ''),
(213, 'Rochnald M. Wilson Pigay', 'L', '', '', 'lomba anatomi', '6-8 Maret 2020', 'Universitas Hasanuddin', 'Nasional', 'Juara II', ''),
(214, 'Andi Muhammad Alif Akbar Tawil', 'L', '', '', 'lomba anatomi', '6-8 Maret 2020', 'Universitas Hasanuddin', 'Nasional', 'Juara II', ''),
(215, '', '', '', 'MIPA', 'The 2nd International Seminar on ScienCE', '2020', '', 'Internasional ', 'Best Presenter', ''),
(216, 'Wa Ode Sitti Mardiyah/ F1D118015', 'P', '', 'MIPA', 'Olimpiade Sains Mahasiswa (OSM) Tingkat Mahasiswa dan Guru Se -Indonesia Tahun 2020', '2020', '', 'Nasional', 'Peraih medali perak', ''),
(217, 'Muh. Theo Kalfan B./ F1D118029', 'L', '', 'MIPA', 'Olimpiade Sains Mahasiswa (OSM) Tingkat Mahasiswa dan Guru Se -Indonesia Tahun 2020', '2020', '', 'Nasional', 'Peraih medali perunggu Oleh POSI', ''),
(218, 'Riskawati (G2Q118012)', 'P', '', 'PPs', 'Kompetesi Gurulympics', '2020', '', 'Nasional', 'Juara 1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_nonakademik`
--

CREATE TABLE `prestasi_nonakademik` (
  `id` int(11) NOT NULL,
  `nama` varchar(245) NOT NULL,
  `jenis_kelamin` varchar(245) NOT NULL,
  `nim` varchar(245) NOT NULL,
  `fakultas` varchar(245) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `waktu_kegiatan` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `tingkatan` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL,
  `dokumen_fisik` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi_nonakademik`
--

INSERT INTO `prestasi_nonakademik` (`id`, `nama`, `jenis_kelamin`, `nim`, `fakultas`, `nama_kegiatan`, `waktu_kegiatan`, `tempat`, `tingkatan`, `hasil`, `dokumen_fisik`) VALUES
(1, 'Rezki Noratiqa', 'P', 'F1B120008', 'FMIPA', 'Kompetisi Sobat Bumi Pertamina Kategori Sains Bidang Fisika 2020', '2020', '', 'Nasional', 'Juara I', ''),
(2, 'Lut Sari', 'P', '', 'FIB', 'Marching Band', '2020', '', 'Nasional', 'Juara II', ''),
(3, 'MOCH. YAHDIMAN MADJID', 'L', '', 'FPt', 'Kompetisi Video pendek #PETANI SEHAT PETANI bahagia Kategori VIDEO PENDEK DENGAN KERAGAMAN CERITA TERBAIK yang dilaksanakan Oleh Masyarakat Peduli Media, Jogyakarta', '2020', 'Jogjakarta', 'Nasional', 'Juara 1', ''),
(4, 'MUHAMAD NAWIR', 'L', '', 'FPt', 'Lomba Video Challenge Tingkat Nasional yang dilaksanakan oleh Mahasiswa PPSKM STIK BINA HUSADA Palembang', '2020', 'Palembang', 'Nasional', 'Juara 2', ''),
(5, 'ASRIN', 'L', '', 'FPt', 'D2ACEDMY IDOL Tahun 2020 yang dilaksanakan oleh NONO PRODUCTION.', '2020', '', 'Nasional', 'Juara 2', ''),
(6, 'Muhammad Hoki Akbar', 'L', 'K1A119052', 'FK', 'Regional Medical Olympiad (RMO) ISMKI Wilayah 4 2021 \"Neuropsikiatri\"', '2021', '', 'Nasional', 'Juara II', ''),
(7, 'Muhammad Yukrim Nasrun', 'L', 'K1A119054', 'FK', 'Regional Medical Olympiad (RMO) ISMKI Wilayah 4 2021 \"Neuropsikiatri\"', '2021', '', 'Nasional', 'Juara II', ''),
(8, 'Fainsyah Istiqomah', 'L', 'A1F221053', 'FKIP', 'PON XX 2021 di PAPUA Cabor Dayung', '2021', 'Papua', 'Nasional', 'Juara II dan III', ''),
(9, 'Mimi Farida', 'P', 'A1F121024', 'FKIP', 'PON XX 2021 di PAPUA Cabor Dayung', '2021', 'Papua', 'Nasional', 'Juara II dan III', ''),
(10, 'Nurmila', 'P', 'A1F121024', 'FKIP', 'PON XX 2021 di PAPUA Cabor Dayung', '2021', 'Papua', 'Nasional', 'Juara II dan III', ''),
(11, 'Fitra Siu', 'P', 'A1F120010', 'FKIP', 'PON XX 2021 di PAPUA Cabor Sepak Takraw', '2021', 'Papua', 'Nasional', 'Juara III Beregu Putra', ''),
(12, 'Zulhija', 'L', 'A1F117026', 'FKIP', 'PON XX 2021 di PAPUA Cabor Sepak Takraw', '2021', 'Papua', 'Nasional', 'Juara III Beregu Putra', ''),
(13, 'Sitti Fatimah Kadir', 'P', 'A1F115200', 'FKIP', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', ''),
(14, 'Delistiani', 'P', 'J1A117192', 'FKM', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', ''),
(15, 'Deliana Palaga', 'P', 'E1F120035', 'FT', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', 'https://drive.google.com/file/d/1iTGrWI1MuwI0a39LZ_26ZPYL0D_enACn/view?usp=drive_link'),
(16, 'Irene Maharani Surahman', 'P', 'H1A115126', 'FH', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', ''),
(17, 'Ayu Lestari', 'P', 'C1D716007', 'FISIP', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', ''),
(18, 'Sitti Aisyah Uzwatun Hasana', 'P', 'C1B117239', 'FISIP', 'PON XX 2021 di PAPUA Cabor Softball', '2021', 'Papua', 'Nasional', 'Juara II', ''),
(19, 'Andi Nurfauzan', 'P', 'D1E120043', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(20, 'Fadilah Nasyratullah', 'P', 'D1E118018', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(21, 'Harmoko', 'L', 'D1E119046', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(22, 'La Ode Muhammad Alfan', 'L', 'D1E119050', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(23, 'Lini Quentin', 'P', 'D1E118112', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(24, 'Muh. Nur Fajar Maga', 'L', 'D1D117054', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(25, 'Nur Adzy Mahdalena', 'L', 'D1E118044', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(26, 'Rania Alini Az Zahra', 'P', 'D1E118118', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(27, 'Siti Mei Inda Sari', 'P', 'D1E118027', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(28, 'Syahrul Alhadi', 'L', 'D1E118010', 'FP', 'ORMAWA UKM Ketahanan Nasional UHO Dalam PHP2D Pada Kompetisi Nasional Abdijaya 2021', '2021', 'Kendari', 'Nasional', 'Juara II', ''),
(29, 'Afdal Jaya Susvito', 'L', 'P3B120003', 'PPV', 'Bussiness Plan STIE PGRI Dewantara Jombang 2022', '2022', 'Jawa Timur', 'Nasional', 'Juara II', ''),
(30, 'Idam Halik', 'L', 'P3B120017', 'PPV', 'Bussiness Plan STIE PGRI Dewantara Jombang 2022', '2022', 'Jawa Timur', 'Nasional', 'Juara II', ''),
(31, 'Kiran Saputra Dapa', 'L', 'P3B120024', 'PPV', 'Bussiness Plan STIE PGRI Dewantara Jombang 2022', '2022', 'Jawa Timur', 'Nasional', 'Juara II', ''),
(32, 'Afdal Jaya Susvito', 'L', 'P3B120003', 'PPV', 'LKTI FAPERTA FAIR 2 2022 Bidang IoT, Engineering dan Lingkungan Universitas Nahdatul Watan Mataram', '2022', 'Mataram - NTB', 'Nasional', 'Juara II', ''),
(33, 'Idam Halik', 'L', 'P3B120017', 'PPV', 'LKTI FAPERTA FAIR 2 2022 Bidang IoT, Engineering dan Lingkungan Universitas Nahdatul Watan Mataram', '2022', 'Mataram - NTB', 'Nasional', 'Juara II', ''),
(34, 'Kiran Saputra Dapa', 'L', 'P3B120024', 'PPV', 'LKTI FAPERTA FAIR 2 2022 Bidang IoT, Engineering dan Lingkungan Universitas Nahdatul Watan Mataram', '2022', 'Mataram - NTB', 'Nasional', 'Juara II', ''),
(35, 'Idam Halik', 'L', 'P3B120017', 'PPV', 'LKTIN DISCO 5TH UNDIP 2022', '2022', 'Semarang - Jawa Tengah', 'Nasional', 'Juara III', ''),
(36, 'Kiran Saputra Dapa', 'L', 'P3B120024', 'PPV', 'LKTIN DISCO 5TH UNDIP 2022', '2022', 'Semarang - Jawa Tengah', 'Nasional', 'Juara III', ''),
(37, 'Feti Fera Munajat', 'P', 'P3A121014', 'PPV', 'NATIONAL CIVIL ENGINEERING HIGHWAY 2022', '2022', '', 'Nasional', 'Juara III', ''),
(38, 'Jaka Lawere', 'L', 'P3A121023', 'PPV', 'NATIONAL CIVIL ENGINEERING HIGHWAY 2022', '2022', '', 'Nasional', 'Juara III', ''),
(39, 'Muhamad Fajar', 'L', 'P3A121040', 'PPV', 'NATIONAL CIVIL ENGINEERING HIGHWAY 2022', '2022', '', 'Nasional', 'Juara III', ''),
(40, 'Sitti Nur Aulia Ghani', 'P', 'N1D220026', 'FIB', 'English Debate Competition Cultural Fest Vol.5 UKM Bahasa Universitas Muhammadiyah Makassar Tahun 2022', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara III', 'https://drive.google.com/file/d/1HJBD1I0kWDaw3tBIRNHhoGf-Vk1m_T3k/view?usp=drive_link'),
(41, 'Andi Nur Taqwa Pacinongi', 'L', 'N1D221051', 'FIB', 'English Debate Competition Cultural Fest Vol.5 UKM Bahasa Universitas Muhammadiyah Makassar Tahun 2022', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara III', 'https://drive.google.com/file/d/1qSDLWzNwjJMXQAqaxO39bP-m033lZaaV/view?usp=drive_link'),
(42, 'Rifka Wulandari', 'P', 'C1D120191', 'FISIP', 'Pemilihan Putri Tenun/Batik Nusantara 2022', '2022', '', 'Nasional', 'Juara III', ''),
(43, 'Nurfadillah', 'P', 'C1D122085', 'FISIP', 'Semarak UKM-LPM Teropong UMSU 2022', '2022', 'Medan-Sumatera Utara', 'Nasional', 'Juara I News Anchor', ''),
(44, 'Fathur Ikhwanul Zikri', 'L', 'K1A120048', 'FK', 'Kompetisi Video Edukasi 2022 Himpunan Mahasiswa Pendidikan Biologi \"Radyx Mangivera\" Universitas Wiralodra', '2022', 'Indramayu-Jawa Barat', 'Nasional', 'Juara I', ''),
(45, 'Khalishah Azzahra', 'P', 'K1A120011', 'FK', 'LKTI Medical Technologyst Olympiad (METHANOL) 2022', '2022', '', 'Nasional', 'Juara III', ''),
(46, 'M. Fajri Siddiq Manik', 'L', 'K1A120158', 'FK', 'LKTI Medical Technologyst Olympiad (METHANOL) 2022', '2022', '', 'Nasional', 'Juara III', ''),
(47, 'Muhammad Farhan Ilmi', 'L', 'K1A120016', 'FK', 'LKTI Medical Technologyst Olympiad (METHANOL) 2022', '2022', '', 'Nasional', 'Juara III', ''),
(48, 'Alif', 'L', 'K1A120080', 'FK', 'Lomba Video Edukasi UNIKA ATMA JAYA CORDIS ILMIAH \"AESCULAPIUS\" 2022', '2022', 'Jakarta', 'Nasional', 'Juara II', ''),
(49, 'Arazy Destoanra', 'P', 'K1A120086', 'FK', 'Lomba Video Edukasi UNIKA ATMA JAYA CORDIS ILMIAH \"AESCULAPIUS\" 2022', '2022', 'Jakarta', 'Nasional', 'Juara II', ''),
(50, 'Wikal Sulistia Dwi Putra', 'P', 'K1A120072', 'FK', 'Lomba Video Edukasi UNIKA ATMA JAYA CORDIS ILMIAH \"AESCULAPIUS\" 2022', '2022', 'Jakarta', 'Nasional', 'Juara II', ''),
(51, 'Wikal Sulistia Dwi Putra', 'P', 'K1A120072', 'FK', 'MESENTRICA Educational Video National Competition FK UNILA 2022', '2022', '', 'Nasional', 'Juara I', ''),
(52, 'Kresna Putra Ade Bimantoro', 'P', 'K1A119047', 'FK', 'Regional Medical Olympiad (RMO) ISMKI Wilayah 4 2022 \"Penyakit Infeksius\"', '2022', '', 'Nasional', 'Juara II', ''),
(53, 'Kukuh Endro Rinekso', 'L', 'K1A119048', 'FK', 'Regional Medical Olympiad (RMO) ISMKI Wilayah 4 2022 \"Penyakit Infeksius\"', '2022', '', 'Nasional', 'Juara II', ''),
(54, 'Abdul Rasyid', 'L', 'A1M220033', 'FKIP', 'Lomba Orasi Tingkat Nasional  Tahun 2021 (HMJ-PKM-KN Univ. Negeri Surabaya)', '2022', 'Jawa Timur', 'Nasional', 'Juara II', ''),
(55, 'M. Ridha Hidayat A.', 'L', 'A1M118018', 'FKIP', 'Lomba Video Kreatif Revolusi Mental Kemenko PMK Tahun 2022', '2022', 'Jakarta', 'Nasional', 'Juara I', ''),
(56, 'Farhan Nur Al-Afandy', 'L', 'F1B118040', 'FMIPA', 'LKTIN-OTN Kategori Saintek di Universitas Brawijaya', '2022', 'Jawa Barat', 'Nasional', 'Juara III', ''),
(57, 'Ude Rahman', 'L', 'F1B119039', 'FMIPA', 'LKTIN-OTN Kategori Saintek di Universitas Brawijaya', '2022', 'Jawa Barat', 'Nasional', 'Juara III', ''),
(58, 'Yuke Milen', 'L', 'F1B118008', 'FMIPA', 'LKTIN-OTN Kategori Saintek di Universitas Brawijaya', '2022', 'Jawa Barat', 'Nasional', 'Juara III', ''),
(59, 'Muamar Qadafi Muhajir', 'L', 'B1C119027', 'FEB', 'PEKSIMINAS Tahun 2022', '2022', 'Malang-Jatim', 'Nasional', 'Juara I', ''),
(60, 'Risma April Arifin', 'P', 'N1D119035', 'FIB', 'PEKSIMINAS Tahun 2022', '2022', 'Malang-Jatim', 'Nasional', 'Juara III', ''),
(61, 'Iluh Sinta Sundariasih', 'P', 'A1F219018', 'FKIP', 'Taekwondo Open Tournament Gubernur SULSEL Cup 2022', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara I Kelas Under 57 Kg Puteri', ''),
(62, 'Isra Miranti', 'P', 'H1A119046', 'FH', 'Open Tournament UNJ CUP XI Students and TNI/POLRI 2022', '2022', 'Jakarta', 'Nasional', 'Juara I Kumite Senior -50 Kg Puteri', ''),
(63, 'Arjun', 'L', 'A1F121053', 'FKIP', 'POMNAS XVII 2022 SUMBAR Cabor Atletik', '2022', 'Padang-Sumbar', 'Nasional', 'Juara I Lari 1.500m Putera', 'https://drive.google.com/file/d/1TQ4dXUWkc2MA8XPLse4ms2CPACOnW_Jb/view?usp=drive_link'),
(64, 'Arjun', 'L', 'A1F121053', 'FKIP', 'POMNAS XVII 2022 SUMBAR Cabor Atletik', '2022', 'Padang-Sumbar', 'Nasional', 'Juara I Lari 800m Putera', 'https://drive.google.com/file/d/19ptSEEJb1rTUn871Yn-Bbxj5UC4q_XAU/view?usp=drive_link'),
(65, 'Al Ukminwati', 'P', 'A1F219008', 'FKIP', 'POMNAS XVII 2022 SUMBAR Cabor Taekwondo', '2022', 'Padang-Sumbar', 'Nasional', 'Juara II Kelas Under 73 Kg Puteri', 'https://drive.google.com/file/d/11QprR6iI4S3LgDBtoOr3anO2CcKZ7cDx/view?usp=drive_link'),
(66, 'Alya Larasanti', 'P', 'A1F119004', 'FKIP', 'POMNAS XVII 2022 SUMBAR Cabor Taekwondo', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kelas Under 57 Kg Puteri', 'https://drive.google.com/file/d/1xwnkJ39zpJaO1gNZyAxjn00GxWJYyZ2_/view?usp=drive_link'),
(67, 'Iluh Sinta Sundariasih', 'P', 'A1F219018', 'FKIP', 'POMNAS XVII 2022 SUMBAR Cabor Taekwondo', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kelas Under 62 Kg Puteri', 'https://drive.google.com/file/d/1fbQMd5t3rH1cJnw0pIwQxlwH9ORH_1Y1/view?usp=drive_link'),
(68, 'Irgiansyah', 'L', 'H1A122298', 'FH', 'POMNAS XVII 2022 di SUMBAR Cabor Karate', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kata Beregu Putera', 'https://drive.google.com/file/d/1MPFnTt6txu9W20yDWSfEx4qdagseqkqj/view?usp=drive_link'),
(69, 'M. Musashi Andi Gella', 'L', 'H1A119254', 'FH', 'POMNAS XVII 2022 di SUMBAR Cabor Karate', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kata Beregu Putera', 'https://drive.google.com/file/d/1ZsULQxwvwkHlk9PuxLYL0MoJeIJrFMlP/view?usp=drive_link'),
(70, 'Asman Herdani', 'L', 'B1B121010', 'FEB', 'POMNAS XVII 2022 di SUMBAR Cabor Karate', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kata Beregu Putera', 'https://drive.google.com/file/d/1ecc1aNj_a1a9fC6ArJ451RIPcOB9UnU9/view?usp=drive_link'),
(71, 'Devitrianna', 'P', 'B1C119012', 'FEB', 'POMNAS XVII 2022 di SUMBAR Cabor Karate', '2022', 'Padang-Sumbar', 'Nasional', 'Juara III Kumite Over 68 Kg Puteri', 'https://drive.google.com/file/d/1yd8heK9bI-LHSycKXsesFQq296COJWY5/view?usp=drive_link'),
(72, 'Dirgantara Gunawan', 'L', '', 'Hukum ', 'Turnamen e-sport Mobile Lagend', '2022', '', 'Nasional', 'Juara 1', ''),
(73, 'Dirvin', 'L', '', 'FHIL', 'Kejuaran Shorinji Kempo antar Dojo Se-Indonesia Timur (rektor unhas Cup)', '2022', '', 'Nasional', 'Juara 2', ''),
(74, 'Dirvin', 'L', '', 'FHIL', 'Kejuaran Shorinji Kempo antar Dojo Se-Indonesia Timur Tunggal ', '2022', '', 'Nasional', 'Juara 1', ''),
(75, 'Dirvin', 'L', '', 'FHIL', 'Kejuaran Shorinji Kempo antar Dojo Se-Indonesia Timur Berpasangan', '2022', '', 'Nasional', 'Juara 3', ''),
(76, 'Risma April Arifin', 'P', '', 'FIB', 'PEKSIMINAS', '2022', '', 'Nasional', 'Juara III', ''),
(77, 'Rifka Wulandari', 'P', '', 'FIB', 'Putri Tenun/ Batik Nusantara Kategori Remaja Usia 11-16 Tahun', 'Juni 2022', '', 'Nasional', 'Juara 3', ''),
(78, 'Nurfadillah', 'P', '', 'FISIP', 'Edukativ UKM Penalaran dan Penelitian Universitas Jember dengan Tema Inovasi dan Akttualisasi Generasi Milenial Guna Mewujudkan SDGs\'30 Menuju Indonesia Manu 2045', '2022', '', 'Nasional', 'Juara 1', ''),
(79, 'Nurfadillah', 'P', '', 'FISIP', 'Semarak UKM-LPM Teropong UMSU 2022 dengan Tema Kebebasan Berpendapat dalam Perspektif UU ITE', '22 Oktober 2022', '', 'Nasional', 'Juara 1', ''),
(80, 'Nurfadillah', 'P', '', 'FISIP', 'Lomba Syarhil Qur\'an Tingkat Kabupaten', '2 Maret 2022', '', 'Nasional', 'Juara 1', ''),
(81, 'Rahmawati K ', 'P', '(A1A119046)', 'FKIP', 'Lomba Presenter', 'Oktober 2022', '', 'Nasional', 'Juara III', ''),
(82, 'Shofa Nur Amirah Khairiyah ', 'P', '(A1P121065)', 'FKIP', 'Festival Sains Nasional (FSN)', '11 Desember 2022', 'Medan(Sumut)', 'Nasional', 'Juara I Medali Emas Bidang Ekonomi', ''),
(83, 'Shofa Nur Amirah Khairiyah ', 'P', '(A1P121065)', 'FKIP', 'Festival Sains Nasional (FSN)', '11 Desember 2022', 'Medan(Sumut)', 'Nasional', 'Juara I Medali Emas Bidang Bahasa Inggris', ''),
(84, 'Shofa Nur Amirah Khairiyah ', 'P', '(A1P121065)', 'FKIP', 'Pusat Kejuaraan Sains Nasional (puskanas.id)', '27-Nov-22', 'Medan(Sumut)', 'Nasional', 'juara I medali emas Bidang Bahasa Inggris', ''),
(85, 'Bobi Adam ', 'L', '(A1M118055)', 'FKIP', 'Vedio Kreatif', '16-Nov-22', '', 'Nasional', 'Juara II', ''),
(86, 'ASRIANI MAULINA', 'P', '', 'FKIP', 'Fouder DMH ( Duta Muslimah Hijab)', '2022', '', 'Nasional', 'Juara 1', ''),
(87, 'ALYA LARASANTI ', 'P', 'A1F119004', 'FKIP', 'POMNAS PALEMBANG ( TAEKWONDO )', '2022', 'SUMSEL', 'Nasional', 'JUARA 3', ''),
(88, 'Isli Handayani Putri', 'P', '', 'FKM', 'Lomba Poster kegiatan \"Milad 19 HIMAPRODI PBSI DEMA JBSI FBS UNM\"', 'Desemberi 2022', 'Univ. Negeri Makassar ', 'Nasional', 'Juara II', ''),
(89, '', '', '', 'MIPA', 'Lomba Cipta Puisi Festival Colour of Indonesia 5.0', '2022', '', 'Nasional', 'Juara II', ''),
(90, 'Nurmila ', 'P', '(I1F119026)', 'MIPA', 'Kejuaraan Nasional Olah Raga Dayung', '8-17 Desember 2022', '', 'Nasional', 'Medali Emas Juara 1 Nasional', ''),
(91, 'DANDI ADYANANDI ISHAK ', 'L', '(R1B118039)', 'MIPA', 'FESTIVAL KOPI TANAH AIR', '2022', '', 'Nasional', 'II', ''),
(92, 'Nabila Sidratil ', 'P', '(I1B121041)', 'FPIK', 'Ourcitrus Ambassador', 'Feb-22', '', 'Nasional', 'Juara 3', ''),
(93, 'HENDRA', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(94, 'TIALAN', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(95, 'IQRAUL FIKRI ALFATIH AHMAD', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(96, 'FRAISA TABONGO', 'P', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(97, 'FAHRUL ALI RAMADHAN', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(98, 'AJIS', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(99, 'WINARDI', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(100, 'MIMIN SAPUTRA', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(101, 'ANDRI FADLI YUSUF', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(102, 'SAMARDAN', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(103, 'MUKASIR', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(104, 'LEXSI', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(105, 'ACHMAD ROMADHON', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(106, 'WAHIB MAHDI HALIDA', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(107, 'MUH. SOFYAN USRA', 'L', '', 'FPt', 'Kejuaraan Nasional (Kejurnas) Futsal Fakultas Peternakan Se-Indonesia (Piala Dekan FAPET-UH Vol.II) yang diselenggarakan oleh Komunitas Olahraga Mahasiswa Peternakan Universitas Hasanuddin (KOMPAS-UH)', '2022', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(108, 'Muhammad Hakim Rianta ', 'L', 'H1A120379 ', 'Hukum', 'Lomba Debat Integrity Law Firm ', '2 Februari 2023', 'Integrity Law Firm', 'Nasional ', 'Juara 1', 'https://drive.google.com/file/d/1L_do_PmyvZrQHBF0imO4HjIh7DWIZLmW/view?usp=drive_link'),
(109, 'Muhammad Artslonga Marone', 'L', 'N1D219112', 'FIB', 'Kejuaraan Nasional Karate', '10-12 Maret 2023', 'Makassar - Sulsel', 'Nasional', 'Juara III Kumite Over +84 Kg Putera', 'https://drive.google.com/file/d/1ijen88Yw9nYRk2UX0X9MeqhociuEWPW_/view?usp=drive_link'),
(110, 'Fani Rahmasari', 'P', 'A1F120008', 'FKIP', 'Kejurnas Kempo', '25-28 Mei 2023', 'Makassar - Sulsel', 'Nasional', 'Perak', 'https://drive.google.com/file/d/1xjHmuckZG2QjvV424fVmGqCykjZ2IY6S/view?usp=drive_link'),
(111, 'Wawan Pratama', 'L', 'A1F121154', 'FKIP', 'Kejurnas Kempo', '25-28 Mei 2023', 'Makassar - Sulsel', 'Nasional', 'Perak', ''),
(112, 'Nina Yayu Tri Agustina Konaw', 'P', 'A1F121084', 'FKIP', 'Kejurnas Kempo', '25-28 Mei 2023', 'Makassar - Sulsel', 'Nasional', 'Perak', 'https://drive.google.com/file/d/1YHuXuEa-D827pQXrLcXDiYph2qDStAB9/view?usp=drive_link'),
(113, 'Aldi Gunawan', 'L', 'B1A119226', 'FEB', 'Kejurnas Kempo', '25-28 Mei 2023', 'Makassar - Sulsel', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1LDv5cZKmR9wCE5BA89GXoV5WrbzXF9i3/view?usp=drive_link'),
(114, 'Ulvi Damayanti', 'P', 'I1C121033', 'Kelautan', 'Kejurnas Kempo', '25-28 Mei 2023', 'Makassar - Sulsel', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1KhEsIcKTKjI88je4Jcu6FI2KnRfLDch8/view?usp=drive_link'),
(115, 'Nurfadillah', 'P', 'C1D122085', 'FISIP', 'Lomba News Anchor Ganna Comunication Acalapati (GCA) 2023', '14 Mei-17 Juni 2023', '', 'Nasional', 'Juara I', ''),
(116, 'Valentino Claus Parera ', 'L', 'H1A121258', 'Hukum ', 'Kompetisi Surat Dakwaan Dies Natalis Ke XI Universitas Islam Negeri Sunan Kalijaga Yogyakarta ', '1 Juni 2023', 'UIN Sunan Kalijaga Yogyakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Rp3vKyPM6eKfuHPnEzRGFqnK0yG1t-vk/view?usp=drive_link'),
(117, 'Ananda Kamilah lamima ', 'P', 'H1A121279', 'Hukum ', 'Kompetisi Surat Dakwaan Dies Natalis Ke XI Universitas Islam Negeri Sunan Kalijaga Yogyakarta ', '1 Juni 2023', 'UIN Sunan Kalijaga Yogyakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1UH75wQjkz6Ard7GV9gPM4Mq1BajiVYZB/view?usp=drive_link'),
(118, 'Faradillah Dwi Cahyani ', 'P', 'H1A122155', 'Hukum ', 'Kompetisi Surat Dakwaan Dies Natalis Ke XI Universitas Islam Negeri Sunan Kalijaga Yogyakarta ', '1 Juni 2023', 'UIN Sunan Kalijaga Yogyakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1YoDjBwKHIorcfsrz4Lj_azuZz1FZaEdq/view?usp=drive_link'),
(119, 'Audina Al Amira Abdiansyah', 'P', 'H1A120016', 'Hukum ', 'Kompetisi Perancangan Undang-Undang Piala Prof Achmad Sodiki Constitutional Law Festival ', '8-10 Sep. 2023', 'Universitas Brawijaya', 'Nasional', 'Juara II', ''),
(120, 'Cita Mentari', 'P', 'H1A120131', 'Hukum ', 'Kompetisi Perancangan Undang-Undang Piala Prof Achmad Sodiki Constitutional Law Festival ', '8-10 Sep. 2023', 'Universitas Brawijaya', 'Nasional', 'Juara II', ''),
(121, 'La Ode Muh. Bangkit Sanjaya', 'L', 'H1A121051', 'Hukum ', 'Kompetisi Perancangan Undang-Undang Piala Prof Achmad Sodiki Constitutional Law Festival ', '8-10 Sep. 2023', 'Universitas Brawijaya', 'Nasional', 'Juara II', ''),
(122, 'Serlyana Saputri', 'P', 'H1A121252', 'Hukum ', 'Kompetisi Perancangan Undang-Undang Piala Prof Achmad Sodiki Constitutional Law Festival ', '8-10 Sep. 2023', 'Universitas Brawijaya', 'Nasional', 'Juara II', ''),
(123, 'Dwi Selviana', 'P', 'H1A122024', 'Hukum ', 'Kompetisi Perancangan Undang-Undang Piala Prof Achmad Sodiki Constitutional Law Festival ', '8-10 Sep. 2023', 'Universitas Brawijaya', 'Nasional', 'Juara II', ''),
(124, 'Abdul Jabaru Hidi', 'L', 'N1D121129', 'FIB', 'Lomba Karya Tulis Ilmiah Sastra', '15 Juli 2023', 'UNSOED Purwokerto', 'Nasional', 'Juara I', ''),
(125, 'Aan Syahputra', 'L', 'N1E121023', 'FIB', 'Lomba Pantun Kategori Putra', '15 Juli 2023', 'UNSOED Purwokerto', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1sOYO29mkttAtigXfdusmrhPSVf6wKOrP/view?usp=drive_link'),
(126, 'Nukhtia Nur Fadilla', 'P', 'N1E121044', 'FIB', 'Lomba Pantun Kategori Putri', '15 Juli 2023', 'UNSOED Purwokerto', 'Nasonal', 'Juara I', 'https://drive.google.com/file/d/1ep2z-nldtkLruJXVI-N-j5_ZkOmA8YqF/view?usp=drive_link'),
(127, 'Mindayanti', 'P', 'N1E121016', 'FIB', 'Lomba Pantun Kategori Putri', '15 Juli 2023', 'UNSOED Purwokerto', 'Nasional', 'Juara III', ''),
(128, 'Adetya Lestari', 'P', 'N1E122010', 'FIB', 'Lomba Pantun Kategori Putri', '15 Juli 2023', 'UNSOED  Purwokerto', 'Nasional', 'Juara IV', 'https://drive.google.com/file/d/1T-ps0g6ITUFmAPRcL-xI4dSuULXiUigF/view?usp=drive_link'),
(129, 'Kius Rianto', 'P', 'N1E121037', 'FIB', 'Lomba Pantun Kategori Putra', '15 Juli 2023', 'UNSOED  Purwokerto', 'Nasional', 'Juara IV', 'https://drive.google.com/file/d/1naW-Eo4g0HSDOF-oWadA7u_82puHSEKV/view?usp=drive_link'),
(130, 'Aan Syahputra', 'L', 'N1E121023', 'FIB', 'Lomba Berbalas Pantun Kelompok Daring', '14 Juni 2023', 'Universitas Negeri Jakarta', 'Nasional', 'Juara IV', ''),
(131, 'Nukhtia Nur Fadilla', 'P', 'N1E121044', 'FIB', 'Lomba Berbalas Pantun Kelompok Daring', '14 Juni 2023', 'Universitas Negeri Jakarta', 'Nasional', 'Juara IV', ''),
(132, 'Dea Ananda', 'P', 'N1D122065', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1fUZcepVwRf8_pxi7NSHWHiWYxVT-_Lwc/view?usp=drive_link'),
(133, 'Farhan Khaerus Sadiq', 'L', 'N1D222048', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1tkUItZjxoYqAp3SNg40KVxOHtdgS-Yn1/view?usp=drive_link'),
(134, 'Fian Wildi Yanti', 'P', 'N1D122074', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1hVq7iVs159vEWmHHJjU0fWBVtKhI5V1z/view?usp=drive_link'),
(135, 'Lala Zalzabilla Dinda Aria', 'P', 'N1D222010', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1RXMQgc-GX5_mLXakQ4X8hzB8xepuGlPc/view?usp=drive_link'),
(136, 'Dwi Rahma Indah Rusli', 'P', 'N1D122003', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1qbwkjIoBfSSU9En14Thq6scWcUM63RT2/view?usp=drive_link'),
(137, 'Ady Lasmana Putra', 'L', 'N1D122056', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1K6Fixtky1xeM31nK2whBY5ZlsITaxeP4/view?usp=drive_link'),
(138, 'Luh Sri Kusuma Dewi', 'P', 'N1D222020', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1UPkZVBTNIerZPmtfeEg-MjSCZOSXIiNf/view?usp=drive_link'),
(139, 'Miuhammad Ifan', 'L', 'N1D122010', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1dxGYTwLkqLzm_UWzofSLY1GS-fBIkdW3/view?usp=drive_link'),
(140, 'Nur Fitra Asisyah', 'P', 'N1D122094', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1iRCjw2zfrhTu1kGYo62iusTww2FEHlnX/view?usp=drive_link'),
(141, 'S. Filemon Vandits Sindupa', 'L', 'N1D219028', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1vMq0wozOjnRDu3Kik3MxBuZafzORK5FG/view?usp=drive_link'),
(142, 'Muh. Alif Rizky', 'L', 'N1D117030', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1YrbQrLRLjbp_G5buMRE_YVm0BzK3BX7B/view?usp=drive_link'),
(143, 'Tegar ', 'L', 'N1D122074', 'FIB', 'Vokal Grup Dalam Festival Sastra dan Seni Mahasiswa ', '5 Juli 2023', 'Universitas Negeri Gorontalo', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Wxrl4wzGMKpv5TRbNjEHPRanvOybwjiL/view?usp=drive_link'),
(144, 'Syawaldin', 'L', 'A1F121150', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1277mDbz45Ibw6KFLrmnDVVp2HfX-YIJX/view?usp=drive_link'),
(145, 'Amaludin', 'L', 'A1F219039', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1DxfWZ94EfdWj1PSkdd_R3_o3QaNR8Rzg/view?usp=drive_link'),
(146, 'Kefin', 'L', 'A1F222079', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1RqK5_wou10ACTM_nx0opyobmBK_d2o_S/view?usp=drive_link'),
(147, 'La Ode Muh. Kadir', 'L', 'A1F222010', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1jEGau5SJqucar26gNmb16ByQnaCZYZGX/view?usp=drive_link'),
(148, 'Yayan Andika Pagala', 'L', 'A1F119', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1xl7cJrJ91UKgnmSwbZalxcnXoDYNGiFO/view?usp=drive_link'),
(149, 'Ali Supra yadin', 'L', 'A1F219', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/10X_AdDDUrLZjCbSOhhUXb4MqYmbmumqS/view?usp=drive_link'),
(150, 'Ingsan', 'L', 'A1F122063', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1dRJLTBke58kFAvCwKWVbaWxaAYjHpmnz/view?usp=drive_link'),
(151, 'Syawal Rizki', 'L', 'A1L123103', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1xIIpH18s9OVtpVQxbJaSjDn06Uqlq_d8/view?usp=drive_link'),
(152, 'Sultan', 'L', 'A1F119124', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1vZdgglUkG-C4QLBNPemTLdXx4U_I5oHH/view?usp=drive_link'),
(153, 'La Ode Muh. Saprizal', 'L', 'A1F122028', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1CT6674t5-_erepu7AMp515Tapw5C3fZl/view?usp=drive_link'),
(154, 'Firman Ardiansyah', 'L', 'C1D122125', 'FISIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1D4i_Ci1sfP-H252o6KI5RpaRST-fYuR6/view?usp=drive_link'),
(155, 'Saldi', 'L', 'C1B121152', 'FISIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Er84CXX01d688C5mUprGxwM5bhkuJ9VG/view?usp=drive_link'),
(156, 'Rusdi', 'L', 'C1E120062', 'FISIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1vWsc_D83MtE-Bo1xGKY_IrpS-PUuGZig/view?usp=drive_link'),
(157, 'Muh. Ulifie Yanto', 'L', 'C1D122169', 'FISIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Ws832wKIjWrMq1eCInlyVwyir9erFHrm/view?usp=drive_link'),
(158, 'Munardi', 'L', 'C1D12087', 'FISIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Vzv79OhWYFKtbakeDzuUO3ggtKDcUVEI/view?usp=drive_link'),
(159, 'Anca Febrian', 'L', 'H1A122114', 'HUKUM', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1WfhBd3wdCyWny8dz5rgi2F1mojPl4me6/view?usp=drive_link'),
(160, 'Savhiq Erbakan', 'L', 'H1A120227', 'HUKUM', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/115v5SF91DdyZsqfAZs2XpBIdoGmUmm95/view?usp=drive_link'),
(161, 'Rolis Agustam', 'L', 'B1C121300', 'FEB', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1PvHilV7TEg1ndrVa8qsMOpA1ODGgkajH/view?usp=drive_link'),
(162, 'Lucy Dinar', 'L', 'B1C120272', 'FEB', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1lAQbzd7PwaVlpl2TNS2VXMKyx32e3MtF/view?usp=drive_link'),
(163, 'Ijal Fajrin', 'L', 'M1A119051', 'FHIL', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1_ynEA2B2C9_0Q62TGJjvUtCrgZYsIoE_/view?usp=drive_link'),
(164, 'Imran Nasution', 'L', 'N1E123016', 'FIB', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', 'https://drive.google.com/file/d/1Hb4e3YVTCIv_QDomOpYK2VNRArJDioiQ/view?usp=drive_link'),
(165, 'Rahmat', 'L', 'H1A120411', 'HUKUM', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', ''),
(166, 'Mufri Ivansyah', 'L', 'A1F123029', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', ''),
(167, 'La Ode Muh. Hasda Daud', 'L', 'A1F220005', 'FKIP', 'Kejuaraan Nasional Sepak Bola Piala Rektor Universitas Ahmad Dahlan Jokjakarta', '20-30 Oktober 2023', 'Universitas Ahmad Dahlan Jokjakarta', 'Nasional', 'Juara I', ''),
(168, 'La Arjun', '?L', 'A1F121053', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Atletik nomor 1.500 m', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Emas', 'https://drive.google.com/file/d/11pL1WgTIsMCAo7rrSZgMtttfzGvyB32r/view?usp=drive_link'),
(169, 'La Arjun', '?L', 'A1F121053', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Atletik nomor 800 m', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Emas', 'https://drive.google.com/file/d/1KXTx0rTVfYpniPFYCYkoqJWOrmrS8UHT/view?usp=drive_link'),
(170, 'Aldi Gunawan', 'L', 'B1A119226', 'FEB', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Kempo', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Emas', 'https://drive.google.com/file/d/1aDPoaI8YzdCYuK1czWA9NPO5AAagV7UH/view?usp=drive_link'),
(171, 'Fani Rahmasari', 'P', 'A1F120008', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Kempo', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/19e6p3RXuPKzkF8VnlSMxa4hb2qGz2g8Z/view?usp=drive_link'),
(172, 'Yasir Nur Ihkwanudin', 'L', 'A1F122039', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Pencak Silat', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1fhqxF4EUcXnKPNzobmciL8UKQ6ZL_Apc/view?usp=drive_link'),
(173, 'Muh.Imran Barakati', 'L', 'B1B120280', 'FEB', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Karate', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1KF0BoOBQCKAGRJMIooV7oad4pmwDa9Oj/view?usp=drive_link'),
(174, 'Siti Mawaddah', 'P', 'A1F122099', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Karate', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1WP7XbsGVDg3rZK_8zcMkNt_qL-_fPZ7k/view?usp=drive_link'),
(175, 'Nurul Indria Putri', 'P', 'N1D222074', 'FIB', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Karate', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1PBM3gbU5PdWFKhn_HdDbHYqOCRGA_1R_/view?usp=drive_link'),
(176, 'Cynthia Andi Gella', 'P', 'H1A120133', 'Hukum', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Karate', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1Bd9bR6RJ60KZG6MOOyzJycOIDsQkdFzT/view?usp=drive_link'),
(177, 'Yoga Yunandar', 'L', 'M1B122114', 'FHIL', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Gulat', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1_2XYxmTiN-7a46Z2GfNoLI1Y2aRr1pJk/view?usp=drive_link'),
(178, 'Laode Ilam Syahril', 'L', 'A1F121020', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Sepak Takraw', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1GZ5q0sP47py76AWRq355NF-8RGdgEQnw/view?usp=drive_link'),
(179, 'Muh.Fajar Shadiq', 'L', 'A1F221066', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Sepak Takraw', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1rijNwJhXFdf2NCKa9gXwKG_hnep1pAz5/view?usp=drive_link'),
(180, 'Ahmad Amal', 'L', 'A1F122002', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Sepak Takraw', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1tnVsIkOcg7LqBN-ulSLLV2TWrrDOvKGc/view?usp=drive_link'),
(181, 'Muhrim Muhammad', 'L', 'A1F221142', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Sepak Takraw', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1lixCpR7tD49_ScG33GnqnwQbw8P12QCI/view?usp=drive_link'),
(182, 'Gilang Maulana', 'L', 'A1F123022', 'FKIP', 'POMNAS XVIII 2023 di Kalimantan Selatan Cabor Sepak Takraw', '12-22 Nov.2023', 'Kalimantan Selatan', 'Nasional', 'Perunggu', 'https://drive.google.com/file/d/1ZfTUg4rY8rb3VQgdz8KqVMbt6_t1bSSp/view?usp=drive_link'),
(183, 'HIRARAHMA YUTIKA', 'P', '', 'Hukum ', 'Kejuaraan Softball Beregu Putri, 2023', '2023', 'Makassar - Sulsel', 'Internasional', 'Juara 2', ''),
(184, 'Deliana Palaga', 'P', '', 'Teknik', 'Kejuaraan Softball Beregu Putri, 2023', '2023', 'Makassar - Sulsel', 'Internasional', 'Juara 2', ''),
(185, 'FAATIR MUHAMMAD Y.I', 'L', '', 'Hukum ', 'Kejuaraan Softball Beregu Putra, 2023', '2023', 'Makassar - Sulsel', 'Nasional', 'Juara 2', ''),
(186, 'MINDAYANTI ', 'P', '(N1E121016)', 'FIB', 'Lomba Pantun', '2023', '', 'Nasional', 'JUARA 3', 'https://drive.google.com/file/d/1CjGjnp3D5GFxndDtHMR1acTV-AeN3Veq/view?usp=drive_link'),
(187, 'AAN SYAHPUTRA ', 'L', '(N1E121023)', 'FIB', 'Lomba Pantun', '2023', '', 'Nasional', 'JUARA 1', 'https://drive.google.com/file/d/1X-xoB-ixazqYutqe9GfUVI7kRJ1eS2mj/view?usp=drive_link'),
(188, 'MUKHTIA NUR FADILLA ', 'L', '(N1E121044)', 'FIB', 'Lomba Pantun', '2023', '', 'Nasional', 'JUARA 1', 'https://drive.google.com/file/d/1Kb9C0C-Znqq5WHXK4tatlvS_vlFeom9y/view?usp=drive_link'),
(189, 'Nurfadillah', 'P', '', 'FISIP', 'FIESTIVAL 2023 yaitu News Anhor Competitian', '2 Maret 2023', 'Surakarta, ', 'Nasional', 'Juara 1', ''),
(190, 'Nurfadillah', 'P', '', 'FISIP', 'Dalam Event \"Langit Kesustraan\" Lomba Pembaca Berita Tingkat Nasional', '4 Februari 2023', '', 'Nasional', 'Juara 1', ''),
(191, 'Nurfadillah', 'P', '', 'FISIP', 'Duta Genre Kabupaten Bombana Tahun 2023', '6 Februari 2023', '', 'Nasional', 'juara 1', ''),
(192, 'Nurfadillah', 'P', '', 'FISIP', 'Sebagai Juara 1 Voice Over Competition Public Annauncer Radio Dy 10 2023', '2023', '', 'Nasional', 'juara 1', ''),
(193, 'Keith Xsandawitz Suharmin', 'L', '', 'FISIP', 'Olimpiade Sains Tingkat Nasional yang bertajuk INDONESIA OLYMPIAD ON SCIENCE (IOS) 2023', '12 Maret 2023', '', 'Nasional', 'Perak', ''),
(194, 'Rastina', 'P', '', 'MIPA', 'Gebyar Ramadhan Statistika/Lomba Tartil Al-Qur\'an Online Tingkat Nasional', '8-Apr-23', '', 'Nasional', 'Juara I', ''),
(195, 'Abdul Bukit Jalil ', 'L', 'I1C121001', 'FPIK', 'Kompetisi Esai Ilmiah Nasional 2023', '2023', '', 'Nasional', 'Juara Dua', ''),
(196, 'ULVI DAMAYANTI ', 'P', 'I1C121033', 'FPIK', 'Kejuaraan Nasional Shorinji Kempo Rektor Unhas Cup 2023', '2023', 'Makassar - Sulsel', 'Nasional', 'Juara 3', ''),
(197, 'Muh. Albin Khoiran', 'L', '', 'Teknik', 'Kejurnas Pencak Silat', '2023', 'Makassar - Sulsel', 'Nasional', 'Juara 3', ''),
(198, 'Devitrianna', 'P', 'B1C119012', 'FEB', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(199, 'Asman Herdani ', 'L', 'B1B121010', 'FEB', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(200, 'Muh. Imran?Konong?Barakati', 'L', 'B1B120280', 'FEB', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(201, 'M. Musashi Andi Gella ', 'L', 'H1A119254', 'FH', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(202, 'Isra Miranti ', 'P', 'H1A119046', 'FH', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(203, 'Irgiansyah', 'L', 'H1A122298', 'FH', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(204, 'Muhamad Jabar Hamidan', 'L', 'G2E121017', 'PPs', 'International university karate championship', '17-19 Maret 2023', 'Solo, Jawa Tengah', 'Internasional', 'Perunggu', ''),
(205, 'Fitra Siu', 'P', 'A1F120010', 'FKIP', 'Sea Games Cambodia 2023', '05-17 Mei 2023', 'Cambodia', 'Internasional', 'Perunggu', ''),
(206, 'Fitra Siu', 'P', 'A1F120010', 'FKIP', 'King\'s Cup Thailand (Kejuaraan Dunia Sepak Takraw) 2023', '06-16 Juli 2023', 'Thailand', 'Internasional', 'Perunggu', 'https://drive.google.com/file/d/1PpGb0sewiJk3YM574Fo4LC3xQKOZoBp4/view?usp=drive_link'),
(207, 'Fitra Siu', 'P', 'A1F120010', 'FKIP', 'Asian Games 2023', '28/9 - 08/10-2023', 'Hangzhou - China', 'Internasional', 'Perunggu', 'https://drive.google.com/file/d/1QvRDxRNMOIp5NQ31sSLNeIayp9TqRtfi/view?usp=drive_link'),
(208, 'Devitrianna', 'P', 'B1C119012', 'FEB', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Emas', 'https://drive.google.com/file/d/12DH2zLcXWNHvIGqNfwkvA-aUKLZ1qH8M/view?usp=drive_link'),
(209, 'Asman Herdani ', 'L', 'B1B121010', 'FEB', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Emas', 'https://drive.google.com/file/d/1D_RV-mC7yH7qWiFUsCu2YtYhtR9qj-PE/view?usp=drive_link'),
(210, 'Muh. Imran?Konong?Barakati', 'L', 'B1B120280', 'FEB', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Perak', 'https://drive.google.com/file/d/1RLfIekhGdI_vB_9Q9pHGnnrTrfHvo64y/view?usp=drive_link'),
(211, 'Isra Miranti ', 'P', 'H1A119046', 'FH', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Perak', 'https://drive.google.com/file/d/16hrisPV3NOR5HUTxz6KbRdKjszpV-jIQ/view?usp=drive_link'),
(212, 'Muhamad Jabar Hamidan', 'L', 'G2E121017', 'PPs', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Emas', 'https://drive.google.com/file/d/1zCmUMAU3rVU3PHndd5p66mJvVEj9edlL/view?usp=drive_link'),
(213, 'Ahmad Zaki Sukiman', '', '', '', 'Wimaya Internasional Karate Championship 2023', '15-17 desember 2023', 'Yogyakarta - Indonesia ', 'Internasional', 'Perunggu', 'https://drive.google.com/file/d/1FDzWYN6Os31YXthpR3NAjdzBwRf-9gri/view?usp=drive_link');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produktivitas_penelitian`
--

CREATE TABLE `produktivitas_penelitian` (
  `id` int(11) NOT NULL,
  `sumber_biaya` varchar(245) NOT NULL,
  `ts1` int(11) NOT NULL,
  `ts2` int(11) NOT NULL,
  `ts3` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produktivitas_penelitian`
--

INSERT INTO `produktivitas_penelitian` (`id`, `sumber_biaya`, `ts1`, `ts2`, `ts3`, `jumlah`) VALUES
(1, 'Perguruan tinggi atau mandiri', 83, 94, 108, 'NL = 285'),
(2, 'Lembaga dalam negeri (diluar PT)', 150, 187, 183, 'NN =520'),
(3, 'Lembaga luar negeri', 5, 15, 17, 'NI =37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produktivitas_penelitianpkm`
--

CREATE TABLE `produktivitas_penelitianpkm` (
  `id` int(11) NOT NULL,
  `sumber_biaya` varchar(245) NOT NULL,
  `ts1` int(11) NOT NULL,
  `ts2` int(11) NOT NULL,
  `ts3` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produktivitas_penelitianpkm`
--

INSERT INTO `produktivitas_penelitianpkm` (`id`, `sumber_biaya`, `ts1`, `ts2`, `ts3`, `jumlah`) VALUES
(1, 'Perguruan tinggi atau mandiri', 337, 246, 505, 'NL = 1.088'),
(2, 'Lembaga dalam negeri (diluar PT)', 15, 13, 11, 'NN = 39'),
(3, 'Lembaga luar negeri', 0, 0, 0, 'NI = 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_jasa`
--

CREATE TABLE `produk_jasa` (
  `id` int(11) NOT NULL,
  `nama_pj` varchar(245) NOT NULL,
  `desk_pj` varchar(245) NOT NULL,
  `tingkat_kestek` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_ps` int(11) NOT NULL,
  `program` varchar(245) NOT NULL,
  `program_studi` varchar(245) NOT NULL,
  `pr_akreditasi` varchar(245) NOT NULL,
  `no_sk` varchar(245) NOT NULL,
  `tgl_kadaluarsa` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_ps`, `program`, `program_studi`, `pr_akreditasi`, `no_sk`, `tgl_kadaluarsa`) VALUES
(2, 'Doktor', 'Ilmu Pertanian', 'Terakreditasi A', '12890/SK/BAN-PT/Ak-PPJ/D/XII/2021, Tanggal 4 April 2028', '12/21/2026'),
(3, 'Doktor', 'Ilmu Ekonomi', 'Terakreditasi BAIK SEKALI', '1195/SK/BAN-PT/Ak.Ppj/D/IV/2023, Tanggal 4 April 2028', '4/4/2028'),
(4, 'Magister', 'Kajian Budaya', 'Terakreditasi B', '733/SK/BAN-PT/Akred/M/IV/2019, Tanggal  9 April 2024', '4/9/2024'),
(5, 'Magister', 'Perencanaan dan Pengembangan Wilayah', 'Terakreditasi B', '2624/SK/BAN-PT/Ak-PPJ/M/IV/2020, Tanggal 29 Maret 2025', '3/29/2025'),
(6, 'Magister', 'Pendidikan Bahasa dan Sastra Indonesia', 'Terakreditasi B', '2350/SK/BAN-PT/Ak-PPJ/M/IV/2020, Tanggal 7 April 2025', '4/7/2025'),
(7, 'Magister', 'Administrasi Pembangunan', 'Terakreditasi B', '4195/SK/BAN-PT/Ak-PPJ/M/VII/2020, Tanggal 3 Mei 2025', '5/3/2025'),
(8, 'Magister', 'Pendidikan IPA', 'Terakreditasi B', '4185/SK/BAN-PT/Ak-PPJ/M/VII/2020, Tanggal 31 Mei 2025', '5/31/2025'),
(9, 'Magister', 'Geografi', 'Terakreditasi B', '3549/SK/BAN-PT/Akred/M/VI/2020, Tanggal 23 Juni 2025', '6/23/2025'),
(10, 'Magister', 'Agribisnis', 'Terakreditasi UNGGUL', '3841/SK/BAN-PT/Ak.KP/M/IX/2023, Tanggal 21 Juli 2025', '7/21/2025'),
(11, 'Magister', 'Agronomi', 'Terakreditasi UNGGUL', '3933/SK/BAN-PT/Ak.KP/M/X/2023, Tanggal 11 Agustus 2025', '8/11/2025'),
(12, 'Magister', 'Fisika', 'Terakreditasi B', '6125/SK/BAN-PT/Akred/M/IX/2020, Tanggal 30 September 20025', '9/30/2025'),
(13, 'Magister', 'Ilmu Perikanan', 'Terakreditasi A', '6210/SK/BAN-PT/Akred/M/X/2020, Tanggal 6 Oktober 2025', '10/6/2025'),
(14, 'Magister', 'Peternakan', 'Terakreditasi A', '6397/SK/BAN-PT/Akred/M/X/2020, tanggal 13 Oktober 2025', '10/13/2025'),
(15, 'Magister', 'Ilmu Manajemen', 'Terakreditasi UNGGUL', '2587/SK/BAN-PT/AK-ISK/M/IV/2022, Tanggal 20 Oktober 2025', '10/20/2025'),
(16, 'Magister', 'Hukum', 'Terakreditasi B', '7266/SK/BAN-PT/Akred/M/XI/2020, Tanggal 11 November 2025', '11/11/2025'),
(17, 'Magister', 'Magister Keguruan Bahasa', 'Terakreditasi B', '7759/SK/BAN-PT/Akred/M/XI/2020, Tanggal 24 Noovember 2025', '11/24/2025'),
(18, 'Magister', 'Kimia', 'Terakreditasi B', '7873/SK/BAN-PT/Akred/M/XII/2020, tanggal 1 Desember 2025', '12/1/2025'),
(19, 'Magister', 'Pendidikan Seni', 'Terakreditasi B', '10032/SK/BAN-PT/Akred/M/VIII/2021, tanggal 3 Februari 2026', '2/3/2026'),
(20, 'Magister', 'Pendidikan Ilmu Pengetahuan Sosial', 'Terakreditasi UNGGUL', '9360/SK/BAN-PT/Akred/M/VII/2021, Tanggal 7 Juli 2026 ', '7/7/2026'),
(21, 'Magister', 'Manajemen', 'Terakreditasi B', '14024/SK/BAN-PT/Ak-PPJ/M/XII/2021, tanggal 11 Januari 20027', '1/11/2027'),
(22, 'Magister', 'Kesehatan Masyarakat', 'Terakreditasi BAIK SEKALI', '0020/LAM-PTKes/Akr/Mag/I/2022, Tanggal 13 Januari 2027', '1/13/2027'),
(23, 'Magister', 'Pendidikan Matematika', 'Terakreditasi BAIK SEKALI', '5902/SK/BAN-PT/Ak.Ppj/M/IX/2022, Tanggal 6 September 2027', '9/6/2027'),
(24, 'Magister', 'Manajemen Rekayasa', 'Terakreditasi BAIK SEKALI', '0227/SK/LAM Teknik/AM/XII/2022, Tanggal 20 Desember 2027', '12/20/2027'),
(25, 'Magister', 'Ilmu Ekonomi', 'Terakreditasi BAIK SEKALI', '1499/SK/BAN-PT/Ak.Ppj/M/IV/2023', '4/18/2028'),
(26, 'Magister', 'Jurusan Akuntansi', 'Tidak Terakreditasi', '', ''),
(27, 'Sarjana', 'Manajemen', 'Terakreditasi UNGGUL', '11896/SK/BAN-PT/AK-ISK/S/X/2021, Tanggal 1 November 2025 ', '11/1/2025'),
(28, 'Sarjana', 'Akuntansi', 'Terakreditasi BAIK SEKALI', ' 088/DE/A.5/AR.10/XII/2022, Tanggal 22 Desember 2027', '12/22/2027'),
(29, 'Sarjana', 'Ekonomi Pembangunan', 'Terakreditasi UNGGUL', '216/DE/A.5/AR.10/II/2023, Tanggal 26 Februari 2028', '2/26/2028'),
(30, 'Sarjana', 'Farmasi', 'Terakreditasi BAIK SEKALI', ' 0961/LAM-PTKes/Akr/Sar/XI/2022, Tanggal 29 Desember 2026', '12/29/2026'),
(31, 'Sarjana', 'Ilmu Hukum', 'Terakreditasi A', '7344/SK/BAN-PT/Akred/S/XI/2020, Tanggal 17 November 2025', '11/17/2025'),
(32, 'Sarjana', 'Ilmu Lingkungan', 'Terakreditasi BAIK SEKALI', '2883/SK/BAN-PT/AK-ISK/S/V/2022, Tanggal 9 September 2025', '9/9/2025'),
(33, 'Sarjana', 'Kehutanan', 'Terakreditasi BAIK', '', ''),
(34, 'Sarjana', 'Sastra Indonesia', 'Terakreditasi B', '4428/SK/BAN-PT/Ak-PPJ/S/VIII/2020, tanggal 11 April 2025', '4/11/2025'),
(35, 'Sarjana', 'Ilmu Sejarah', 'Terakreditasi BAIK SEKALI', ' 3852/SK/BAN-PT/Ak.KP/S/IX/2023, Tanggal 8 September 2025', '9/8/2025'),
(36, 'Sarjana', 'Tradisi Lisan', 'Terakreditasi A', '5939/SK/BAN-PT/Akred/S/IX/2020, Tanggal 23 September 2025 ', '9/23/2025'),
(37, 'Sarjana', 'Sastra Inggris', 'Terakreditasi B', '6977/SK/BAN-PT/Akred/S/XI/2020, Tanggal 3 November 2025', '11/3/2025'),
(38, 'Sarjana', 'Arkeologi', 'Terakreditasi A', '7156/SK/BAN-PT/Akred/S/XI/2020, tanggal 10 November 2025', '11/10/2025'),
(39, 'Sarjana', 'Antropologi', 'Terakreditasi UNGGUL', '3853/SK/BAN-PT/Ak.KP/S/IX/2023, tanggal 10 November 2025', '11/10/2025'),
(40, 'Sarjana', 'Sastra Prancis', 'Terakreditasi B', '3079/SK/BAN-PT/Akred/S/V/2021, Tanggal 19 November 2025', '11/19/2025'),
(41, 'Sarjana', 'Ilmu Komunikasi', 'Terakreditasi A', '497/SK/BAN-PT/Akred/S/III/2019, Tanggal 26 Maret 2024', '3/26/2024'),
(42, 'Sarjana', 'Sosiologi', 'Terakreditasi A', '693/SK/BAN-PT/Akred/S/IV/2019, Tanggal 9 Maret 2024 ', '4/9/2024'),
(43, 'Sarjana', 'Ilmu Politik', 'Terakreditasi B', '1626/SK/BAN-PT/Akred/S/V/2019, Tanggal 21 Mei 2024', '5/21/2024'),
(44, 'Sarjana', 'Ilmu Pemerintahan', 'Terakreditasi BAIK', '6188/SK/BAN-PT/Ak.KP/S/IX/2022, tanggal 21 Juli 2025', '7/21/2025'),
(45, 'Sarjana', 'Ilmu Kesejahteraan Sosial', 'Terakreditasi A', '6403/SK/BAN-PT/Akred/S/X/2020, Tanggal 13 Oktober 2025', '10/13/2025'),
(46, 'Sarjana', 'Perpustakaan dan Ilmu Informasi', 'Terakreditasi BAIK', '9438/SK/BAN-PT/Akred/S/VII/2021, Tanggal 13 Juli 2026 ', '7/13/2026'),
(47, 'Sarjana', 'Jurnalistik', 'Terakreditasi BAIK SEKALI', '10450/SK/BAN-PT/Akred/S/VIII/2021, Tanggal 31 Agustus 2026 ', '8/31/2026'),
(48, 'Sarjana', 'Administrasi Bisnis', 'Terakreditasi B', '564/SK/BAN-PT/Ak-PPJ/S/I/2022, Tanggal 28 Desember 2026', '12/28/2026'),
(49, 'Sarjana', 'Ilmu Administrasi Negara', 'Terakreditasi BAIK SEKALI', '654/SK/BAN-PT/Ak/S/II/2023, Tanggal 27 Februari 2028', '2/27/2028'),
(50, 'Sarjana', 'Kedokteran', 'Terakreditasi BAIK SEKALI', '0638/LAM-PTKes/Akr/Sar/VIII/2022, Tanggal 11 Agustus 2027', '8/11/2027'),
(51, 'Sarjana', 'Keperawatan', 'Terakreditasi BAIK', '0763/LAM-PTKes/Akr/Sar/X/2023, Tanggal26 Oktober 2028', '10/26/2028'),
(52, 'Sarjana', 'Kesehatan Masyarakat', 'Terakreditasi B', '0150/LAM-PTKes/Akr/Sar/III/2019, Tanggal 22 Maret 2024', '3/22/2024'),
(53, 'Sarjana', 'Gizi', 'Terakreditasi BAIK', '1078/LAM-PTKes/Sar/XII/2022, tanggal  16 Desember 2027', '12/16/2027'),
(54, 'Sarjana', 'Pendidikan Akuntansi', 'Terakreditasi BAIK', '7440/SK/BAN-PT/Ak.KP/S/X/2022, Tanggal 9 April 2024', '4/9/2024'),
(55, 'Sarjana', 'Psikologi', 'Terakreditasi BAIK', '7479/SK/BAN-PT/Ak.KP/S/X/2022, Tanggal 30 Juli 2024', '7/30/2024'),
(56, 'Sarjana', 'Pendidikan Fisika', 'Terakreditasi BAIK SEKALI', '2607/SK/BAN-PT/AK-ISK/S/IV/2022, Tanggal 6 Agustus 2024', '8/6/2024'),
(57, 'Sarjana', 'Pendidikan Bahasa dan Sastra Indonesia', 'Terakreditasi B', '2952/SK/BAN-PT/Akred/S/VIII/2019, Tanggal 8 Juli 2024', '8/7/2024'),
(58, 'Sarjana', 'Pendidikan Bahasa Inggris', 'Terakreditasi B', '3989/SK/BAN-PT/Akred/S/X/2019, Tanggal 22 Oktober 2024', '10/22/2024'),
(59, 'Sarjana', 'Pendidikan Geografi', 'Terakreditasi BAIK SEKALI', '2900/SK/BAN-PT/AK-ISK/S/V/2022, Tabeel 31 Mei 2025', '5/31/2025'),
(60, 'Sarjana', 'Pendidikan Pancasila dan Kewarganegaraan', 'Terakreditasi B', '4724/SK/BAN-PT/Ak-PPJ/S/VIII/2020, Tanggal 16 Agustus 2025', '8/16/2025'),
(61, 'Sarjana', 'Pendidikan Biologi', 'Terakreditasi UNGGUL', '2589/SK/BAN-PT/AK-ISK/S/IV/2022, Tanggal 9 September 2025', '9/9/2025'),
(62, 'Sarjana', 'Bimbingan dan Konseling', 'Terakreditasi B', '6128/SK/BAN-PT/Akred/S/IX/2020, tanggal 30 September 2025', '9/30/2025'),
(63, 'Sarjana', 'Pendidikan Matematika', 'Terakreditasi UNGGUL', '2878/SK/BAN-PT/AK-ISK/S/V/2022, tanggal 8 November 2025', '11/8/2025'),
(64, 'Sarjana', 'Pendidikan Kimia', 'Terakreditasi BAIK SEKALI', '2601/SK/BAN-PT/AK-ISK/S/IV/2022, Tanggal 16 Februari 2026', '2/16/2026'),
(65, 'Sarjana', 'Pendidikan Ekonomi', 'Terakreditasi BAIK SEKALI', '1132/SK/BAN-PT/Akred/S/III/2021, tanggal 2 Maret 2026', '3/2/2026'),
(66, 'Sarjana', 'Ilmu Keolahragaan', 'Terakreditasi BAIK', '1483/SK/BAN-PT/Akred/S/III/2021, tanggal 16 Maret 2026 ', '3/16/2026'),
(67, 'Sarjana', 'Pendidikan Sejarah', 'Terakreditasi B', '1585/SK/BAN-PT/Ak-PPJ/S/III/2021, Tanggal 18 Maret 2026', '3/18/2026'),
(68, 'Sarjana', 'Pendidikan Jasmani, Kesehatan dan Rekreasi', 'Terakreditasi BAIK', '1602/SK/BAN-PT/Akred/S/III/2021, tanggal 23 Maret 2026', '3/23/2026'),
(69, 'Sarjana', 'Pendidikan Guru Sekolah Dasar', 'Terakreditasi BAIK SEKALI', '754/SK/LAMDIK/Ak/S/VII/2023, tanggal 17 Juli 2028', '7/17/2028'),
(70, 'Sarjana', 'Pendidikan Guru Pendidikan Anak Usia Dini', 'Terakreditasi BAIK SEKALI', '754/SK/LAMDIK/Ak/S/VVII/2023, Tanggal 18  Juli 2028', '7/18/2028'),
(71, 'Sarjana', 'Pendidikan Vokasional Teknik', 'Tidak Terakreditasi', '', ''),
(72, 'Sarjana', 'Bioteknologi', 'Terakreditasi B', '2435/SK/BAN-PT/Akred/S/VII/2019, tanggal 16 Juli 2024 ', '7/16/2024'),
(73, 'Sarjana', 'Statistika', 'Terakreditasi B', '2744/SK/BAN-PT/Akred/S/VII/2019, tanggal 30 Juli 2024', '7/30/2024'),
(74, 'Sarjana', 'Ilmu Komputer', 'Terakreditasi BAIK', '7280/SK/BAN-PT/Ak.KP/S/X/2022, tangal 30 Juli 2024', '7/30/2024'),
(75, 'Sarjana', 'Oseanografi', 'Terakreditasi B', '3231/SK/BAN-PT/Akred/S/VIII/2019, Tanggal 27 Agustus 2024 ', '8/27/2024'),
(76, 'Sarjana', 'Geografi', 'Terakreditasi B', '2351/SK/BAN-PT/Ak-PPJ/S/IV/2020, Tanggal 7 April 2025 ', '4/7/2025'),
(77, 'Sarjana', 'Matematika', 'Terakreditasi A', '2855/SK/BAN-PT/Ak-PPJ/S/V/202, tanggal 5 Mei 20250', '5/5/2025'),
(78, 'Sarjana', 'Teknik Pertambangan', 'Terakreditasi BAIK', '9886/SK/BAN-PT/Ak.KP/S/XI/2022, tanggal 10 Mei 2025', '5/10/2025'),
(79, 'Sarjana', 'Teknik Geofisika', 'Terakreditasi B', '4301/SK/BAN-PT/Ak-PPJ/S/VII/2020, Tanggal 25 Juli 2025', '7/25/2025'),
(80, 'Sarjana', 'Teknik Geologi', 'Terakreditasi BAIK', '9638/SK/BAN-PT/Akred/S/VII/2021, Tanggal 21 Juli 2026 ', '7/21/2026'),
(81, 'Sarjana', 'Fisika', 'Terakreditasi UNGGUL', '017/SK/LAMSAMA/Akred/S/XII/2022, Tanggal 13 Desember 2027', '12/13/2027'),
(82, 'Sarjana', 'Biologi', 'Terakreditasi BAIK SEKALI', '001/SK/LAMSAMA/Akred/S/II/2023, tanggal 16 Februari 2028', '2/16/2028'),
(83, 'Sarjana', 'Kimia', 'Terakreditasi UNGGUL', '023/SK/LAMSAMA/Akred/S/IV/2023, Tanggal 17 April 2028', '4/17/2028'),
(84, 'Sarjana', 'Proteksi Tanaman', 'Terakreditasi B', '140/SK/BAN-PT/Akred/S/II/2019, tangga 19 Februari 2024', '2/19/2024'),
(85, 'Sarjana', 'Ilmu Tanah', 'Terakreditasi B', '266/SK/BAN-PT/Akred/S/III/2019, Tanggal 5 Maret 2024', '3/5/2024'),
(86, 'Sarjana', 'Penyuluhan Pertanian', 'Terakreditasi B', '772/SK/BAN-PT/Akred/S/IV/2019, Tanggal 9 Maret 2024', '4/9/2024'),
(87, 'Sarjana', 'Agribisnis', 'Terakreditasi UNGGUL', '2184/SK/BAN-PT/AK-ISK/S/IV/2022, Tanggal 21 Mei 2026', '5/21/2026'),
(88, 'Sarjana', 'Agroteknologi', 'Terakreditasi UNGGUL', '2239/SK/BAN-PT/AK-ISK/S/IV/2022, Tanggal 21 Mei 2026', '5/21/2026'),
(89, 'Sarjana', 'Teknologi Pangan', 'Terakreditasi BAIK SEKALI', '2593/SK/BAN-PT/Ak/S/VII/2023, Tanggal 4 Juli 2028', '7/4/2028'),
(90, 'Sarjana', 'Budidaya Perairan', 'Terakreditasi A', '2409/SK/BAN-PT/Ak.PEPS/S/VI/2023, tanggal 31 Mei 2024', '5/31/2024'),
(91, 'Sarjana', 'Perikanan Tangkap', 'Terakreditasi B', '3329/SK/BAN-PT/Akred/S/IX/2019, Tanggal 3 September 2024 ', '9/3/2024'),
(92, 'Sarjana', 'Teknologi Hasil Perikanan', 'Terakreditasi BAIK SEKALI', '3927/SK/BAN-PT/Ak.KP/S/X/2023, tanggal 16 Agustus 2025', '8/16/2025'),
(93, 'Sarjana', 'Ilmu Kelautan', 'Terakreditasi UNGGUL', '3930/SK/BAN-PT/Ak.KP/S/X/2023, Tanggal 3 November 2025', '11/3/2025'),
(94, 'Sarjana', 'Agrobisnis Perikanan', 'Terakreditasi BAIK SEKALI', '8273/SK/BAN-PT/Akred/S/XII/2020, Tanggal 15 Desember 2025', '12/15/2025'),
(95, 'Sarjana', 'Manajemen Sumber Daya Perairan', 'Terakreditasi UNGGUL', '3924/SK/BAN-PT/Ak.KP/S/X/2023, Tanggal 28 Desember 2026', '12/28/2026'),
(96, 'Sarjana', 'Peternakan', 'Terakreditasi B', '', ''),
(97, 'Sarjana', 'Teknik Rekayasa Infrastruktur dan Lingkungan', 'Terakreditasi B', '4892/SK/BAN-PT/Akred/S/VIII/2020, Tanggal 25 Agustus 2025', '8/25/2025'),
(98, 'Sarjana', 'Teknik Kelautan', 'Terakreditasi B', '5112/SK/BAN-PT/Akred/S/IX/2020, Tanggal 1 September 2025', '9/1/2025'),
(99, 'Sarjana', 'Arsitektur', 'Terakreditasi B', '189/SK/BAN-PT/Ak.Ppj/S/I/2023, Tanggal 16 Agustus 2027', '8/16/2027'),
(100, 'Sarjana', 'Teknik Mesin', 'Terakreditasi BAIK SEKALI', '0018/SK/LAM Teknik/AS/VIII/2022, Tangggal 20 Agustus 2027', '8/20/2027'),
(101, 'Sarjana', 'Teknik Elektro', 'Terakreditasi UNGGUL', '0003/SK/LAM Teknik/AS/IV/2023, Tanggal 20 Agustus 2027', '8/20/2027'),
(102, 'Sarjana', 'Teknik Informatika', 'Terakreditasi BAIK SEKALI', '090/SK/LAM-INFOKOM/Ak/S/XII/2022, Tanggal 15 Desember 2027', '12/15/2027'),
(103, 'Sarjana', 'Teknik Sipil', 'Terakreditasi UNGGUL', '0254/SK/LAM Teknik/AS/XII/2022, tanggal 16 Desember 2027', '12/20/2027'),
(104, 'Profesi', 'Pendidikan Profesi Apoteker', 'Terakreditasi B', '0737/LAM-PTKes/Akr/Pro/XII/2019, Tanggal 28 Desember 2024 ', '12/28/2024'),
(105, 'Profesi', 'Pendidikan Profesi Guru', 'Terakreditasi B', '1651/SK/BAN-PT/Akred/PP/III/2021, Tangga; 24 Maret 2026', '3/24/2026'),
(106, 'Profesi', 'Profesi Dokter', 'Terakreditasi BAIK SEKALI', '0639/LAM-PTKes/Akr/Pro/VIII/2023, tanggal 11 Agustus 2027', '8/11/2027'),
(107, 'Profesi', 'Pendidikan Profesi Ners', 'Terakreditasi BAIK', '0764/LAM-PTKes/Akr/Pro/X/2023, Tanggal 26 Oktober 2028', '10/26/2028'),
(108, 'Diploma Tiga', 'Statistika', 'Terakreditasi B', '6803/SK/BAN-PT/Ak-PPJ/Dipl-III/X/2020, Tanggal 9 Maret 2025', '9/4/2025'),
(109, 'Diploma Tiga', 'Teknik Arsitektur', 'Terakreditasi B', '3493/SK/BAN-PT/Ak.S/D3/VIII/2023, Tanggal 8 Januari 2024', '8/1/2024'),
(110, 'Diploma Tiga', 'Teknik Mesin', 'Terakreditasi BAIK SEKALI', '0264/SK/LAM TEKNIK/VD3/XII/2022, Tanggal 20 Desember 2027', '12/20/2027'),
(111, 'Diploma Tiga', 'Teknik Elektronika', 'Terakreditasi BAIK SEKALI', '0144/SK/LAM Teknik/vD3/XII/2022, Tanggal 21 Desember 2027', '12/21/2027'),
(112, 'Diploma Tiga', 'Teknik Sipil', 'Terakreditasi BAIK SEKALI', '0090/SK/LAM Teknik/VD3/IV/2023, Tanggal 20 Maret 2028', '20/04/2028'),
(133, 'Sarjana', 'Sastra Mesin', 'Unggul Sekali', '6405/SK/BAN-PT/Akred/D/X/2020, Tanggal 13 Oktober 2025', '10/10/2030');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekognisi_dosen`
--

CREATE TABLE `rekognisi_dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(245) NOT NULL,
  `bidang_keahlian` varchar(245) NOT NULL,
  `rekognisi` varchar(245) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_akreditasi`
--

CREATE TABLE `riwayat_akreditasi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(245) NOT NULL,
  `riwayat_tahun` varchar(245) NOT NULL,
  `riwayat_akrd` varchar(245) NOT NULL,
  `link_sertifikat` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `riwayat_akreditasi`
--

INSERT INTO `riwayat_akreditasi` (`id`, `nama_prodi`, `riwayat_tahun`, `riwayat_akrd`, `link_sertifikat`) VALUES
(1, 'Teknik Elektro', '2023', 'C', ''),
(2, 'Teknik Elektro', '2022', 'B', ''),
(3, 'Teknik Elektro', '2022', 'Baik sekali', ''),
(4, 'Teknik Elektro', '2017', 'B', ''),
(5, 'Teknik Elektro', '2012', 'Unggul', ''),
(6, 'Teknik Informatika', '2022', 'C', ''),
(7, 'Teknik Informatika', '2022', 'B', ''),
(8, 'Teknik Informatika', '2017', 'B', ''),
(9, 'Teknik Informatika', '2013', 'Baik sekali', ''),
(10, 'Teknik Mesin', '2022', 'C', ''),
(11, 'Teknik Mesin', '2022', 'B', ''),
(12, 'Teknik Mesin', '2017', 'Baik sekali', ''),
(13, 'Teknik Mesin', '2012', 'Baik sekali', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sitasi_ilmiah`
--

CREATE TABLE `sitasi_ilmiah` (
  `id` int(11) NOT NULL,
  `penulis` varchar(245) NOT NULL,
  `judul_artikel` varchar(500) NOT NULL,
  `jumlah_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sitasi_ilmiah`
--

INSERT INTO `sitasi_ilmiah` (`id`, `penulis`, `judul_artikel`, `jumlah_artikel`) VALUES
(1, 'S Bahri, LO Amaluddin, H Widodo, M Saekan, A Salabi', 'Building The Islamic Characteristic Education to Development Learning Intention: Case Study From Junior High School Population in Indonesia (ABAC JOURNAL, Hal. 1-14, 2022)', 0),
(2, 'D Wibowo, WOSI Sari, A Said, F Mustapa, B Susianti, M Maulidiyah, ...', 'Electrochemical-Sensor Behavior for Determination of Low Urea Concentration using Graphite-TiO2 Composites Immobilized in a Glass Tube (Anal. Bioanal. Electrochem., Vol. 14, No. 4, 2022, 385-401)', 3),
(3, 'T Nurtamin, J Renaldo, YP Kloping, IA Rahman, L Hakim', 'The use of tissue sealant in reducing urethrocutaneous fistula event following hypospadias repair: A systematic review and meta-analysis (Annals of Medicine and Surgery, Volume 78, June 2022, 103707)', 1),
(4, 'D Herdhiansyah, Sakir, Asriani', 'The implementation of life cycle assessment (LCA) in the processing industry Tofu: A  case study of Konawe Selatan district, Indonesia (Asia -Pacific Journal of Science and Technology 27 (04), 1-11, 2022)', 0),
(5, 'DV Ramadhani, H Holilah, H Bahruji, N Jadid, TP Oetami, AA Jalil, ...', 'Effect of lignocellulosic composition of Reutealis trisperma waste on nanocrystalline cellulose properties (Biocatalysis and Agricultural Biotechnology 45, 102516, 2022 )', 0),
(6, 'H Riudin, K Arifin, M Sabilu', 'Analysis of project-based learning videos on biology subjects (BIO-INOVED: Jurnal Biologi-Inovasi Pendidikan 4 (2), 201-206, 2022 )', 0),
(7, 'W Dwiprayogo, M Muhammad Zakir, M Maulidiyah, N Muhammad, ...', 'Morphological analysis of ag doped on tio2/ti prepared via anodizing and thermal oxidation methods (Biointerface Research in Applied Chemistry, Volume 12, Issue 2, 2022, 1421 - 1427)', 6),
(8, 'M Maulidiyah, PE Susilowati, NK Mudhafar, LA Salim, D Wibowo, ...', 'Photo-inactivation Staphylococcus aureus by using formulation of Mn-N-TiO2 composite coated wall paint (Biointerface Research in Applied Chemistry,Volume 12, Issue 2, 2022, 1628 - 1637)', 13),
(9, 'M Nurdin, AH Watoni, Z Arham, NA Yanti, S Marlini, M Maulidiyah, ...', 'Strong Inhibition of Silver-doped TiO2 Nanoparticles Against P. palmivora in Visible Light (BioNanoScience 12 (2), 351-358, 2022 )', 0),
(10, 'MIA Umar, S Budi, M Nurdin, AA Umar', 'Synthesis of standing ZnO nanosheets and impact of Ag nanoparticles loading on its optical property (Bulletin of Materials Science 45, 1-6, 2022 )', 0),
(11, 'DP O&#39;Connell, DJ Kelly, PG Akbar, J Monkhouse, SBA Kelly, W Simcox, ...', 'Breeding records of the birds of south-east Sulawesi, Indonesia: a collation of observations encompassing nearly 20 years of research in Wallacea (Bulletin of the British Ornithologists Club, 142 (3), 278-301, 2022)', 0),
(12, 'L Wang, M Ibrahim, A Neal', 'Real-world outcomes with palbociclib, abemaciclib and ribociclib; experience of a tertiary oncology centre in the United Kingdom (CANCER RESEARCH 82 (4), 2022 )', 0),
(14, 'RHF Faradilla, TAM Tamrin, S Rejeki, A Rahmi, J Arcot', 'Low energy and solvent free technique for the development of nanocellulose based bioplastic from banana pseudostem juice (Carbohydrate Polymer Technologies and Applications 4, 100261, 2022 )', 0),
(15, 'M Arba, N Paradis, ST Wahyudi, DJ Brunt, KR Hausman, PM Lakernick, ...', 'Unraveling the binding mechanism of the active form of Remdesivir to RdRp of SARS-CoV-2 and designing new potential analogues: Insights from molecular dynamics simulations (Chemical Physics Letters 799, 139638, 2022 )\n', 3),
(16, 'Mashuni, H Ritonga, M Jahiding, B Rubak, FH Hamid', 'Highly Sensitive Detection of Carbaryl Pesticides Using Potentiometric Biosensor with Nanocomposite Ag/r-Graphene Oxide/Chitosan Immobilized Acetylcholinesterase Enzyme (Chemosensors 10 (4), 138, 2022 )', 6),
(17, 'L Pimpi, SW Indratno, JW Puspita, E Cahyono', 'Stochastic and Deterministic Dynamic Model of Dengue Transmission Based on Dengue Incidence Data and Climate Factors in Bandung City (Communication in Biomathematical Sciences 5 (1), 78-89, 2022 )', 0),
(18, 'DC Patel, KR Hausman, M Arba, A Tran, PM Lakernick, C Wu', 'Novel inhibitors to ADP ribose phosphatase of SARS-CoV-2 identified by structure-based high throughput virtual screening and molecular dynamics simulations (Computers in Biology and Medicine\nVolume 140, January 2022, 105084)', 7),
(19, 'R Musta, L Nurliana, L Darlian, L Rudi', 'Kinetics Study of Antibacterial Activity of Cajuput Oil (Melaleuca cajuputi) on Escherichia coli, Staphylococcus aureus, and Bacillus cereus (CURRENT APPLIED SCIENCE AND TECHNOLOGY, 10 pages-10 pages, 2022 )', 3),
(20, 'K Analuddin, S Sharma, LO Kadidae, LOMY Haya, A Septiana, S Rahim, ...', 'Blue carbon stock in sediments of mangroves and seagrass ecosystems at Southeast Sulawesi, Indonesia (Ecological Research, 2022 )', 1),
(21, 'JA Tobias, C Sheard, AL Pigot, AJM Devenish, J Yang, F Sayol, ...', 'AVONET: morphological, ecological and geographical data for all birds (Ecology Letters 25 (3), 581-597, 2022)', 139),
(22, 'Y Boni', 'Agricultural Development Influence on Rural Poverty Alleviation in the North Buton Regency, Indonesia The Mediating Role of Farmer Performance (Economies 10 (10), 240, 2022 )', 3),
(23, 'H Kasmawati, R Mustarichie, E Halimah, R Ruslin, N A Sida', 'Antialopecia Activity and IR-Spectrometry Characterization of Bioactive Compounds From Sansevieria trifasciata P. (Egyptian Journal of Chemistry 65 (13), 19-24, 2022 )', 1),
(24, 'MH Sahumena, WS Zubaydah, SRN Jannah, SA Mardikasari, M Aswan, ...', 'Formulation and Physicochemical Evaluation of Theophylline Nanoparticles Transdermal Patch (Egyptian Journal of Chemistry 65 (13), 2022 )', 0),
(25, 'A Jabbar, H Hamzah, E Nandini, A Nurwijayanto, E Setyowati, S Syakri, ...', 'The Effectiveness of Begonia Multangula Blume Leaf Ethanol Extract as Polymicrobial Antibiofilm on Catheters (Egyptian Journal of Chemistry 65 (13), 2022)', 1),
(26, 'M Mubarak, R Yunus, S Supiati, S Suwarni', 'LARVICIDAL AND REPELLENT POTENTIAL OF PATCHOULI EXTRACT (Pogostemon cablin) VARIETIES OF SOUTHEAST SULAWESI FOR AEDES AEGYPTI VECTOR (Egyptian Journal of Chemistry, 2022 )', 1),
(27, 'M Nurdin, MZ Muzakkar, M Maulidiyah, T Trisna, Z Arham, ...', 'High-Performance COD Detection of Organic Compound Pollutants using Sulfurized-TiO2/Ti Nanotube Array Photoelectrocatalyst (https://doi.org/10.21203/rs.3.rs-1384241/v1- Hal. 1-20)', 4),
(28, 'B Ringbeck, D Bury, I Lee, G Lee, R Alakeel, M Alrashed, R Tosepu, ...', 'Biomarker-Determined Nonylphenol Exposure and Associated Risks in Children of Thailand, Indonesia, and Saudi Arabia (Environmental Science &amp; Technology 56 (14), 10229-10238, 2022 )', 4),
(29, 'AR Wijaya, F Khoerunnisa, A Armid, RA Lusiana', 'The best-modified BCR and Tessier with microwave-assisted methods for leaching of Cu/Zn and their Cu for tracing sources in marine sediment fraction (Environmental Technology &amp; Innovation 28, 102663, 2022 )', 1),
(30, 'HS Tawai Adrian', 'FACTORS AFFECTING E-KTP SERVICES DURING THE COVID-19 PANDEMIC AT THE KONAWE REGENCY POPULATION AND CIVIL REGISTRATION SERVICE (Eurasia: Economics &amp; Business 8 (62), 111-116, 2022 )', 0),
(31, 'A Muradi, D Hilmi, F Noor', 'Evaluation of Arabic Learning Program at State Islamic Religious College During COVID-19 (Eurasian Journal of Educational Research, 2022)', 0),
(32, 'H Hamzah, SUT Pratiwi, A Jabbar, E Nandini', 'Efficacy of Bajakah Tampala Ethanol Extract, A Typical Plant of Kalimantan Island (Borneo), Against Candida albicans Biofilm (Eur. Chem. Bull. 2022,11(5), 59 - 63)', 0),
(33, 'H Hamzah, SUT Pratiwi, A Jabbar, CF Mochtar, W Rahmah, AS Hafifah', 'Tracing Antibiofilm Activity and Biofilm Eradication of Bajakah Tampala (Spatholobus littoralis Hassk) Ethanol Extract Againts Pseudomonas Aeruginosa Biofilm (Open Access Macedonian Journal of Medical Sciences, Vol. 11 No. A (2023))', 0),
(34, 'S Ndobe, MS Nurdin, N Hasanah, AE Putra, K Mansyur, M Nasir, ...', 'DNA barcoding detects resurrected taxon Giuris laglaizei (Sauvage 1880) in Sulawesi, Indonesia: Bolano Sau Lake payangka phylogeny, phenotypic characters and (F1000Research 11 (295), 295, 2022 )', 2),
(35, 'A Fristiohady, R Asasutjarit, W Al-Ramadan', 'A Review of Wound Healing Mechanisms of Natural Products in Keratinocyte Cells (Computers in biology and medicine 129, 104156, 2021 )', 0),
(36, 'H Harisma, H Naruse, T Hirata, S Niki', 'Paleogene Ridge Subduction along the Northwest Pacific Margin suggested by U-Pb Zircon Age Distribution of the Late Cretaceous&#8211;Paleogene Sandstones of the Paleo-Kuril Arc?&#8230; (Crystals 11 (9), 1044, 2021)', 0),
(37, 'S Wahyuni, WOG Purnamasari, U Pato, PE Susilowati, A Khaeruni', 'Identification and Genetic Diversity of Amylase Producing Lactic Acid Bacteria from Brown Rice (Oryza nivara) Wakawondu Cultivar Based on 16S rRNA Gene (Current Issues in Tourism 24 (19), 2784-2800, 2021 )', 2),
(38, 'F Syifa, N Hidayah, E Lukitaningsing, Irnawati, A Rohman', 'Physicochemical properties, fatty acid composition and FTIR Spectra of Gabus (Channa striata) fish oil (Food Research 6 (2), 219-224, 2022)', 12),
(39, 'N Hidayah, A Rohman, M Mustafida, Irnawati', 'Physicochemical characterization and fatty acid profiles of fish oil from milkfish (Chanos chanos F.) (Food Research 6 (2), 265-270, 2022)', 0),
(40, 'AN Ikhsan, I Irnawati, LA Lestari, Y rwanto, A Rohman', 'Simultaneous analysis of patin fish oil (Pangasius micronemus) and bandeng (Chanos chanos) fish oil using FTIR spectroscopy and chemometrics (Food research 6 (3), 262-268, 2022)', 0),
(41, 'NY Sabarudin, Nuralifah, Zubaydah, W.O.S., Sahumena, M.H., Sari, F.N.', 'Phytochemical content and antioxidant activity of Komba-komba  (Eupatorium odoratum L)  (Food Research 6 (3), 335 - 341, 2022)', 0),
(42, 'LA Lestari, A Rohman, Riswahyuli, S Purwaningsih, F Kurniawati, Irnawati', 'Analysis of amino acids in food using High Performance Liquid Chromatography with derivatization techniques: a review (Food Research 6 (3), 435-442, 2022)', 0),
(43, 'SY Zubaydah, W.O.S., Sartinah, A., Nuralifah, Waelti', 'In vitro antioxidant activity of Cocoa (Theobroma cacao L) peel (Food Research 6 (4), 287 - 294, 2022)', 0),
(44, 'A Atabik, MR Muqtada, Suhadi, Irnawati, A Rohman', 'Pomegranate (Punica granatum L.) fruits in the Quranic Hermeneutics and scientific perspectives (Food Research 6 (5), 1-13, 2022)', 0),
(45, 'LA Lestari, A Rohman, E Prihandiwati, AR Aini, Irnawati, F Khasanah', 'Analysis of lard, chicken fat and beef fat in ternary mixture using FTIR spectroscopy and multivariate calibration for halal authentication (Food Reserach 6 (4), 113-119, 2022 )', 0),
(46, 'A Irnawati, Putri, R.N., Lestari, L.A., Rohman', 'Quantitative analysis and discrimination of lard in chicken fat using FTIR spectroscopy and chemometrics for halal authentication (Food Reserach 6 (4), 211-217, 2022)', 0),
(47, 'A Windarsih, A Rohman, Irnawati', 'The use of FTIR spectroscopy combined with pattern recognition and multivariate calibration for rapid authentication of Etawa goat milk from soymilk (Food Reviews International, 1-20, 2022)', 0),
(48, 'A Windarsih, L Arsanti Lestari, Y Erwanto, A Rosiana Putri, Irnawati, ...', 'Application of Raman spectroscopy and chemometrics for quality controls of fats and oils: a review (Food Reviews International, 1-20, 2022)', 6),
(49, 'PYAP Wirabuana, RL Hendrati, L Baskorowati, M Susanto, Mashudi, ...', 'Growth performance, biomass accumulation, and energy production in age series of clonal teak plantation (Forest Science and Technology 18 (2), 67-75, 2022 )', 4),
(50, 'J Remali, I Sahidin, WM Aizat', 'Xanthone Biosynthetic Pathway in Plants: A Review (Frontiers in Plant Science, 916, 2022)', 9),
(51, 'F ? Marcaigh, DP O&#39;Connell, K Analuddin, A Karya, N Lawless, ...', 'Tramps in transition: genetic differentiation between populations of an iconic&quot; supertramp&quot; taxon in the Central Indo-Pacific (Frontiers of Biogeography 14 (2), 2022)', 2),
(52, 'S Rosyidah, M Iswandi, I Kadir, M Simatupang', 'The Development Pattern of the Lasolo Riverbank Settlement in Kendari, Southeast Sulawesi-Indonesia (Future Cities and Environment 8 (1), 2022)', 0),
(53, 'M Taufan, AA Muthalib, Nasrul', 'The Influence Of Organizational Innovation, Knowledge Management And Transformational Leadership On The Performance Of ASN BPKPD East Kolaka (global scientific journal 10 (11), 2578-2589, 2022)', 0),
(54, 'Asraf, AA Muthalib, Nurseha', 'The Effect Of Work Discipline And Work Ethos On Employee Motivation And Performance And The Role Of Motivation As A Mediation Variable At The Plantation And Horticulture Office?(global scientific journal 10 (8), 520-535, 2022)', 0),
(55, 'MR Asep Gunawan, Cece Sumantri, Dedy Duryadi Solihin, Chalid Talib', 'Microsatellite Diversity and Phylogenetic Relationships  of Seven Indonesian Swamp Buffaloes Populations (Gongcheng Kexue Yu Jishu/Advanced Engineering Science 54 (10), 3191-3207, 2022)', 0),
(56, 'LO Afa, AA Anas, L Sabaruddin, A Bahrun, MW Arsana, NP Putri, F Labir', 'Agronomic response of local upland rice cultivars on growing under two cultivation systems (Indian Journal of Agricultural Research 56 (2), 183-188, 2022)', 2),
(57, 'LO Afa, AA Anas, L Sabaruddin, A Bahrun, MW Arsana, NP Putri, F Labir', 'Agronomic Response of Local Upland Rice Cultivars on Growing under Two Cultivation Systems. (Indian Journal of Agricultural Research 56 (2), 2022)', 2),
(58, 'T Wijayanto, A Khaeruni, M Taufik, L Safuan, B Santiaji', 'Standardized organic fertilizer formulations and their effectiveness in enhancing the role of biological agents to increase disease resistance and maize productivity in?&#8230; (Indian Journal of Agricultural Research 56 (3), 337-343, 2022)', 2),
(59, 'Aku AS, Yaddi Y, Saili T, Hafid H, Munadi LOM, Dewi F, Kete SCR.', 'Mapping of Reproduction Disorders Caused by Infectious Diseases in Bali Cattle (Bos sundaicus) in Muna Regency, Indonesia (Indian Journal Of Animal Research 56 (Februari 2022), 4 Halaman, 2022)', 1),
(60, 'M Simatupang, RS Edwin, W Mustika, H Putra, DHY Yanto', 'Splitting Tensile Strength of Fly Ash-Modified Sand at Various Saturations and Curing Times (Infrastructures 7 (10), 126, 2022)', 0),
(61, 'H Aripin, S Sutisna, E Priatna, IN Sudiana, E Surahman, S Sabchevski', 'Porous silica derived from sago waste and its application for the preparation of SiO2/C composites as air cathodes for primary aluminum-air batteries (Int. J. Electrochem. Sci 17 (221221), 2, 2022)', 0),
(62, 'M Mukhsar, A Ansari Saleh, S MA El, EK Hamed, S M El', 'Bayesian convolution for stochastic epidemic model (Intelligent Automation &amp; Soft Computing 34 (2), 2022)', 1),
(63, 'MA Rusli Badaruddin, La Ode Nafiu, Fuji Astuty Auza, Muh. Amrullah Pagala ...', 'EXTERNAL GENETIC DIVERSITY AND INTROGRESSION RATE OF NATIVE CHICKEN IN SOUTHEAST SULAWESI, INDONESIA (Interciancia Journal 47 (6), 14-26, 2022)', 0),
(64, 'H Holilah, H Bahruji, R Ediati, A Asranudin, AA Jalil, B Piluharto, ...', 'Uniform rod and spherical nanocrystalline celluloses from hydrolysis of industrial pepper waste (Piper nigrum L.) using organic acid and inorganic acid (International Journal of Biological Macromolecules 204, 593-605, 2022)', 12),
(65, 'FT Catherina M. Bijang, M. Nurdin, Jolantje Latupeirissa, Thamrin Aziz', 'The Ouw Natural Clay Impregnation Using Titanium Dioxide as a Rhodamine B Dyestuff Degrader (International Journal of Chemistry 9 (3), 144-149, 2022)', 2),
(66, 'LM Munadi, N Sandiah, AS Aku, R Aka, A Napirah', 'Integrated Farmer-Livestock Business In Opaasi Village, West Ranomeeto District, South Konawe Regency (International Journal Of Community Service 2 (1), 46-57, 2022)', 0),
(67, 'FA Auza, R Badaruddin, HA Hadini, N Sandiah, AM Tasse, R Aka', 'Technical Instructions for Utilizing Chicken Waste as A Bokashi Organic Fertilizer in Lepo-Lepo Village, Barug a District, Kendari City (International Journal Of Community Service 2 (2), 216-222, 2022)', 1),
(68, 'Surdin, IR Sari, LO Amaluddin, S Kasmiati', 'Perception of Mothers of Couples of Childbearing Age on Family  Planning in Bangkal Village, Muna Regency (International Journal of Education and Research 10, 47-56, 2022)', 0),
(69, 'A Tawai, F Muchtasar, A Utha', 'Factors Affecting Public Service Innovation At The Investment And One Stop Service Office, North Buton (International Journal of Educational Research and Social Sciences (IJERSC) 3?&#8230;, 2022)', 0),
(70, 'MKM Ali, M Ismail, FM Hamundu, N Akhtar, A Fudholi', 'Hybrid model in machine learning-robust regression applied for sustainability agriculture and food security.(International Journal of Electrical &amp; Computer Engineering (2088-8708) 12 (4), 2022)', 1),
(71, 'WA Rumbia, AA Muthalib, P Adam, A Jabani, YP Pasrun, DA Muthalib', 'The Effect of Crude Oil Prices and Internet on Economic Growth in Timor Leste (International Journal of Energy Economics and Policy 12 (1), 275-280, 2022)', 2),
(72, 'AA Muthalib, E Ngii, A Putera', 'The Ability of Green Open Spaces in Greenhouse Gas Control to Achieve Green Cities in Kendari City (International Journal of Energy Economics and Policy 12 (1), 327-331, 2022)', 2),
(73, 'WA Rumbia, AA Muthalib, B Abbas, P Adam, A Jabani, YP Pasrun, ...', 'The Asymmetry Effect Of Oil Consumption, Unemployment And Broadband Technology On Economic Growth In Indonesia (International Journal of Energy Economics and Policy 12 (2), 276-281, 2022)', 1),
(74, 'SS H Aripin,Edvin Priatna, Dedi Dedi,I Nyoman Sudiana', 'Characterization of Ceramic Membrane based on Calcium Carbonate from Onyx Stone and Its Application for Coconut Sap Treatment (International Journal of Engineering 35 (2), 2022)', 2),
(75, 'F Fajriana, S Safriana, N Nurdin', 'Students&#39; Perceptions of Learning Using Powtoon Based on Gender in SMP/MTS (International Journal of Engineering, Science and Information Technology 2?&#8230;, 2022)', 0),
(76, 'IZ Rela, Z Ramli, MZ Firihu, W Widayati, AH Awang, N Nasaruddin', 'COVID-19 Risk Management and Stakeholder Action Strategies: Conceptual Frameworks for Community Resilience in the Context of Indonesia (International Journal of Environmental Research and Public Health 19 (15), 8908, 2022)', 0),
(77, 'S Susanty, MH Chung, HY Chiu, MJ Chi, SH Hu, CL Kuo, YH Chuang', 'Prevalence of loneliness and associated factors among community-dwelling older adults in Indonesia: a cross-sectional study (International journal of environmental research and public health 19 (8), 4911, 2022)', 6),
(78, 'J Jamiludin, D Darnawati', 'E-learning on History learning: Aspect of material, teacher, learning environment, and student(International Journal of Evaluation and Research in Education (IJERE) 11 (2?&#8230;, 2022)', 0),
(79, 'MF Arifah, K Nisa, A Windarsih, A Rohman', 'The application of FTIR spectroscopy and chemometrics for the authentication analysis of horse milk (International Journal of Food Science 2022, 2022)', 7),
(80, 'A Sani, B Abapihi, Mukhsar, R Tosepu, I Usman, GA Rahman', 'Bayesian temporal, spatial and spatio-temporal models of dengue in a small area with INLA (International Journal of Modelling and Simulation, 1-13, 2022)', 0),
(81, 'SN Sadikin, MI Ali Umar, AA Hamzah, M Nurdin, AA Umar', 'Formation of Ultimate Thin 2D Crystal of Pt in the Presence of Hexamethylenetetramine (International Journal of Molecular Sciences 23 (18), 10239, 2022)', 0),
(82, 'LOA Barata, T Kiwata, T Ueno, Samhuddin, L Hasanudin', 'Experimental Investigation of Bladeless Power Generator from Wind-induced Vibration (International Journal of Renewable Energy Development 11 (3), 661-675, 2022)', 2),
(83, 'HA Hadini, M Abadi, WS Anggoro', 'Analysis of Bali cattle business income on different scales in Tiworo Tengah District, Indonesia (International Journal of Research in Business and Social Science (2147-4478?&#8230;, 2022)', 1),
(84, 'S Alifariki, Rahmawati, Rangki', 'Efficacy of Herbal Medicine in the Treatment of Female Infertility: A Systematic Review (International Journal of Science and Healthcare Research 7 (4), 249-259, 2022)', 0),
(85, 'H Adrian Tawai, Eka Suaib', 'Regional General Election Commission Performance Konawe Regency, Indonesia (International Journal of Scientific Engineering and Science 6 (8), 4-9, 2022)', 0),
(86, 'FAA Rusli Badaruddin, Harapin Hafid, La Ode Nafiu, Syamsuddin, Amiluddin Indi', 'Hemoglobin Level and Total Differential Blood Leucocytes of Broiler Chicken Given Different Probiotics (International Journal of Scientific Research in Science, Engineering and?&#8230;, 2022)', 0),
(87, 'DMAP Syamsuddin, Natsir Sandiah, Harapin Hafid, Rusli Badaruddin, Amiluddin Indi', 'Addition of Aspergillus Niger Palm Waste (Animal Feed Alternative) (International Journal of Scientific Research in Science, Engineering and?&#8230;, 2022)', 0),
(88, 'S Musram Abadi, La Ode Arsad Sani, Lukman Yunus', 'Analysis of Family Working Time Integration of Bali Cattle and Rice Fields in The District South Konawe (International Journal of Scientific Research in Science, Engineering and?&#8230;, 2022)  (BIRCI-Journal)\nVolume 5, No 1, February 2022, Page: 873-884\ne-ISSN: 2615-3076 (Online), p-ISSN: 2615-1715', 0),
(89, 'LOMM La Ode Restele, La Ode Sahaba', 'The Role of Government in Management of Coastal and Small  Islands in Muna District, Indonesia (International Journal of Scientific Research in Science, Engineering and?&#8230;, 2022)', 0),
(90, 'LOHH Adrian Tawai', 'Study on the Application of Organizational Culture to Organizational Effectiveness and Efficiency (International Journal of Scientific Research in Science, Engineering and?&#8230;, 2022)', 0),
(91, 'H La Aso, OK Haris, RS Suraya, LB Maliudin', 'Elopement (DOPOFILEIGHOO) Tradition on the Muna Ethnic Society at Muna Barat Regency of Southeast Sulawesi, Indonesia (International Journal of Social Science And Human Research 5 (01), 71-76, 2022)', 0),
(92, 'A Irawan, N Suyuti, Syahrun, WO Sifatu, LR Lindayani, Bahtiar, L Aso', 'Political Hegemony after the Regional Head Elections of Bappeda Office in Bombana Regency, Southeast Sulawesi Province, Indonesia (International Journal of Social Science and Human Research, 2022)International Journal of Social Science And Human Research\nISSN(print): 2644-0679, ISSN(online): 2644-0695\nVolume 06 Issue 01 January 2023', 0),
(93, 'S Adrian Tawai', 'Factors Affecting the Effectiveness of Regional Health Insurance Services in North Buton Regency (International Journal of Social Science Research and Review 5 (9), 357-363, 2022)', 0),
(94, 'U Udin, R Dananjoyo, I Isalman', 'The Effect of Transactional Leadership on Innovative Work Behavior: Testing the Role of Knowledge Sharing and Work Engagement as Mediation Variables International Journal of Sustainable Development and \nPlanning\nVol. 17, No. 3, June, 2022, pp. 727-736', 11),
(95, 'Y Ya&#8217;la Sulistiawati,Aziz Kasim,Aslan,Nasmia', 'Coastal Communities&#8217; Empowerment through Seaweed (Eucheuma cottoni): Potency, Suitability, and Local Participation (International Journal on Advanced Science Engineering Information Technology?&#8230;, 2022 ', 0),
(96, 'L Hamimu, S Asfar, Arisona, LO Ngkoimani, Silvara, Irawati, A Rubaiyn', 'Quantitative Analysis of Relative Tectonic Activities of Geothermal Areas of Lainea, South Konawe District, Southeast Sulawesi Province, Indonesia', 0),
(97, 'E ERNANINGSIH, D SULTAN, A ASBAR, B BUDIMAWAN', 'The correlation of coral cover and reef fish density in the biggest archipelagos located in centre of Indonesia ( Iranian Journal of Ichthyology (IJI) Vol. 9 No. 2 (2022)', 0),
(98, 'UR Sugeng, A Hakim, I Awaluddin, LA Aliddin', 'The Effects of Leadership Effectiveness, Personnel Empowerment, Knowledge Sharing and Transfer of Training on Indonesian National Police Personnel Performance in Konawe Resort?&#8230; (Vol. 12 No. 2 (2022): Italienisch )', 0),
(99, 'SW Dian Hayati, Samdin, La Hatani', 'Effects of Emotional Intelligence, Exhaustion and Big Five Personality on OCB and Performance of Community Health Center Midwives in South Konawe Regency                                             ITALIENISCH 12 (2), 240-247, 2022 ', 0),
(100, 'T Fatmawati, A Hafid, E Sukotjo', 'Analysis of Early Childhood Human Resources Development in the Tolaki Community in Konawe Selatan District                                                     ITALIENISCH 12 (2), 41-47, 2022 ', 2),
(101, 'M Arsyil, J Ahiri, E Karno, L Ili', 'The Effects of Attitude, Anxiety and Training on ICT Skill and Teacher Performance in Education Digitalization Era: A Case Study in State Senior High Schools in Kendari City                                  ITALIENISCH 12 (2), 687-698, 2022 ', 0),
(102, 'Irawati, A Asriyana', 'Spatial distribution of phytoplankton in Lasolo Bay of Southeast Sulawesi province, Indonesia                  ( Journal of Advanced Biotechnology and Experimental Therapeutics 5 (3), 615-622, 2022 ', 0),
(103, 'E Ngii, T Kiwata, T Kono', 'Enhancing Dynamic Response of Cantilevered Rectangular Prism Using a Splitter Plate as a Passive Turbulence Control in Water Tunnel                                                        (Journal of Advanced Research in Fluid Mechanics and Thermal Sciences 91 (2?&#8230;, 2022 ', 2),
(104, 'Y Buyang, S Suprapto, RE Nugraha, H Holilah, H Bahruji, R Hantoro, ...', 'Catalytic pyrolysis of Reutealis trisperma oil using raw dolomite for bio-oil production                   Journal of Analytical and Applied Pyrolysis Volume 169\nJanuary 2023, 105852, 2022 ', 0),
(105, 'M Nurdin, MZ Muzakkar, M Maulidiyah, C Sumarni, T Azis, R Ratna, ...', 'Highly active visible-light-driven photo-electrocatalytic process in TiO2/Ti electrode by Te doping       (Journal of Applied Electrochemistry, 1-8, 2022 vol.53, pages307?314 (2023)', 0),
(106, 'FM Abdullah, MH Loke, M Nawawi, K Abdullah, A Younis, A Arisona', 'Utilizing NWCR optimized arrays for 2D ERT survey to identify subsurface structures at Penang Island, Malaysia                                                                 (Journal of Applied Geophysics vol,196, 104518, 2022 ', 5),
(107, 'I Irnawati, S Riyanto, S Martono, A Windarsih, A Rohman', 'Physicochemical properties and antioxidant activities of pumpkin seed oil as affected by different origins and extraction methods                                                      (Journal of Applied Pharmaceutical Science vol,12 (3), 115-122, 2022 ', 0),
(108, 'I Sahidin, B Sadrun, NS Rahmatika, AWM Yodha, A Fristiohady, ...', 'Phytochemical screening and antioxidant and cytotoxic activities of ethyl acetate subfractions of soft coral Nepthea sp. growing in Southeast Sulawesi                                                                  journal of Applied Pharmaceutical Science, 2022 J Appl Pharm Sci, 2023; 13(02):099?105.', 0),
(109, 'AA Styawan, RA Susidarti, P Purwanto, I Irnawati, A Rohman', 'The use of pattern recognition for classification of Indonesian ginger (Zingiber officinale var. amarum) based on antioxidant activities and FTIR spectra                                                      Appl Pharm Sci, 2023; 13(04):149?156. https://doi.org/10.7324/JAPS.2023.50966', 0),
(110, 'SA Rasyid, S Syarif, S As&#39; Ad, UA Miskad, R Minhajat, T Purnama', 'Identification of ?-Catenin Gene as a Colorectal Cancer Controller in Mice (Mus musculus) Induced by Azoxymethane (AOM) and Dextran Sulfate Sodium (DSS) Using PCR RFLP Method?&#8230;                                                      Journal of Biomimetics, Biomaterials and Biomedical Engineering 55, 11-19, 2022', 0),
(111, 'N Lolok, SA Sumiwi, A Muhtadi, Y Susilawati, R Hendriani, ...', 'Molecular docking and molecular dynamics studies of bioactive compounds contained in noni fruit (Morinda citrifolia L.) against human pancreatic &#945;-amylase', 10),
(112, 'C Dewi, A Fristiohady, R Amalia, EJ Bunggulawa, M Muchtaridi', 'Alpha-mangostin as an inhibitor of GSK3&#946; in triple-negative breast cancer                                   Journal of Biomolecular Structure and Dynamics, 1-7, 2022 ', 1),
(113, 'E Ernawati, M Asri', 'Apakah Kurva Phillips Eksis Pada Perekonomian Indonesia di Masa Pandemi Covid-19?                      Journal of Business and Economics Research (JBE)vol. 3 (1), 37-43, 2022 ', 0),
(114, 'LO Alifariki, S Susanty, S Sukurni, H J Siagian', 'The Relationship Between Maternal Depression and Stunting in Children: A Systematic Review                                                                               Journal of Client-Centered Nursing Care vol, 8 (3), 147-158, 2022 ', 5),
(115, 'MIA Umar, M Nurdin, AR Noviyanti, D Dahlan, AS Rini, AA Umar', 'Highly-Active Surface Reaction Over Ultra-Thin (111) Faceted Gold Nanoplates                                       Journal of Cluster Science, 1-6, 2022 ', 0),
(116, 'FD Tuheteru, A Arif, H Husna, B Basrudin, A Albasri, I Mansur, ...', 'Tolerance of lonkida (Nauclea orientalis L.) seedlings inoculated with mycorrhizae against drought and waterlogging stress                                                                     Journal of Degraded and Mining Lands Management 9 (4), 3725-3732, 2022 ', 0),
(117, 'Y Nugroho, S Suyanto, GS Rudy, S Supandi, YHE Saputra, S Alam, ...', 'A comparison of soil characteristics from four land covers around a coal mining concession area in South Kalimantan                                            OURNAL OF DEGRADED AND MINING LANDS MANAGEMENT, 2022 ', 0),
(118, 'U Udin, R Dananjoyo, I Isalman', 'Transactional Leadership and Innovative Work Behavior: Testing the Mediation Role of Knowledge Sharing in Distribution Market                                                            Journal of Distribution Science 20 (1), 41-53, 2022 ', 13),
(119, 'A Arisona, KS Ishola, LD Nursalam', 'Interpretation of Subsurface Geological Features Using 3D ERI Inversion Code for Geotechnical and Geophysical Issues                                               Journal of Earth Sciences and Technology 3 (1), 63-74, 2022 ', 1),
(120, 'S Zaid', 'The market turbulence, entrepreneurial marketing and marketing performance: An empirical study of tuna fillets SME&#39;s industry in Southeast Sulawesi, Indonesia                                                Journal of Eastern European and Central Asian Research (JEECAR) 9 (6), 1008-1020, 2022', 0),
(121, 'I Ilyas, T Tajuddin', 'Internalisasi Nilai-nilai Pancasila di Masa Pandemi Covid-19 dalam Meningkatkan Kinerja Ekonomi di Indonesia', 0),
(122, 'I ilyas Ilyas', 'A Internalisasi Nilai-Nilai Pancasila Di Masa Pandemi Covid 19 Dalam Meningkatkan Kinerja Ekonomi Di Indonesia', 0),
(123, 'I Irawaty, AH Momo, S Sulfa, S Salimin, N Nerlin, SY Mustar', 'Students&#39; Perspective on Online Learning during the COVID-19 Pandemic. (Journal of Education and Learning (EduLearn), v16 n3 p375-383 Aug 2022)', 1),
(124, 'MM Rosli, THTA Aziz, MIA Umar, M Nurdin, AA Umar', 'Propylene Glycol Directed Synthesis of Silver Nanowires for Transparent Conducting Electrode Application (Journal of Electronic Materials volume 51, pages 5150?5158 (2022)', 1),
(125, 'SA Ilham, S Ihsan, M Leorita', 'Rationality and Effectiveness of Antibiotic Therapy of Brongchopneumonia Children in The Treatment Room', 0),
(126, 'ARP Hidayat, AR Widyanto, A Asranudin, R Ediati, DO Sulistiono, ...', 'Recent development of double chamber microbial fuel cell for hexavalent chromium waste removal (Journal of Environmental Chemical Engineering\nVolume 10, Issue 3, June 2022, 107505)', 18),
(127, 'A Zainuddin, Y Sabilu, R Majid, AD Pratiwi', 'Analysis of Phytochemical Compounds, Total Phenolic Content, and Antioxidant Activity Test of Ethanol Extract of Okra (Abelmoschus Esculentus L.) from the Traditional Market of?&#8230;', 0),
(128, 'YS Jafriati, FN Jumakil', 'Testing the Bioactive Compounds and Antioxidant Activity of the Ethanol Extract of Lantana Leaves (Lantana Camara L.) as an Alternative Medicine for Society', 0),
(129, 'Y Sabilu, AZ Jafriati', 'Testing the Toxicity, Protein Content, and Anticholesterol of the Ethanol Extract of the Sea Urchin (Diadema Setosum) Gonad as Marine Biodiversity-Based Medicinal Ingredients', 0),
(130, 'S Daruyani, I Irawaty, RA Krestianti, OD Purbiyanti, RR Hakim', 'Perancangan Pembuatan E-Learning Berbasis Website Pada SMK Ad-Da&#8217;wah Jakarta', 0),
(131, 'J Hos, S Kusujiarti, A Upe, M Arsyad, FY Dharta, J Natanson', 'Conflict Management in Multiethnic Communities: a Case Study in Southeast Sulawesi, Indonesia (Journal of International Migration and Integration volume 23, pages 1963?1985 (2022)', 2),
(132, 'LOAF Hasidu, A Prasetya, M Maharani, N Anisa, RT Utami, LMH Nadia', 'Struktur Komunitas, Biomassa Permukaan dan Status Simpanan Karbon Biru di Kawasan Mangrove Terdegradasi Kabupaten Kolaka', 0),
(133, 'R Ruslin, Y Yamin, H Kasmawati, S Mangrura, L Kadidae, A Alroem, ...', 'The Search for Cyclooxygenase-2 (COX-2) Inhibitors for the Treatment of Inflammation Disease: An in-silico Study (Journal of Multidisciplinary Healthcare\nVolume 15, 2022 - Issue)', 3),
(134, 'A Alimin, LO Kadidae, L Agusu, LO Ahmad, SJ Santosa, A Asria', 'Formation Mechanisms of Co-existence of &#945;-Fe and Iron Oxides Nanoparticles Decorated on Carbon Nanofibers by a Simple Liquid Phase Adsorption-Thermal Oxidation', 0),
(135, 'M Maulidiyah, A Darmawan, W Wahyu, A Musdalifah, OAS La, M Nurdin', 'Potential of usnic acid compound from lichen genus Usnea sp. as antidiabetic agents (https://www.jstage.jst.go.jp/article/jos/71/1/71_ess21211/_article/-char/ja/)', 4),
(136, 'D Wibowo, RHA Malik, F Mustapa, T Nakai, M Maulidiyah, M Nurdin', 'Highly Synergistic Sensor of Graphene Electrode Functionalized with Rutile TiO2 Microstructures to Detect L-Tryptophan Compound (https://www.jstage.jst.go.jp/article/jos/71/5/71_ess21416/_article/-char/ja/)', 4),
(137, 'WS Arsyad, F Cassandra, M Asharuddin, S Suere, R Hidayat', 'Green synthesis of silver nanoparticles from anthocyanin extracts of purple cabbage (brassica oleracea var capitata) and its characteristics for dye-sensitized solar cells?&#8230; (https://iopscience.iop.org/article/10.1088/1742-6596/2274/1/012001/meta)', 2),
(138, 'FF Tatawu Guasman, Herman, Rahman Hasima', 'Legal Protection of Intelectual Property Rights Micro, Small, and Medium Enterprises (MSMEs) Products in Kendari City', 0),
(139, 'YE Pratiwi, N Naharudin, I Ilham, D Wibowo', 'Eligibility of Nickel Slag Waste Combined with Stone Ash for Manufacturing Paving Block (https://journals.semnan.ac.ir/article_5916.html)', 1),
(140, 'MF Purnama, E Ishak, M Kasim', 'The Size Structure, Growth, Mortality, and Exploitation Rate of Freshwater Clam (Batissa violacea var. Celebensis) from Southeast Sulawesi, Indonesia', 0),
(141, 'EIANDMK BAHTIAR BAHTIAR, MUHAMMAD FAJAR PURNAMA, MUIS', 'THE SIZE STRUCTURE, GROWTH, MORTALITY, AND EXPLOITATION RATE OF FRESHWATER CLAM (BATISSA VIOLACEA VAR. CELEBENSIS) FROM RIVER OF SOUTHEAST SULAWESI, INDONESIA', 0),
(142, 'MK BAHTIAR, MUHAMMAD FAJAR PURNAMA, MUIS, ERMAYANTI ISHAK', 'The size structure, growth, mortality, and exploitation rate of freshwater clam (baltissa violacea var. Celebensis) from southeast sulawesi, indonesia', 0),
(143, 'Y Sabilu, RM Jafriati', 'Test of bioactitvity and antioxidant activity of sea urchin (diadema setosum) gonads as medicinal ingredients based on marine biodiversity (http://www.jsju.org/index.php/journal/article/view/1163)', 3),
(144, 'A Hamid, RE Nugraha, H Holilah, H Bahruji, D Prasetyoko', 'R Djalante, J Lassa, D Setiamarga, A Sudjatma, M Indrawan, B Haryanto, ?(Journal of the Korean Ceramic Society, 1-13, 2022 )', 0),
(145, 'H Habiddin, H Herunata, O Sulistina, A Haetami, M Maysara, D Rodi&#263;', 'Pictorial based learning: Promoting conceptual change in chemical kinetics (Journal of the Serbian Chemical Society, 70-70, 2022 )', 0),
(146, 'M Nurdin, M Maulidiyah, AH Watoni, A Armawansa, LOA Salim, Z Arham, ...', 'Nanocomposite design of graphene modified TiO2 for electrochemical sensing in phenol detection (Korean Journal of Chemical Engineering 39 (1), 209-215, 2022 )', 8),
(147, 'Y Safitri, A Munir, A Agriansyah', 'Etnopangan yang Digunakan Masyarakat Desa Lapolea Kecamatan Barangka Kabupaten Muna (Life Science 11 (2), 160-166, 2022 )', 0),
(149, 'RS Edwin, M Kimsan, B Pramono, F Masud, R Sriyani', 'Effect of ferronickel slag in concrete and mortar (Magazine of Civil Engineering 109 (1), 10909, 2022) ', 0),
(150, 'SBCCSJC Hari Kushardanto, Raymond, Jakub WahidSuherfian, Tarlan Subarno ...', 'Household finances and trust are key determinants of benefits from small-scale fisheries co-management (Marine Policy 145 (elsevier), 1-10, 2022)', 0),
(151, 'S Alfat, M Kimura, AM Maulana', 'Correction: Alfat et al. Phase Field Models for Thermal Fracturing and Their Variational Structures. Materials 2022, 15, 2571 (Materials 15 (10), 3623, 2022 )', 1),
(152, 'S Alfat, M Kimura, AM Maulana', 'Phase field models for thermal fracturing and their variational structures (https://www.mdpi.com/1996-1944/15/7/2571)', 1),
(153, 'AS Purnomo, D Prasetyoko, H Bahruji', 'Single-step synthesis and modification of CTAB-hectorite for efficient adsorption of methyl orange dye (Materials Chemistry and Physics 291, 126749, 2022 )', 9),
(154, 'AM Yusuf, K Abidin, A Eliyana, I Usman, JD Malago, FA Noor, T Winata', 'Effect of precursor gas inlet position relative to hot wire cells in HWC-IP-PECVD systems for low-temperature graphene growth (Materials Research Innovations, 1-7, 2022 )', 0),
(155, 'M Nurdin, Z Arham, WO Irna, M Maulidiyah, K Kurniawan, I Irwan, ...', 'Enhanced-charge transfer over molecularly imprinted polyaniline modified graphene/TiO2 nanocomposite electrode for highly selective detection of fipronil insecticide (Materials Science in Semiconductor Processing 151, 106994, 2022 )', 5),
(156, 'MA Limi, HS Dewi', 'Modeling milkfish farming in the land around the nickel-processing plant in North Konawe District, Southeast Sulawesi, Indonesia (Modeling Earth Systems and Environment, 1-11, 2022 )', 0),
(157, 'A Arisona, KS Ishola, M Muliddin, L Hamimu, H Hasria', 'The potential of microgravity technique in subsurface cavities detection at Chan Sow Lin Site in Kuala Lumpur, Malaysia: a case study ( Modeling Earth Systems and Environment, 1-12, 2022 )', 0),
(158, 'M Tadjuddah, NI Wianti, T La Ola, B Sadarun, SAA Taridala', 'Structural modeling of Sama Bajo fishers social resilience in a marine national park (Modeling Earth Systems and Environment, 1-17, 2022 )', 0),
(159, 'IV Utama, IF Mandagi, SA Lawelle, KWA Masengi, K Watanabe, ...', 'Deeply divergent freshwater fish species within a single river system in central Sulawesi (Molecular Phylogenetics and Evolution 173, 107519, 2022 )', 4),
(160, 'C Dewi, A Fristiohady, R Amalia, NK Khairul Ikram, S Ibrahim, ...', 'Signaling Pathways and Natural Compounds in Triple-Negative Breast Cancer Cell Line ( Molecules 27 (12), 3661, 2022 )', 6),
(161, 'H Kasmawati, R Mustarichie, E Halimah, R Ruslin, A Arfan, NA Sida', 'Unrevealing the Potential of Sansevieria trifasciata Prain Fraction for the Treatment of Androgenetic Alopecia by Inhibiting Androgen Receptors Based on LC-MS?&#8230; (Molecules 27 (14), 4358, 2022 )', 6),
(162, 'M Muliadi, M Nurdin, AA Umar', 'Synthesis of photoluminescent europium dithiocarbamate complexes with dimethyl phenanthroline and bipyridyl co-ligands 9Optical Materials 125, 112063, 2022 )', 0),
(163, 'AJ ,Idin Sahidin, Syahrah Annisa Monstavevi, Muhammad Hajrul Malaka ...', 'Antioxidant and Anti-Inflammatory Activity of Ethanol Extract Stem of Etlingera rubroloba A.D. Poulsen (Pakistan Journal of Biological Sciences 25 (10), 885-891, 2022)', 2),
(164, 'Muzuni, Suriana, NA Yanti, Ardiansyah', 'Phenotypic Characterization and Identification of Potential L-Asparaginase-Producing Thermohalophilic Bacteria from Wawolesea Hot Spring, North Konawe, Southeast Sulawesi?&#8230; (Pakistan Journal of Biological Sciences 25 (11), 1021-1032, 2022 )', 0),
(165, 'Muhammad Ilyas Yusuf, Ajeng Diantini, Eli Halimah, Riezki Amalia, Mohammad ...', 'Phytochemical Analysis and Immunomodulatory Potential on Diabetic-Infected Tuberculosis by Fruit Etlingera rubroloba A.D. Poulsen (Pakistan Journal of Biological Sciences 25 (7), 669-675, 2022 )', 0),
(166, 'TW suriana, Nasaruddin, Jamili', 'Characteristics Evaluation of Barcode Sequence of Two Limnonectes (Anura) Sympantric Population From Kendari, Southeast Sulawesi (Pakistan Journal of Biological Sciences 25 (Juli 2022), 732-740, 2022 )', 0),
(167, 'Yusnaini, Muzuni, I Nur', 'Molecular Identification of Lobster Species Based on Cytochrome Oxidase Subunit I Gene characters (Pakistan Journal of Biological Sciences, 2022 )', 0),
(168, 'A Jabbar, I Sahidin, SA Monstavevi, MH Malaka, F Malik, YM Ilyas', 'Antioxidant and Anti-Inflammatory Activity of Ethanol Extract Stem of Etlingera rubroloba A.D. Poulsen.(Pakistan Journal of Biological Sciences: PJBS 25 (10), 885-891, 2022 )', 2),
(169, 'A Kusnan, I Hafizah', 'Enhancement of Cluster Differentiation Antigen 4 and the Body Mass Index in Patients with HIV.(Pakistan Journal of Biological Sciences: PJBS 25 (11), 978-985, 2022 )', 0),
(170, 'M Rahni, C Rakian, A Madiki', 'Scarification and Seed Biomatriconditioning Effect Using Endophytic-Rhizobacteria in Areca Nut (Areca catechu L.) Seedling Vigor.(Pakistan Journal of Biological Sciences: PJBS 25 (2), 168-174, 2022)', 0),
(171, 'R Ningsih', 'Molecular Identification of Phytophthora sp. From Indonesian Cocoa Using Phylogenetic Analysis. (Pakistan Journal of Biological Sciences: PJBS 25 (3), 245-253, 2022 )', 1),
(172, 'A Diantini, E Halimah, R Amalia, M Ghozali, E Julaeha, I Sahidin, ...', 'Phytochemical Analysis and Immunomodulatory Potential on Diabetic-Infected Tuberculosis by Fruit Etlingera rubroloba A.D. Poulsen. (Pakistan Journal of Biological Sciences: PJBS 25 (7), 669-675, 2022 )', 1),
(173, 'T Walhidayah', 'Characteristics Evaluation of a Barcode Sequence of Two Limnonectes (Anura) Sympatric Populations from Kendari, Southeast Sulawesi.(Pakistan Journal of Biological Sciences: PJBS 25 (8), 732-740, 2022 )', 0),
(174, 'O Astuti, L Sara', 'Analysis of Spatial and Temporal Composition and Sex Ratio of Decapod Crustaceans Catch from Southeast Sulawesi Waters of Indonesia. (Pakistan Journal of Zoology 54 (3), 2022 )', 0),
(175, 'S AISJAH, SP PRABANDARI, W HAMID', 'Sustainability Factors of Sharia Banks in Indonesia (Quality Access To Success 23 (190), 384-390, 2022 )', 0),
(176, 'S ZAID, SY ABADI', 'Impact Of WEBQUAL on Backpacker Loyalty in Online Booking Retailer: Mediating Roles of Trust and Engagement. (Quality-Access to Success 23 (187), 2022)', 0),
(177, 'DK RESPATI, AM MUSYAFFI, SF ZAHRA, N HINDARYATININGSIH', 'Exploring Working Capital Management and Performance of Manufacturing Firms in Indonesia. (Quality-Access to Success 23 (188), 2022 )', 0),
(178, 'RR HASAN, AW NUSANTARA, L HATANI', 'Moderating Role of Islamic Work Ethics on The Effect of Innovation and Entrepreneurship Orientation on Entrepreneurial Behavior and Business Performance. (Quality-Access to Success 23 (188), 2022 )', 0),
(179, 'M MAHDY, L HATANI, M MASRI', 'Employee Performance and Quality of Public Service Based on Self Efficiency Perspective, Quality of Work Life and Interpersonal Trust. (Quality-Access to Success 23 (190), 2022 )', 0),
(180, 'AA Henny Kasmawati, Resmi Mustarichie, Eli Halimah, Ruslin Ruslin', 'THE IDENTIFICATION OF MOLECULAR MECHANISMS FROM BIOACTIVE COMPOUNDS IN Sansevieria trifasciata PLANT AS ANTI-ALOPECIA: In-Silico APPROACH (Rasayan Journal of Chemistry 15 (2), 925-932, 2022 )', 0),
(181, 'SA Rasyid', 'Qualitative Phytochemical Screening and Effectiveness Analysis of Batissa violacea celebensis Martens 1897 Crude extract against Antioxidant and Cytotoxic Activity (Research Journal of Pharmacy and Technology 15 (1), 263-269, 2022 )', 0),
(182, 'A Diantini, M Ghozali, I Sahidin', 'A review of current treatment for triple-negative breast cancer (TNBC) (Research Journal of Pharmacy and Technology 15 (1), 409-418, 2022 )', 0),
(183, 'A Sukohar, FI Armadany, NAF Bakede, MH Malaka, DA Ramdini, ...', 'Antimicrobial Activity of Syzygium aromaticum L. Leaves Essential Oil against Candida albicans and Streptococcus mutans', 0),
(184, 'S Hasanuddin, D Gozali, M Arba, DSF Ramadhan, R Mustarichie', 'In silico prediction of metabolite in petroselinum crispum in inhibiting androgen receptor as treatment for alopecia (Research Journal of Pharmacy and Technology 15 (3), 1211-1218, 2022 )', 1),
(185, 'B Sadarun, MH Malaka, A Fristiohady, AWM Yodha, NS Rahmatika, ...', 'Biological activities of Steroids and Extracts from Xestospongia sp. growing in Southeast Sulawesi (Indonesia) (Research Journal of Pharmacy and Technology 15 (4), 1837-1842, 2022 )', 1),
(186, 'M Ifaya, A Muhtadi, I Musfiroh, I Sahidin, A Ma&#39;ruf, S Abdurrahman', 'Standardization, Determination of Antioxidant Activity and Total Flavonoid contents of purified extract of Lawsonia inermis Leaves (Research Journal of Pharmacy and Technology 15 (4), 1837-1842, 2022 )', 0),
(187, 'A Fristiohady, M Leorita, MH Malaka, YM Ilyas, NS Rahmatika, ...', 'Radical scavenger and anti-diabetic potencies of etlingera elatior fruits growing in South East Sulawesi-Indonesia (Research Journal of Pharmacy and Technology 15 (5), 2141-2146, 2022 )', 2),
(188, 'NFM Ali, E Rina, D Wibowo, ANT Adjeng', 'Qualitative Phytochemical Screening and Antifungal Activity of Ethanol Extract of Young Papaya Seeds (Carica papaya L.) against Candida albicans (Research Journal of Pharmacy and Technology 15 (9), 3936-3940, 2022 )', 0),
(189, 'MY Ilyas, A Diantini, M Ghozali, I Sahidin, A Fristiohady', 'Immunomodulatory potency Etlingera rubroloba AD poulsen fruit ethanol extract against macrophage phagocytic activity and CD4 levels in wistar male rats (Research Journal of Pharmacy and Technology 15 (9), 4067-4072, 2022)', 1),
(190, 'D Herdhiansyah, Sudarmi, Sakir, Asriani, LO Midi', 'Analytical hierarchy process (AHP) in Expert Choice for determining superior plantation commodities: A case in East Kolaka Regency, Indonesia (Songklanakarin Journal of Science and Technology (SJST) 44 (4), 923-928, 2022 )', 0),
(191, 'WN Safitri, H Habiddin, M Ulfa, W Trisunaryanti, H Bahruji, H Holilah, ...', 'Dual Template using P123-Gelatin for synthesized Large Mesoporous Silica for Enhanced Adsorption of Dyes (South African Journal of Chemical Engineering, 2022 )', 1),
(192, 'S Tamburaka, IA Samdin, E Nurdin', 'Tax Avoidance from Managerial Ownership and Profitability Aspects in Registered Mining Companies on the Indonesia Stock Exchange (Specialusis Ugdymas 1 (43), 858-871, 2022 )', 0),
(193, 'FS Abd Hair Awang, N Lyndon, IZ Rela, FH Akbar, FUM Azian', 'Effective Resilience Strategy for the Urban Poor During Coronavirus Crisis (Springer Nature, 2022 )', 0),
(194, 'H Erlangga', 'Pharmaceutical Business Competition in Indonesia: A Review (Sys Rev Pharm 2020 11 (10), 617-623, 2022 )', 56),
(195, 'TH Harisma, Hajme Naruse, Hisashi Asanuma', 'The Origin of the Paleo-Kuril Arc, NE Japan: Sediment Provenance Change and Its Implications for Plate Configuration in the NW Pacific Region Since the Late Cretaceous (Tectonics 41 (12), 1-30, 2022 )', 1),
(196, 'H Harisma, H Naruse, H Asanuma, T Hirata', 'The Origin of the Paleo&#8208;Kuril Arc, NE Japan: Sediment Provenance Change and its Implications for Plate Configuration in the NW Pacific Region since the Late Cretaceous (Tectonics, e2022TC007299, 2022 )', 1),
(197, 'S Alam, H Syaf, DN Yusuf, LOK Arif, AA Anas, LO Rustam, Aryanto, ...', 'Analisis Spasial Sebaran Lahan Tidur Berbasis Sistem Informasi Geografis (SIG) di Kabupaten Bombana, Sulawesi Tenggara (The Nation Journal 1 (1), 43-54, 2022 )', 0),
(198, 'H Jumareng, E Setiawan, A Asmuddin, A Rahadian, N Gazali, ...', 'Online Learning for Children with Disabilities During the COVID-19: Investigating Parents&#39; Perceptions.(The Qualitative Report 27 (2), COV16-COV16, 2022 )', 12),
(199, 'R Tosepu, J Gunawan, DS Effendy, H Lestari, H Bahar, P Asfian', 'Response to Questions about Tosepu et al.(2020)&#8220;Correlation between weather and Covid-19 pandemic in Jakarta, Indonesia&#8221; (The Science of the Total Environment 825, 154128, 2022 )', 1),
(200, 'RAFW Iswara', 'Differences in Correlation Values in Sex Determination based on Ridge Density of Hypothenar, External Ear Anthropometric and Canine Index (Trends in Sciences 19 (1), 1444-1444, 2022 )', 1),
(201, 'L Jumadin, H Maheshwari, N Ulupi, AS Satyaningtijas', 'Physiological and Productivity Performances of Japanese Quails Supplemented with Cassava Leaf Paste (Tropical Ichthyology 1 (1), 1-20, 2022 )', 0),
(202, 'A Asriyana, H Halili, A Kurnia', 'Fish diversity on Tanjung Tiram Coast, Southeast Sulawesi, Indonesia (', 1),
(203, 'R Azis, Gazali Salim, Agus Indarjo, Lukman Yudho Prakoso, Retno Hartati ...', 'Phytochemical and Antibacterial Effects of Leaf  Extract from Mangrove Plant (Avicennia Marina) on  Vibrio Parahaemolyticus in Shrimps (World&#8217;s Veterinary Journal, 260-265, 2022 )', 0),
(204, 'D RAMADHAN TOSEPU, FITRA SALEH, NASARUDDIN, MISRAN SAFAR', 'Impact of Land-use Change on Dengue Hemorrhagic Fever in Kolaka District, Southeast Sulawesi Province, Indonesia (WSEAS TRANSACTIONS on ENVIRONMENT and DEVELOPMENT 18, 114-119, 2022 )', 1),
(205, 'N Muhtar, E Cahyono, RM Iswandi', 'Lotka-Volterra Model with Periodic Harvesting (WSEAS Transactions on Systems 21, 283-293, 2022 )', 1),
(206, 'F? Marcaigh, DJ Kelly, DP O&#8217;connell, K Analuddin, A Karya, ...', 'Small islands and large biogeographic barriers have driven contrasting speciation patterns in Indo-Pacific sunbirds (Aves: Nectariniidae) (Zoological Journal, Volume 198, Issue 1, May 2023, Pages 1-325)', 1),
(207, 'AB Nofrianto, SA Lawelle, DF Mokodongan, KWA Masengi, N Inomata, ...', 'Ancient Admixture in Freshwater Halfbeaks of the Genus Nomorhamphus in Southeast Sulawesi (Zoological Science 39 (5), 2022 )', 0),
(208, 'M Nurdin, MZ Muzakkar, M Maulidiyah, T Trisna, Z Arham, I Irwan, ...', 'High Performance COD Detection of Organic Compounds Pollutants using Sulfurized-TiO2/Ti Nanotubes Arrays Photoelectrocatalyst (Research Square, https://orcid.org/0000-0002-6727-9283, hal 1-20)', 4),
(209, 'M Natsir, I Irwan, T Azis, I Wati, M Maulidiyah, Z Arham, CM Bijang, ...', 'Enhanced Adsorption and Photocatalytic Degradation of Methylene Blue Using S-TiO 2 Composites Pillared Clay under Visible Light', 0);
INSERT INTO `sitasi_ilmiah` (`id`, `penulis`, `judul_artikel`, `jumlah_artikel`) VALUES
(210, 'Y Nugroho, MA Soendjoto, S Suyanto, J Matatula, S Alam, ...', 'Traditional medicinal plants and their utilization by local communities around Lambung Mangkurat Education Forests, South Kalimantan, Indonesia (Biodiversitas, volume 23,Number 1, January 2022, pages : 306-314)', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jalur_masuk`
--

CREATE TABLE `tabel_jalur_masuk` (
  `id_jalur_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_periode`
--

CREATE TABLE `tabel_periode` (
  `id_periode` int(11) NOT NULL,
  `tahun_akademik` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_seleksi_maba`
--

CREATE TABLE `tabel_seleksi_maba` (
  `id` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_jalur_masuk` varchar(11) NOT NULL,
  `tahun_akademik` varchar(245) NOT NULL,
  `nama_prodi` varchar(245) NOT NULL,
  `jalur_masuk` varchar(245) NOT NULL,
  `peminat` varchar(245) NOT NULL,
  `daya_tampung` varchar(200) NOT NULL,
  `lulus_seleksi` varchar(200) NOT NULL,
  `registrasi_ulang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--
-- Kesalahan membaca struktur untuk tabel sistem_aps_uho.tes: #1932 - Table &#039;sistem_aps_uho.tes&#039; doesn&#039;t exist in engine
-- Kesalahan membaca data untuk tabel sistem_aps_uho.tes: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `sistem_aps_uho`.`tes`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditasi_eksternal`
--
ALTER TABLE `akreditasi_eksternal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akreditasi_internasional`
--
ALTER TABLE `akreditasi_internasional`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `audit_keuangan_eks`
--
ALTER TABLE `audit_keuangan_eks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_login`
--
ALTER TABLE `auth_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bebankerja_dosen`
--
ALTER TABLE `bebankerja_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecukupan_dosen`
--
ALTER TABLE `kecukupan_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasama_peneltian`
--
ALTER TABLE `kerjasama_peneltian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasama_pm`
--
ALTER TABLE `kerjasama_pm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasama_pt`
--
ALTER TABLE `kerjasama_pt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mhs_asing`
--
ALTER TABLE `mhs_asing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelajaran_praktikum`
--
ALTER TABLE `pembelajaran_praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi_akademik`
--
ALTER TABLE `prestasi_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi_nonakademik`
--
ALTER TABLE `prestasi_nonakademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produktivitas_penelitian`
--
ALTER TABLE `produktivitas_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produktivitas_penelitianpkm`
--
ALTER TABLE `produktivitas_penelitianpkm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_jasa`
--
ALTER TABLE `produk_jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indeks untuk tabel `rekognisi_dosen`
--
ALTER TABLE `rekognisi_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_akreditasi`
--
ALTER TABLE `riwayat_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sitasi_ilmiah`
--
ALTER TABLE `sitasi_ilmiah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_jalur_masuk`
--
ALTER TABLE `tabel_jalur_masuk`
  ADD PRIMARY KEY (`id_jalur_masuk`);

--
-- Indeks untuk tabel `tabel_periode`
--
ALTER TABLE `tabel_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `tabel_seleksi_maba`
--
ALTER TABLE `tabel_seleksi_maba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akreditasi_eksternal`
--
ALTER TABLE `akreditasi_eksternal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `akreditasi_internasional`
--
ALTER TABLE `akreditasi_internasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `audit_keuangan_eks`
--
ALTER TABLE `audit_keuangan_eks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `auth_login`
--
ALTER TABLE `auth_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bebankerja_dosen`
--
ALTER TABLE `bebankerja_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kecukupan_dosen`
--
ALTER TABLE `kecukupan_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kerjasama_peneltian`
--
ALTER TABLE `kerjasama_peneltian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kerjasama_pm`
--
ALTER TABLE `kerjasama_pm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kerjasama_pt`
--
ALTER TABLE `kerjasama_pt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `mhs_asing`
--
ALTER TABLE `mhs_asing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pembelajaran_praktikum`
--
ALTER TABLE `pembelajaran_praktikum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prestasi_akademik`
--
ALTER TABLE `prestasi_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT untuk tabel `prestasi_nonakademik`
--
ALTER TABLE `prestasi_nonakademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT untuk tabel `produktivitas_penelitian`
--
ALTER TABLE `produktivitas_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produktivitas_penelitianpkm`
--
ALTER TABLE `produktivitas_penelitianpkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk_jasa`
--
ALTER TABLE `produk_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `rekognisi_dosen`
--
ALTER TABLE `rekognisi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_akreditasi`
--
ALTER TABLE `riwayat_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sitasi_ilmiah`
--
ALTER TABLE `sitasi_ilmiah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1784;

--
-- AUTO_INCREMENT untuk tabel `tabel_jalur_masuk`
--
ALTER TABLE `tabel_jalur_masuk`
  MODIFY `id_jalur_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_periode`
--
ALTER TABLE `tabel_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_seleksi_maba`
--
ALTER TABLE `tabel_seleksi_maba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
