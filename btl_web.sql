-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 04:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2023-02-24 12:27:33', 2);
INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(2, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Khanh Nhan', '2023-02-24 14:37:58', 0);
INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(3, 'nhannguyenqna2002@gmail.com', '08e1050d6ef9f5e1405a78ecc55167a9', 'Nhan Nguyen', '2023-02-24 15:09:42', 0);
INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(4, 'echristiansen@dmxs8.com', 'e120ea280aa50693d5568d0071456460', 'Rusty Lind', '2023-02-24 15:11:06', 0);
INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(5, 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Nhan Nguyen', '2023-02-25 02:44:33', 0);
INSERT INTO `users` (`id`, `email`, `password`, `name`, `create_at`, `role`) VALUES(6, 'abc1@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Hoai nhon', '2023-02-25 03:12:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
