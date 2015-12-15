-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 07:25 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `haji_payment_calculation`
--

-- --------------------------------------------------------

--
-- Table structure for table `haji_info`
--

CREATE TABLE IF NOT EXISTS `haji_info` (
  `haji_id` int(11) NOT NULL AUTO_INCREMENT,
  `haji_name` varchar(255) NOT NULL,
  `haji_fathers_name` varchar(255) NOT NULL,
  `haji_mothers_name` varchar(255) NOT NULL,
  `haji_date_of_birth` varchar(255) NOT NULL,
  `haji_marital_status` tinyint(1) NOT NULL,
  `haji_gender` tinyint(1) NOT NULL,
  `haji_present_address` text NOT NULL,
  `haji_permanent_address` text NOT NULL,
  `haji_nationality` varchar(100) NOT NULL,
  `haji_blood_group` varchar(20) NOT NULL,
  `haji_birth_place` varchar(100) NOT NULL,
  `haji_passport_no` varchar(50) NOT NULL,
  `haji_national_id_no` varchar(50) NOT NULL,
  `haji_mobile_no` varchar(15) NOT NULL,
  `haji_payment_amount` varchar(11) NOT NULL,
  `haji_profile_photo` varchar(255) DEFAULT NULL,
  `haji_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`haji_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `haji_info`
--

INSERT INTO `haji_info` (`haji_id`, `haji_name`, `haji_fathers_name`, `haji_mothers_name`, `haji_date_of_birth`, `haji_marital_status`, `haji_gender`, `haji_present_address`, `haji_permanent_address`, `haji_nationality`, `haji_blood_group`, `haji_birth_place`, `haji_passport_no`, `haji_national_id_no`, `haji_mobile_no`, `haji_payment_amount`, `haji_profile_photo`, `haji_status`) VALUES
(1, 'Tasfir Hossain Suman', 'Shohrab Ali', 'Mrs. Tahmina Begum', '17/04/1989', 0, 0, 'House#01, Road# 06, Block# C, Banasree, Rampura', 'Vill: Shekher Vita, P.O: Jamalpur, P.S: Jamalpur, Dist: Jamalpur', 'Bangladeshi', '', '', 'Dkd415', '19920005145887875', '01672839609', '', NULL, 0),
(2, 'Tasfir Hossain Suman', 'Shohrab Ali', 'Mrs. Tahmina Begum', '17/04/1989', 0, 0, 'House#01, Road# 06, Block# C, Banasree, Rampura', 'Vill: Shekher Vita, P.O: Jamalpur, P.S: Jamalpur, Dist: Jamalpur', 'Bangladeshi', '', '', 'Dkd415', '19920005145887875', '01672839609', '', NULL, 0),
(3, 'Tasfir Hossain Suman', 'Shohrab Ali', 'Mrs. Tahmina Begum', '17/04/1989', 0, 0, 'House#01, Road# 06, Block# C, Banasree, Rampura', 'Vill: Shekher Vita, P.O: Jamalpur, P.S: Jamalpur, Dist: Jamalpur', 'Bangladeshi', '', '', 'Dkd415', '19920005145887875', '01672839609', '', NULL, 0),
(4, 'Tasfir Hossain Suman', 'Shohrab Ali', 'Mrs. Tahmina Begum', '//', 0, 0, 'House#01, Road# 06, Block# C, Banasree, Rampura', 'Dhaka-1219', 'Bangladeshi', '', '', 'Dkd415', '19920005145887875', '01672839609', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_first_name` varchar(150) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `user_first_name`, `user_last_name`, `phone`, `address`, `profile_picture`, `user_type`, `user_status`) VALUES
(1, 'admin', '40c076e29f6106a4f4e3c8d5c8c3d2c5', 'tasfirsuman@gmail.com', 'Tasfir Hossain', 'Suman', '01911198784', 'Micron Techno', 'uploads/profile_picture/suman.jpg', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
