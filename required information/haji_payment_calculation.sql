-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2015 at 10:47 AM
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
  `pilgrim_id` int(11) NOT NULL,
  `pilgrim_type` tinyint(4) NOT NULL,
  `pilgrim_full_name` varchar(255) NOT NULL,
  `pilgrim_name_part_one` varchar(50) NOT NULL,
  `pilgrim_name_part_two` varchar(50) NOT NULL,
  `pilgrim_name_part_three` varchar(50) NOT NULL,
  `pilgrim_name_part_four` varchar(50) NOT NULL,
  `pilgrim_father_or_husband_name` varchar(150) NOT NULL,
  `pilgrim_father_or_husband_type` tinyint(1) NOT NULL,
  `pilgrim_mothers_name` varchar(255) NOT NULL,
  `pilgrim_date_of_birth` varchar(255) NOT NULL,
  `pilgrim_nationality` varchar(100) NOT NULL,
  `pilgrim_marital_status` tinyint(1) NOT NULL,
  `pilgrim_gender` tinyint(1) NOT NULL,
  `pilgrim_educational_qualification` varchar(50) NOT NULL,
  `pilgrim_occupation` varchar(100) NOT NULL,
  `pilgrim_position` varchar(100) NOT NULL,
  `pilgrim_national_id_no` varchar(50) NOT NULL,
  `pilgrim_place_of_birth` varchar(100) NOT NULL,
  `pilgrim_tin_no_number` varchar(12) NOT NULL,
  `pilgrim_tin_no_status` tinyint(1) NOT NULL,
  `pilgrim_how_many_country_traveling` int(3) NOT NULL,
  `pilgrim_traveling_before_status` tinyint(1) NOT NULL,
  `pilgrim_perform_hajj_before` varchar(255) NOT NULL,
  `pilgrim_perform_hajj_before_status` tinyint(1) NOT NULL,
  `pilgrim_identification_mark` varchar(255) NOT NULL,
  `pilgrim_passport_number` varchar(50) NOT NULL,
  `pilgrim_passport_type` tinyint(1) NOT NULL,
  `pilgrim_passport_issue_date` varchar(20) NOT NULL,
  `pilgrim_passport_expire_date` varchar(20) NOT NULL,
  `pilgrim_place_of_passport_issue` varchar(150) NOT NULL,
  `pilgrim_permanent_address_village` varchar(150) NOT NULL,
  `pilgrim_permanent_address_district` int(2) NOT NULL,
  `pilgrim_permanent_address_police_station` int(4) NOT NULL,
  `pilgrim_permanent_address_post_code` int(5) NOT NULL,
  `pilgrim_permanent_address_mobile_no` varchar(15) NOT NULL,
  `pilgrim_present_address_village` varchar(150) NOT NULL,
  `pilgrim_present_address_district` int(3) NOT NULL,
  `pilgrim_present_address_police_station` int(4) NOT NULL,
  `pilgrim_presenet_address_post_code` int(5) NOT NULL,
  `pilgrim_present_address_mobile_no` varchar(15) NOT NULL,
  `pilgrim_close_relative_name` varchar(150) NOT NULL,
  `pilgrim_close_relative_relation` varchar(50) NOT NULL,
  `pilgrim_close_relative_mobile_no_one` varchar(15) NOT NULL,
  `pilgrim_close_relative_mobile_no_two` varchar(15) NOT NULL,
  `pilgrim_close_relative_email` varchar(150) NOT NULL,
  `pilgrim_child_name` varchar(150) NOT NULL,
  `pilgrim_agency_name` varchar(150) NOT NULL,
  `pilgrim_license_no` varchar(20) NOT NULL,
  `pilgrim_package_name` varchar(150) NOT NULL,
  `pilgrim_package_amount` varchar(8) NOT NULL,
  `pilgrim_package_amount_in_word` varchar(225) NOT NULL,
  `pilgrim_nominee_status` tinyint(1) NOT NULL,
  `pilgrim_name_of_nominee` varchar(150) NOT NULL,
  `pilgrim_noinee_relationship` varchar(150) NOT NULL,
  `pilgrim_nominee_address` text NOT NULL,
  `pilgrim_family_member_id` varchar(50) NOT NULL,
  `pilgrim_family_member_id_type` tinyint(1) NOT NULL,
  `pilgrim_health_information_of_disease` varchar(30) NOT NULL,
  `pilgrim_health_information_of_medicine` varchar(50) NOT NULL,
  `pilgrim_blood_group` varchar(20) NOT NULL,
  `haji_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`haji_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `haji_info`
