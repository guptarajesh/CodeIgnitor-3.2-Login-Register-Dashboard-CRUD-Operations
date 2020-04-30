-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 11:23 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci30cb_wt_final_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `vehicles` text NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `servername` varchar(100) DEFAULT NULL,
  `communication` text NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A= Active D= Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fullname`, `email`, `phone`, `vehicles`, `username`, `servername`, `communication`, `address`, `created_at`, `updated_at`, `status`) VALUES
(9, 'DEEPAK SHARMA (NOIDA)', '', '+91 8527318181', 'UP-16 BT-9827\r\nUP-23 T-2973\r\nUP-23 T-7323\r\n', NULL, NULL, 'NIL', 'C- 102 Omicron 2nd Greater Noida', '2020-04-16 09:29:18', '2020-04-13 06:30:55', 'A'),
(10, 'SURENDRA KHALSA', '', '+91 9412273108', 'UP-81 AF-4013\r\nUP-81 AB-9420\r\nUP-87 9143\r\nUP-81 BT-5488\r\nUP-81 BT-5388\r\nUP-81 AV-4099\r\nUP-81 BP-1313\r\nUP-81 0013\r\nUP-81 CT-3820\r\nUP-81 CT-2537\r\nUP-13 T-2537\r\nUP-81 CT-1300\r\nUP-81 BT-5234\r\nUP-81 BT-5389\r\nUP-81 BJ-0013\r\nUP-81 BT-4496\r\nUP-81 CT-1313\r\n', NULL, NULL, 'NIL', 'ALIGARH', '2020-04-13 06:45:44', '2020-04-13 06:32:19', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-24 15:12:00'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-24 15:52:20'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-24 16:32:10'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-24 17:19:58'),
(5, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-24 17:50:46'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-25 12:59:34'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-26 11:58:15'),
(8, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-26 17:32:57'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-27 09:09:58'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-27 11:00:15'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-27 17:11:15'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-28 08:40:34'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '::1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-28 13:48:31'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '127.0.0.1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-29 17:13:57'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '127.0.0.1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-29 21:56:03'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Dilip Sharma\"}', '127.0.0.1', 'Firefox 75.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'Windows 10', '2020-04-30 13:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'Taxi Sharma', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2020-04-26 16:50:18'),
(2, 'manager@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2020-04-24 13:29:58'),
(3, 'employee@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 1, '2020-04-24 13:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicles`
--

CREATE TABLE `tbl_vehicles` (
  `id` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL COMMENT 'Foreign key from Customers table',
  `vehiclemake` varchar(100) NOT NULL,
  `vehiclemodel` varchar(100) NOT NULL,
  `vehiclemadeyear` varchar(100) NOT NULL,
  `vehicleregistrationnumber` varchar(100) NOT NULL,
  `vehiclenumber` varchar(100) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `gpskitinstalldate` date NOT NULL,
  `eminumber` varchar(100) NOT NULL,
  `gpskitmobilenumber` varchar(100) NOT NULL,
  `gpsdevicemodelnumber` varchar(100) NOT NULL,
  `erpportalassociation` varchar(100) NOT NULL,
  `erpportalusername` varchar(100) NOT NULL,
  `nextrenewaldate` date NOT NULL,
  `installbystaff` varchar(100) NOT NULL,
  `communication` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A=Active, D= Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vehicles`
--

INSERT INTO `tbl_vehicles` (`id`, `cid`, `vehiclemake`, `vehiclemodel`, `vehiclemadeyear`, `vehicleregistrationnumber`, `vehiclenumber`, `ownername`, `address`, `gpskitinstalldate`, `eminumber`, `gpskitmobilenumber`, `gpsdevicemodelnumber`, `erpportalassociation`, `erpportalusername`, `nextrenewaldate`, `installbystaff`, `communication`, `created_at`, `updated_at`, `status`) VALUES
(1, 15, 'Hyundai', 'Xcent', '2020', 'RGTRT202067890HGTFT', 'UP16FT 9450', 'Ajay Goyal', 'A 73 Sector 65 Noida UP', '2020-04-08', 'FTR3456OP90', '9873123490', 'GS23UI', 'WTGPS2020', 'up16ft9450', '2021-07-17', 'Sonu', 'GPS Setup', '2020-04-21 18:30:00', '2020-04-08 18:30:00', 'A'),
(3, 42, 'Hyundai', 'Santro', '2019', 'RT2020GT4590FT', 'UP14EE6887', 'Vinita Dwivedi', '              Noida', '2020-04-23', 'GTEMI3450989090D', '9876453422', 'WT45', 'WTRetra56', 'up14ee6887', '2021-08-26', 'Guddu', '              test by Guddu', '2020-04-28 09:36:08', '2020-04-28 11:13:44', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year_months`
--

CREATE TABLE `tbl_year_months` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `monthname` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1= Active 2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year_months`
--

INSERT INTO `tbl_year_months` (`id`, `year`, `monthname`, `startdate`, `enddate`, `created_at`, `updated_at`, `status`) VALUES
(1, 2020, 'January', '2020-01-01', '2020-01-31', '2020-04-04 10:15:29', '2020-04-04 10:15:29', 1),
(2, 2020, 'February', '2020-02-01', '2020-02-29', '2020-04-04 10:15:29', '2020-04-04 10:15:29', 1),
(3, 2020, 'March', '2020-03-01', '2020-03-31', '2020-04-04 10:16:15', '2020-04-04 10:16:15', 1),
(4, 2020, 'April', '2020-04-01', '2020-04-30', '2020-04-04 10:16:15', '2020-04-04 10:16:15', 1),
(5, 2020, 'May', '2020-05-01', '2020-05-31', '2020-04-10 17:55:13', '2020-04-10 17:55:13', 1),
(6, 2020, 'June', '2020-06-01', '2020-06-30', '2020-04-10 17:55:13', '2020-04-10 17:55:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);
ALTER TABLE `tbl_vehicles` ADD FULLTEXT KEY `vehiclenumber` (`vehiclenumber`);

--
-- Indexes for table `tbl_year_months`
--
ALTER TABLE `tbl_year_months`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_year_months`
--
ALTER TABLE `tbl_year_months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
