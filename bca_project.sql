-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 01:57 PM
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
-- Database: `bca_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`, `name`, `quantity`, `price`) VALUES
(24, 4, 12, 'T-shirt', 1, 350),
(57, 0, 12, 'Tshirt', 1, 350),
(58, 0, 13, 'Shirt', 1, 400),
(59, 0, 14, 'New Shirt', 1, 600),
(60, 0, 12, 'Tshirt', 1, 350),
(61, 0, 13, 'Shirt', 1, 400),
(62, 0, 14, 'New Shirt', 1, 600),
(108, 0, 25, 'shirt', 1, 950),
(109, 0, 24, 'shirt', 1, 999),
(120, 0, 28, 'Cargo Pants', 1, 950),
(121, 0, 26, 'Cargo Pants', 1, 950),
(148, 3, 24, 'shirt', 1, 999),
(149, 0, 23, 'shirt', 1, 800);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `mobnumber` int(100) NOT NULL,
  `txid` varchar(100) NOT NULL,
  `totalproduct` varchar(100) NOT NULL,
  `totalprice` int(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `name`, `address`, `phone`, `mobnumber`, `txid`, `totalproduct`, `totalprice`, `status`, `created_at`) VALUES
(14, 3, 'Dipsan', 'ktm', 741258963, 0, '', '13 (2) , 12 (1) ', 1150, 'pending', '2024-06-16 16:45:20.297647'),
(16, 3, 'Dipsan', 'budhanilkantha', 963852741, 0, '', '14 (1) , 13 (1) , 12 (1) ', 1350, 'Confirmed', '2024-06-16 16:48:29.740598'),
(17, 3, 'Dipsan', 'lalitput', 963852741, 0, '', '20 (1) , 21 (1) , 19 (1) , 18 (1) , 14 (1) , 13 (1) , 12 (1) ', 4615, 'Delivered', '2024-06-16 16:49:01.483168'),
(20, 3, 'Dipsan', 'pokhara', 963852741, 0, '', '12 (2) , 13 (1) ', 1100, 'pending', '2024-06-16 16:50:39.691188'),
(22, 3, 'Dipsan', 'budhanilkantha', 852963741, 0, '', '22 (1) , 23 (1) ', 1750, 'Cancel', '2024-06-16 16:55:44.568711'),
(23, 8, 'apple', 'pokhara', 2147483647, 0, '', '22 (1) , 23 (1) , 13 (1) ', 2150, 'pending', '2024-06-16 17:00:43.444519'),
(26, 9, 'aaron', 'baneshwor', 987412563, 0, '', '25 (1) , 24 (1) ', 1949, 'Confirmed', '2024-06-17 01:59:44.779671'),
(29, 9, 'aaron', 'ktm', 963852741, 0, '', '25 (1) , 24 (1) , 23 (1) ', 2749, 'pending', '2024-06-17 02:02:02.967912'),
(30, 3, 'Dipsan', 'budhanilkantha', 987415263, 0, '', '25 (1) , 26 (1) ', 1850, 'pending', '2024-06-17 14:10:33.596829'),
(32, 3, 'Dipsan', 'budhanilkantha', 963852741, 0, '', '24 (1) , 22 (1) , 25 (1) ', 2889, 'pending', '2024-06-17 14:23:50.090766'),
(33, 3, 'Dipsan', 'budhanilkantha', 963852741, 0, '', '26 (7) , 22 (1) ', 996, 'pending', '2024-06-17 14:24:25.562307'),
(36, 3, 'Dipsan', 'pokhara', 96385274, 0, '', '14 (1) , 22 (1) , 26 (1) ', 2540, 'pending', '2024-06-17 14:48:17.965916'),
(39, 3, 'Dipsan', 'lalitput', 963852741, 0, '', '14 (1) , 23 (1) , 28 (1) ', 2350, 'Delivered', '2024-06-17 17:01:36.275397');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `imgname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `catagory`, `description`, `quantity`, `Price`, `imgname`) VALUES
(12, 'Tshirt', 'clothing', 'good', 20, 550, 'g3.png'),
(13, 'Shirt', 'clothing', 'good', 26, 400, 'g2.png'),
(14, 'New Shirt', 'clothing', 'good', 33, 600, 'g1.png'),
(23, 'shirt', 'shirt', 'comfortable ', 14, 800, '91ac1fc81e319458c3f58d4629fb91dd.jpg'),
(24, 'shirt', 'shirt', 'comfortable ', 22, 999, '69cb9fa94a1c5ae7d5eebd3d2b66be60.jpg'),
(25, 'shirt', 'shirt', 'comfortable and good looking', 5, 900, '68eae0993b0aa6f66c1c073d1c01b829.jpg'),
(26, 'Cargo Pants', 'Cargo Pants', 'comfortable and good looking', 13, 950, '8b39cd96637699d1ba095809c61724cd.jpg'),
(28, 'Cargo Pants', 'Cargo Pants', 'comfortable ', 17, 950, 'Cargo Pants, girl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `pass`) VALUES
(3, 'Dipsan', 'Shrestha', 'dipsan@gmail.com', 81),
(8, 'apple', 'stha', 'apple@gmail.com', 81),
(9, 'aaron', 'khadka', 'aaron@gmail.com', 81);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
