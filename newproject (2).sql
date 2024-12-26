-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2024 at 07:35 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

DROP TABLE IF EXISTS `db_admin`;
CREATE TABLE IF NOT EXISTS `db_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int NOT NULL,
  `status` int NOT NULL,
  `slug` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reporting_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`id`, `name`, `username`, `password`, `type`, `status`, `slug`, `created_at`, `reporting_by`) VALUES
(1, 'vivek', 'vivek', 'vivek@123', 1, 1, '1-vivek', '2024-12-16 10:16:19', NULL),
(2, 'DG', 'bipard', 'bipard123', 3, 1, '2-dg', '2024-12-16 10:18:02', 0),
(3, 'cc1', 'cc1', 'cc1', 2, 1, '3-cc1', '2024-12-16 11:46:51', 0),
(4, 'shashank', 'shashank', 'shashank@123', 5, 1, '4-shashank', '2024-12-16 11:47:43', 3),
(5, 'dipak ', 'dipak', 'dipak@123', 6, 1, '5-dipak', '2024-12-16 11:56:12', 3),
(6, 'training1', 'training1', 'training1', 5, 1, '6-training1', '2024-12-17 06:27:31', 3),
(7, 'cc2', 'cc2', 'cc2', 2, 1, '7-cc2', '2024-12-19 06:59:47', 0),
(8, 'hos1', 'hos1', 'hos1', 9, 1, '9-hos1', '2024-12-17 06:27:31', 3),
(9, 'hos2', 'hos2', 'hos2', 9, 1, '9-hos2', '2024-12-23 07:10:36', 0),
(10, 'mess2', 'mess2', 'mess2', 6, 1, '10-mess2', '2024-12-23 07:43:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_admin_type`
--

DROP TABLE IF EXISTS `db_admin_type`;
CREATE TABLE IF NOT EXISTS `db_admin_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_admin_type`
--

INSERT INTO `db_admin_type` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'course_co-ordinator'),
(3, 'dg'),
(4, 'adg'),
(5, 'training_admin'),
(6, 'mess_admin'),
(9, 'hostel_admin');

-- --------------------------------------------------------

--
-- Table structure for table `db_column`
--

DROP TABLE IF EXISTS `db_column`;
CREATE TABLE IF NOT EXISTS `db_column` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `validation` longtext NOT NULL,
  `col` int NOT NULL,
  `position` int NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `min` int NOT NULL,
  `max` int NOT NULL,
  `option_table` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `options` longtext NOT NULL,
  `depend_table` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `depend_column` varchar(100) NOT NULL,
  `list` int NOT NULL,
  `slug` varchar(200) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_column`
--

INSERT INTO `db_column` (`id`, `name`, `table_name`, `status`, `validation`, `col`, `position`, `type`, `min`, `max`, `option_table`, `options`, `depend_table`, `depend_column`, `list`, `slug`, `remark`) VALUES
(20, 'name', 'db_setting', 1, '', 6, 1, 'text', 0, 0, '', '', '', '', 1, '20-name', ''),
(21, 'logo', 'db_setting', 1, '', 3, 2, 'image', 0, 0, '', '', '', '', 1, '21-logo', ''),
(22, 'footernote', 'db_setting', 1, '', 12, 6, 'textfield', 0, 0, '', '', '', '', 1, '22-footernote', ''),
(23, 'copyright', 'db_setting', 1, '', 6, 4, 'text', 0, 0, '', '', '', '', 1, '23-copyright', ''),
(24, 'technology_partner', 'db_setting', 1, '', 6, 5, 'text', 0, 0, '', '', '', '', 1, '24-technology_partner', ''),
(25, 'favicon', 'db_setting', 1, '', 3, 3, 'image', 0, 0, '', '', '', '', 1, '25-favicon', ''),
(95, 'admin_name', 'db_training_daily_report', 1, '[\"required\"]', 6, 6, 'text', 0, 100, '', '', '', '', 1, '', ''),
(96, 'mts_name', 'db_training_daily_report', 1, '[\"required\"]', 6, 6, 'text', 0, 100, '', '', '', '', 1, '', ''),
(97, 'reporting_by', 'db_admin', 1, '[\"required\"]', 6, 6, 'select', 0, 0, 'db_admin', '', '', '', 1, '', ''),
(85, 'name', 'db_mess_daily_report', 1, '[\"required\"]', 6, 1, 'text', 0, 100, '', '', '', '', 1, '', ''),
(86, 'created_at', 'db_mess_daily_report', 0, '[\"required\"]', 6, 1, 'date', 0, 100, '', '', '', '', 1, '', ''),
(87, 'question', 'db_question', 1, '[\"required\"]', 12, 1, 'text', 0, 250, '', '', '', '', 1, '', ''),
(89, 'type', 'db_question', 1, '[\"required\"]', 6, 2, 'select', 0, 0, 'db_admin_type', '', '', '', 1, '', ''),
(90, 'name', 'db_training_daily_report', 1, '[\"required\"]', 6, 1, 'text', 0, 100, '', '', '', '', 1, '', ''),
(91, 'date', 'db_training_daily_report', 1, '[\"required\"]', 6, 2, 'text', 0, 100, '', '', '', '', 1, '', ''),
(92, 'training_hall', 'db_training_daily_report', 1, '[\"required\"]', 6, 3, 'text', 0, 100, '', '', '', '', 1, '', ''),
(93, 'training_period', 'db_training_daily_report', 1, '[\"required\"]', 6, 4, 'text', 0, 100, '', '', '', '', 1, '', ''),
(94, 'course_co-ordinator', 'db_training_daily_report', 1, '[\"required\"]', 6, 5, 'text', 0, 100, '', '', '', '', 1, '', ''),
(65, 'table', 'db_permission', 1, '[\"required\"]', 4, 3, 'select', 0, 0, 'db_table', '', '', '', 1, '', ''),
(66, 'status', 'db_permission', 1, '[\"required\"]', 4, 4, 'select', 0, 0, 'static', '[\"0\", \"1\"]', '', '', 1, '', ''),
(64, 'admin_type', 'db_permission', 1, '[\"required\"]', 4, 2, 'select', 0, 0, 'db_admin_type', '', '', '', 1, '', ''),
(62, 'status', 'db_admin', 1, '[\"required\"]', 6, 5, 'select', 0, 100, 'static', '[\"0\",\"1\"]', '', '', 1, '', ''),
(61, 'type', 'db_admin', 1, '[\"required\"]', 6, 2, 'select', 0, 100, 'db_admin_type', '', '', '', 1, '', ''),
(60, 'password', 'db_admin', 1, '[\"required\"]', 6, 4, 'text', 0, 100, '', '', '', '', 1, '', ''),
(59, 'username', 'db_admin', 1, '[\"required\"]', 6, 3, 'text', 0, 150, '', '', '', '', 1, '', ''),
(58, 'name', 'db_admin', 1, '[\"required\"]', 6, 1, 'text', 0, 100, '', '', '', '', 1, '', 'Course/Hostel/Mess/CC');

-- --------------------------------------------------------

--
-- Table structure for table `db_column_structure`
--

DROP TABLE IF EXISTS `db_column_structure`;
CREATE TABLE IF NOT EXISTS `db_column_structure` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `validation` longtext NOT NULL,
  `col` int NOT NULL,
  `position` int NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `min` int NOT NULL,
  `max` int NOT NULL,
  `option_table` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `options` longtext NOT NULL,
  `depend_table` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `depend_column` varchar(100) NOT NULL,
  `list` int NOT NULL,
  `width` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `slug` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_column_structure`
