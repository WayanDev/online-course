-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 16.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-course`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kursus`
--

INSERT INTO `kursus` (`id`, `judul`, `deskripsi`, `durasi`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'Aktivitas ini meliputi pembelajaran individu dan project akhir dalam bentuk tim. Pada pembelajaran individu, setiap peserta akan mengikuti kelas dalam bentuk online meeting. Peserta dapat berkonsultasi  dengan  expert  terkait materi yang dipelajarinya. Selain itu, setiap peserta akan memiliki pembimbing proyek dan dapat berkonsultasi jika peserta menemui kesulitan non-akademik dalam mengikuti pembelajaran maupun ketika mengerjakan proyek.', 900, '2023-07-11 01:44:27', '2023-07-12 06:42:34'),
(10, 'Digital Marketing', 'Master the basics of digital marketing with our free course accredited by Interactive Advertising Bureau Europe and The Open University. There are 26 modules to explore, all created by Google trainers, packed full of practical exercises and real-world examples to help you turn knowledge into action.', 80, '2023-07-12 07:30:44', '2023-07-12 07:31:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kursus_id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link_embed` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kursus_id`, `judul`, `deskripsi`, `link_embed`, `created_at`, `updated_at`) VALUES
(2, 1, 'Framework Laravel', 'Target Pengembangan\r\n- Mahasiswa dapat menguasai penggunaan framework CSS dengan baik untuk mempercantik halaman website', 'https://github.com/WayanDev/online-course.git', '2023-07-11 09:14:07', '2023-07-12 07:36:27'),
(4, 1, 'Code Management GIT & GITHUB', 'Target Pengembangan\r\n- Mahasiswa dapat memahami penggunaan git dengan baik sebagai code repository dan sebagai tools untuk berkolaborasi dengan tim', 'https://github.com/WayanDev/online-course.git', '2023-07-12 06:52:06', '2023-07-12 06:52:06'),
(7, 10, 'Plan your online business strategy', 'From identifying your goals to knowing how to track your progress, this topic will show you how to put your best foot forward when creating a digital business strategy. Learn how to stand apart from the competition and how to impress customers at every point of their experience.', 'https://github.com/WayanDev/online-course.git', '2023-07-12 07:37:30', '2023-07-12 07:37:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_materi_kursus_idx` (`kursus_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `fk_materi_kursus` FOREIGN KEY (`kursus_id`) REFERENCES `kursus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
