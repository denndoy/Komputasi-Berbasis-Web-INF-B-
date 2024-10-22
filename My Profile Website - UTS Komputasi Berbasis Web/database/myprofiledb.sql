-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 21, 2024 at 05:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprofiledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_of_contents` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `quote`, `description`, `date_of_contents`) VALUES
(1, 'About Me', '\"Tidak ada kata tidak mungkin, sebelum kamu sempat mencobanya.\"', '<p>Halo! Saya <b>Dandy Tri Widianto</b>, mahasiswa semester 3 <b>Informatika di Universitas Pembangunan Jaya.</b> Saya sangat tertarik dengan teknologi dan suka membangun website yang bisa memberikan solusi dan meningkatkan pengalaman pengguna. Di luar dunia coding, saya juga suka berolahraga dan menjelajahi berbagai kuliner. Baik itu mencoba hidangan baru atau mengasah keterampilan web development saya, saya selalu bersemangat untuk belajar dan berkembang. Ayo terhubung dan ciptakan sesuatu yang luar biasa bersama!</p>', '2024-10-21 15:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogvlog`
--

CREATE TABLE `blogvlog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_of_contents` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogvlog`
--

INSERT INTO `blogvlog` (`id`, `title`, `quote`, `description`, `date_of_contents`) VALUES
(1, 'My Blog/Vlog', 'Pemikiran, pengalaman, dan cerita saya yang tertuang dalam tulisan.', '<p>-</p>', '2024-10-21 15:50:39'),
(2, 'Artikel', '-', '<p><img src=\"../images/a3c65c2974270fd093ee8a9bf8ae7d0b.39\" style=\"width: 50%;\"><span style=\"background-color: var(--bs-body-bg); text-align: var(--bs-body-text-align);\">Artikel dengan judul \"Pilpres 2024 di Tangan Milenial dan Gen Z, Apa pengaruhnya?\" merupakan artikel pertama yang saya tulis dan diterbitkan di Kumparan.</span><br></p>', '2024-10-21 15:51:32'),
(3, 'Vlog', '-', '<p><img src=\"../images/42a0e188f5033bc65bf8d78622277c4e.49\" style=\"width: 50%;\"><span style=\"background-color: var(--bs-body-bg); text-align: var(--bs-body-text-align);\">Video dokumenter Gang Cantik - RW 02 Pondok Jaya merupakan tugas akhir dari mata kuliah KOTA Arsitektur dan Perilaku yang telah saya tuntaskan pada semester 2.</span><br></p>', '2024-10-21 15:52:03'),
(4, 'Vlog', '-', '<p><img src=\"../images/0777d5c17d4066b82ab86dff8a46af6f.00\" style=\"width: 50%;\"><span style=\"background-color: var(--bs-body-bg); text-align: var(--bs-body-text-align);\">Aftermovie DAMBADES 2024 yang saya edit untuk keperluan dokumentasi selama kegiatan DAKAURI Membangun Desa di Kampung Caringin Jangkung, Desa Ciampea Udik, Kabupaten Bogor.</span><br></p>', '2024-10-21 15:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_of_contents` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `telp`, `subject`, `message`, `date_of_contents`) VALUES
(1, 'Dandy Tri Widianto', 'triwidiantoy@gmail.com', '08993756431', 'Website Developer', 'Halo saya ingin membuat website untuk perusahaan saya, apakah bisa?', '2024-10-21 15:53:10'),
(2, 'Mamad Sulaiman', 'sulaimanmamad09@gmail.com', '087888334567', 'Content Creator', 'Saya ingin membuat konten tentang edukasi tentang sampah jenis-jenis sampah, apakah Anda bisa membantu saya?', '2024-10-21 15:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_of_contents` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `title`, `quote`, `description`, `date_of_contents`) VALUES
(1, 'Selamat Datang di Website,', 'Dandy Tri Widianto', '<p><img src=\"../images/0f28b5d49b3020afeecd95b4009adf4c.png\" style=\"width: 500px;\">Web Developer | Video Editor | Content Creator<br></p>', '2024-10-21 15:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_of_contents` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `quote`, `description`, `date_of_contents`) VALUES
(1, 'My Portfolio', 'Proyek saya yang mencerminkan keahlian dan kreativitas saya.', '<p>Judul dan kutipan aja.</p>', '2024-10-21 15:38:59'),
(2, 'Website Pribadi Tailwind CSS', '-', '<p><img src=\"../images/b3e3e393c77e35a4a3f3cbd1e429b5dc.52\" style=\"width: 50%;\">Website profil pribadi yang pernah saya buat sebelumnya menggunakan HTML murni dengan bantuan framework Tailwind CSS.<br></p>', '2024-10-21 15:47:09'),
(3, 'Website Landing Page', '-', '<p><img src=\"../images/7ef605fc8dba5425d6965fbd4c8fbe1f.02\" style=\"width: 50%;\">Website landing page yang pernah saya buat sebelumnya menggunakan HTML murni dengan bantuan framework Bootstrap 4.<br></p>', '2024-10-21 15:48:24'),
(4, 'Website Beli.Bun', '-', '<p><img src=\"../images/f0935e4cd5920aa6c7c996a5ee53a70f.05\" style=\"width: 50%;\">Website Beli.Bun merupakan website katalog online shop yang pernah saya buat sebelumnya menggunakan HTML murni dan CSS Grid System.<br></p>', '2024-10-21 15:49:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogvlog`
--
ALTER TABLE `blogvlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogvlog`
--
ALTER TABLE `blogvlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
