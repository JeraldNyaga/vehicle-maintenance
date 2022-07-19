-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 11:41 PM
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
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Brake System'),
(2, 'Transmission System'),
(3, 'Wheel System'),
(4, 'Battery system'),
(5, 'Steering system'),
(6, 'Body system');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `hist_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `replace_date` date NOT NULL,
  `maintenance_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`hist_id`, `m_id`, `task_id`, `product_id`, `quantity`, `replace_date`, `maintenance_date`) VALUES
(1, 1, 9, 4, 0, '2022-01-10', '0000-00-00'),
(2, 1, 9, 3, 0, '2022-01-10', '0000-00-00'),
(3, 1, 1, 8, 0, '2022-01-10', '0000-00-00'),
(4, 2, 9, 4, 0, '2022-01-10', '0000-00-00'),
(5, 2, 4, 1, 0, '2022-01-10', '0000-00-00'),
(6, 3, 9, 3, 0, '2022-04-11', '0000-00-00'),
(7, 4, 11, 6, 0, '2022-06-13', '0000-00-00'),
(8, 3, 4, 4, 0, '2022-07-19', '0000-00-00'),
(9, 3, 1, 4, 0, '2020-01-10', '2020-07-08'),
(10, 1, 1, 4, 0, '2022-07-19', '2023-01-19'),
(11, 3, 12, 8, 0, '2022-04-13', '2022-10-13'),
(12, 3, 6, 4, 0, '2022-04-13', '2022-07-13'),
(13, 1, 1, 1, 198, '2022-07-19', '2022-10-19'),
(14, 1, 0, 5, 966, '2022-07-19', '2022-10-19');

--
-- Triggers `tbl_history`
--
DELIMITER $$
CREATE TRIGGER `calc_next_maintenance` BEFORE INSERT ON `tbl_history` FOR EACH ROW if new.task_id = '1' or '4' or '12' or '14' THEN
set new.maintenance_date = new.replace_date + INTERVAL 6 MONTH;
IF new.task_id = '3' or '13' THEN
set new.maintenance_date = new.replace_date + INTERVAL 24 MONTH;
IF new.task_id = '2' or '8' or '11' THEN
set new.maintenance_date = new.replace_date + INTERVAL 48 MONTH;
IF new.task_id = '6' or '9' THEN
set new.maintenance_date = new.replace_date + INTERVAL 3 MONTH;
IF new.task_id ='7' THEN
set new.maintenance_date = new.replace_date + INTERVAL 12 MONTH;
END IF;
END IF;
END IF;
END IF;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `v_plate` varchar(25) NOT NULL,
  `mileage` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_maintenance`
--

INSERT INTO `tbl_maintenance` (`m_id`, `v_id`, `v_plate`, `mileage`, `date`) VALUES
(1, 3, 'KCG 764F', 80000, '2022-07-20'),
(2, 2, 'KBE 849C', 10000, '2022-01-10'),
(3, 3, 'KCG 764F', 13000, '2022-04-11'),
(4, 5, 'KBH 619G', 20000, '2022-06-13');

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
  `product_image` varchar(60) NOT NULL,
  `unit_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `category_id`, `created_at`) VALUES
(1, 'Brake Pads', 'front brake pads', '', 6000, 6, 1, '2022-07-18 11:42:28'),
(2, 'Brake Disk', 'Quality Brake disk', '', 10000, 4, 1, '2022-07-18 11:42:28'),
(3, 'Oil filter', 'Toyota Air filter', '', 2000, 10, 2, '2022-07-18 11:42:28'),
(4, 'Oil', 'Synthetic oil', '', 1800, 30, 2, '2022-07-18 11:42:28'),
(5, 'Spark plugs', '4 plugs per pack', '', 1500, 8, 2, '2022-07-18 11:42:28'),
(6, 'Tyre', 'radius 16', '', 5500, 20, 3, '2022-07-18 11:42:28'),
(7, 'Battery', 'liquid acid battery', '', 12000, 2, 4, '2022-07-18 11:42:28'),
(8, 'Air filter', 'Car air filter', '', 1000, 10, 2, '2022-07-18 11:42:28'),
(9, 'Bettery 363', 'Acid battery', 'istockphoto-1308463452-1024x1024.jpg', 942, 8, 0, '2022-07-18 05:50:04');

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
-- Table structure for table `tbl_tasks`
--

