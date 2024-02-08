-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 09:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajr`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset_mobil`
--

CREATE TABLE `aset_mobil` (
  `ID_MOBIL` bigint(16) NOT NULL,
  `ID_PEMILIK` bigint(16) DEFAULT NULL,
  `PLAT_NOMOR_MOBIL` varchar(32) DEFAULT NULL,
  `NOMOR_STNK_MOBIL` varchar(32) DEFAULT NULL,
  `NAMA_MOBIL` varchar(32) DEFAULT NULL,
  `TIPE_MOBIL` varchar(32) DEFAULT NULL,
  `JENIS_TRANSMISI_MOBIL` varchar(32) DEFAULT NULL,
  `JENIS_BAHAN_BAKAR_MOBIL` varchar(32) DEFAULT NULL,
  `VOLUME_BAHAN_BAKAR_MOBIL` varchar(32) DEFAULT NULL,
  `WARNA_MOBIL` varchar(32) DEFAULT NULL,
  `KAPASITAS_PENUMPANG_MOBIL` bigint(5) DEFAULT NULL,
  `FASILITAS_MOBIL` varchar(50) DEFAULT NULL,
  `KATEGORI_ASET_MOBIL` tinyint(1) DEFAULT NULL,
  `PERIODE_KONTRAK_MULAI_MOBIL` date DEFAULT NULL,
  `PERIODE_KONTRAK_AKHIR_MOBIL` date DEFAULT NULL,
  `TANGGAL_TERAKHIR_KALI` date DEFAULT NULL,
  `VOLUME_BAGASI_MOBIL` varchar(32) DEFAULT NULL,
  `HARGA_SEWA_MOBIL` float DEFAULT NULL,
  `STATUS_KETERSEDIAAN_MOBIL` tinyint(1) DEFAULT NULL,
  `GAMBAR_MOBIL` varchar(150) DEFAULT NULL,
  `STATUS_MOBIL` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset_mobil`
--

INSERT INTO `aset_mobil` (`ID_MOBIL`, `ID_PEMILIK`, `PLAT_NOMOR_MOBIL`, `NOMOR_STNK_MOBIL`, `NAMA_MOBIL`, `TIPE_MOBIL`, `JENIS_TRANSMISI_MOBIL`, `JENIS_BAHAN_BAKAR_MOBIL`, `VOLUME_BAHAN_BAKAR_MOBIL`, `WARNA_MOBIL`, `KAPASITAS_PENUMPANG_MOBIL`, `FASILITAS_MOBIL`, `KATEGORI_ASET_MOBIL`, `PERIODE_KONTRAK_MULAI_MOBIL`, `PERIODE_KONTRAK_AKHIR_MOBIL`, `TANGGAL_TERAKHIR_KALI`, `VOLUME_BAGASI_MOBIL`, `HARGA_SEWA_MOBIL`, `STATUS_KETERSEDIAAN_MOBIL`, `GAMBAR_MOBIL`, `STATUS_MOBIL`) VALUES
(1, 4, 'DD 4419 KF', '13668935', 'Toyota New Vios', 'Sedan', 'AT', 'Pertamax', NULL, 'Merah', 4, 'AC, Safety Bag', 1, '2022-04-06', '2022-04-06', NULL, '-', 400000, 1, NULL, 1),
(2, NULL, 'DD 1234 KF', '13668123', 'Honda Civic', 'Sedan', 'AT', 'Pertamax', '1', 'Abu-abu', 4, 'AC, Multimedia, Honda Sensing Safety', 0, '2022-05-01', '2023-05-01', '2022-04-06', '1', 500000, 1, '', 1),
(3, 3, 'DD 1222 KF', '13668333', 'Toyota New Agya', 'City Car', 'AT', 'Pertalite', '20', 'Merah', 4, 'AC, Air Bag', 1, '2022-04-27', '2022-05-28', '0001-01-01', '1', 250000, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_CUSTOMER` bigint(3) UNSIGNED ZEROFILL NOT NULL,
  `FORMAT_ID_CUSTOMER` varchar(20) DEFAULT NULL,
  `NAMA_CUSTOMER` varchar(32) DEFAULT NULL,
  `ALAMAT_CUSTOMER` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR_CUSTOMER` date DEFAULT NULL,
  `JENIS_KELAMIN_CUSTOMER` tinyint(1) DEFAULT NULL,
  `EMAIL_CUSTOMER` varchar(32) DEFAULT NULL,
  `NOMOR_TELEPON_CUSTOMER` varchar(32) DEFAULT NULL,
  `TANDA_PENGENAL_CUSTOMER` varchar(150) DEFAULT NULL,
  `SIM_CUSTOMER` varchar(150) DEFAULT NULL,
  `PASSWORD_CUSTOMER` varchar(150) DEFAULT NULL,
  `VERIFIKASI_CUSTOMER` tinyint(1) DEFAULT 0,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_CUSTOMER`, `FORMAT_ID_CUSTOMER`, `NAMA_CUSTOMER`, `ALAMAT_CUSTOMER`, `TANGGAL_LAHIR_CUSTOMER`, `JENIS_KELAMIN_CUSTOMER`, `EMAIL_CUSTOMER`, `NOMOR_TELEPON_CUSTOMER`, `TANDA_PENGENAL_CUSTOMER`, `SIM_CUSTOMER`, `PASSWORD_CUSTOMER`, `VERIFIKASI_CUSTOMER`, `id`) VALUES
