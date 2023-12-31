-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 11:41 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lagring_studio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `apt_id` int NOT NULL AUTO_INCREMENT,
  `schedule_id` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `service_id` int NOT NULL,
  `apt_occasion_type` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `apt_datetime` datetime NOT NULL,
  `apt_location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `apt_status` varchar(200) NOT NULL DEFAULT 'PENDING',
  `apt_remark` varchar(500) NOT NULL DEFAULT 'Please wait for approval.',
  `apt_status_date` datetime DEFAULT NULL,
  `apt_date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `apt_photographer` varchar(255) DEFAULT NULL,
  `apt_submit_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `walkin_fullname` varchar(255) DEFAULT NULL,
  `walkin_contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`apt_id`),
  KEY `service_id` (`service_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apt_id`, `schedule_id`, `user_id`, `service_id`, `apt_occasion_type`, `apt_datetime`, `apt_location`, `apt_status`, `apt_remark`, `apt_status_date`, `apt_date_added`, `apt_photographer`, `apt_submit_type`, `walkin_fullname`, `walkin_contact`) VALUES
(14, NULL, 15, 2023006, '', '1970-01-01 00:00:00', '', 'PENDING', 'Please wait for approval.', NULL, '2024-01-04 12:44:02', NULL, '', '0', NULL),
(22, NULL, 15, 2023002, '', '2024-01-18 23:59:59', '', 'DECLINED', 'ok', '2024-01-04 16:01:55', '2024-01-04 13:29:06', '', '', '0', NULL),
(23, NULL, 15, 2023003, '', '2024-01-18 00:00:00', '', 'APPROVED', '', '2024-01-04 15:59:43', '2024-01-04 13:29:19', 'CLYDE', '', '0', NULL),
(24, NULL, 15, 2023001, '', '2024-01-18 10:30:00', '', 'APPROVED', 'Please wait for approval.', NULL, '2024-01-04 13:43:13', NULL, '', '0', NULL),
(25, NULL, 15, 2023002, 'WEDDING', '2024-01-19 23:59:59', 'sdsdfsd', 'APPROVED', 'Please wait for approval.', NULL, '2024-01-04 13:43:37', NULL, '', '0', NULL),
(26, NULL, 15, 2023001, '', '2024-01-18 17:00:00', '', 'APPROVED', 'N/A', '2024-01-04 16:32:20', '2024-01-04 13:47:46', 'JAYSON', '', '0', NULL),
(27, 'LS2024H5V0U', 15, 2023003, '', '2024-01-20 11:30:00', '', 'PENDING', 'Please wait for approval.', NULL, '2024-01-04 16:13:56', NULL, '', '0', NULL),
(28, 'LS2024Y7D5F', 15, 2023004, 'N/A', '2024-01-20 11:00:00', 'N/A', 'PENDING', 'Please wait for approval.', NULL, '2024-01-04 16:52:29', NULL, '', '0', NULL),
(29, 'LS2024O9Y7X', 15, 2023008, 'N/A', '2024-01-20 13:00:00', 'N/A', 'PENDING', 'Please wait for approval.', NULL, '2024-01-04 16:54:19', NULL, '', '0', NULL),
(30, 'LS2024A7R1K', 15, 2023006, 'N/A', '2024-01-20 11:30:00', 'N/A', 'PENDING', 'Please wait for approval.', NULL, '2024-01-04 16:57:48', NULL, '', '0', NULL),
(31, 'LS2024W9N0W', 2, 2023007, 'N/A', '2024-01-17 12:30:00', 'N/A', 'APPROVED', 'Please wait for approval.', NULL, '2024-01-04 19:43:10', NULL, 'WALK-IN', 'Clyde Solas', '09271234570');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

DROP TABLE IF EXISTS `photographer`;
CREATE TABLE IF NOT EXISTS `photographer` (
  `photographer_id` int NOT NULL AUTO_INCREMENT,
  `photographer_fullname` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photographer_status` varchar(255) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`photographer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`photographer_id`, `photographer_fullname`, `date_added`, `photographer_status`) VALUES
(1, 'JAYSON', '2024-01-04 14:44:06', 'ACTIVE'),
(2, 'FAITH', '2024-01-04 14:44:06', 'ACTIVE'),
(3, 'CLYDE', '2024-01-04 14:44:06', 'ACTIVE'),
(4, 'RIAN', '2024-01-04 14:44:07', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `service_price` int DEFAULT NULL,
  `service_date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `archived_flag` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2023013 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_image`, `service_description`, `service_type`, `service_price`, `service_date_added`, `archived_flag`) VALUES
