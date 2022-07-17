-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 03:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle-maintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `app_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_date` datetime NOT NULL,
  `app_description` text NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `problem` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Sade Sutton', 'fenoz@mailinator.com', '+1 (608) 341-1504', 'Est rerum quo imped');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `unit_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productimages`
--

CREATE TABLE `tbl_productimages` (
  `productimages_id` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'Admin', 0),
(2, 'Employee', 0),
(3, 'Client', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogins`
--

CREATE TABLE `tbl_userlogins` (
  `userlogin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userlogins`
--

INSERT INTO `tbl_userlogins` (`userlogin_id`, `user_id`, `login_time`, `logout_time`, `is_deleted`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 2, '0000-00-00 00:00:00', '2022-07-15 03:04:35', 0),
(3, 3, '0000-00-00 00:00:00', '2022-07-15 12:06:47', 0),
(4, 3, '0000-00-00 00:00:00', '2022-07-15 07:56:14', 0),
(5, 3, '2022-07-15 04:57:38', '2022-07-15 07:57:38', 0),
(6, 3, '2022-07-15 04:58:40', '0000-00-00 00:00:00', 0),
(7, 2, '0000-00-00 00:00:00', '2022-07-15 10:03:15', 0),
(8, 2, '0000-00-00 00:00:00', '2022-07-15 10:04:10', 0),
(9, 2, '0000-00-00 00:00:00', '2022-07-15 11:04:22', 0),
(10, 3, '0000-00-00 00:00:00', '2022-07-15 11:13:38', 0),
(11, 3, '0000-00-00 00:00:00', '2022-07-15 11:14:33', 0),
(12, 3, '0000-00-00 00:00:00', '2022-07-15 11:16:29', 0),
(13, 3, '2022-07-15 08:18:45', '2022-07-15 11:18:45', 0),
(14, 3, '2022-07-15 08:19:46', '2022-07-15 11:19:46', 0),
(15, 3, '2022-07-15 08:20:01', '2022-07-15 11:20:01', 0),
(16, 2, '2022-07-15 08:23:58', '2022-07-15 11:23:58', 0),
(17, 3, '2022-07-15 08:24:10', '2022-07-15 11:24:10', 0),
(18, 3, '2022-07-15 08:26:18', '0000-00-00 00:00:00', 0),
(19, 3, '2022-07-15 08:27:27', '0000-00-00 00:00:00', 0),
(20, 3, '2022-07-15 08:28:51', '2022-07-15 11:28:51', 0),
(21, 3, '2022-07-15 08:32:18', '2022-07-15 11:32:18', 0),
(22, 3, '2022-07-15 08:37:38', '2022-07-15 11:37:38', 0),
(23, 3, '2022-07-15 08:53:46', '0000-00-00 00:00:00', 0),
(24, 3, '2022-07-15 08:57:17', '0000-00-00 00:00:00', 0),
(25, 3, '2022-07-15 09:00:40', '2022-07-15 12:00:40', 0),
(26, 3, '2022-07-15 09:04:38', '2022-07-15 12:04:38', 0),
(27, 3, '2022-07-15 09:38:13', '2022-07-15 12:38:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `role` int(11) NOT NULL DEFAULT 3,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role`, `is_deleted`) VALUES
(1, 'Lisandra', 'Woodward', 'nefyriwud@mailinator.com', '$2y$10$Ua4irKSfe/TLHoi7oW4qLOZ5Mleu7/YTG9YxMF20QqZLYhXjxUOZu', '', 0, 0),
(2, 'Kermit', 'Hartman', 'gezyba@mailinator.com', '$2y$10$n3JQxhc.SPHYB5oQSuXmguDohW2OwA.ftbs1zgRrQB5h/kWjHex6S', '', 1, 0),
(3, 'Adrian', 'Drake', 'fasasyti@mailinator.com', '$2y$10$Ii4YXQ5r/wMCpV1zGD39tOaKSmFJ0M795nKldWXFNYeuOW0y0b/FO', '', 3, 0),
(4, 'Emerson', 'Goodwin', 'nepoh@mailinator.com', '$2y$10$fhKH4jarqBvfr/b3CaJJeOtTX0jUw7C1wESvwY35wsP0W5HS.Q8DO', '', 3, 0),
(5, 'Guinevere', 'Montoya', 'kasywulep@mailinator.com', '$2y$10$sV56NI2M/6uMeKgho9J6Z.xJOaz/9kU6M.oAYmUFP21tx2Q73SS9u', '', 3, 0),
(6, 'Kalia', 'Anthony', 'hojynyxi@mailinator.com', '$2y$10$QoDuqdTFQ1kC3ziOYe28eu1NpMogC/lIPP7dWwRSRkdzlEKnt0iB2', '', 3, 0),
(7, 'Uriah', 'Montoya', 'situpakoq@mailinator.com', '$2y$10$D1Eat1N5z9P36oxbVkTP3.LFdcIZiDY54.G0Ix771iOS2XBYj1o72', '', 3, 0),
(8, 'Denton', 'Stein', 'gycybyvac@mailinator.com', '$2y$10$l.v28/fDqj9L7AipLFHjYO3lOLA2Kxuc/fIbMh4KqzLhmTsxAzyW.', '', 3, 0),
(9, 'April', 'Kim', 'lagyv@mailinator.com', '$2y$10$VfQsXnjs5dumWgUCxsNLbOEDjraue3XriCqke6kMXusdWqTYdJGR6', 'Female', 3, 0),
(10, 'Farrah', 'Ball', 'maro@mailinator.com', '$2y$10$UE7/wWrlxwC.FRfIAfLvKuV250bGvV7HtKtqXIRGc5iZNUTnBzcI6', 'Male', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `v_id` int(11) NOT NULL,
  `v_plate` int(11) NOT NULL,
  `v_model` int(25) NOT NULL,
  `v_name` int(40) NOT NULL,
  `v_chassis` int(14) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD PRIMARY KEY (`productimages_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD PRIMARY KEY (`userlogin_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `plate number` (`v_plate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  MODIFY `productimages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  MODIFY `userlogin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
