-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 10:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `ref_no` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `room_type` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `room_id` int(11) NOT NULL,
  `room` int(20) NOT NULL DEFAULT 0,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `days_of_stay` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=booked, 1=check_in, 2=check_out',
  `message` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'None',
  `price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ref_no`, `name`, `mail`, `phone`, `room_type`, `room_id`, `room`, `adult`, `children`, `datein`, `dateout`, `days_of_stay`, `status`, `message`, `price`) VALUES
(1, 889862356, 'Anh Nguyễn', 'anhnguyen@gmail.com', 918393892, 'Double Room', 2, 3, 2, 1, '2022-12-24', '2022-12-28', 3, 2, 'require extrea bed', 596),
(2, 245545227, 'hà dung', 'dung@gmail.com', 987654321, 'Single Room', 1, 0, 1, 0, '2023-01-01', '2023-01-05', 5, 0, '', 0),
(3, 514250977, 'Smith', 'smith@gmail.com', 283461532, 'Deluxe Room', 3, 0, 4, 0, '2022-12-27', '2022-12-31', 4, 0, '', 0),
(4, 964367482, 'Jonny', 'jon@gmail.com', 2147483647, 'Single Room', 1, 0, 2, 0, '2022-12-30', '2022-12-31', 1, 0, '', 0),
(5, 520710762, 'Anny', 'anny@gmail.com', 123456743, 'Double Room', 2, 0, 2, 1, '2023-01-03', '2023-01-06', 3, 0, '', 0),
(6, 48556757, 'Lucy', 'lucy@gmail.com', 86547643, 'Deluxe Room', 3, 0, 3, 1, '2022-12-28', '2022-12-30', 2, 0, '', 0),
(7, 583156746, 'jennifer', 'j@gmail.com', 97543321, 'Single Room', 1, 1, 2, 1, '2022-12-23', '2022-12-25', 2, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_id` int(20) NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `charges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `customer_id`, `mail`, `phone`, `address`, `charges`) VALUES
(1, 'Anh Nguyễn', 6625028, 'anhnguyen@gmail.com', 918393892, '', 596),
(2, 'hà dung', 87624445, 'dung@gmail.com', 987654321, '', 0),
(3, 'Smith', 24725365, 'smith@gmail.com', 283461532, '', 0),
(4, 'Jonny', 53711613, 'jon@gmail.com', 2147483647, '', 0),
(5, 'Anny', 19848454, 'anny@gmail.com', 123456743, '', 0),
(6, 'Lucy', 21630600, 'lucy@gmail.com', 86547643, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(3) NOT NULL,
  `room` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category_id` int(3) NOT NULL,
  `status` int(2) NOT NULL COMMENT '0=Available, 1=Unavailable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category_id`, `status`) VALUES
(1, 'Single_101', 1, 1),
(2, 'Single_102', 1, 0),
(3, 'Double-201', 2, 0),
(4, 'Double_202', 2, 0),
(5, 'Single_103', 1, 0),
(6, 'Deluxe_301', 3, 0),
(7, 'Deluxe_302', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_categoricals`
--

CREATE TABLE `room_categoricals` (
  `id` int(2) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `room_categoricals`
--

INSERT INTO `room_categoricals` (`id`, `name`, `price`) VALUES
(1, 'Single Room', 99),
(2, 'Double Room', 149),
(3, 'Deluxe Room', 199);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` int(2) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Admin', 'Admin', 'admin123', 1),
(2, 'Reception', 'Reception1', 'reception1', 2),
(6, 'recepton2', 'Reception2', 'reception2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `room_categoricals`
--
ALTER TABLE `room_categoricals`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_categoricals`
--
ALTER TABLE `room_categoricals`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