(2023001, 'PORTRAITS(WHOLE/HALF BODY)', '8818865565693399cb471c4eefc1dfe3.jpg', '4R(2PCS)', 'SMALL', 120, '2023-11-29 18:58:11', 1),
(2023002, 'GRADUATION PICTURE', '8818865565693399cb471c4eefc1dfe3.jpg', '8R(1PC) 3R(1PC) 2R(4PCS)', 'BIG', 300, '2023-11-29 19:01:31', 1),
(2023003, 'FAMILY PACKAGE A', '8818865565693399cb471c4eefc1dfe3.jpg', '8R(1PC) 3R(1PC) 2R(4PCS)', 'SMALL', 300, '2023-11-29 19:04:00', 1),
(2023004, 'Family Package B', '2023004_familypackageb.jpg', '8r(2pcs) 3r(3pcs) 2r(4pcs)', 'SMALL', 350, '2023-11-29 19:05:42', 1),
(2023005, 'Digital Package', '2023005_digitalpackage.jpg', 'Unlimited Shots,\r\n8x12(40pcs) w/ layout & album,\r\nVideo Coverage 2pcs flash-drives,\r\nFree 1pc 16x20 Blow up pic w/ frame plus 1 free signature frame ', 'SMALL', NULL, '2023-11-29 19:07:48', 1),
(2023006, 'Special Package', '2023006_specialpackage.jpg', 'Unlimited Shots,\r\n5r(100pcs) w/ layout & Album,\r\nVideo Coverage 2pcs flash-drives,\r\nFREE 11x14 blow up pic w/ frame and signature frame(1pc)', 'SMALL', NULL, '2023-11-29 19:21:10', 1),
(2023007, 'Regular Package', '2023007_regularpackage.jpg', 'Unlimited Shots,\r\n5r(80pcs) & album,\r\nVideo coverage 1 flash-drive', 'SMALL', NULL, '2023-11-29 19:28:11', 1),
(2023008, 'Budget Package', '2023008_budgetpackage.jpg', 'Unlimited Shots,\r\n5r(100pcs)', 'SMALL', NULL, '2023-11-29 19:30:35', 1),
(2023009, 'Hire a Photographer', '2023009_photo_videopackage.jpg', 'Photo only', 'BIG', NULL, '2023-11-29 19:34:15', 1),
(2023010, 'Hire a Video Grapher', '2023009_photo_videopackage.jpg', 'Video Only', 'BIG', NULL, '2023-11-29 19:35:26', 1),
(2023012, '23423', 'soundsystem.jpg', '324234', 'BIG', 3, '2024-01-04 20:18:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact` bigint NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `middlename`, `surname`, `registration_date`, `contact`, `email`, `password`, `role`) VALUES
(2, 'Admin', 'Mname', 'Surname', '2023-10-22 16:45:44', 9271234570, 'Lagringstudio1@gmail.com', '$2y$10$OMyazDWKGNERSJW6KIfPIuZG1/ajR/tnen0g5q/zMoOm4cteM4EjK', 'ADMIN'),
(15, 'fname', 'mname', 'sname', '2023-11-28 23:48:10', 9271234570, 'clyde.solas@cvsu.edu.ph', '$2y$10$AycJciKiIN1xK6pxtFpXpeT8iQAMIysmH6W7MZ1aWWUwEZ0QyZttK', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

DROP TABLE IF EXISTS `website`;
CREATE TABLE IF NOT EXISTS `website` (
  `website_content_id` int NOT NULL AUTO_INCREMENT,
  `heading_title` varchar(200) NOT NULL,
  `heading_paragraph` varchar(500) NOT NULL,
  `contact` bigint NOT NULL,
  `email` varchar(100) NOT NULL,
  `services_paragraph` varchar(200) NOT NULL,
  `about_paragraph` varchar(1000) NOT NULL,
  `heading_image` varchar(100) NOT NULL,
  PRIMARY KEY (`website_content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`website_content_id`, `heading_title`, `heading_paragraph`, `contact`, `email`, `services_paragraph`, `about_paragraph`, `heading_image`) VALUES
(1, 'Capture every moment with us', '', 961399203, 'lagringstudio@gmail.com', 'The following are our budget friendly but quality services. Contact us for more details. Book now!', 'ewwrwew', ''),
(2, '', ' At Lagring studio, we believe in the power of creativity, technology, and imagination. We are thrilled to introduce our cutting-edge digital studio, where we transform ideas into captivating digital experiences. Allow us to join you in your every adventure and milestones in life and together, lets treasure every moment.', 0, '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
