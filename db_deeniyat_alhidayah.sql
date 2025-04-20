-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2025 at 09:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_deeniyat_alhidayah`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `nick_name` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `time_zone` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `id` int NOT NULL,
  `class_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `teacher_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`id`, `class_name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'kelas 1 kecil', 1, '2025-02-08 06:33:32', '2025-02-08 06:33:32'),
(2, 'Kelas 2', 2, '2025-02-08 06:34:07', '2025-03-01 16:17:04'),
(3, 'kelas 3 kecil', 3, '2025-02-08 06:34:18', '2025-02-08 06:34:18'),
(4, 'kelas 4', 4, '2025-02-08 06:34:30', '2025-02-08 06:34:30'),
(5, 'kelas 5', 5, '2025-02-08 06:34:37', '2025-02-08 06:34:37'),
(6, 'kelas 6 Putri', 5, '2025-02-15 20:44:03', '2025-02-15 20:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `user_id`, `role_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'ahmad aja', 'hashedpassword1', '2025-02-08 07:05:09', '2025-03-01 16:17:57'),
(2, 2, 3, 'aisyah_nuraini', 'hashedpassword2', '2025-02-08 07:06:13', '2025-02-08 07:06:13'),
(3, 3, 3, 'rizky_pratama', 'hashedpassword3', '2025-02-08 07:06:36', '2025-02-08 07:06:36'),
(4, 4, 3, 'nabila_salsabila', 'hashedpassword4', '2025-02-08 07:07:01', '2025-02-08 07:07:01'),
(5, 5, 3, 'fauzan_alfarizi', 'hashedpassword5', '2025-02-08 07:07:15', '2025-02-08 07:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id` int NOT NULL,
  `materi_name` varchar(25) NOT NULL,
  `class_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment_spp`
--

CREATE TABLE `tb_payment_spp` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `month` varchar(12) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `paid_at` datetime NOT NULL,
  `upload_transactions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_payment_spp`
--

INSERT INTO `tb_payment_spp` (`id`, `student_id`, `month`, `payment_status`, `paid_at`, `upload_transactions`, `created_at`, `updated_at`) VALUES
(1, 1, 'Januari', 'Unpaid', '2024-01-10 08:30:00', 'C:\\xampp\\tmp\\php8680.tmp', '2025-02-08 07:23:08', '2025-03-01 16:19:56'),
(2, 2, 'Februari', 'paid', '2024-02-15 10:45:00', 'C:\\xampp\\tmp\\php263A.tmp', '2025-02-08 07:31:28', '2025-02-15 17:34:25'),
(3, 3, 'Maret', 'paid', '2024-02-27 10:45:00', 'C:\\xampp\\tmp\\php82C3.tmp', '2025-02-08 07:31:51', '2025-02-16 00:27:11'),
(4, 4, 'Januari', 'paid', '2024-01-26 10:45:00', 'C:\\xampp\\tmp\\phpCDC7.tmp', '2025-02-08 07:32:10', '2025-02-15 17:34:25'),
(5, 5, 'Febuari', 'paid', '2024-02-11 23:45:00', 'C:\\xampp\\tmp\\php428A.tmp', '2025-02-08 07:32:40', '2025-02-15 17:34:25'),
(10, 8, 'Februari', 'prosses', '2025-12-08 00:00:00', 'C:\\xampp\\tmp\\php3F8E.tmp', '2025-02-15 21:40:50', '2025-02-15 21:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `daily_value` decimal(5,2) NOT NULL,
  `monthly_exam` decimal(5,2) NOT NULL,
  `final_exam` decimal(5,2) NOT NULL,
  `academic_year_first` int NOT NULL,
  `academic_year_last` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id`, `student_id`, `teacher_id`, `daily_value`, `monthly_exam`, `final_exam`, `academic_year_first`, `academic_year_last`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '80.00', '90.00', '90.00', 2024, 2025, '2025-02-08 07:37:39', '2025-03-01 23:21:55'),
(2, 2, 2, '100.00', '80.00', '90.00', 2024, 2025, '2025-02-08 07:37:56', '2025-03-01 23:21:55'),
(3, 3, 3, '90.00', '75.00', '80.00', 2024, 2025, '2025-02-08 07:38:10', '2025-03-01 23:21:55'),
(4, 4, 4, '78.00', '80.00', '85.00', 2024, 2025, '2025-02-08 07:38:23', '2025-03-01 23:21:55'),
(5, 5, 5, '85.00', '80.00', '85.00', 2024, 2025, '2025-02-08 07:38:35', '2025-03-01 23:21:55'),
(6, 1, 1, '80.00', '78.00', '90.00', 2024, 2025, '2025-02-15 20:55:32', '2025-03-01 23:21:55'),
(7, 1, 1, '80.00', '78.00', '90.00', 2025, 2024, '2025-02-15 21:33:41', '2025-03-01 23:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-02-01 22:44:23', '2025-02-02 05:49:00'),
(2, 'teacher', '2025-02-01 22:45:36', '2025-02-02 05:49:00'),
(3, 'student', '2025-02-01 22:47:39', '2025-02-02 05:52:01'),
(6, 'orang tua', '2025-03-01 15:54:09', '2025-03-01 16:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `class_id` int NOT NULL,
  `is_active` bigint NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_job` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_job` varchar(100) NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id`, `name`, `email`, `password`, `birthdate`, `gender`, `nis`, `phone`, `address`, `class_id`, `is_active`, `father_name`, `father_job`, `mother_name`, `mother_job`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad fatwa', 'ahmad.fadillah@example.com', 'hashedpassword1', '2010-05-12', 'Laki-laki', '123456', '081234567890', 'Jl. Merdeka No. 10', 1, 1, 'Budi Santoso', 'PNS', 'Siti Aisyah', 'Ibu Rumah Tangga', 'C:\\xampp\\tmp\\phpC109.tmp', '2025-02-08 06:52:48', '2025-02-16 00:08:01'),
(2, 'Aisyah Nuraini', 'aisyah.nuraini@example.com', 'hashedpassword2', '2011-08-25', 'Perempuan', '123457', '081298765432', 'Jl. Kenangan No. 5', 2, 1, 'Joko Widodo', 'Wiraswasta', 'Fatimah Zahra', 'Guru', 'C:\\xampp\\tmp\\php80FA.tmp', '2025-02-08 06:54:42', '2025-02-08 06:54:42'),
(3, 'Ahmad fatwa', 'Ahmadfatwa@gmail.com', 'hashedpassword3', '2010-11-03', 'Laki-laki', '123458', '082345678901', 'Jl. Mawar No. 20', 3, 1, 'Rahmat Hidayat', 'Dokter', 'Zahra Fitri', 'Perawat', 'C:\\xampp\\tmp\\phpC7D.tmp', '2025-02-08 06:56:24', '2025-02-16 00:25:09'),
(4, 'Nabila Salsabila', 'nabila.salsabila@example.com', 'hashedpassword4', '2011-02-17', 'Perempuan', '123459', '083456789012', 'Jl. Anggrek No. 8', 4, 1, 'Hendri Saputra', 'Pegawai Swasta', 'Linda Sari', 'Pedagang', 'C:\\xampp\\tmp\\phpC99F.tmp', '2025-02-08 06:58:18', '2025-02-08 06:58:18'),
(5, 'Fauzan Alfarizi', 'fauzan.alfarizi@example.com', 'hashedpassword5', '2010-07-30', 'Laki-laki', '123460', '084567890123', 'l. Cemara No. 15', 5, 1, 'Samsul Arifin', 'Polisi', 'Rina Susanti', 'Dosen', 'C:\\xampp\\tmp\\php468B.tmp', '2025-02-08 06:59:55', '2025-02-08 06:59:55'),
(8, 'Putri', 'putri@gmail.com', 'putriheshas', '2010-09-11', 'Perempuan', '09247823', '08853218469', 'Jl Mekarwangi', 5, 1, 'Dudung', 'Wiraswasta', 'Nining', 'Ibu-ibu', 'C:\\xampp\\tmp\\phpC6E3.tmp', '2025-02-15 20:41:22', '2025-03-01 16:12:35'),
(10, 'Putri', 'putri3@gmail.com', 'putriheshas23', '2010-09-11', 'Perempuan', '092478233', '08853218469', 'Jl Mekarwangi', 4, 1, 'Dudung', 'Wiraswasta', 'Nining', 'IRT', 'C:\\xampp\\tmp\\phpE1E0.tmp', '2025-02-15 20:52:23', '2025-02-15 20:52:23'),
(12, 'Putra Raja', 'putraraja@gmail.com', 'putraheshas12', '2012-05-02', 'Laki-laki', '12192832', '083439823742', 'Jl BCA', 3, 1, 'Bambang', 'PNS', 'Puspa', 'IRT', 'C:\\xampp\\tmp\\php4C2D.tmp', '2025-02-15 21:37:37', '2025-02-15 21:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teacher`
--

CREATE TABLE `tb_teacher` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(13) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_teacher`
--

INSERT INTO `tb_teacher` (`id`, `name`, `email`, `nip`, `birthdate`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Siti Anzhanny Marwa', 'sanzhannym23@gmail.com', '123456789', '2003-01-23', '089629183036', '2025-02-01 22:32:03', '2025-03-01 16:15:46'),
(2, 'Siti Nurhayati', 'siti.nurhayati@gmail.com', '123456788', '1995-10-04', '087645321900', '2025-02-07 01:36:34', '2025-02-16 00:23:00'),
(3, 'Nurul Hidayati', 'nurul.hidayati@gmail.com', '123456787', '1990-02-15', '081356789101', '2025-02-07 01:38:26', '2025-02-07 01:38:26'),
(4, 'Desi Permata', 'desipermata@gmail.com', '123456786', '1987-03-25', '081290123456', '2025-02-07 01:39:08', '2025-02-07 01:39:08'),
(5, 'Siti Aisyah', 'sitiaisyah@gmail.com', '123456785', '1985-12-10', '081234567890', '2025-02-07 01:39:56', '2025-02-07 01:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','teacher','student') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Deeniyat', 'admin@gmail.com', NULL, '$2y$12$zsGnrZUiQ23y2ZoX0cyfROsfZVQ46TiWhAmTGr96jZeKIkPoZJDGK', 'admin', NULL, '2025-03-20 08:20:43', '2025-03-20 08:20:43'),
(2, 'Teacher Deeniyat', 'teacher@gmail.com', NULL, '$2y$12$AcQAv5NvSk7hZEZ4uRr3Q.mi1ZMHTlIYknGlYl12q4hfvKq5mpw2C', 'teacher', NULL, '2025-03-20 08:20:43', '2025-03-20 08:20:43'),
(3, 'Student Deeniyat', 'student@gmail.com', NULL, '$2y$12$9gBdgpw3cwZks3qKo.6gQe5yzq4MkA7MMgYDs3mGWjuRU6VsypRAy', 'student', NULL, '2025-03-20 08:20:43', '2025-03-20 08:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- Indexes for table `tb_payment_spp`
--
ALTER TABLE `tb_payment_spp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `id_class` (`class_id`);

--
-- Indexes for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nip` (`nip`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_payment_spp`
--
ALTER TABLE `tb_payment_spp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD CONSTRAINT `tb_class_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `tb_teacher` (`id`);

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id`);

--
-- Constraints for table `tb_payment_spp`
--
ALTER TABLE `tb_payment_spp`
  ADD CONSTRAINT `tb_payment_spp_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tb_student` (`id`);

--
-- Constraints for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD CONSTRAINT `tb_report_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tb_student` (`id`),
  ADD CONSTRAINT `tb_report_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `tb_teacher` (`id`);

--
-- Constraints for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `tb_class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