(029, 'CUS2022-05-11-', 'VitoCarlenG', 'Jl Sao Sao', '2001-01-01', 1, 'vitocarlengiovanni@gmail.com', '085211119961', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fjakarta.suara.com%2Fread%2F2021%2F08%2F20%2F112238%2Flink-cek-nik-ktp-jakarta-lengkap-cara-cek-nik-k', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fjakarta.suara.com%2Fread%2F2021%2F08%2F20%2F112238%2Flink-cek-nik-ktp-jakarta-lengkap-cara-cek-nik-k', '$2y$10$WC6xAGL8mQo3vmxIr1Ef2Oh3epZ5fwffXari39wXhgfSWSdWAJK2G', 1, 1),
(030, 'CUS2022-06-13-', 'Narto', 'Jl Sao Sao', '2001-01-01', 1, 'narto@gmail.com', '085211119961', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fjakarta.suara.com%2Fread%2F2021%2F08%2F20%2F112238%2Flink-cek-nik-ktp-jakarta-lengkap-cara-cek-nik-k', NULL, '$2y$10$/tA.PzlqN8F2nG.6ZL68su761LwaQV1MX0rp.Q4ys2.jNiF/qqj12', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwal`
--

CREATE TABLE `detail_jadwal` (
  `ID_PEGAWAI` bigint(16) NOT NULL,
  `ID_JADWAL` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL NOT NULL,
  `FORMAT_ID_DRIVER` varchar(20) DEFAULT NULL,
  `NAMA_DRIVER` varchar(32) DEFAULT NULL,
  `ALAMAT_DRIVER` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR_DRIVER` date DEFAULT NULL,
  `JENIS_KELAMIN_DRIVER` tinyint(1) DEFAULT NULL,
  `EMAIL_DRIVER` varchar(32) DEFAULT NULL,
  `NOMOR_TELEPON_DRIVER` varchar(32) DEFAULT NULL,
  `BAHASA_DRIVER` tinyint(1) DEFAULT NULL,
  `SIM_DRIVER` varchar(150) DEFAULT '',
  `BEBAS_NAPZA_DRIVER` varchar(150) DEFAULT '',
  `KESEHATAN_JIWA_DRIVER` varchar(150) DEFAULT '',
  `KESEHATAN_JASMANI_DRIVER` varchar(150) DEFAULT '',
  `SKCK_DRIVER` varchar(150) DEFAULT '',
  `STATUS_KETERSEDIAAN_DRIVER` tinyint(1) DEFAULT NULL,
  `PASSWORD_DRIVER` varchar(150) DEFAULT NULL,
  `HARGA_SEWA_DRIVER` float DEFAULT NULL,
  `RERATA_RATING_DRIVER` float DEFAULT NULL,
  `FOTO_DRIVER` varchar(150) DEFAULT NULL,
  `STATUS_DRIVER` tinyint(1) DEFAULT 1,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`ID_DRIVER`, `FORMAT_ID_DRIVER`, `NAMA_DRIVER`, `ALAMAT_DRIVER`, `TANGGAL_LAHIR_DRIVER`, `JENIS_KELAMIN_DRIVER`, `EMAIL_DRIVER`, `NOMOR_TELEPON_DRIVER`, `BAHASA_DRIVER`, `SIM_DRIVER`, `BEBAS_NAPZA_DRIVER`, `KESEHATAN_JIWA_DRIVER`, `KESEHATAN_JASMANI_DRIVER`, `SKCK_DRIVER`, `STATUS_KETERSEDIAAN_DRIVER`, `PASSWORD_DRIVER`, `HARGA_SEWA_DRIVER`, `RERATA_RATING_DRIVER`, `FOTO_DRIVER`, `STATUS_DRIVER`, `id`) VALUES
(011, 'DRV-2022-05-25-', 'Batu', 'jl batu', '2001-01-01', 1, 'batu@gmail.com', '0811', 0, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgYGRgYGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rHxgZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgYGRgYGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rHxgZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgYGRgYGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rHxgZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgYGRgYGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rHxgZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgYGRgYGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rHxgZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8', 1, '$2y$10$FZbzLU4p1wKid47IVICm..lJypslPXAhKAatHSjW3xc8/tE5Tj3hS', 5000, NULL, '', 1, 4),
(012, 'DRV-2022-06-09-', 'ezra12', 'jl', '2001-01-01', 1, 'ezra@gmail.com', '0811', 1, 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 1, '$2y$10$JJCQv37zyGTXecf.P/dWa.A4kryzrKUsGQXNTDRIM.a8OsnFJML1y', 50000, NULL, 'https://cdn.pixabay.com/photo/2020/10/25/17/06/boruto-5684895__480.png', 1, 5),
(013, 'DRV-2022-06-09-', 'nelsi', 'jl sao sao', '2001-01-01', 0, 'nelsi@gmail.com', '0822', 1, 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/03/4030595662.jpg', 1, '$2y$10$chHmNqvycMZZchwGbEwPJ.i78jmzX9e8H4NMRYo/ygxniI153.bS2', 790000, NULL, 'https://cdn.pixabay.com/photo/2020/10/25/17/06/boruto-5684895__480.png', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `ID_JABATAN` bigint(1) NOT NULL,
  `NAMA_JABATAN` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`ID_JABATAN`, `NAMA_JABATAN`) VALUES
(1, 'Manager'),
(2, 'Administrasi'),
(3, 'Customer Service');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('383362d0c209e13020a4d53710429704a2e8d3f2b88786db39f4c67b88c4b2eb0db013e6c467b7ca', 4, 1, 'Authentication Token', '[]', 0, '2022-05-25 15:13:33', '2022-05-25 15:13:33', '2023-05-25 22:13:33'),
('3b730c1b517f3c412170a5484a7ae2781bd84813635386e54eb8859a2b8fd3ab7a3e8cd84a2ee597', 1, 1, 'Authentication Token', '[]', 0, '2022-05-19 15:14:25', '2022-05-19 15:14:25', '2023-05-19 22:14:25'),
('409248dad6a683c509f96965738210dabf7a8465055b4f0adf73cfbb83fed3c7a46182cbb470f96d', 1, 1, 'Authentication Token', '[]', 0, '2022-05-12 16:10:28', '2022-05-12 16:10:28', '2023-05-12 23:10:28'),
('4482316d645908548ceb9160f136b2d25290d4dd317b3ee42a29e207d90885c341a65523fe63ff17', 1, 1, 'Authentication Token', '[]', 0, '2022-05-12 15:50:19', '2022-05-12 15:50:19', '2023-05-12 22:50:19'),
('54c225dadac2127c169f069c4405fdb9060717ceb14f5e783511488feea4d085725b5c9e6458d38b', 1, 1, 'Authentication Token', '[]', 0, '2022-05-19 15:17:01', '2022-05-19 15:17:01', '2023-05-19 22:17:01'),
('55a4f14a9a25c69e5462ccb7db40bf9bcfcd8bb5401361cee32539f29b34ca44fbda07afd2175964', 1, 1, 'Authentication Token', '[]', 0, '2022-05-19 15:15:39', '2022-05-19 15:15:39', '2023-05-19 22:15:39'),
('5bd5e3ebd96bc363b7c6a5fd1179033df49db87090f7afb5efc5455f11c6a825f47761e0dbc47d76', 2, 1, 'Authentication Token', '[]', 0, '2022-05-12 16:12:05', '2022-05-12 16:12:05', '2023-05-12 23:12:05'),
('651be50d04d0d3798f709337fa809152c78808cb886f9b8435fe5d906a312a113036c6fb3bcafea3', 1, 1, 'Authentication Token', '[]', 0, '2022-05-11 14:37:09', '2022-05-11 14:37:09', '2023-05-11 21:37:09'),
('8604567fedf375d7fbd53c9bc9e173d6cdf8a3a88684633c2b5e1fe05842afb4a57612b31fc1051a', 4, 1, 'Authentication Token', '[]', 0, '2022-06-07 07:56:48', '2022-06-07 07:56:48', '2023-06-07 14:56:48'),
('b0eddfe6dab2d467b01be9c1f000a815e6d9c5d6c32e7d6c709610a417ff1e5b0842b687ebd73d0d', 4, 1, 'Authentication Token', '[]', 0, '2022-06-07 07:54:19', '2022-06-07 07:54:19', '2023-06-07 14:54:19'),
('bb0c14f43f3aa3cbdb4de9fbbfa7fd858814d44eb0cb0b47f6c1d710a31dcd52e8d18394f8ef03b1', 1, 1, 'Authentication Token', '[]', 0, '2022-05-19 15:13:48', '2022-05-19 15:13:48', '2023-05-19 22:13:48'),
('df012ec3017ec277a89ab00670ff86050dc8f3168b2b133f7b3397775b54b82c1b646ca048f9a7cf', 1, 1, 'Authentication Token', '[]', 0, '2022-05-11 13:53:40', '2022-05-11 13:53:40', '2023-05-11 20:53:40'),
('ffc0f392cf8b7c1bc8ade7a7ace41da70236a08a1e02e4700a1c062f6e6886f32a9910ea23f69f2e', 1, 1, 'Authentication Token', '[]', 0, '2022-05-15 09:20:33', '2022-05-15 09:20:33', '2023-05-15 16:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'M3q4yrDqM1VmUELHcGwuOH9UmiY4vk5AxUESTKMZ', NULL, 'http://localhost', 1, 0, 0, '2022-05-07 09:56:45', '2022-05-07 09:56:45'),
(2, NULL, 'Laravel Password Grant Client', 'ybdd0tXab1mJ8foqhJucc53LtSDtr2qbYh7ZFHHc', 'users', 'http://localhost', 0, 1, 0, '2022-05-07 09:56:45', '2022-05-07 09:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-05-07 09:56:45', '2022-05-07 09:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` bigint(16) NOT NULL,
  `ID_JABATAN` bigint(1) NOT NULL,
  `NAMA_PEGAWAI` varchar(32) DEFAULT NULL,
  `FOTO_PEGAWAI` varchar(150) DEFAULT NULL,
  `TANGGAL_LAHIR_PEGAWAI` date DEFAULT NULL,
  `JENIS_KELAMIN_PEGAWAI` tinyint(1) DEFAULT NULL,
  `ALAMAT_PEGAWAI` varchar(100) DEFAULT NULL,
  `NOMOR_TELEPON_PEGAWAI` varchar(32) DEFAULT NULL,
  `EMAIL_PEGAWAI` varchar(32) DEFAULT NULL,
  `PASSWORD_PEGAWAI` varchar(150) DEFAULT NULL,
  `STATUS_PEGAWAI` tinyint(1) DEFAULT 1,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `ID_JABATAN`, `NAMA_PEGAWAI`, `FOTO_PEGAWAI`, `TANGGAL_LAHIR_PEGAWAI`, `JENIS_KELAMIN_PEGAWAI`, `ALAMAT_PEGAWAI`, `NOMOR_TELEPON_PEGAWAI`, `EMAIL_PEGAWAI`, `PASSWORD_PEGAWAI`, `STATUS_PEGAWAI`, `id`) VALUES
(0, 3, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(12, 2, 'Vandy', 'https://www.youtube.com/watch?v=7HgJIAUtICU', '2022-04-07', 0, 'Jl Sao Sao', '0811', 'vandy@gmail.com', '$2y$10$aDgd1kkT5OV44w0KtfgU7uF4vzSlcSJQImp//xdEfkrnHRicBarPG', 1, 2),
(13, 1, 'Vito Carlen Giovanni', 'https://www.youtube.com/watch?v=7HgJIAUtICU', '2002-03-16', 1, 'Jl Sao Sao', '085211119961', 'xlhvitocarlen@gmail.com', '$2y$10$/QpUcC90KdYKVyQS5nQtj.lU3BhoT82mJomeVNnrlaJpksCJuRsAa', 1, 3),
(14, 3, 'Sandy', '', '2001-01-01', 1, 'Jl Tes', '085211119961', 'abc@gmail.com', '$2y$10$/eWFlHN2fAulqtHv/Bf3RuNfWJGB1kkRnl9IhS1sWCAI9PWLp/m1a', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kendaraan`
--

CREATE TABLE `pemilik_kendaraan` (
  `ID_PEMILIK` bigint(16) NOT NULL,
  `NOMOR_KTP_PEMILIK` varchar(32) DEFAULT NULL,
  `NAMA_PEMILIK` varchar(32) DEFAULT NULL,
  `ALAMAT_PEMILIK` varchar(100) DEFAULT NULL,
  `NOMOR_TELEPON_PEMILIK` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik_kendaraan`
--

INSERT INTO `pemilik_kendaraan` (`ID_PEMILIK`, `NOMOR_KTP_PEMILIK`, `NAMA_PEMILIK`, `ALAMAT_PEMILIK`, `NOMOR_TELEPON_PEMILIK`) VALUES
(1, '100', 'Batu', 'jl sao sao', '08'),
(3, '3333', 'Abdul', 'Jl Ubur Ubur', '4444'),
(4, '123', 'Bara', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `ID_PROMO` bigint(16) NOT NULL,
  `KODE_PROMO` varchar(32) DEFAULT NULL,
  `JENIS_PROMO` varchar(32) DEFAULT NULL,
  `KETERANGAN_PROMO` varchar(60) DEFAULT NULL,
  `PERSENAN_PROMO` float DEFAULT NULL,
  `STATUS_PROMO` tinyint(1) DEFAULT NULL,
  `AKTIVASI_PROMO` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`ID_PROMO`, `KODE_PROMO`, `JENIS_PROMO`, `KETERANGAN_PROMO`, `PERSENAN_PROMO`, `STATUS_PROMO`, `AKTIVASI_PROMO`) VALUES
(1, 'VCG15', 'Anti-Weekday', 'Diskon 15% Di Hari Selain Weekday', 15, 1, 1),
(2, 'VCG20', 'Weekday', 'Diskon 20% Hanya Di Hari Weekday', 20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `ID_JADWAL` tinyint(4) NOT NULL,
  `HARI_JADWAL` varchar(32) DEFAULT NULL,
  `SHIFT_JADWAL` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`ID_JADWAL`, `HARI_JADWAL`, `SHIFT_JADWAL`) VALUES
(1, 'Selasa', 1),
(2, 'Selasa', 2),
(3, 'Rabu', 1),
(4, 'Rabu', 2),
(5, 'Kamis', 1),
(6, 'Kamis', 2),
(7, 'Jumat', 1),
(8, 'Jumat', 2),
(9, 'Sabtu', 1),
(10, 'Sabtu', 2),
(11, 'Minggu', 1),
(12, 'Minggu', 2),
(13, 'Selasa', 1),
(14, 'Selasa', 2),
(15, 'Rabu', 1),
(16, 'Rabu', 2),
(17, 'Kamis', 1),
(18, 'Kamis', 2),
(19, 'Jumat', 1),
(20, 'Jumat', 2),
(21, 'Sabtu', 1),
(22, 'Sabtu', 2),
(23, 'Minggu', 1),
(24, 'Minggu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `NOMOR_TRANSAKSI` bigint(3) UNSIGNED ZEROFILL NOT NULL,
  `ID_CUSTOMER` bigint(3) UNSIGNED ZEROFILL NOT NULL,
  `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `ID_PEGAWAI` bigint(16) NOT NULL,
  `ID_PROMO` bigint(16) DEFAULT NULL,
  `ID_MOBIL` bigint(16) NOT NULL,
  `FORMAT_NOMOR_TRANSAKSI` varchar(40) DEFAULT NULL,
  `TANGGAL_TRANSAKSI` timestamp NULL DEFAULT NULL,
  `JENIS_TRANSAKSI` tinyint(1) DEFAULT NULL,
  `STATUS_TRANSAKSI` varchar(150) DEFAULT 'Menunggu Verifikasi Dari Customer Service',
  `TANGGAL_WAKTU_MULAI_SEWA` timestamp NULL DEFAULT NULL,
  `TANGGAL_WAKTU_SELESAI_SEWA` timestamp NULL DEFAULT NULL,
  `TANGGAL_WAKTU_PENGEMBALIAN` timestamp NULL DEFAULT NULL,
  `METODE_PEMBAYARAN` tinyint(1) DEFAULT NULL,
  `RATING_DRIVER` float DEFAULT NULL,
  `KOMENTAR_DRIVER` varchar(150) DEFAULT NULL,
  `RATING_RENTAL` float DEFAULT NULL,
  `KOMENTAR_RENTAL` varchar(150) DEFAULT NULL,
  `SUB_TOTAL_PEMBAYARAN` float DEFAULT NULL,
  `BIAYA_EKSTENSI_PEMBAYARAN` float DEFAULT NULL,
  `TOTAL_PEMBAYARAN` float DEFAULT NULL,
  `DISKON_PROMO_PEMBAYARAN` float DEFAULT NULL,
  `BUKTI_PEMBAYARAN` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`NOMOR_TRANSAKSI`, `ID_CUSTOMER`, `ID_DRIVER`, `ID_PEGAWAI`, `ID_PROMO`, `ID_MOBIL`, `FORMAT_NOMOR_TRANSAKSI`, `TANGGAL_TRANSAKSI`, `JENIS_TRANSAKSI`, `STATUS_TRANSAKSI`, `TANGGAL_WAKTU_MULAI_SEWA`, `TANGGAL_WAKTU_SELESAI_SEWA`, `TANGGAL_WAKTU_PENGEMBALIAN`, `METODE_PEMBAYARAN`, `RATING_DRIVER`, `KOMENTAR_DRIVER`, `RATING_RENTAL`, `KOMENTAR_RENTAL`, `SUB_TOTAL_PEMBAYARAN`, `BIAYA_EKSTENSI_PEMBAYARAN`, `TOTAL_PEMBAYARAN`, `DISKON_PROMO_PEMBAYARAN`, `BUKTI_PEMBAYARAN`) VALUES
(025, 029, 011, 0, 1, 3, 'TRN20', '2022-05-10 13:34:22', 1, 'Selesai', '2022-05-01 13:34:22', '2022-05-31 13:34:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(033, 029, 013, 14, 2, 2, 'TRN2022-06-09-01-', '2022-06-09 13:16:06', 1, 'Selesai', '2022-06-08 13:15:00', '2022-06-09 13:15:00', '2022-06-10 00:17:35', 0, NULL, NULL, NULL, NULL, 1290000, 1290000, 2322000, 258000, 'https://cdn0-production-images-kly.akamaized.net/9n6z8b7isS50iBzZ2_8XM1X_ZQA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-pro'),
(034, 029, NULL, 14, NULL, 2, 'TRN2022-06-10-01-', '2022-06-10 10:04:01', 0, 'Selesai', '2022-06-09 12:01:00', '2022-06-10 12:01:00', '2022-06-10 12:05:03', 0, NULL, NULL, NULL, NULL, 500000, 0, 500000, 0, 'https://cdn0-production-images-kly.akamaized.net/9n6z8b7isS50iBzZ2_8XM1X_ZQA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-pro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, '-', '', NULL, '', NULL, NULL, NULL),
(1, 'VitoCarlenG', 'vitocarlengiovanni@gmail.com', NULL, '$2y$10$WC6xAGL8mQo3vmxIr1Ef2Oh3epZ5fwffXari39wXhgfSWSdWAJK2G', NULL, '2022-05-11 13:51:40', '2022-05-12 11:51:06'),
(2, 'Vandy', 'vandy@gmail.com', NULL, '$2y$10$aDgd1kkT5OV44w0KtfgU7uF4vzSlcSJQImp//xdEfkrnHRicBarPG', NULL, '2022-05-12 14:12:05', NULL),
(3, 'Vito Carlen Giovanni', 'xlhvitocarlen@gmail.com', NULL, '$2y$10$/QpUcC90KdYKVyQS5nQtj.lU3BhoT82mJomeVNnrlaJpksCJuRsAa', NULL, '2022-05-12 14:28:01', NULL),
(4, 'Batu', 'batu@gmail.com', NULL, '$2y$10$/nGjvZVvVgpSJcXvaJoISOrOR1bNzJDYmoAZtnfCSu.Q9O/sFMVOu', NULL, '2022-05-25 13:41:10', '2022-05-25 15:15:34'),
(5, 'ezra12', 'ezra@gmail.com', NULL, '$2y$10$JJCQv37zyGTXecf.P/dWa.A4kryzrKUsGQXNTDRIM.a8OsnFJML1y', NULL, '2022-06-09 04:47:16', '2022-06-09 04:47:37'),
(6, 'nelsi', 'nelsi@gmail.com', NULL, '$2y$10$chHmNqvycMZZchwGbEwPJ.i78jmzX9e8H4NMRYo/ygxniI153.bS2', NULL, '2022-06-09 04:50:20', '2022-06-09 04:50:35'),
(7, 'Sandy', 'abc@gmail.com', NULL, '$2y$10$/eWFlHN2fAulqtHv/Bf3RuNfWJGB1kkRnl9IhS1sWCAI9PWLp/m1a', NULL, '2022-06-10 00:08:13', '2022-06-10 00:08:24'),
(8, 'Narto', 'narto@gmail.com', NULL, '$2y$10$/tA.PzlqN8F2nG.6ZL68su761LwaQV1MX0rp.Q4ys2.jNiF/qqj12', NULL, '2022-06-13 05:08:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  ADD PRIMARY KEY (`ID_MOBIL`),
  ADD KEY `RELATION_403_FK` (`ID_PEMILIK`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`),
  ADD KEY `RELATION_700_FK` (`id`);

--
-- Indexes for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD PRIMARY KEY (`ID_PEGAWAI`,`ID_JADWAL`),
  ADD KEY `FK_RELATION_285` (`ID_JADWAL`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`ID_DRIVER`),
  ADD KEY `RELATION_701_FK` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`),
  ADD KEY `RELATION_286_FK` (`ID_JABATAN`),
  ADD KEY `RELATION_702_FK` (`id`);

--
-- Indexes for table `pemilik_kendaraan`
--
ALTER TABLE `pemilik_kendaraan`
  ADD PRIMARY KEY (`ID_PEMILIK`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_PROMO`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ID_JADWAL`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`NOMOR_TRANSAKSI`),
  ADD KEY `RELATION_381_FK` (`ID_CUSTOMER`),
  ADD KEY `RELATION_382_FK` (`ID_DRIVER`),
  ADD KEY `RELATION_404_FK` (`ID_PEGAWAI`),
  ADD KEY `RELATION_405_FK` (`ID_PROMO`),
  ADD KEY `RELATION_413_FK` (`ID_MOBIL`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  MODIFY `ID_MOBIL` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_CUSTOMER` bigint(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `ID_JABATAN` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_PEGAWAI` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemilik_kendaraan`
--
ALTER TABLE `pemilik_kendaraan`
  MODIFY `ID_PEMILIK` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID_PROMO` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `ID_JADWAL` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `NOMOR_TRANSAKSI` bigint(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  ADD CONSTRAINT `FK_RELATION_403` FOREIGN KEY (`ID_PEMILIK`) REFERENCES `pemilik_kendaraan` (`ID_PEMILIK`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_RELATION_700` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD CONSTRAINT `FK_RELATION_285` FOREIGN KEY (`ID_JADWAL`) REFERENCES `shift` (`ID_JADWAL`),
  ADD CONSTRAINT `FK_RELATION_375` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `FK_RELATION_701` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_RELATION_286` FOREIGN KEY (`ID_JABATAN`) REFERENCES `jabatan` (`ID_JABATAN`),
  ADD CONSTRAINT `FK_RELATION_702` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_RELATION_381` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `customer` (`ID_CUSTOMER`),
  ADD CONSTRAINT `FK_RELATION_382` FOREIGN KEY (`ID_DRIVER`) REFERENCES `driver` (`ID_DRIVER`),
  ADD CONSTRAINT `FK_RELATION_404` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_RELATION_405` FOREIGN KEY (`ID_PROMO`) REFERENCES `promo` (`ID_PROMO`),
  ADD CONSTRAINT `FK_RELATION_413` FOREIGN KEY (`ID_MOBIL`) REFERENCES `aset_mobil` (`ID_MOBIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