--

INSERT INTO `haji_info` (`haji_id`, `pilgrim_id`, `pilgrim_type`, `pilgrim_full_name`, `pilgrim_name_part_one`, `pilgrim_name_part_two`, `pilgrim_name_part_three`, `pilgrim_name_part_four`, `pilgrim_father_or_husband_name`, `pilgrim_father_or_husband_type`, `pilgrim_mothers_name`, `pilgrim_date_of_birth`, `pilgrim_nationality`, `pilgrim_marital_status`, `pilgrim_gender`, `pilgrim_educational_qualification`, `pilgrim_occupation`, `pilgrim_position`, `pilgrim_national_id_no`, `pilgrim_place_of_birth`, `pilgrim_tin_no_number`, `pilgrim_tin_no_status`, `pilgrim_how_many_country_traveling`, `pilgrim_traveling_before_status`, `pilgrim_perform_hajj_before`, `pilgrim_perform_hajj_before_status`, `pilgrim_identification_mark`, `pilgrim_passport_number`, `pilgrim_passport_type`, `pilgrim_passport_issue_date`, `pilgrim_passport_expire_date`, `pilgrim_place_of_passport_issue`, `pilgrim_permanent_address_village`, `pilgrim_permanent_address_district`, `pilgrim_permanent_address_police_station`, `pilgrim_permanent_address_post_code`, `pilgrim_permanent_address_mobile_no`, `pilgrim_present_address_village`, `pilgrim_present_address_district`, `pilgrim_present_address_police_station`, `pilgrim_presenet_address_post_code`, `pilgrim_present_address_mobile_no`, `pilgrim_close_relative_name`, `pilgrim_close_relative_relation`, `pilgrim_close_relative_mobile_no_one`, `pilgrim_close_relative_mobile_no_two`, `pilgrim_close_relative_email`, `pilgrim_child_name`, `pilgrim_agency_name`, `pilgrim_license_no`, `pilgrim_package_name`, `pilgrim_package_amount`, `pilgrim_package_amount_in_word`, `pilgrim_nominee_status`, `pilgrim_name_of_nominee`, `pilgrim_noinee_relationship`, `pilgrim_nominee_address`, `pilgrim_family_member_id`, `pilgrim_family_member_id_type`, `pilgrim_health_information_of_disease`, `pilgrim_health_information_of_medicine`, `pilgrim_blood_group`, `haji_status`) VALUES
(1, 454545, 1, 'Tasfir Hossain Suman', 'Tasfir ', 'Hossain', 'Suman', 'm', 'MD SHOHRAB ALI', 1, 'Mrs Tahmina Begum', '1989-04-17', 'Bangladeshi', 0, 0, '03', 'Job Holder', 'Web Programmer', '512168564646546', 'Jamalpur', '', 0, 3, 0, 'yes', 0, 'Have', '545454', 1, '0018-04-19', '2020-05-30', '01', 'dsfsdf', 16, 17, 1219, '213165', 'sdfsdfs', 16, 0, 1219, '+8801675704139', 'Tasfir Hossain Suman', 'SELF', '+8801675704139', '+8801675704139', 'ratul1623@gmail.com', 'SADID', 'dfsdfs', '4545454', 'sdfsdfsfd', '333', 'dfsdfsafsdfs', 0, 'Tasfir Hossain Suman', 'sdfsdfsd', 'House#01, Road# 06, Block# C, Banasree, Rampura', 'sdfsadfsd', 0, '', '', '01', 0),
(2, 454545, 1, 'Tasfir Hossain Suman', 'Tasfir ', 'Hossain', 'Suman', 'm', 'MD SHOHRAB ALI', 1, 'Mrs Tahmina Begum', '1989-04-17', 'Bangladeshi', 0, 0, '03', 'Job Holder', 'Web Programmer', '512168564646546', 'Jamalpur', '', 0, 3, 0, 'yes', 0, 'Have', '545454', 1, '0018-04-19', '2020-05-30', '01', 'dsfsdf', 16, 17, 1219, '213165', 'sdfsdfs', 16, 0, 1219, '+8801675704139', 'Tasfir Hossain Suman', 'SELF', '+8801675704139', '+8801675704139', 'ratul1623@gmail.com', 'SADID', 'dfsdfs', '4545454', 'sdfsdfsfd', '333', 'dfsdfsafsdfs', 0, 'Tasfir Hossain Suman', 'sdfsdfsd', 'House#01, Road# 06, Block# C, Banasree, Rampura', 'sdfsadfsd', 0, '', '', '01', 0);

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
