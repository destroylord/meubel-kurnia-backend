-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2021 at 07:21 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mebel_kurnia`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories_furniture`
--

CREATE TABLE `categories_furniture` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_furniture`
--

INSERT INTO `categories_furniture` (`id`, `nama`, `created_at`) VALUES
(105, 'UPdated', '2021-11-23 01:34:21'),
(106, 'aWEEEE', '2021-11-23 01:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id_checkout` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_furniture` int(11) NOT NULL,
  `quantity` int(2) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furnitures`
--

CREATE TABLE `furnitures` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `descriptions` text NOT NULL,
  `id_category_furniture` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furnitures`
--

INSERT INTO `furnitures` (`id`, `name`, `images`, `price`, `descriptions`, `id_category_furniture`, `created_at`, `updated_at`) VALUES
(3, 'Kursi Makan', '128675509_Flyer Afiliasi.jpeg', '500.000', 'Mantap mang', 106, '2021-12-07 20:17:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `handphone` varchar(13) NOT NULL,
  `photo_profile` varchar(255) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `role` enum('1','2') NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `handphone`, `photo_profile`, `token`, `role`, `created_at`) VALUES
(3, 'adminion', '$2y$10$I.5a1TI6AnfBT63WJqkJxOfnxpOknLdQ6Vrk02uff5pxdQvqGfLym', '082235894784', NULL, NULL, '1', '2021-11-22 06:29:13'),
(4, 'dafrin', '$2y$10$KkaDtFPezod6n/B1NXDWuOCVoen.ZAfnPmYmu9pKFgCWzpTyjkq8C', '082335645789', NULL, NULL, '2', '2021-11-22 03:22:35'),
(5, 'abizal', '$2b$10$qDQf7VlFk49ry3cr4p8KQu18NZhEp/boLzSA0FDX2jWWF7fTYChhm', '08233564457', NULL, '0867d223605edca4ceeaa78f6f3bd07a', '2', '2021-11-22 03:22:35'),
(6, 'Afafg', '$2y$10$9gZ0lnthzOExDtpxHYA9/eHrRo9Ix7S4yBAwc/.qbQyNS7GTl//b2', '08233564466', NULL, '2c35e8a13b327b6d529706444ebbfda7', '2', '2021-11-22 03:22:35'),
(7, 'aftagnis', '$2y$10$xbkTInbu1gUWN.Q/f/xnGOMfXHutYZizjLy2ADqgS29hkPn/eUWcS', '08233564466', NULL, '51a8bbdcc18b674993871800e80ae486', '2', '2021-11-22 03:22:35'),
(30, 'awwww', '$2y$10$A5ODJUSd3SLQvM8iH6DHEObnfrsIA0xRdkCjk1JQKXj2oMIoA0wI6', '08233564467', NULL, 'bc90d38ca97f82b6770e7c112fc7eaf2', '2', '2021-12-07 05:16:25'),
(31, 'awwww', '$2y$10$.sXibIFUFsVIT0Eig1WSEeALh1hnMN0.FxhysQF43/fSiFNGsyVSO', '08233564467', NULL, '821a693e9a163d944f3a82f5fdabe2c2', '2', '2021-12-07 05:17:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `categories_furniture`
--
ALTER TABLE `categories_furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_furniture` (`id_furniture`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `furnitures`
--
ALTER TABLE `furnitures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category_furniture` (`id_category_furniture`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_checkout` (`id_checkout`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_furniture`
--
ALTER TABLE `categories_furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furnitures`
--
ALTER TABLE `furnitures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_ibfk_1` FOREIGN KEY (`id_furniture`) REFERENCES `furnitures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkouts_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `furnitures`
--
ALTER TABLE `furnitures`
  ADD CONSTRAINT `furnitures_ibfk_1` FOREIGN KEY (`id_category_furniture`) REFERENCES `categories_furniture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_checkout`) REFERENCES `checkouts` (`id_checkout`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