CREATE TABLE `tbl_tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `miles_btwn_service` int(11) NOT NULL,
  `months_btwn_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tasks`
--

INSERT INTO `tbl_tasks` (`task_id`, `task_name`, `miles_btwn_service`, `months_btwn_service`) VALUES
(1, 'Air Filter Change', 10000, 6),
(2, 'Battery Replacement', 0, 48),
(3, 'Belt Replacement', 50000, 24),
(4, 'Brake Pad Replacement', 15000, 6),
(5, 'Bulb Replacement', 0, 0),
(6, 'Engine Coolant', 30000, 3),
(7, 'Fuel Filter Change', 25000, 12),
(8, 'Hose Replacement', 60000, 48),
(9, 'Oil & Filter Change', 3000, 3),
(10, 'Tire Alignment', 6000, 0),
(11, 'Tire Repair / Replacement', 65000, 48),
(12, 'Tire Rotation / Balance', 7500, 6),
(13, 'Transmission Fluid', 50000, 24),
(14, 'Windshield Wiper Replacement', 0, 6);

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
  `v_plate` varchar(11) NOT NULL,
  `v_make` varchar(25) NOT NULL,
  `v_model` varchar(25) NOT NULL,
  `v_chassis` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`v_id`, `v_plate`, `v_make`, `v_model`, `v_chassis`, `user_id`, `is_deleted`) VALUES
(1, 'KAF 443D', 'GMC', 'Sierra', '1GYS4KEFXCR891723', 1, 0),
(2, 'KBE 849C', 'Lexus', 'IS-F', '2LMDJ8JK7FB126800', 2, 0),
(3, 'KCG 764F', 'GMC', 'ACADIA', '1GYS4BEF6DR450804', 3, 0),
(4, 'KAB 897A', 'Pontiac', 'Firefly', 'JM1NC2NF7E0458762', 4, 0),
(5, 'KBH 619G', 'Dodge', 'Dakota Club', 'WAUA2AFD0DN161629', 5, 0),
(6, 'KBE 486H', 'Ford', 'Thunderbird', '3LNHL2GC4CR192822', 6, 0),
(7, 'KDA 756H', 'Jaguar', 'XJ', '3D7JV1EP5AG795731', 7, 0),
(8, 'KAC 369C', 'Audi', 'TT', 'SCFHDDATXEG601388', 8, 0),
(9, 'KBH 773H', 'Toyota', 'Matrix', 'WAUAH74F09N357518', 9, 0),
(10, 'KAC 774A', 'Ford', 'E150', 'WVWAN7AN1EE308636', 10, 0),
(11, 'KCF 498C', 'Aston Martin', 'DBS', 'WAUJC68E64A857502', 11, 0),
(12, 'KCG 309F', 'Mazda', 'B-Series', 'WBAVA37588N052669', 12, 0),
(13, 'KBH 543C', 'Saturn', 'L-Series', '1GYEC63N55R972892', 13, 0),
(14, 'KCD 988D', 'Land Rover', 'Range Rover', 'WBSBL93406P864400', 14, 0),
(15, 'KAG 794C', 'Pontiac', 'Grand Prix', 'JTDKN3DU4A0154690', 15, 0),
(16, 'KBD 356D', 'Pontiac', 'Firebird', '2HNYD28218H354488', 16, 0),
(17, 'KDF 295E', 'Mitsubishi', 'Eclipse', 'WA1CGAFE9FD353673', 17, 0),
(18, 'KDB 235F', 'Dodge', 'Ram 3500', '1G6AD5S30E0927362', 18, 0),
(19, 'KDD 038D', 'Subaru', 'Brat', 'WDDHF5GB7AA489228', 19, 0),
(20, 'KAF 686H', 'Lexus', 'RX Hybrid', '3D7JB1EP4BG405227', 20, 0),
(21, 'KBG 170B', 'Ford', 'F350', '19UYA42573A169836', 21, 0),
(22, 'KBC 621G', 'Ford', 'Econoline E250', '3VW1K7AJ7DM089595', 22, 0),
(23, 'KCA 023D', 'Mitsubishi', 'Montero', '4T1BK3DB4BU640123', 23, 0),
(24, 'KAH 956G', 'BMW', '3 Series', '5BZAF0AA8EN644480', 24, 0),
(25, 'KBH 652F', 'Buick', 'Riviera', '1G4GA5EC2AF950804', 25, 0),
(26, 'KCF 304A', 'Audi', 'S4', 'JN1CV6AP9AM645630', 26, 0),
(27, 'KDG 837E', 'Chevrolet', 'Colorado', '5TDDK3DC2CS424587', 27, 0),
(28, 'KDG 731H', 'Buick', 'Coachbuilder', '1D7RW5GK9BS327939', 28, 0),
(29, 'KCF 848C', 'Audi', 'S6', '1GYS4JEF6DR916791', 29, 0),
(30, 'KAC 991H', 'Cadillac', 'XLR-V', 'JH4DC54894S907151', 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `product_id` (`product_id`);

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
-- Indexes for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD PRIMARY KEY (`task_id`);

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
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
