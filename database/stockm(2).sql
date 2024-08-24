-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 08:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime(5) NOT NULL,
  `img_id` int(11) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `admin_name`, `admin_email`, `password`, `date`, `img_id`, `uploaded_on`) VALUES
(1, 'chathuranga', 'chathuranga@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00.00000', 2, '0000-00-00 00:00:00'),
(2, 'nimal', 'nimal123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-24 00:15:33.00000', 0, '0000-00-00 00:00:00'),
(3, 'admin', 'admin123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-07-07 00:03:35.00000', 0, '0000-00-00 00:00:00'),
(10, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-15 14:22:58.00000', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `id` int(11) NOT NULL,
  `set_price` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`id`, `set_price`) VALUES
(1, '123'),
(13, '100'),
(14, '100'),
(15, '150');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `bid_name` varchar(55) NOT NULL,
  `closing_date` datetime NOT NULL,
  `status` varchar(55) NOT NULL,
  `bid_price` varchar(55) NOT NULL,
  `client` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `bid_name`, `closing_date`, `status`, `bid_price`, `client`) VALUES
(1, 'bid1', '2022-07-02 12:16:27', 'Recieved', '1.36', '1'),
(2, 'bid2', '2022-07-09 13:14:01', 'active', '2.52', '0');

-- --------------------------------------------------------

--
-- Table structure for table `byers`
--

CREATE TABLE `byers` (
  `b_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `tpnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `date` varchar(5) NOT NULL,
  `time` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile_img`
--

CREATE TABLE `profile_img` (
  `img_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `uplorad_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_img`
--

INSERT INTO `profile_img` (`img_id`, `image`, `uplorad_on`) VALUES
(2, 'Chart.jpeg', '2022-07-14 13:20:40'),
(3, 'Chart.jpeg', '2022-07-14 14:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `sel_id` int(11) NOT NULL,
  `selname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `Tpnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(55) NOT NULL,
  `detail` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `detail`) VALUES
(1, 'active', ''),
(2, 'inactive', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `st_name` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Bidding_closing_time` time NOT NULL,
  `status` varchar(55) NOT NULL,
  `bidding_start_time` time NOT NULL,
  `price` float NOT NULL,
  `closing_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `st_name`, `description`, `Bidding_closing_time`, `status`, `bidding_start_time`, `price`, `closing_date`) VALUES
(1, 'AAL', '', '19:11:00', '1', '00:00:00', 1.5, '2022-07-16 01:58:27'),
(2, 'AAME', '', '07:25:05', '1', '00:00:00', 4.83, '2022-07-13 15:41:11'),
(3, 'AAOI', '', '07:05:00', '0', '13:24:00', 8.52, '2022-07-14 17:41:22'),
(4, 'AAON', '', '02:05:00', 'Active', '12:24:00', 0.86, '2022-07-16 14:08:30'),
(5, 'AAPC', '', '10:05:00', 'Active', '15:24:00', 7.15, '2022-09-10 00:00:00'),
(6, 'AAPL', '', '10:05:00', 'Active', '12:24:00', 0.75, '2022-09-10 00:00:00'),
(7, 'AAVL', '', '01:05:00', 'Active', '15:24:00', 1.72, '2022-09-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_s`
--

CREATE TABLE `stock_s` (
  `id` int(11) NOT NULL,
  `stock_name` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_s`
--

INSERT INTO `stock_s` (`id`, `stock_name`, `status`) VALUES
(1, 's001', '1'),
(2, 's002', '1'),
(3, '003', '0'),
(4, 's004', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stock_status`
--

CREATE TABLE `stock_status` (
  `id` int(11) NOT NULL,
  `stock_name` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_status`
--

INSERT INTO `stock_status` (`id`, `stock_name`, `status`) VALUES
(1, '001', '1'),
(2, '002', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `email`, `password`, `date`) VALUES
(1, 'chathuranga', 'chathuranga@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-23 00:00:00.00000'),
(2, 'Amal', 'amal123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-23 21:09:14.00000'),
(3, 'sarath', 'sarath123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-24 22:18:43.00000'),
(4, 'user123', 'user123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-15 14:18:58.00000'),
(5, 'user1', 'user1@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-15 18:50:25.00000'),
(6, 'chathuranga', 'chathuranga123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-15 18:54:38.00000'),
(7, 'nimal1', 'nimal23@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-15 19:07:19.00000'),
(8, 'bimal', 'bimal123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-05 11:22:06.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `byers`
--
ALTER TABLE `byers`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_img`
--
ALTER TABLE `profile_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`sel_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_s`
--
ALTER TABLE `stock_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_status`
--
ALTER TABLE `stock_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `byers`
--
ALTER TABLE `byers`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_img`
--
ALTER TABLE `profile_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock_s`
--
ALTER TABLE `stock_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_status`
--
ALTER TABLE `stock_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
