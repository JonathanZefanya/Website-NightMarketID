-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Mei 2024 pada 20.30
-- Versi server: 10.5.19-MariaDB-cll-lve-log
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nightmarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `path`, `tipe`, `deskripsi`, `created_at`, `updated_at`) VALUES
(77, '/assets/banner/20230330141729dana-deals-bangjeff.webp', 'popup', 'Modal', '2023-04-11 15:11:13', '2023-04-11 15:11:13'),
(82, '/assets/banner/banner.jpg', 'banner', 'bannee', '2023-04-20 23:01:08', '2023-04-20 23:01:08'),
(85, '/assets/logo/nightmarket.png', 'logoheader', 'Logo', '2024-05-30 12:12:43', '2024-05-02 12:12:43'),
(86, '/assets/logo/nightmarket.png', 'logofooter', 'Logo', '2024-05-30 12:13:08', '2024-05-02 12:13:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_joki`
--

CREATE TABLE `data_joki` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` text NOT NULL,
  `email_joki` text NOT NULL,
  `password_joki` text NOT NULL,
  `loginvia_joki` text NOT NULL,
  `nickname_joki` text NOT NULL,
  `request_joki` text NOT NULL,
  `catatan_joki` text NOT NULL,
  `status_joki` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `no_pembayaran` varchar(255) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `status` enum('Success','Pending') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `deposits`
--

INSERT INTO `deposits` (`id`, `username`, `metode`, `no_pembayaran`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(18, 'Maks', 'BCA', '', 10000, 'Success', '2023-04-12 13:58:27', '2023-04-12 17:02:46'),
(19, 'miliyan', 'OVO', '085328272174', 100000, 'Success', '2023-04-19 11:28:48', '2023-04-19 11:52:15'),
(20, 'miliyan', 'BCA', '', 100000, 'Success', '2023-04-19 11:29:42', '2023-04-19 11:52:21'),
(21, 'miliyan', 'GOPAY', '085328272174', 100000, 'Success', '2023-04-19 11:29:57', '2023-04-19 11:52:30'),
(22, 'miliyan', 'DANA', '085328272174', 100000, 'Success', '2023-04-19 11:30:15', '2023-04-19 11:52:54'),
(23, 'miliyan', 'SHOPEPAY', '081392868007', 100000, 'Success', '2023-04-19 11:30:25', '2023-04-19 11:52:48'),
(24, 'miliyan', 'BRI', '001401026671533', 100000, 'Success', '2023-04-19 11:36:39', '2023-04-19 11:52:59'),
(25, 'miliyan', 'BCA', '1310778016/cahaya putra pertama', 100000, 'Success', '2023-04-19 11:38:24', '2023-04-19 11:52:44'),
(26, 'miliyan', 'OVO', '085328272174 ', 10000, 'Success', '2023-04-19 11:43:42', '2023-04-19 11:52:38'),
(27, 'miliyan', 'GOPAY', '085328272174 CAHAYA PUTRA PERTAMA', 1000000, 'Success', '2023-04-19 11:47:55', '2023-04-19 11:52:35'),
(28, 'Fann', 'BRI', '001401026671533 CAHAYA PUTRA PERTAMA', 100000, 'Success', '2023-04-27 23:24:46', '2023-04-28 04:03:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gojeks`
--

CREATE TABLE `gojeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_token` varchar(2000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history__gojeks`
--

CREATE TABLE `history__gojeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history__gojeks`
--

INSERT INTO `history__gojeks` (`id`, `tanggal`, `keterangan`, `type`, `amount`, `created_at`, `updated_at`) VALUES
(1, '2023-03-03 21:00:31.0', 'Top Up Bank SEABANK 330304040030', 'credit', '37400', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(2, '2023-01-23 10:22:30.0', 'TopUp via Jago 23023T037867', 'credit', '10000', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(3, '2023-01-22 20:05:52.0', 'GoPay Topup\n#2023012309904227307', 'credit', '300041', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(4, '2023-01-22 17:00:13.0', 'GoPay Topup\n#2023012309904222062', 'credit', '100430', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(5, '2022-12-22 06:58:01.0', 'GO-PAY Transfer from Steven Gunawan Liu\n***********136\n💰', 'credit', '16650', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(6, '2022-11-19 13:44:56.0', 'GoPay Topup\n#2022111909904458744', 'credit', '115451', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(7, '2022-10-04 14:24:03.0', 'GoPay Topup\n#2022100409904805175', 'credit', '53000', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(8, '2022-09-11 05:41:57.0', 'GoPay Topup\n#2022091109904158684', 'credit', '295800', '2023-04-28 00:14:42', '2023-04-28 00:14:42'),
(9, '2022-08-23 18:06:48.0', 'TopUp via Jago 22235T065775', 'credit', '5400', '2023-04-28 00:14:42', '2023-04-28 00:14:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history__ovos`
--

CREATE TABLE `history__ovos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_transaksi` varchar(255) NOT NULL,
  `tipe_transaksi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history__ovos`
--

INSERT INTO `history__ovos` (`id`, `tanggal_transaksi`, `jumlah_transaksi`, `tipe_transaksi`, `keterangan`) VALUES
(1, '2023-01-27', '362500', 'TransferOut', 'Transfer ke Maks Miliyan'),
(2, '2023-01-27', '350000', 'TOPUP CASH', 'OY INDONESIA'),
(3, '2022-11-29', '12641', 'INCOMING TRANSFER', 'Transfer Dari lutfi ekaprima'),
(4, '2022-11-21', '6000', 'FINANCIAL', 'INDOMARET'),
(5, '2022-11-20', '7000', 'FINANCIAL', 'INDOMARET'),
(6, '2022-11-20', '1329', 'QRIS ISS PURCHASE', 'Bang Store'),
(7, '2022-11-20', '1329', 'QRIS ISS PURCHASE', 'Bang Store'),
(8, '2022-11-19', '29500', 'FINANCIAL', 'INDOMARET'),
(9, '2022-11-17', '23000', 'FINANCIAL', 'INDOMARET'),
(10, '2022-11-13', '54300', 'INCOMING TRANSFER', 'Transfer Dari daffa nur fakhri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `server_id` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `thumbnail` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL DEFAULT 'game',
  `petunjuk` varchar(255) DEFAULT NULL,
  `ket_layanan` varchar(3000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerlayanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `kode`, `server_id`, `status`, `thumbnail`, `tipe`, `petunjuk`, `ket_layanan`, `created_at`, `updated_at`, `bannerlayanan`) VALUES
(23, 'Mobile Legends', 'mobile-legends', 1, 'active', '/assets/thumbnail/unnamed.webp', 'populer', '/assets/petunjuk/ml.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n<b>Cara order :</b><ol><li>Masukkan ID (SERVER)\r\n</li><li>Pilih Nominal</li><li>Pilih Pembayaran\r\n</li><li>Tulis nomor WhatsApp yg benar</li><li>Klik Order Now & lakukan Pembayaran\r\n</li><li>Tunggu 1 detik diamond masuk otomatis ke akun Anda</li></ol><h6></h6><h6><center><b><font color=\"#ff9600\">Top Up Buka 24 Jam</font></b></center></h6><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>\r\n</div>', '2022-10-16 09:48:59', '2023-03-27 03:41:10', '/assets/bannerlayanan/mlbb-megatron.jpg'),
(24, 'Genshin Impact', 'genshin-impact', 0, 'active', '/assets/thumbnail/genshin (1).jpg', 'populer', '/assets/petunjuk/genshin.png', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    Cara order :\r\n    <ol>\r\n        <li>Masukkan ID & Pilih Server</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>GC masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n</div>', '2022-10-16 18:52:57', '2023-03-27 14:06:27', ''),
(28, 'Omega Legends', 'omegalegend', 0, 'active', '/assets/thumbnail/omega.jpg', 'populer', '/assets/petunjuk/omega.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal Gold</li>\r\n        <li>Pilih Metode Pembayaran</li>\r\n        <li>Tulis nomor WhatsApp yg benar!</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>Gold masuk otomatis ke akun Anda.</li>\r\n    </ol>\r\n    <h6></h6>\r\n    <h6>\r\n        <center>\r\n            <span style=\"font-weight: bolder;\"><font color=\"#ff9600\">Top Up Buka 24 Jam</font></span>\r\n        </center>\r\n    </h6>\r\n    <p></p>\r\n    <p></p>\r\n</div>', '2022-10-17 18:32:08', '2023-03-27 14:35:45', ''),
(29, 'Free Fire', 'free-fire', 0, 'active', '/assets/thumbnail/ffff.webp', 'populer', '/assets/petunjuk/ff.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now & lakukan Pembayaran</li>\r\n        <li>Diamond masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n <center>\r\n        <h6>\r\n            <b><font color=\"#ff9600\">Proses otomatis</font></b>\r\n        </h6>\r\n    </center>\r\n    <p></p> \r\n</div>', '2022-10-17 18:35:18', '2023-03-27 14:12:04', '/assets/bannerlayanan/Banner utama 1 (1).jpg'),
(31, 'PUBG Mobile', 'pubg', 0, 'active', '/assets/thumbnail/pubgm (1).jpg', 'populer', '/assets/petunjuk/pubgm.png', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>UC masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n    <center>\r\n        <i class=\"text-muted\"><small>**PUBGM Global tidak bisa untuk ID China / Japanese / Korean / Taiwan / Vietnam</small></i>\r\n    </center>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n</div>', '2022-10-17 18:39:48', '2023-03-27 14:14:53', ''),
(33, 'Apex Legends', 'apex-legends', 0, 'unactive', '/assets/thumbnail/apex-legends-mobile.jfif', 'populer', '/assets/petunjuk/apex.jpg', 'test', '2022-10-17 18:42:47', '2023-03-27 03:13:24', '/assets/bannerlayanan/th (3).jfif'),
(34, 'Tower of Fantasy', 'tof', 0, 'active', '/assets/thumbnail/tof.jpg', 'game', '/assets/petunjuk/tof-min.png', '', '2022-10-17 18:47:08', '2023-03-01 22:15:57', ''),
(35, 'Ragnarok Mobile', 'ragnarok-m', 0, 'active', '/assets/thumbnail/ragnarokm.jpg', 'game', '/assets/petunjuk/ragnarok.jpg', '', '2022-10-17 18:49:59', '2023-03-01 22:14:34', ''),
(36, 'Sausage Man', 'sausageman', 0, 'active', '/assets/thumbnail/sausage (1).jpg', 'game', '/assets/petunjuk/sm.jpg', '', '2022-10-17 18:51:19', '2023-02-24 18:38:24', ''),
(37, 'MU Origin 3', 'muorigin3', 0, 'active', '/assets/thumbnail/muorigin3.jpg', 'game', '/assets/petunjuk/MU ORIGIN 3.png', '', '2022-10-17 18:52:25', '2023-03-01 22:08:14', ''),
(38, 'MU Origin 2', 'muorigin2', 0, 'active', '/assets/thumbnail/muorigin.jpg', 'game', '/assets/petunjuk/muorigin-min.png', '', '2022-10-17 18:53:49', '2023-03-01 22:07:43', ''),
(39, 'Light of Thel', 'lightofthel', 0, 'active', '/assets/thumbnail/lightofthel.jpg', 'game', '/assets/petunjuk/lightofthe-min.png', '', '2022-10-17 18:55:49', '2023-03-01 22:17:09', ''),
(40, 'Lords Mobile', 'lords-mobile', 0, 'active', '/assets/thumbnail/lord.jpg', 'populer', '/assets/petunjuk/lm.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n  <b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID&nbsp;</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>Diamond masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n</div>', '2022-10-17 18:56:59', '2023-03-27 14:31:10', ''),
(42, 'Hyper Front', 'hyperfront', 0, 'active', '/assets/thumbnail/hyperfront.jpg', 'game', '/assets/petunjuk/hyperfront.jpg', '', '2022-10-17 18:59:12', '2023-03-01 22:03:38', ''),
(43, 'Saint Seiya', 'saint-seiya-awakening', 0, 'active', '/assets/thumbnail/saintsaiya.jpg', 'game', '/assets/petunjuk/saint-min.png', '', '2022-10-17 19:01:18', '2023-03-01 22:42:31', ''),
(44, 'MARVEL Super War', 'marvel-super-war', 0, 'active', '/assets/thumbnail/marvel.jpg', 'game', '/assets/petunjuk/msw.jpg', '', '2022-10-17 19:02:18', '2023-03-01 22:05:43', ''),
(45, 'Be The King', 'betheking', 1, 'unactive', '/assets/thumbnail/betheking (1).jpg', 'populer', '/assets/petunjuk/be-min.png', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n<b>Cara order :</b><ol><li>Masukkan ID dan pilih Server</li><li>Pilih Nominal </li><li>Pilih Pembayaran</li><li>Klik Order Now & lakukan Pembayaran</li><li>Gold masuk otomatis ke akun Anda</li></ol><p></p><p></p><p></p><p></p><p></p>\r\n</div>', '2022-10-17 19:03:16', '2023-03-27 03:18:45', '/assets/bannerlayanan/reseller banner.png'),
(46, 'Dragon Raja', 'dragon-raja', 0, 'active', '/assets/thumbnail/dragon.jpg', 'populer', '/assets/petunjuk/dr.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n<b>Cara order :</b>\r\n<ol><li>Masukkan ID </li><li>Pilih Nominal Coupons</li><li>Pilih Metode Pembayaran</li><li>Tulis nomor WhatsApp yg benar!</li><li>Klik Beli Sekarang & lakukan Pembayaran</li><li>Coupons masuk otomatis ke akun Anda.</li></ol><center><h6><b><font color=\"#ff9600\">Top Up Buka 24 Jam</font></b></h6></center><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>\r\n</div>', '2022-10-17 19:04:22', '2023-03-27 03:21:36', ''),
(47, 'Laplace M', 'laplace', 0, 'active', '/assets/thumbnail/laplace (1).jpg', 'game', '/assets/petunjuk/laplace.jpg', '', '2022-10-17 19:05:33', '2023-03-01 22:17:35', ''),
(48, 'One Punch Man', 'onepuchman', 0, 'active', '/assets/thumbnail/onepunch.jpg', 'game', '/assets/petunjuk/opm.jpg', '', '2022-10-17 19:06:29', '2023-03-01 22:06:55', ''),
(53, 'Valorant', 'valorant', 0, 'active', '/assets/thumbnail/valorant (1).jpg', 'game', '/assets/petunjuk/valo.jpg', '', '2022-10-30 05:51:19', '2023-03-06 09:47:01', ''),
(54, 'Arena of Valor', 'aov', 0, 'active', '/assets/thumbnail/aov.webp', 'game', '/assets/petunjuk/aov.webp', '', '2022-10-30 05:52:12', '2023-03-01 22:19:24', ''),
(55, 'Point Blank', 'point-blank', 0, 'unactive', '/assets/thumbnail/pb (1).jpg', 'voucher', '/assets/petunjuk/pb.jpg', '', '2022-10-30 06:05:04', '2023-02-24 23:16:49', ''),
(56, 'Life After', 'life-after', 0, 'active', '/assets/thumbnail/lifeafter.jpg', 'game', '/assets/petunjuk/la.jpg', '', '2022-10-30 06:20:09', '2023-03-01 22:04:04', ''),
(57, 'Call of Duty Mobile', 'call-of-duty', 0, 'active', '/assets/thumbnail/b5b87817a98a77e3fd0f7.png', 'populer', '/assets/petunjuk/codm.webp', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n<b>Cara order :</b><ol><li>Masukkan Open ID</li><li>Pilih Nominal</li><li>Pilih Pembayaran</li><li>Klik Order Now & lakukan Pembayaran</li><li>CP masuk otomatis ke akun Anda</li></ol><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>\r\n</div>', '2022-10-30 06:30:17', '2023-03-27 03:57:04', '/assets/bannerlayanan/dwdwd.jpg'),
(58, 'Tom and Jerry', 'tom-jerry-chase', 0, 'active', '/assets/thumbnail/tomandjerry.jpg', 'game', '/assets/petunjuk/taj.jpg', '', '2022-10-17 18:58:17', '2023-03-01 20:27:14', ''),
(62, 'Indosat', 'Indosat', 0, 'active', '/assets/thumbnail/indosat.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-06_19-49-11-071.png', '', '2022-11-06 13:33:51', '2023-03-02 05:03:30', ''),
(63, 'Play Station', 'play-station', 0, 'active', '/assets/thumbnail/playstation.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_00-40-42-628.png', '', '2022-11-06 17:49:05', '2023-02-24 23:15:58', ''),
(64, 'Nintendo', 'Nintendo', 0, 'unactive', '/assets/thumbnail/Picsart_22-11-07_01-03-33-360.png', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-03-33-360.png', '', '2022-11-06 18:04:14', '2023-02-24 18:18:26', ''),
(65, 'Razer Gold', 'Razer-Gold', 0, 'active', '/assets/thumbnail/razer.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-13-42-285.png', '', '2022-11-06 18:14:18', '2023-02-24 23:17:53', ''),
(67, 'Stumble Guys', 'Stumble-Guys', 0, 'active', '/assets/thumbnail/stumbleguys.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-19-30-389.png', '', '2022-11-06 18:21:27', '2023-02-24 23:19:07', ''),
(68, 'Point Blank', 'Vc-Point-Blank', 0, 'active', '/assets/thumbnail/pb (1).jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-23-05-675.png', '', '2022-11-06 18:24:18', '2023-02-24 23:17:21', ''),
(69, 'Steam Wallet', 'Steam-Wallet', 0, 'active', '/assets/thumbnail/steamwallet.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-25-57-063.png', '', '2022-11-06 18:26:29', '2023-02-24 23:19:25', ''),
(70, 'Garena Shell', 'Garena-Shell', 0, 'active', '/assets/thumbnail/garenashell.png', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-27-57-920.png', '', '2022-11-06 18:28:26', '2023-02-24 23:12:35', ''),
(71, 'Vidio', 'Vidio', 0, 'active', '/assets/thumbnail/vidio.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-29-43-722.png', '', '2022-11-06 18:30:12', '2023-02-24 23:19:49', ''),
(72, 'ROBLOX', 'ROBLOX', 0, 'active', '/assets/thumbnail/roblox.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-31-32-000.png', '', '2022-11-06 18:31:58', '2023-02-24 23:18:28', ''),
(73, 'Minecraft', 'Minecraft', 0, 'active', '/assets/thumbnail/minecraft.jpg', 'voucher', '/assets/petunjuk/Picsart_22-11-07_01-33-21-008.png', '', '2022-11-06 18:33:46', '2023-02-24 23:15:24', ''),
(74, 'XL', 'XL', 0, 'active', '/assets/thumbnail/xl.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-07_01-48-27-883.png', '', '2022-11-06 18:48:58', '2023-03-02 05:05:26', ''),
(75, 'Three', 'Tri', 0, 'active', '/assets/thumbnail/tri.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-07_01-50-10-897.png', '', '2022-11-06 18:50:42', '2023-03-05 20:23:35', ''),
(76, 'Smartfren', 'Smartfren', 0, 'active', '/assets/thumbnail/smartfren.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-07_01-51-57-308.png', '', '2022-11-06 18:52:18', '2023-03-02 05:04:39', ''),
(77, 'Telkomsel', 'Telkomsel', 0, 'active', '/assets/thumbnail/telkomsel.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-07_01-53-34-703.png', '', '2022-11-06 18:54:01', '2023-03-02 05:05:02', ''),
(78, 'Axis', 'Axis', 0, 'active', '/assets/thumbnail/axis.jpg', 'pulsa', '/assets/petunjuk/Picsart_22-11-07_01-55-33-797.png', '', '2022-11-06 18:56:03', '2023-03-02 05:06:47', ''),
(8441, 'Saldo Dana', 'dana', 0, 'active', '/assets/thumbnail/saldodana.png', 'e-money', '/assets/petunjuk/Picsart_22-11-11_00-24-41-663.png', '1. Masukan Nomor Tujuan\r\n2. Pilih Nominal Yang Diinginkan\r\n3. Pilih Metode Pembayaran\r\n4. Masukan No. Whatsapp Anda\r\n5. Klik Beli Sekarang dan Selesaikan Pembayaran\r\n6. Tunggu Proses 1-2 Menit, Pesanan Anda akan Masuk Secara Otomatis', '2022-11-10 17:25:05', '2023-04-20 16:56:11', '/assets/bannerlayanan/20230419_081514.png'),
(8452, 'Paket Joki Murah', 'jokipaketmurah', 0, 'active', '/assets/thumbnail/1 (1).png', 'jasajoki', '/assets/petunjuk/jokimlbbjkt.jpg', '<b>Cara order :</b>\r\n<ol><li>Lengkapi Data Joki Dengan Teliti!</li><li>Input Jumlah Paket Joki</li><li>Pilih Metode Pembayaran</li><li>Masukkan nomor WhatsApp yg benar!</li><li>Klik Beli & lakukan Pembayaran</li><li>Orderan Joki akan segera di proses setelah pembayaran berhasil</li></ol>\r\n<font color=\"#ffff00\">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</font>', '2023-03-02 04:08:12', '2023-04-20 16:51:18', ''),
(8454, 'Paket sange jokian', 'joki-sangean-rank', 0, 'active', '/assets/thumbnail/jokimlbbjkt.jpg', 'jasajoki', '/assets/petunjuk/jokimlbbjkt.jpg', '<b>Cara order :</b>\r\n<ol><li>Lengkapi Data Joki Dengan Teliti!</li><li>Input Jumlah Paket Joki</li><li>Pilih Metode Pembayaran</li><li>Masukkan nomor WhatsApp yg benar!</li><li>Klik Beli & lakukan Pembayaran</li><li>Orderan Joki akan segera di proses setelah pembayaran berhasil</li></ol>\r\n<font color=\"#ffff00\">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</font>', '2023-03-02 04:26:36', '2023-04-20 16:51:39', ''),
(8455, 'Joki Gendong', 'joki-gendong', 0, 'active', '/assets/thumbnail/jokimlbbjkt (1).jpg', 'jasajoki', '/assets/petunjuk/jokimlbbjkt (1).jpg', '<b>Cara order :</b>\r\n<ol><li>Lengkapi Data Joki Dengan Teliti!</li><li>Input Jumlah Paket Joki</li><li>Pilih Metode Pembayaran</li><li>Masukkan nomor WhatsApp yg benar!</li><li>Klik Beli & lakukan Pembayaran</li><li>Orderan Joki akan segera di proses setelah pembayaran berhasil</li></ol>\r\n<font color=\"#ffff00\">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</font>', '2023-03-03 21:47:13', '2023-04-20 16:52:14', ''),
(8459, 'By U', 'by-u', 0, 'active', '/assets/thumbnail/byu.png', 'pulsa', '/assets/petunjuk/byu.png', '', '2023-03-12 11:23:53', '2023-03-12 11:23:53', ''),
(8467, 'Free Fire Max', 'ff-max', 0, 'active', '/assets/thumbnail/16705152013lp0GgO8dxSuAMQVzMIX9ZaeIgWkoviNSaJnh3hj9mHWCAoLi3E5YRKt5pT7NXakHg[1].jpeg', 'populer', '/assets/petunjuk/images (15).jpeg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <p>Top Up diamond Free Fire Max resmi Garena legal 100% harga paling murah.</p>\r\n<b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now & lakukan Pembayaran</li>\r\n        <li>Diamond masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n    <p></p>\r\n</div>', '2023-03-27 02:48:10', '2023-03-27 14:33:52', '/assets/bannerlayanan/images (15).jpeg'),
(8468, 'Heroes evolved', 'heroes-evolved', 0, 'active', '/assets/thumbnail/he.png', 'game', '/assets/petunjuk/he.png', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <p>Top up token Heroes Evolved harga paling murah.</p>\r\n    <b>Cara order:</b>\r\n    <ol>\r\n        <li>Masukkan ID & pilih Server</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Metode Pembayaran</li>\r\n        <li>Klik Order Now & lakukan Pembayaran</li>\r\n        <li>Token masuk otomatis ke akun Anda</li>\r\n    </ol>\r\n</div>', '2023-03-27 04:01:17', '2023-03-28 22:28:25', '/assets/bannerlayanan/CAW3cz.jpg'),
(8471, 'Joki input', 'joki-input', 0, 'active', '/assets/thumbnail/1 (1) (1).png', 'jasajoki', '/assets/petunjuk/1 (1) (1).png', '<b>Cara order :</b>\r\n<ol><li>Lengkapi Data Joki Dengan Teliti!</li><li>Input Jumlah Paket Joki</li><li>Pilih Metode Pembayaran</li><li>Masukkan nomor WhatsApp yg benar!</li><li>Klik Beli & lakukan Pembayaran</li><li>Orderan Joki akan segera di proses setelah pembayaran berhasil</li></ol>\r\n<font color=\"#ffff00\">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</font>', '2023-03-28 21:43:43', '2023-04-20 16:49:37', '/assets/bannerlayanan/mlbanner.jfif'),
(8472, 'State of Survival', 'state-of-survival-zombie-war', 0, 'active', '/assets/thumbnail/state-of-survival.jpg', 'game', '/assets/petunjuk/state-of-survival.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <p>Top up diamond State of Survival: Zombie War harga paling murah. </p>\r\n<b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now & lakukan Pembayaran</li>\r\n        <li>Diamond otomatis masuk ke akun Anda.</li>\r\n    </ol>\r\n    <p></p>\r\n</div>', '2023-03-28 22:20:31', '2023-03-28 22:26:55', '/assets/bannerlayanan/1503f3ca-fc3c-3bb8-56af-6ec6d6d79ab0.jpg'),
(8473, 'Marvel Snap', 'marvel-snap', 0, 'active', '/assets/thumbnail/marvel-snap.jpg', 'game', '/assets/petunjuk/marvel-snap.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <p>Top up gold Marvel Snap harga paling murah.</p>\r\n<b>Cara order :</b>\r\n    <ol>\r\n        <li>Masukkan ID</li>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>Gold otomatis masuk ke akun Anda</li>\r\n    </ol>\r\n    <p></p>\r\n</div>', '2023-03-28 22:26:04', '2023-03-28 22:26:04', '/assets/bannerlayanan/ms.jpg'),
(8474, 'Megaxus Mi-Cash', 'Megaxus-mi-cash', 0, 'active', '/assets/thumbnail/megaxus.jpg', 'voucher', '/assets/petunjuk/cso-megaxus-3.jpg', '<div class=\"card-body p-0 mt-3 product-detail-container text-small\">\r\n    <p>Beli voucher Magaxus Mi-Cash harga paling murah.</p>\r\n<b>Cara order :</b>\r\n    <ol>\r\n        <li>Pilih Nominal</li>\r\n        <li>Pilih Pembayaran</li>\r\n        <li>Klik Order Now &amp; lakukan Pembayaran</li>\r\n        <li>Voucher otomatis muncul di halaman invoice</li>\r\n    </ol>\r\n    <p></p>\r\n</div>', '2023-03-28 22:34:32', '2023-03-28 22:34:32', '/assets/bannerlayanan/cso-megaxus-3.jpg'),
(8475, 'Saldo Gopay', 'gopay', 0, 'active', '/assets/thumbnail/gopay.png', 'e-money', '/assets/petunjuk/gopay.png', '1. Masukan Nomor Tujuan\r\n2. Pilih Nominal Yang Diinginkan\r\n3. Pilih Metode Pembayaran\r\n4. Masukan No. Whatsapp Anda\r\n5. Klik Beli Sekarang dan Selesaikan Pembayaran\r\n6. Tunggu Proses 1-2 Menit, Pesanan Anda akan Masuk Secara Otomatis', '2023-04-19 01:09:14', '2023-04-20 16:55:41', '/assets/bannerlayanan/gopay.png'),
(8476, 'Saldo Shopeepay', 'shopeepay', 0, 'active', '/assets/thumbnail/images (5).png', 'e-money', '/assets/petunjuk/20230419_081514.png', 'Top up Saldo ShopeePay harga paling murah. Cara beli saldo ShopeePay termurah : \r\n\r\n1. Masukkan No HP\r\n2. Pilih Nominal\r\n3. Pilih Pembayaran\r\n4. Klik Order Now & lakukan Pembayaran\r\n5. Saldo ShopeePay otomatis masuk ke akun Anda', '2023-04-19 01:15:34', '2023-04-19 08:08:14', '/assets/bannerlayanan/20230419_081514.png'),
(8477, 'Google Play', 'google-play', 0, 'active', '/assets/thumbnail/googleplay.jpg', 'voucher', '/assets/petunjuk/googleplay.jpg', 'Top up voucher Google Play harga paling murah. Cara beli voucher Google Play termurah :\r\n\r\n1. Pilih Nominal \r\n2. Pilih Pembayaran\r\n3. Klik Order Now & lakukan Pembayaran\r\n4. Voucher otomatis muncul di halaman invoice', '2023-04-19 01:27:09', '2023-04-19 07:23:18', '/assets/bannerlayanan/googleplay.jpg'),
(8478, 'Saldo LinkAja', 'linkaja', 0, 'active', '/assets/thumbnail/linkaja.jpg', 'e-money', '/assets/petunjuk/20230419_081514.png', '1. Masukan Nomor Tujuan\r\n2. Pilih Nominal Yang Diinginkan\r\n3. Pilih Metode Pembayaran\r\n4. Masukan No. Whatsapp Anda\r\n5. Klik Beli Sekarang dan Selesaikan Pembayaran\r\n6. Tunggu Proses 1-2 Menit, Pesanan Anda akan Masuk Secara Otomatis', '2023-04-19 08:03:30', '2023-04-20 16:52:50', '/assets/bannerlayanan/20230419_081514.png'),
(8479, 'Higgs Domino', 'higgs-domino', 0, 'unactive', '/assets/thumbnail/higgs_domino.png', 'game', '/assets/petunjuk/20230419_081514.png', 'Cara Order :\r\nMasukan User Id\r\nPilih Nominal Yang Diinginkan\r\nPilih Metode Pembayaran\r\nMasukan No. Whatsapp Anda\r\nKlik Beli Sekarang dan Selesaikan Pembayaran\r\nTunggu Proses 1-2 Menit, Pesanan Anda akan Masuk Secara Otomatis', '2023-04-19 10:02:38', '2023-04-22 11:02:47', '/assets/bannerlayanan/higgs_domino.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `provider_id` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `harga_reseller` bigint(20) NOT NULL,
  `harga_platinum` bigint(20) NOT NULL,
  `harga_gold` bigint(20) NOT NULL,
  `profit` int(11) NOT NULL,
  `catatan` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `product_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanans`
--

INSERT INTO `layanans` (`id`, `kategori_id`, `layanan`, `provider_id`, `harga`, `harga_reseller`, `harga_platinum`, `harga_gold`, `profit`, `catatan`, `status`, `provider`, `product_logo`, `created_at`, `updated_at`) VALUES
(104, '23', '5 Diamond', 'Ml5', 1515, 1515, 1400, 1300, 15, '', 'available', 'digiflazz', '/assets/product_logo/fJdCrdBBHpJojl9.webp', '2022-11-01 22:29:15', '2023-04-07 12:58:59'),
(105, '23', '14 Diamond', 'Ml14', 3232, 3232, 3200, 3205, 32, '', 'available', 'bangjeff', '/assets/product_logo/BGQAcgENPTLHL8V.webp', '2022-11-01 22:30:22', '2023-04-02 01:52:11'),
(106, '23', '70 Diamond', 'Ml70', 16564, 16564, 16600, 16590, 164, '', 'available', 'bangjeff', '/assets/product_logo/WlW44sSOCSxO6th.webp', '2022-11-01 22:31:24', '2023-04-02 01:52:24'),
(150, '23', '344 Diamonds', 'DDSDSDF', 219517, 126817, 1268, 219525, 6394, '', 'available', 'digiflazz', '/assets/product_logo/XT8LAe4OUsNHcWK.webp', '2023-03-28 19:40:29', '2023-03-28 19:40:29'),
(151, '23', '114 (104+10) Diamond', 'dasca', 26520, 26520, 26485, 2651, 520, '', 'available', 'digiflazz', '/assets/product_logo/Cl8MFfnJ7P9mhmv.png', '2023-03-28 20:13:06', '2023-03-28 20:13:06'),
(152, '23', 'MLML', 'mlml4', 243604, 3375, 35916, 24391, 9369, '', 'available', 'bangjeff', '/assets/product_logo/IPAlGRVYheaXss2.webp', '2023-04-01 16:01:34', '2023-04-02 01:51:52'),
(154, '8479', '30M Koin Mas-D', '1', 1000, 1000, 1000, 1000, 50, '', 'available', 'digiflazz', '/assets/product_logo/KM96zcMwrJ4pUuQ.png', '2023-04-19 13:18:33', '2023-04-20 07:24:43'),
(156, '8479', '60M Koin Mas-D', '2', 10000, 10000, 10000, 10000, 0, '', 'available', 'digiflazz', '/assets/product_logo/331gn9se9O876Sr.png', '2023-04-19 13:36:28', '2023-04-19 13:36:28'),
(157, '29', '5DM', 'FF5D', 1000, 1000, 980, 990, 0, '', 'available', 'digiflazz', '/assets/product_logo/gEUOyAHwQig3GRF.bin', '2023-04-19 16:16:09', '2023-04-19 16:16:09'),
(161, '77', '5000 Pulsa REG', 'TEL5K', 5508, 5508, 5508, 5508, 108, '', 'available', 'digiflazz', '/assets/product_logo/pADGm1IUOCuJU07.png', '2023-04-20 13:22:57', '2023-04-20 13:22:57'),
(162, '77', '10000 Pulsa REG', 'TEL10K', 10710, 10710, 10710, 10710, 210, '', 'available', 'digiflazz', '/assets/product_logo/D501wr1qvqkedoi.png', '2023-04-20 13:25:11', '2023-04-20 13:25:11'),
(163, '77', '15000 Pulsa REG', 'TEL15K', 15655, 15655, 15655, 15655, 155, '', 'available', 'digiflazz', '/assets/product_logo/LvbDoyj6RDUFobJ.png', '2023-04-20 13:28:46', '2023-04-20 13:28:46'),
(164, '77', '20000 Pulsa REG', 'TEL20K', 20705, 20705, 20705, 20705, 205, '', 'available', 'digiflazz', '/assets/product_logo/BCQ9wHlOQXGG3dF.png', '2023-04-20 13:33:08', '2023-04-20 13:33:08'),
(166, '77', '1000 Pulsa REG', 'TEL1K', 1717, 1717, 1616, 1667, 17, '', 'available', 'digiflazz', '/assets/product_logo/9BgdNC2qm21Sd5c.png', '2023-04-20 21:52:40', '2023-04-20 21:52:40'),
(167, '29', 'Member Bulanan', 'FFM2', 86700, 86700, 86190, 86394, 1700, '', 'available', 'digiflazz', '/assets/product_logo/oWhrLOvP1nHC2r2.bin', '2023-04-25 05:04:00', '2023-04-25 05:04:00'),
(168, '29', 'Member Mingguan', 'FFM1', 29070, 29070, 28662, 29070, 570, '', 'available', 'digiflazz', '/assets/product_logo/4NW5gPXPDzFYllB.bin', '2023-04-25 05:05:35', '2023-04-25 05:05:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `methods`
--

CREATE TABLE `methods` (
  `id` int(11) NOT NULL,
  `name` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `images` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipe` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `methods`
--

INSERT INTO `methods` (`id`, `name`, `images`, `code`, `keterangan`, `tipe`, `created_at`, `updated_at`) VALUES
(6, 'BCA Virtual Account', '/assets/thumbnail/bca (1).webp', 'BCAVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:50:24', '2023-04-19 22:18:18'),
(7, 'BNI Virtual Account', '/assets/thumbnail/bniva (1).webp', 'BNIVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:51:12', '2023-04-20 13:51:09'),
(8, 'MANDIRI Virtual Account', '/assets/thumbnail/mandiriva.webp', 'MANDIRIVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:51:46', '2023-04-19 22:18:50'),
(9, 'BRI Virtual Account', '/assets/thumbnail/briva (2).webp', 'BRIVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:52:16', '2023-04-19 22:00:02'),
(10, 'CIMB Virtual Account', '/assets/thumbnail/cimbva (2).webp', 'CIMBVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:52:53', '2023-04-19 22:19:10'),
(19, 'Bank BCA', '/assets/thumbnail/bca (1).webp', 'BCA', 'Dicek setiap 3 menit', 'tfbank', '2023-03-05 21:54:10', '2023-03-05 21:54:10'),
(13, 'PERMATA Virtual Account', '/assets/thumbnail/permatava (2).webp', 'PERMATAVA', 'Dicek Otomatis', 'virtual-account', '2022-11-19 13:55:22', '2023-04-19 22:19:30'),
(14, 'INDOMARET', '/assets/thumbnail/indomaret (1).webp', 'Indomaret', 'Dicek Otomatis', 'convenience-store', '2022-11-19 13:56:00', '2023-04-19 22:43:34'),
(15, 'ALFAMART', '/assets/thumbnail/alfamart (1).webp', 'Alfamart', 'Dicek Otomatis', 'convenience-store', '2022-11-19 13:56:33', '2023-04-19 22:44:07'),
(16, 'QRIS', '/assets/thumbnail/qris (1).webp', 'QRIS2', 'Dicek Otomatis', 'e-walet', '2022-11-19 13:58:45', '2023-02-24 20:16:53'),
(21, 'Bank Mandiri', '/assets/thumbnail/Bank Mandiri.png', 'Mandiri', 'Dicek manual', 'tfbank', '2023-04-18 08:23:04', '2023-04-18 08:23:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_26_082220_create_kategoris_table', 1),
(6, '2022_01_26_102949_create_layanans_table', 1),
(11, '2022_01_29_111105_create_pembelians_table', 2),
(12, '2022_01_29_111703_create_pembayarans_table', 2),
(13, '2022_02_01_152716_create_ovos_table', 3),
(14, '2022_02_01_152824_create_history__ovos_table', 3),
(15, '2022_02_01_155618_create_gojeks_table', 4),
(16, '2022_02_01_155927_create_history__gojeks_table', 4),
(17, '2022_02_02_081840_create_methode_pembayarans_table', 5),
(18, '2022_02_02_084003_create_beritas_table', 6),
(19, '2022_04_08_133307_create_layanan_ppobs_table', 7),
(20, '2022_04_27_141044_create_deposits_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` enum('promo','news') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `thumbnail`, `content`, `type`, `created_at`, `updated_at`) VALUES
(3, 'tes', 'tes', '/assets/news/download.jpg', '<p><br></p>', 'news', '2023-04-28 02:29:38', '2023-04-28 02:29:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ovos`
--

CREATE TABLE `ovos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `RefId` varchar(255) NOT NULL,
  `UpdateAccessToken` varchar(1000) NOT NULL,
  `AuthToken` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `no_pembayaran` varchar(255) NOT NULL,
  `no_pembeli` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `order_id`, `harga`, `no_pembayaran`, `no_pembeli`, `status`, `metode`, `reference`, `created_at`, `updated_at`) VALUES
(333, 'BM1810768INV', '16704', '', 62898989899, 'Belum Lunas', 'GOPAY', '', '2023-04-12 11:26:10', '2023-04-12 11:26:10'),
(334, 'BM1845267', '17240', '', 628989898989, 'Belum Lunas', 'GOPAY', '', '2023-04-12 11:35:46', '2023-04-12 11:35:46'),
(335, 'BM2247180', '16564', '11328000106651', 628985239779, 'Batal', 'INDOMARET', 'T213168293564XYLIK', '2023-04-12 15:14:51', '2023-04-13 15:16:08'),
(336, 'BM2250267', '16564', 'https://tripay.co.id/qr/T213168293584CBHSQ', 628989898989, 'Batal', 'QRIS2', 'T213168293584CBHSQ', '2023-04-12 15:15:53', '2023-04-12 16:16:11'),
(337, 'BM0050407', '3232', 'https://tripay.co.id/qr/T2131682952356BWHV', 62895600000048, 'Batal', 'QRIS2', 'T2131682952356BWHV', '2023-04-12 17:31:53', '2023-04-12 18:32:06'),
(338, 'BM0256659', '1726', '', 628511245, 'Belum Lunas', 'GOPAY', '', '2023-04-12 19:08:57', '2023-04-12 19:08:57'),
(339, 'BM0229710', '3205', 'https://tripay.co.id/qr/T213168295934MRQZW', 6285588, 'Batal', 'QRIS2', 'T213168295934MRQZW', '2023-04-12 19:12:32', '2023-04-12 20:14:04'),
(340, 'BM1033865', '219566', '', 6282545455456, 'Belum Lunas', 'GOPAY', '', '2023-04-13 03:12:34', '2023-04-13 03:12:34'),
(341, 'BM0653794', '26520', 'https://tripay.co.id/qr/T213168314614UGISV', 6283102255462, 'Batal', 'QRIS2', 'T213168314614UGISV', '2023-04-13 23:26:56', '2023-04-14 23:28:04'),
(342, 'BM2220469', '1515', 'https://tripay.co.id/qr/T2131683503462MBM6', 6464646466, 'Batal', 'QRIS2', 'T2131683503462MBM6', '2023-04-15 15:15:25', '2023-04-16 15:16:18'),
(343, 'BM1000748', '16590', 'https://tripay.co.id/qr/T213168359737AAXAU', 656564344646, 'Batal', 'QRIS2', 'T213168359737AAXAU', '2023-04-16 03:49:08', '2023-04-17 03:50:08'),
(344, 'BM1640061', '84840', 'https://wsa.wallet.airpay.co.id/universal-link/wallet/pay?deep_and_deferred=1&token=Um80ZWF4Yk9xZmROEZJQapp9Jd1bVfYeHDmugtONbGe_U8tXF5ACOq1aMLwpAQ', 6282113664006, 'Batal', 'SHOPEEPAY', 'T213168392651ELPAH', '2023-04-17 09:39:43', '2023-04-17 10:40:05'),
(345, 'BM0835612', '2276', 'https://tripay.co.id/qr/T147278428870ALERY', 6281414989099, 'Belum Lunas', 'QRIS2', 'T147278428870ALERY', '2023-04-19 01:54:36', '2023-04-19 01:54:36'),
(346, 'BM1959837', '29158', 'https://tripay.co.id/qr/T147278439999IDUAX', 6285328272174, 'Belum Lunas', 'QRIS2', 'T147278439999IDUAX', '2023-04-19 12:11:00', '2023-04-19 12:11:00'),
(347, 'BM2240419', '5836', 'https://tripay.co.id/qr/T14727844397936MP2', 6285328272174, 'Belum Lunas', 'QRIS2', 'T14727844397936MP2', '2023-04-19 15:23:42', '2023-04-19 15:23:42'),
(348, 'BM2354958', '82317', 'https://tripay.co.id/qr/T147278444779DER9R', 6285725251784, 'Belum Lunas', 'QRIS2', 'T147278444779DER9R', '2023-04-19 16:13:56', '2023-04-19 16:13:56'),
(349, 'FS0022983', '1757', 'https://tripay.co.id/qr/T1472784460570ISOD', 6285725251784, 'Belum Lunas', 'QRIS2', 'T1472784460570ISOD', '2023-04-19 17:36:24', '2023-04-19 17:36:24'),
(350, 'FS0017502', '1757', 'https://tripay.co.id/qr/T147278446143667GO', 6285725251784, 'Belum Lunas', 'QRIS2', 'T147278446143667GO', '2023-04-19 17:44:20', '2023-04-19 17:44:20'),
(351, 'FS0023203', '1757', 'https://tripay.co.id/qr/T1472784462054LTG6', 6285725251784, 'Belum Lunas', 'QRIS2', 'T1472784462054LTG6', '2023-04-19 17:48:27', '2023-04-19 17:48:27'),
(352, 'FS0355409', '82317', 'https://tripay.co.id/qr/T147278448015XBY9Q', 6285725251784, 'Batal', 'QRIS2', 'T147278448015XBY9Q', '2023-04-19 20:59:58', '2023-04-20 21:04:35'),
(353, 'FS0546071', '85250', '1033945500074048', 6285725251784, 'Batal', 'BRIVA', 'T147278448774ZZWES', '2023-04-19 22:00:50', '2023-04-20 22:02:08'),
(354, 'FS1411426', '2828', 'SALDO', 6282322217476, 'Lunas', 'SALDO', '', '2023-04-20 07:12:27', '2023-04-20 07:12:27'),
(355, 'FS1452182', '5836', 'https://tripay.co.id/qr/T147278456721CNXQ4', 6283195215556, 'Batal', 'QRIS2', 'T147278456721CNXQ4', '2023-04-20 07:22:02', '2023-04-21 07:22:09'),
(356, 'FS2056925', '6297', 'https://tripay.co.id/qr/T147278490661IJBWA', 6285725251784, 'Batal', 'QRIS2', 'T147278490661IJBWA', '2023-04-20 13:29:58', '2023-04-21 13:30:13'),
(357, 'FS0434189', '1667', 'SALDO', 6282322217476, 'Lunas', 'SALDO', '', '2023-04-20 21:54:35', '2023-04-20 21:54:35'),
(358, 'FS0416514', '1667', 'SALDO', 6282322217476, 'Lunas', 'SALDO', '', '2023-04-20 21:59:17', '2023-04-20 21:59:17'),
(359, 'FS2017285', '85250', '14645622608', 6285725251784, 'Batal', 'MANDIRIVA', 'T147278695116YLOBV', '2023-04-24 13:48:31', '2023-04-25 13:50:19'),
(360, 'FS2118258', '85250', '14645622618', 6285725251784, 'Batal', 'MANDIRIVA', 'T1472786956148L71S', '2023-04-24 14:03:22', '2023-04-25 14:04:11'),
(361, 'FS2118671', '85250', '14645622632', 6285725251784, 'Batal', 'MANDIRIVA', 'T147278696135JKQHP', '2023-04-24 14:19:22', '2023-04-25 14:20:19'),
(362, 'FS0151596', '2276', 'https://tripay.co.id/qr/T147278758032SIKIF', 628981205080, 'Batal', 'QRIS2', 'T147278758032SIKIF', '2023-04-26 18:12:19', '2023-04-27 18:12:10'),
(363, 'IV0552058FLZ', '11535', 'https://tripay.co.id/qr/T147278758910AO3ZT', 6282134567565, 'Batal', 'QRIS2', 'T147278758910AO3ZT', '2023-04-26 22:18:54', '2023-04-27 22:20:13'),
(364, 'IV0644347FLZ', '1717', 'SALDO', 6285328272184, 'Lunas', 'SALDO', '', '2023-04-27 23:48:45', '2023-04-27 23:48:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `layanan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `provider_order_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `log` varchar(1000) DEFAULT NULL,
  `tipe_transaksi` varchar(255) NOT NULL DEFAULT 'game',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelians`
--

INSERT INTO `pembelians` (`id`, `order_id`, `username`, `user_id`, `zone`, `nickname`, `layanan`, `harga`, `profit`, `provider_order_id`, `status`, `log`, `tipe_transaksi`, `created_at`, `updated_at`) VALUES
(342, 'BM1810768INV', NULL, '38925868', '2058', 'OY TOD.', '70 Diamond', 16704, 1670, NULL, 'Pending', NULL, 'game', '2023-04-12 11:26:10', '2023-04-12 11:26:10'),
(343, 'BM1845267', NULL, '38925868', '2058', 'OY TOD.', '70 Diamond', 17240, 1724, NULL, 'Pending', NULL, 'game', '2023-04-12 11:35:46', '2023-04-12 11:35:46'),
(344, 'BM2247180', NULL, '38925868', '2058', 'OY TOD.', '70 Diamond', 16564, 1656, NULL, 'Pending', NULL, 'game', '2023-04-12 15:14:51', '2023-04-12 15:14:51'),
(345, 'BM2250267', NULL, '38925868', '2058', 'OY TOD.', '70 Diamond', 16564, 1656, NULL, 'Pending', NULL, 'game', '2023-04-12 15:15:53', '2023-04-12 15:15:53'),
(346, 'BM0050407', NULL, '23246453', '3028', 'QS. An-Nisaa\' : 114', '14 Diamond', 3232, 323, NULL, 'Pending', NULL, 'game', '2023-04-12 17:31:53', '2023-04-12 17:31:53'),
(347, 'BM0256659', NULL, '458926181', '2385', 'PECINTA DIAMOND', '5 Diamond', 1726, 173, NULL, 'Pending', NULL, 'game', '2023-04-12 19:08:57', '2023-04-12 19:08:57'),
(348, 'BM0229710', NULL, '458926181', '2385', 'PECINTA DIAMOND', '14 Diamond', 3205, 321, NULL, 'Pending', NULL, 'game', '2023-04-12 19:12:32', '2023-04-12 19:12:32'),
(349, 'BM1033865', NULL, '109972592', '2568', 'Mr. Queen 愛', '344 Diamonds', 219566, 21957, NULL, 'Pending', NULL, 'game', '2023-04-13 03:12:33', '2023-04-13 03:12:33'),
(350, 'BM0653794', NULL, '372882198', '9698', 'RashFord', '114 (104+10) Diamond', 26520, 2652, NULL, 'Pending', NULL, 'game', '2023-04-13 23:26:56', '2023-04-13 23:26:56'),
(351, 'BM2220469', NULL, '236517179', '3527', 'ignorance', '5 Diamond', 1515, 152, NULL, 'Pending', NULL, 'game', '2023-04-15 15:15:25', '2023-04-15 15:15:25'),
(352, 'BM1000748', NULL, '236517179', '3527', 'ignorance', '70 Diamond', 16590, 1659, NULL, 'Pending', NULL, 'game', '2023-04-16 03:49:08', '2023-04-16 03:49:08'),
(353, 'BM1640061', NULL, '402560686', NULL, 'OMㅤJAㅤLOMBOK', 'Member Bulanan', 84840, 8484, NULL, 'Pending', NULL, 'game', '2023-04-17 09:39:43', '2023-04-17 09:39:43'),
(354, 'BM0835612', NULL, '215713038', '9118', 'MF̷S̷ • Dynamic', '5 Diamond', 2276, 228, NULL, 'Pending', NULL, 'game', '2023-04-19 01:54:36', '2023-04-19 01:54:36'),
(355, 'BM1959837', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Mingguan', 29158, 2916, NULL, 'Pending', NULL, 'game', '2023-04-19 12:11:00', '2023-04-19 12:11:00'),
(356, 'BM2240419', NULL, '351509288', NULL, 'Susiewatie', '30M Koin Mas-D', 5836, 584, NULL, 'Pending', NULL, 'game', '2023-04-19 15:23:42', '2023-04-19 15:23:42'),
(357, 'BM2354958', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 82317, 8232, NULL, 'Pending', NULL, 'game', '2023-04-19 16:13:56', '2023-04-19 16:13:56'),
(358, 'FS0022983', NULL, '482291448', NULL, 'Purpax119`RF', '5DM', 1757, 176, NULL, 'Pending', NULL, 'game', '2023-04-19 17:36:24', '2023-04-19 17:36:24'),
(359, 'FS0017502', NULL, '482291448', NULL, 'Purpax119`RF', '5DM', 1757, 176, NULL, 'Pending', NULL, 'game', '2023-04-19 17:44:20', '2023-04-19 17:44:20'),
(360, 'FS0023203', NULL, '482291448', NULL, 'Purpax119`RF', '5DM', 1757, 176, NULL, 'Pending', NULL, 'game', '2023-04-19 17:48:27', '2023-04-19 17:48:27'),
(361, 'FS0355409', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 82317, 8232, NULL, 'Pending', NULL, 'game', '2023-04-19 20:59:58', '2023-04-19 20:59:58'),
(362, 'FS0546071', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 85250, 8525, NULL, 'Pending', NULL, 'game', '2023-04-19 22:00:50', '2023-04-19 22:00:50'),
(363, 'FS1411426', 'miliyan', '082322217476', NULL, '082322217476', '2000 Pulsa REG', 2828, 283, '54430', 'Success', '{\"data\":{\"ref_id\":\"54430\",\"customer_no\":\"082322217476\",\"buyer_sku_code\":\"TEL2K\",\"message\":\"Transaksi Pending\",\"status\":\"Pending\",\"rc\":\"03\",\"buyer_last_saldo\":1786,\"sn\":\"\",\"price\":2355,\"tele\":\"@PLANETBILLER\",\"wa\":\"081261616336\"},\"status\":true}', 'game', '2023-04-20 07:12:27', '2023-04-20 07:12:27'),
(364, 'FS1452182', NULL, '65994642', NULL, 'Sonny Version', '30M Koin Mas-D', 5836, 584, NULL, 'Pending', NULL, 'game', '2023-04-20 07:22:02', '2023-04-20 07:22:02'),
(365, 'FS2056925', NULL, '085328272174', NULL, '085328272174', '5000 Pulsa REG', 6297, 630, NULL, 'Pending', NULL, 'game', '2023-04-20 13:29:58', '2023-04-20 13:29:58'),
(366, 'FS0434189', 'cahya', '082322217476', NULL, '082322217476', '1000 Pulsa REG', 1667, 167, '83501', 'Success', '{\"data\":{\"ref_id\":\"83501\",\"customer_no\":\"082322217476\",\"buyer_sku_code\":\"TEL1K\",\"message\":\"Transaksi Pending\",\"status\":\"Pending\",\"rc\":\"03\",\"buyer_last_saldo\":486,\"sn\":\"\",\"price\":1300,\"tele\":\"@CSN_PULSA\",\"wa\":\"08127771766\"},\"status\":true}', 'game_pulsa', '2023-04-20 21:54:35', '2023-04-20 21:54:35'),
(367, 'FS0416514', 'cahya', '082322217476', NULL, '082322217476', '1000 Pulsa REG', 1667, 167, '59595', 'Success', '{\"data\":{\"ref_id\":\"59595\",\"customer_no\":\"082322217476\",\"buyer_sku_code\":\"TEL1K\",\"message\":\"Transaksi Pending\",\"status\":\"Pending\",\"rc\":\"03\",\"buyer_last_saldo\":486,\"sn\":\"\",\"price\":1300,\"tele\":\"@CSN_PULSA\",\"wa\":\"08127771766\"},\"status\":true}', 'game', '2023-04-20 21:59:17', '2023-04-20 21:59:17'),
(368, 'FS2017285', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 85250, 8525, NULL, 'Pending', NULL, 'game', '2023-04-24 13:48:31', '2023-04-24 13:48:31'),
(369, 'FS2118258', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 85250, 8525, NULL, 'Pending', NULL, 'game', '2023-04-24 14:03:22', '2023-04-24 14:03:22'),
(370, 'FS2118671', NULL, '482291448', NULL, 'Purpax119`RF', 'Member Bulanan', 85250, 8525, NULL, 'Pending', NULL, 'game', '2023-04-24 14:19:22', '2023-04-24 14:19:22'),
(371, 'FS0151596', NULL, '193354061', '2993', 'Bpayments.my.id :3', '5 Diamond', 2276, 228, NULL, 'Pending', NULL, 'game', '2023-04-26 18:12:19', '2023-04-26 18:12:19'),
(372, 'IV0552058FLZ', NULL, '08125678867', NULL, '08125678867', '10000 Pulsa REG', 11535, 1154, NULL, 'Pending', NULL, 'game', '2023-04-26 22:18:54', '2023-04-26 22:18:54'),
(373, 'IV0644347FLZ', 'Fann', '085328272174', NULL, '085328272174', '1000 Pulsa REG', 1717, 172, '24937', 'Success', '{\"data\":{\"ref_id\":\"24937\",\"customer_no\":\"085328272174\",\"buyer_sku_code\":\"TEL1K\",\"message\":\"Transaksi Pending\",\"status\":\"Pending\",\"rc\":\"03\",\"buyer_last_saldo\":431,\"sn\":\"\",\"price\":1355,\"tele\":\"@PLANETBILLER\",\"wa\":\"081261616336\"},\"status\":true}', 'game', '2023-04-27 23:48:45', '2023-04-27 23:48:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `whatsapp` varchar(225) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `role` enum('Admin','Member','Gold','Platinum') NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `whatsapp`, `balance`, `role`, `otp`, `created_at`, `updated_at`) VALUES
(67, 'fanntex', 'Fann', '$2y$10$QalQHbmEVO.CuuatNNzInuZFOAybo5BBS/WNvJpsZmDbx43NZaX7u', '6285328272174', 1902121, 'Admin', '878750', '2023-03-03 06:29:13', '2023-04-28 04:03:17'),
(97, 'Pikzyy', 'pikzyy', '$2y$10$mgPQnvxAc7hIUPzzlTPFiuEwdcy8dcip0SDGwGAwYuO5rBkjKPemW', '082235498885', 0, 'Member', NULL, '2023-04-23 22:47:27', '2023-04-23 22:47:27'),
(102, 'demo', 'demo', '$2y$10$TTFxzZ77p9F0kHSfkbxhfeYIyy7MfP0pZGDNXCurGPhZG8xyu0CO.', '085328272177', 0, 'Member', NULL, '2023-04-28 01:18:13', '2023-04-28 01:18:13'),
(103, 'Demoku123', 'Demoku123', '$2y$10$1EjBohMDqYoRMKXNja4huuABm3FR26GIK1gSyVZ7qIJmi6dX7IRRi', '08981205080', 0, 'Admin', NULL, '2023-04-30 00:51:49', '2023-04-30 00:51:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `promo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `max_potongan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_joki`
--
ALTER TABLE `data_joki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gojeks`
--
ALTER TABLE `gojeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history__gojeks`
--
ALTER TABLE `history__gojeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history__ovos`
--
ALTER TABLE `history__ovos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ovos`
--
ALTER TABLE `ovos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `data_joki`
--
ALTER TABLE `data_joki`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gojeks`
--
ALTER TABLE `gojeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `history__gojeks`
--
ALTER TABLE `history__gojeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `history__ovos`
--
ALTER TABLE `history__ovos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8480;

--
-- AUTO_INCREMENT untuk tabel `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ovos`
--
ALTER TABLE `ovos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