--

INSERT INTO `db_column_structure` (`id`, `name`, `table_name`, `status`, `validation`, `col`, `position`, `type`, `min`, `max`, `option_table`, `options`, `depend_table`, `depend_column`, `list`, `width`, `height`, `slug`) VALUES
(1, 'name', 'db_table', 1, '', 6, 1, 'text', 0, 0, '', '', '', '', 1, '', '', ''),
(2, 'parant_table', 'db_table', 1, '', 4, 3, 'select', 0, 0, 'db_table', '', '', '', 0, '', '', ''),
(3, 'label', 'db_table', 1, '', 6, 2, 'text', 0, 0, '', '', '', '', 1, '', '', ''),
(4, 'status', 'db_table', 1, '', 4, 4, 'select', 0, 0, 'static', '[\"0\",\"1\"]', '', '', 0, '', '', ''),
(5, 'position', 'db_table', 1, '', 4, 5, 'number', 0, 0, '', '', '', '', 1, '', '', ''),
(6, 'position', 'db_column', 1, '', 4, 5, 'number', 0, 0, '', '', '', '', 1, '', '', ''),
(7, 'name', 'db_column', 1, '', 4, 1, 'text', 0, 0, '', '', '', '', 1, '', '', ''),
(8, 'table_name', 'db_column', 1, '', 4, 2, 'text', 0, 0, '', '', '', '', 1, '', '', ''),
(9, 'status', 'db_column', 1, '', 4, 8, 'select', 0, 0, 'static', '[\"0\",\"1\"]', '', '', 0, '', '', ''),
(10, 'validation', 'db_column', 1, '', 4, 7, 'multiple_select', 0, 0, 'static', '[\"email\",\"phone\",\"required\"]', '', '', 0, '', '', ''),
(11, 'col', 'db_column', 1, '', 4, 4, 'select', 0, 0, 'static', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '', '', 0, '', '', ''),
(12, 'type', 'db_column', 1, '', 4, 3, 'select', 0, 0, 'static', '[\"select\",\"text\",\"number\",\"image\",\"multiple_image\",\"year\",\"month\",\"multiple_select\",\"textfield\",\"texteditor\", \"url\"]', '', '', 0, '', '', ''),
(13, 'min', 'db_column', 1, '', 4, 5, 'number', 0, 0, '', '', '', '', 0, '', '', ''),
(14, 'max', 'db_column', 1, '', 4, 6, 'number', 0, 0, '', '', '', '', 0, '', '', ''),
(15, 'option_table', 'db_column', 1, '', 4, 10, 'text', 0, 0, '', '', '', '', 0, '', '', ''),
(16, 'options', 'db_column', 1, '', 4, 11, 'text', 0, 0, '', '', '', '', 0, '', '', ''),
(17, 'depend_table', 'db_column', 1, '', 4, 12, 'text', 0, 0, '', '', '', '', 0, '', '', ''),
(18, 'depend_column', 'db_column', 1, '', 4, 13, 'text', 0, 0, '', '', '', '', 0, '', '', ''),
(19, 'list', 'db_column', 1, '', 4, 9, 'select', 0, 0, 'static', '[\"0\",\"1\"]', '', '', 0, '', '', ''),
(86, 'user', 'db_table', 1, '', 4, 5, 'select', 0, 0, 'db_admin', '', '', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_daily_night_watch_report`
--

DROP TABLE IF EXISTS `db_daily_night_watch_report`;
CREATE TABLE IF NOT EXISTS `db_daily_night_watch_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int NOT NULL,
  `co_ordinator` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` int NOT NULL,
  `ans` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_daily_night_watch_report`
--

INSERT INTO `db_daily_night_watch_report` (`id`, `created_by`, `co_ordinator`, `name`, `slug`, `created_at`, `question`, `ans`, `remark`, `date`) VALUES
(1, 3, 0, 'cc1', 'cc1-1734933197', '2024-12-23 05:53:17', 75, 1, 'fd', '0000-00-00'),
(2, 1, 0, 'vivek', 'vivek-1735125819', '2024-12-25 11:23:39', 75, 2, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `db_hostel_admin_profile`
--

DROP TABLE IF EXISTS `db_hostel_admin_profile`;
CREATE TABLE IF NOT EXISTS `db_hostel_admin_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_hostel_admin_profile`
--

INSERT INTO `db_hostel_admin_profile` (`id`, `userId`, `name`, `admin_name`, `create_at`, `slug`) VALUES
(1, 8, 'hos1', 'asds', '2024-12-19 07:58:26', '1-hos1');

-- --------------------------------------------------------

--
-- Table structure for table `db_hostel_daily_report`
--

DROP TABLE IF EXISTS `db_hostel_daily_report`;
CREATE TABLE IF NOT EXISTS `db_hostel_daily_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room_no` int NOT NULL,
  `bed_occupied` int NOT NULL,
  `bed_vacant` int NOT NULL,
  `resident_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `room_cleaning` int NOT NULL,
  `bed_making` int NOT NULL,
  `toilet_cleaning` int NOT NULL,
  `electricty_working` int NOT NULL,
  `remarks` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_hostel_daily_report`
--

INSERT INTO `db_hostel_daily_report` (`id`, `created_by`, `created_at`, `slug`, `room_no`, `bed_occupied`, `bed_vacant`, `resident_name`, `room_cleaning`, `bed_making`, `toilet_cleaning`, `electricty_working`, `remarks`) VALUES
(3, 8, '2024-12-22 05:13:35', '3-511734761847', 101, 3, 2, 'sdssd', 1, 1, 1, 2, 'acdcsvs d gdscdscds'),
(4, 8, '2024-12-21 06:23:32', '4-84', 102, 3, 2, 'scdscv', 1, 1, 2, 1, 'sdvdsd'),
(5, 8, '2024-12-21 06:24:09', '5-95', 101, 2, 3, 'sdssd', 1, 1, 1, 2, 'scdscds');

-- --------------------------------------------------------

--
-- Table structure for table `db_hostel_inspection_report`
--

DROP TABLE IF EXISTS `db_hostel_inspection_report`;
CREATE TABLE IF NOT EXISTS `db_hostel_inspection_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_id` int NOT NULL,
  `hostel_id` int NOT NULL,
  `created_by` int NOT NULL,
  `co_ordinator` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` int NOT NULL,
  `ans` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_hostel_inspection_report`
--

INSERT INTO `db_hostel_inspection_report` (`id`, `c_id`, `hostel_id`, `created_by`, `co_ordinator`, `name`, `slug`, `created_at`, `question`, `ans`, `remark`, `date`) VALUES
(6, 8, 0, 1, 0, 'vivek', 'vivek-1735196184', '2024-12-25 06:56:24', 57, 2, '', '0000-00-00'),
(7, 8, 0, 1, 0, 'vivek', 'vivek-1735196186', '2024-12-25 06:56:26', 58, 1, '', '0000-00-00'),
(3, 9, 0, 1, 0, 'vivek', 'vivek-1735195578', '2024-12-25 05:11:09', 56, 2, '', '0000-00-00'),
(4, 8, 0, 1, 0, 'vivek', 'vivek-1735189887', '2024-12-25 05:11:27', 56, 1, '', '0000-00-00'),
(5, 8, 0, 1, 0, 'vivek', 'vivek-1735189902', '2024-12-25 05:11:42', 55, 2, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `db_mess_admin_profile`
--

DROP TABLE IF EXISTS `db_mess_admin_profile`;
CREATE TABLE IF NOT EXISTS `db_mess_admin_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `headCook` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_mess_admin_profile`
--

INSERT INTO `db_mess_admin_profile` (`id`, `userId`, `name`, `agency`, `headCook`, `slug`, `create_at`, `admin_name`) VALUES
(1, 5, 'dipak ', 'Deepak', 'Head Cook', '1-dipak', '2024-12-19 06:39:32', 'Deepak'),
(2, 10, 'mess2', 'mess agency name', 'Head Cook2', '2-mess2', '2024-12-23 07:45:07', 'mess admin');

-- --------------------------------------------------------

--
-- Table structure for table `db_mess_daily_report`
--

DROP TABLE IF EXISTS `db_mess_daily_report`;
CREATE TABLE IF NOT EXISTS `db_mess_daily_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int NOT NULL,
  `co_ordinator` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` int NOT NULL,
  `ans` int NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_mess_daily_report`
--

INSERT INTO `db_mess_daily_report` (`id`, `created_by`, `co_ordinator`, `name`, `slug`, `created_at`, `question`, `ans`, `remark`, `date`) VALUES
(1, 5, 0, 'dipak ', 'dipak -1734593745', '2024-12-19 07:35:45', 1, 1, 'qwq', '0000-00-00'),
(2, 5, 0, 'dipak ', 'dipak -1734670724', '2024-12-20 04:58:44', 1, 1, 'rfr', '0000-00-00'),
(3, 5, 0, 'dipak ', 'dipak -1734670729', '2024-12-20 04:58:49', 2, 1, 'dfr', '0000-00-00'),
(4, 5, 0, 'dipak ', 'dipak -1734670747', '2024-12-20 04:59:07', 3, 2, '', '0000-00-00'),
(5, 10, 0, 'mess2', 'mess2-1734939921', '2024-12-23 07:45:21', 1, 1, 'asa', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `db_mess_inspection_report`
--

DROP TABLE IF EXISTS `db_mess_inspection_report`;
CREATE TABLE IF NOT EXISTS `db_mess_inspection_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_id` int NOT NULL,
  `mess_id` int NOT NULL,
  `created_by` int NOT NULL,
  `co_ordinator` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` int NOT NULL,
  `ans` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_mess_inspection_report`
--

INSERT INTO `db_mess_inspection_report` (`id`, `c_id`, `mess_id`, `created_by`, `co_ordinator`, `name`, `slug`, `created_at`, `question`, `ans`, `remark`, `date`) VALUES
(5, 10, 0, 3, 0, 'cc1', 'cc1-1735196292', '2024-12-26 06:58:12', 55, 1, '', '0000-00-00'),
(6, 10, 0, 3, 0, 'cc1', 'cc1-1735196302', '2024-12-26 06:58:22', 57, 2, '', '0000-00-00'),
(3, 10, 0, 1, 0, 'vivek', 'vivek-1735189804', '2024-12-26 05:10:04', 56, 1, 'qq', '0000-00-00'),
(4, 5, 0, 1, 0, 'vivek', 'vivek-1735189932', '2024-12-26 05:12:09', 56, 2, '', '0000-00-00'),
(7, 5, 0, 3, 0, 'cc1', 'cc1-1735196320', '2024-12-26 06:58:40', 55, 2, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `db_permission`
--

DROP TABLE IF EXISTS `db_permission`;
CREATE TABLE IF NOT EXISTS `db_permission` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` int NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_type` int DEFAULT NULL,
  `table` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_permission`
--

INSERT INTO `db_permission` (`id`, `name`, `slug`, `created_at`, `admin_type`, `table`, `status`) VALUES
(1, 0, '1-49', '2024-12-16 10:54:11', 1, 65, 1),
(2, 0, '2-3', '2024-12-16 10:54:35', 1, 63, 1),
(3, 0, '3-5', '2024-12-16 10:55:13', 1, 62, 1),
(4, 0, '4-22', '2024-12-16 10:55:33', 1, 61, 1),
(5, 0, '5-39', '2024-12-16 10:56:45', 1, 60, 1),
(6, 0, '6-33', '2024-12-16 10:57:13', 1, 58, 1),
(7, 0, '7-32', '2024-12-16 10:58:04', 1, 55, 1),
(8, 0, '8-37', '2024-12-16 10:58:41', 1, 54, 1),
(9, 0, '9-75', '2024-12-16 10:59:04', 1, 50, 1),
(10, 0, '10-98', '2024-12-16 10:59:30', 1, 59, 1),
(11, 0, '11-89', '2024-12-16 11:49:18', 5, 60, 1),
(12, 0, '12-35', '2024-12-16 12:01:24', 2, 63, 1),
(13, 0, '13-811734350600', '2024-12-16 12:01:44', 2, 61, 1),
(14, 0, '14-37', '2024-12-16 12:01:59', 2, 62, 1),
(15, 0, '15-78', '2024-12-17 06:30:13', 5, 66, 1),
(18, 0, '18-63', '2024-12-18 06:28:36', 3, 66, 1),
(28, 0, '28-90', '2024-12-19 06:14:37', 6, 68, 1),
(19, 0, '19-48', '2024-12-18 06:28:47', 3, 65, 1),
(20, 0, '20-80', '2024-12-18 06:29:00', 3, 63, 1),
(21, 0, '21-3', '2024-12-18 06:29:11', 3, 62, 1),
(22, 0, '22-52', '2024-12-18 06:29:33', 3, 61, 1),
(23, 0, '23-42', '2024-12-18 06:29:44', 3, 60, 1),
(26, 0, '26-28', '2024-12-19 05:51:22', 9, 65, 1),
(25, 0, '25-64', '2024-12-18 06:30:24', 3, 58, 1),
(27, 0, '27-78', '2024-12-19 05:53:36', 6, 58, 1),
(29, 0, '29-30', '2024-12-19 07:50:00', 9, 69, 1),
(30, 0, '30-16', '2024-12-19 09:44:37', 2, 60, 1),
(31, 0, '31-88', '2024-12-19 11:51:58', 2, 58, 1),
(32, 0, '32-4', '2024-12-19 11:52:17', 2, 65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_question`
--

DROP TABLE IF EXISTS `db_question`;
CREATE TABLE IF NOT EXISTS `db_question` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `input_type` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `type` int NOT NULL,
  `type2` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_question`
--

INSERT INTO `db_question` (`id`, `question`, `slug`, `created_at`, `input_type`, `type`, `type2`) VALUES
(1, 'Staff Present for Morning Bed Tea', '1-87', '0000-00-00 00:00:00', 'text', 6, 0),
(2, 'Morning Tea Served', '2-65', '0000-00-00 00:00:00', 'text', 6, 0),
(3, 'Nimbu Pani / other served to trainees', '3-0', '0000-00-00 00:00:00', 'text', 6, 0),
(4, 'Cleanliness of kitchen Area', '4-95', '0000-00-00 00:00:00', 'text', 6, 0),
(5, 'Cleanliness of Serving Area', '5-61', '0000-00-00 00:00:00', 'text', 6, 0),
(6, 'Cleanliness of Dinning Area', '6-68', '0000-00-00 00:00:00', 'text', 6, 0),
(7, 'Breakfast as per Menu', '7-32', '0000-00-00 00:00:00', 'text', 6, 0),
(8, 'Mess Staff Present as per Morning Roster', '8-50', '0000-00-00 00:00:00', 'text', 6, 0),
(9, 'Mess staff present in proper uniform', '9-16', '0000-00-00 00:00:00', 'text', 6, 0),
(10, 'Cleanliness of store Satisfactory', '10-68', '0000-00-00 00:00:00', 'text', 6, 0),
(11, 'Store items upkeeping as per guideline', '11-22', '0000-00-00 00:00:00', 'text', 6, 0),
(12, 'All packed edable itms within Expiry Date', '12-46', '0000-00-00 00:00:00', 'text', 6, 0),
(13, 'Common Bathroom Cleanliness', '13-9', '0000-00-00 00:00:00', 'text', 6, 0),
(14, 'Electrical Items functioning', '14-12', '0000-00-00 00:00:00', 'text', 6, 0),
(15, 'Lunch as per Menu', '15-16', '0000-00-00 00:00:00', 'text', 6, 0),
(16, 'No. of trainees took the lunch (Training wise Lunch):', '16-23', '0000-00-00 00:00:00', 'textarea', 6, 0),
(17, 'Menu Items timely filling up', '17-15', '0000-00-00 00:00:00', 'text', 6, 0),
(18, 'All trainees took their lunch.', '18-46', '0000-00-00 00:00:00', 'text', 6, 0),
(19, 'After Lunch Dinning Area Cleanliness', '19-20', '0000-00-00 00:00:00', 'text', 6, 0),
(20, 'No. of Mess Staff Present in Evening Roster', '20-47', '0000-00-00 00:00:00', 'text', 6, 0),
(21, 'Dineer as per Menu served', '21-98', '0000-00-00 00:00:00', 'text', 6, 0),
(22, 'Trainees feedback taken', '22-23', '0000-00-00 00:00:00', 'text', 6, 0),
(23, 'Utensils & Plates properly cleaned', '23-11', '0000-00-00 00:00:00', 'text', 6, 0),
(24, 'Evening Mess Closer Time', '24-82', '0000-00-00 00:00:00', 'text', 6, 0),
(25, 'All mess staff vacated the campus', '25-18', '0000-00-00 00:00:00', 'text', 6, 0),
(26, 'Cleanliness around the mess satisfactory', '26-85', '0000-00-00 00:00:00', 'text', 6, 0),
(27, 'Attendance of Session-1', '27-453355', '2024-12-13 06:45:04', 'number', 5, 0),
(28, 'Attendance of Session-2', '28-453434', '2024-12-13 06:45:04', 'number', 5, 0),
(29, 'Attendance of Session-3', '29-4623234', '2024-12-13 06:47:37', 'number', 5, 0),
(30, 'Attandence of Session-4', '30-951734072530', '2024-12-13 06:48:41', 'number', 5, 0),
(31, 'Attendance of Session-5', '31-4623223', '2024-12-13 06:47:37', 'number', 5, 0),
(32, 'Topic covered/Faculty T1', '32-58', '2024-12-13 06:52:58', 'text', 5, 0),
(33, 'Topic covered/Faculty T2', '33-97', '2024-12-13 06:53:12', 'text', 5, 0),
(34, 'Topic covered/Faculty T3', '34-89', '2024-12-13 06:53:26', 'text', 5, 0),
(35, 'Topic covered/Faculty T4', '35-65', '2024-12-13 06:53:37', 'text', 5, 0),
(36, 'Topic covered/Faculty T5', '36-14', '2024-12-13 06:53:55', 'text', 5, 0),
(37, 'Any Sudden change in Topic/RP', '37-42', '2024-12-13 06:54:41', 'textarea', 5, 0),
(38, 'Indiscipline issue Session -1', '38-20', '2024-12-13 06:55:10', 'text', 5, 0),
(39, 'Indiscipline issue Session -2', '39-93', '2024-12-13 06:55:20', 'text', 5, 0),
(40, 'Indiscipline issue Session -3', '40-3', '2024-12-13 06:55:29', 'text', 5, 0),
(41, 'Indiscipline issue Session -4', '41-90', '2024-12-13 06:55:40', 'text', 5, 0),
(42, 'Indiscipline issue Session -5', '42-42', '2024-12-13 06:55:52', 'text', 5, 0),
(43, 'Logistic issue ', '43-78', '2024-12-13 06:56:39', 'textarea', 5, 0),
(48, 'PPT prepration', '48-58', '2024-12-13 07:00:17', 'text', 5, 0),
(49, 'Next Day Scheduled Session RP Confirmetion Session-1', '49-5', '2024-12-13 07:01:10', 'text', 5, 0),
(50, 'Next Day Scheduled Session RP Confirmetion Session-2', '50-42', '2024-12-13 07:01:19', 'text', 5, 0),
(51, 'Next Day Scheduled Session RP Confirmetion Session-3', '51-41', '2024-12-13 07:01:34', 'text', 5, 0),
(52, 'Next Day Scheduled Session RP Confirmetion Session-4', '52-91', '2024-12-13 07:01:46', 'text', 5, 0),
(53, 'Next Day Scheduled Session RP Confirmetion Session-5', '53-47', '2024-12-13 07:01:55', 'text', 5, 0),
(56, 'मेस के डाईनिंग एरीया की सफाई संतोषजनक', '56-88', '2024-12-14 09:09:51', 'text', 2, 1),
(55, 'मेस का किचन एरीया की सफाई संतोषजनक', '55-22', '2024-12-14 09:09:33', 'text', 2, 1),
(57, 'मेस का कॉमन बाथरूम एरीया की सफाई संतोषजनक', '57-13', '2024-12-14 09:12:32', 'text', 2, 1),
(58, 'सभी मेस स्टाफ निर्धारित वर्दी में कार्यरत', '58-48', '2024-12-14 09:13:00', 'text', 2, 1),
(59, 'भोजन निर्धारित मेनू के अनुसार उपलब्ध', '59-26', '2024-12-14 09:22:55', 'text', 2, 1),
(60, 'मेस में मख्खी मच्छर की मौजूदगी  नहीं', '60-351734344662', '2024-12-14 09:25:36', 'text', 2, 1),
(61, 'मेस के सभी इलेक्ट्रीकल उपकरण क्रियाशील', '61-38', '2024-12-14 09:26:03', 'text', 2, 1),
(62, 'प्रशिक्षुओं के शिकायत निवारण में मेस की तत्परता', '62-29', '2024-12-14 09:26:23', 'text', 2, 1),
(63, 'विहित तरीके से सामग्री का मेस भंडार में रख-रखाव', '63-99', '2024-12-14 09:26:38', 'text', 2, 1),
(64, 'भोजन गुणवत्ता के संबंध में टिप्प्णी:-', '64-10', '2024-12-14 09:28:54', 'text', 2, 1),
(65, 'हॉस्टल के कमरों की सफाई संतोषजनक', '65-40', '2024-12-14 10:22:11', 'text', 2, 2),
(66, 'कमरों के कमोड, वासबेसीन, नल की सफाई संतोषजनक', '66-24', '2024-12-14 10:22:32', 'text', 2, 2),
(67, 'हॉस्टल के कॉमन बाथरूम एरीया की सफाई संतोषजनक', '67-22', '2024-12-14 10:27:38', 'text', 2, 2),
(68, 'कमरों में आवश्यक सामग्री (Handwash, Towel, Mosquieto refill, Condiments) की आपूर्ति / उपलब्धता संतोषजनक', '68-54', '2024-12-14 10:42:07', 'text', 2, 2),
(69, 'सभी हाकीपिंग स्टाफ / सफाई कर्मी निर्धारित वर्दी में कार्यरत', '69-14', '2024-12-14 10:42:24', 'text', 2, 2),
(70, 'कॉरीडोर की संतोषजनक साफ-सफाई संतोषजनक', '70-65', '2024-12-14 10:42:40', 'text', 2, 2),
(71, 'हाउसकीपिंग भंडार में सामग्रियों की उपलब्धता संतोषजनक', '71-30', '2024-12-14 10:42:51', 'text', 2, 2),
(72, 'कमरे के इलेक्ट्रीकल उपकरण क्रियाशील', '72-80', '2024-12-14 10:43:19', 'text', 2, 2),
(73, 'कमरो के छिटकीनी, कुण्डी ठीक से कार्यरत', '73-100', '2024-12-14 10:43:35', 'text', 2, 2),
(74, 'हॉस्टल एवं कॉरीडोर में लगे CCTV की क्रियाशील', '74-49', '2024-12-14 10:43:49', 'text', 2, 2),
(75, 'सभी सुरक्षा गार्ड ड्यूटी पर उपस्थित', '75-90', '2024-12-14 10:51:12', 'text', 2, 3),
(76, 'सुरक्षा व्यवस्था ठीक था', '76-58', '2024-12-14 10:51:48', 'text', 2, 3),
(77, 'कोई अनाधिकृत प्रवेश नहीं', '77-521734344802', '2024-12-14 10:52:13', 'text', 2, 3),
(78, 'मेस समय से बंद हुआ', '78-78', '2024-12-14 10:53:10', 'text', 2, 3),
(79, 'आउटसोसिंग स्टाफ तथा अन्य कर्मी निर्धारित समय पर परिसर से बाहर हुए', '79-26', '2024-12-14 10:53:35', 'text', 2, 3),
(80, 'विद्युत व्यवस्था सभी विल्डिंग में सुचारू रूप से कायम', '80-24', '2024-12-14 10:53:48', 'text', 2, 3),
(81, 'पानी आपुर्ति व्यवस्था सुचारू रूप से कायम', '81-14', '2024-12-14 10:54:22', 'text', 2, 3),
(82, 'किसी प्रकार का मेडिकल इमरजेन्सी संबंधी मामला नहीं', '82-91734344722', '2024-12-14 10:54:35', 'text', 2, 3),
(83, 'Room no', '83-96', '2024-12-16 09:20:07', 'number', 9, 0),
(84, 'Bed Occupied', '84-36', '2024-12-16 09:23:13', 'number', 9, 0),
(85, 'Bed Vacant', '85-73', '2024-12-16 09:23:28', 'number', 9, 0),
(86, 'Resident Name/ Batch', '86-40', '2024-12-16 09:23:42', 'text', 9, 0),
(87, 'Room Cleaning (Y/N)', '87-67', '2024-12-16 09:23:57', 'text', 9, 0),
(88, 'Bed Making (Y/N)', '88-28', '2024-12-16 09:24:10', 'text', 9, 0),
(89, 'Toilet Cleaning (Y/N)', '89-9', '2024-12-16 09:24:22', 'text', 9, 0),
(90, 'All Electric Fitting working satisfactory (Y/N)', '90-83', '2024-12-16 09:24:43', 'text', 9, 0),
(91, 'Remark', '91-81734341122', '2024-12-16 09:25:09', 'textarea', 9, 0),
(92, 'Observation/Comment', '29-85', '0000-00-00 00:00:00', 'textarea', 6, 0),
(93, 'TRAINING NAME', '93-82', '2024-12-17 05:27:23', 'text', 5, 1),
(94, 'Trainees Dept./Office', '94-86', '2024-12-17 05:28:16', 'text', 5, 1),
(95, 'No. of Trainees', '95-84', '2024-12-17 05:28:51', 'text', 5, 1),
(96, 'No. of Male and Female Trainees', '96-16', '2024-12-17 05:29:04', 'text', 5, 1),
(97, 'Training requisition Letter No.', '97-81', '2024-12-17 05:29:45', 'text', 5, 1),
(98, 'Buciget send to Department', '98-98', '2024-12-17 05:30:13', 'text', 5, 1),
(99, 'Training Period', '99-41', '2024-12-17 05:30:25', 'text', 5, 1),
(100, 'COURE CO-ORDINATOR', '100-7', '2024-12-17 05:30:38', 'text', 5, 1),
(101, 'NAME OF ADMIN', '101-36', '2024-12-17 05:30:48', 'text', 5, 1),
(102, 'NAME OF D.E.Ο.', '102-75', '2024-12-17 05:31:00', 'text', 5, 1),
(103, 'NAME OF MTS', '103-93', '2024-12-17 05:31:09', 'text', 5, 1),
(104, 'Training Hall', '104-61', '2024-12-17 05:31:21', 'text', 5, 1),
(105, 'Training Module Prepared', '105-8', '2024-12-17 05:33:06', 'text', 5, 1),
(106, 'Training Schedule Prepared', '106-74', '2024-12-17 05:33:31', 'text', 5, 1),
(107, 'RP ourside Bihar planned', '107-88', '2024-12-17 05:34:05', 'text', 5, 1),
(108, 'Faculty Detail available', '108-60', '2024-12-17 05:34:15', 'file', 5, 1),
(109, 'Outdoor activity Planned', '109-441734413743', '2024-12-17 05:35:10', 'text', 5, 1),
(110, 'Bihar/Bharat Darshan worked out in advance', '110-12', '2024-12-17 05:35:59', 'text', 5, 1),
(111, 'Ticket Reservation and lodging done in advance', '111-44', '2024-12-17 05:36:08', 'text', 5, 1),
(112, 'Post Training Checklist', '112-62', '2024-12-17 05:37:35', 'text', 5, 1),
(113, 'All RP payment done', '113-1', '2024-12-17 05:38:05', 'text', 5, 1),
(114, 'Course Completion Report submitted', '114-79', '2024-12-17 05:38:14', 'text', 5, 1),
(115, 'Training Expenses bill Raised to Department', '115-30', '2024-12-17 05:38:22', 'text', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_setting`
--

DROP TABLE IF EXISTS `db_setting`;
CREATE TABLE IF NOT EXISTS `db_setting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `favicon` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `footernote` varchar(500) NOT NULL,
  `copyright` varchar(200) NOT NULL,
  `technology_partner` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_setting`
--

INSERT INTO `db_setting` (`id`, `name`, `logo`, `favicon`, `footernote`, `copyright`, `technology_partner`, `slug`) VALUES
(1, 'newproject', 'public/upload/gallery/setting/1733894703_a75bc4c7d9b124f9c60b.png', 'public/upload/gallery/setting/1733894703_bb0ca674eaf5863ff754.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit error quam optio eveniet dolor. Inventore explicabo harum quo delectus pariatur.', '2024 CodeBucket Solutions Pvt. Ltd.', 'CodeBucket Solutions Pvt Ltd', '1-newproject');

-- --------------------------------------------------------

--
-- Table structure for table `db_table`
--

DROP TABLE IF EXISTS `db_table`;
CREATE TABLE IF NOT EXISTS `db_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parant_table` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `label` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL,
  `position` int NOT NULL,
  `slug` varchar(200) NOT NULL,
  `user` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_table`
--

INSERT INTO `db_table` (`id`, `parant_table`, `name`, `label`, `status`, `position`, `slug`, `user`) VALUES
(63, 0, 'db_mess_inspection_report', 'Mess Inspection Report', 1, 6, '63-sdsds121', 0),
(62, 0, 'db_hostel_inspection_report', 'Hostel Inspection Report', 1, 7, '62-sdsds121', 0),
(61, 0, 'db_daily_night_watch_report', 'Daily Night Watch Report', 1, 8, '61-rreeer', 0),
(60, 0, 'db_training_daily_report', 'Training Daily Report', 1, 3, '60-dsdsds', 0),
(59, 0, 'db_question', 'Question', 1, 0, '59-sdsd', 0),
(58, 0, 'db_mess_daily_report', 'Mess Daily Report', 1, 2, '58-kksds', 0),
(50, 0, 'db_setting', 'Setting', 1, 10, '50-dbsetting', 0),
(55, 0, 'db_permission', 'Permission', 1, 0, '55-dfdfvd', 0),
(54, 0, 'db_admin', 'Admin', 1, 0, '54-bgbttg', 0),
(65, 0, 'db_hostel_daily_report', 'Hostel Daily Report', 1, 4, '65-bgbttg', 0),
(66, 0, 'db_training_admin_profile', 'Training Profile', 1, 0, '66-bgbttg', 0),
(68, 0, 'db_mess_admin_profile', 'Mess Profile', 1, 2, '68-kksds1wdw', 0),
(69, 0, 'db_hostel_admin_profile', 'hostel Profile', 1, 2, '69-kksds1wdw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_training_admin_profile`
--

DROP TABLE IF EXISTS `db_training_admin_profile`;
CREATE TABLE IF NOT EXISTS `db_training_admin_profile` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `deptOffice` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `noOfTrainees` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `noOfMaleAndFemaleTrainees` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `letterNo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `budget` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `period` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `co-ordinator` int NOT NULL,
  `adminName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deoName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mtsName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `trainingHall` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `module` int NOT NULL,
  `moduleMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `schedule` int NOT NULL,
  `scheduleMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `outsidePlanned` int NOT NULL,
  `outsidePlannedMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty` int NOT NULL,
  `facultyMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `activityPlanned` int NOT NULL,
  `activityPlannedMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `WorkedOutInAdvance` int NOT NULL,
  `WorkedOutInAdvanceMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `LodgingDoneInAdvance` int NOT NULL,
  `LodgingDoneInAdvanceMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `AllRPPaymentDone` int NOT NULL,
  `AllRPPaymentDoneMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `CourseCompletionReportSubmitted` int NOT NULL,
  `CourseCompletionReportSubmittedMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `TrainingExpensesBillRaisedToDepartment` int NOT NULL,
  `TrainingExpensesBillRaisedToDepartmentMess` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_training_admin_profile`
--

INSERT INTO `db_training_admin_profile` (`id`, `userId`, `name`, `deptOffice`, `noOfTrainees`, `noOfMaleAndFemaleTrainees`, `letterNo`, `budget`, `period`, `co-ordinator`, `adminName`, `deoName`, `mtsName`, `trainingHall`, `module`, `moduleMess`, `schedule`, `scheduleMess`, `outsidePlanned`, `outsidePlannedMess`, `faculty`, `facultyMess`, `activityPlanned`, `activityPlannedMess`, `WorkedOutInAdvance`, `WorkedOutInAdvanceMess`, `LodgingDoneInAdvance`, `LodgingDoneInAdvanceMess`, `AllRPPaymentDone`, `AllRPPaymentDoneMess`, `CourseCompletionReportSubmitted`, `CourseCompletionReportSubmittedMess`, `TrainingExpensesBillRaisedToDepartment`, `TrainingExpensesBillRaisedToDepartmentMess`, `slug`) VALUES
(1, 4, 'shashank', 'sdsd', '12', '1313', '121212', 'sqq', 'dwd', 3, 'wdwd', 'wdw', 'efe', 'efe', 1, 'efef', 0, 'efeff', 1, 'wdwd', 0, 'sdwe', 0, 'efef', 0, 'efef', 1, 'sdfsfd', 1, 'sdsd', 0, 'sfs', 1, 'efe', '1-shashank'),
(2, 4, '0', 'sdcsc', '22', '343', 'sds', 'sdsd', 'sds', 3, 'wdwd', 'effe', 'dfd', 'dfdf', 1, 'wqdwqd', 1, 'dfdf', 1, 'ddvd', 1, 'dvdvd', 0, 'rgg', 0, 'rgr', 0, 'wwdw', 0, 'dvdvd', 0, 'dvdv', 1, 'ddv', ''),
(3, 4, '0', 'sdsd', '12', '232', '32323', 'wdwdw', '10:10 to 11:10', 3, 'wewqq', 'wdw', 'qwd', 'efe', 1, 'wdw', 1, 'reffr', 1, 'dfdf', 1, 'dvdv', 1, 'dcvd', 1, 'sdsd', 1, 'dwedw', 0, 'wdwd', 0, 'wdw', 0, 'wdwdw', '3-shashank'),
(4, 6, 'training1', '', '', '', '', '', '', 0, '', '', '', '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 0, '', 0, '', 0, '', '4-training1');

-- --------------------------------------------------------

--
-- Table structure for table `db_training_daily_report`
--

DROP TABLE IF EXISTS `db_training_daily_report`;
CREATE TABLE IF NOT EXISTS `db_training_daily_report` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int NOT NULL,
  `co_ordinator` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` int NOT NULL,
  `ans` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_training_daily_report`
--

INSERT INTO `db_training_daily_report` (`id`, `created_by`, `co_ordinator`, `name`, `slug`, `created_at`, `question`, `ans`, `remark`, `date`) VALUES
(1, 4, 0, 'shashank', 'shashank-1734349814', '2024-12-16 11:50:14', 27, 1, '12', '0000-00-00'),
(2, 4, 0, 'shashank', 'shashank-1734432050', '2024-12-17 10:40:50', 93, 1, 'sds', '0000-00-00'),
(3, 4, 0, 'shashank', 'shashank-1734508093', '2024-12-18 07:48:13', 27, 1, '12', '0000-00-00'),
(4, 4, 0, 'shashank', 'shashank-1734508119', '2024-12-18 07:48:40', 36, 1, 'asda', '0000-00-00'),
(5, 4, 0, 'shashank', 'shashank-1734607208', '2024-12-19 05:32:04', 27, 1, '12', '0000-00-00'),
(6, 4, 0, 'shashank', 'shashank-1734586330', '2024-12-19 05:32:10', 53, 1, 'scxs', '0000-00-00'),
(7, 4, 0, 'shashank', 'shashank-1734607541', '2024-12-19 11:25:41', 28, 1, '232', '0000-00-00'),
(8, 6, 0, 'training1', 'training1-1734670648', '2024-12-20 04:40:14', 27, 1, '30', '0000-00-00'),
(9, 6, 0, 'training1', 'training1-1734670655', '2024-12-20 04:57:35', 28, 1, '40', '0000-00-00'),
(10, 4, 0, 'shashank', 'shashank-1734765719', '2024-12-21 07:21:59', 27, 1, '30', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
