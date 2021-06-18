-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interxtellar`
--

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE `explore` (
  `id` int(3) NOT NULL,
  `star` varchar(64) NOT NULL,
  `object` varchar(64) NOT NULL,
  `mass` varchar(64) NOT NULL,
  `radius` varchar(64) NOT NULL,
  `period` varchar(64) NOT NULL,
  `distance` varchar(64) NOT NULL,
  `travel_time` varchar(64) NOT NULL,
  `price` int(64) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`id`, `star`, `object`, `mass`, `radius`, `period`, `distance`, `travel_time`, `price`, `image`) VALUES
(7, 'TRAPPIST-1', 'TRAPPIST-1d', '0.3', '0.78', '4.05', '39', '78', 195000000, '2095TRAPPIST-1d.png'),
(9, 'Proxima Centauri', 'Proxima Centauri b', '1.27', '0', '11.186', '4.25', '8.5', 195000000, '5192Proxima Centauri b.jpg'),
(10, 'Kepler-1649', 'Kepler-1649c', '-', '1.06', '19.5', '301', '602', 853000000, '5701Kepler-1649c.png'),
(11, 'TOI 700', 'TOI 700 d', '1.72', '1.14', '37.4', '101', '202', 412000000, '7262TOI 700 d.jpg'),
(12, 'Ross 128', 'Ross 128 b', '1.40', '-', '9.87', '11.03', '22.06', 354000000, '9627Ross 128 b.jpg'),
(35, 'Sun', 'Earth', '1.00', '1.00', '365.24', '0', '0', 50000, '9995Earth.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `full_name`, `email`, `username`, `password`, `date`) VALUES
(1, 1, 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-06-18 06:41:15'),
(8, 4509844971401437508, 'Andrew Benedictus Jamesie', 'andrewbjamesie@yahoo.com', 'andrew123', '47fab60bdcd2ffce91447d19fe9ce7f1', '2021-06-18 09:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `object` (`object`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `username` (`username`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `explore`
--
ALTER TABLE `explore`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
