-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 10:44 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haji_payment_calculation`
--

-- --------------------------------------------------------

--
-- Table structure for table `commission_agent`
--

CREATE TABLE `commission_agent` (
  `id` int(4) NOT NULL,
  `commission_agent_code` varchar(30) NOT NULL,
  `commision_agent_name` varchar(150) NOT NULL,
  `commision_agent_mobile` varchar(15) NOT NULL,
  `commision_agent_address` text NOT NULL,
  `passport_no` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission_agent`
--

INSERT INTO `commission_agent` (`id`, `commission_agent_code`, `commision_agent_name`, `commision_agent_mobile`, `commision_agent_address`, `passport_no`, `status`) VALUES
(1, 'CID-0001', 'Tasfir Hossain Suman', '01911198784', 'Dhaka', '454DFDS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `status`) VALUES
(1, 'Dhaka', 1),
(2, 'Bandarban', 1),
(3, 'Barguna', 1),
(4, 'Barisal', 1),
(5, 'Bhola', 1),
(6, 'Bogra', 1),
(7, 'B.Baria', 1),
(8, 'Chandpur', 1),
(9, 'Chittagong', 1),
(10, 'Chuadanga', 1),
(11, 'Comilla', 1),
(12, 'Cox''s Bazar', 1),
(13, 'Bagerhat', 1),
(14, 'Dinajpur', 1),
(15, 'Faridpur', 1),
(16, 'Feni', 1),
(17, 'Gaibandha', 1),
(18, 'Gazipur', 1),
(19, 'Gopalganj', 1),
(20, 'Habiganj', 1),
(21, 'Jamalpur', 1),
(22, 'Jessore', 1),
(23, 'Jhalokati', 1),
(24, 'Jhenaidah', 1),
(25, 'Joypurhat', 1),
(26, 'Khagrachhari', 1),
(27, 'Khulna', 1),
(28, 'Kishoregonj', 1),
(29, 'Kurigram', 1),
(30, 'Kushtia', 1),
(31, 'Lakshmipur', 1),
(32, 'Lalmonirhat', 1),
(33, 'Madaripur', 1),
(34, 'Magura', 1),
(35, 'Manikganj', 1),
(36, 'Meherpur', 1),
(37, 'Moulvibazar', 1),
(38, 'Munshiganj', 1),
(39, 'Mymensingh', 1),
(40, 'Naogaon', 1),
(41, 'Narail', 1),
(42, 'Narayanganj', 1),
(43, 'Narsingdi', 1),
(44, 'Natore', 1),
(45, 'ChapaiNawabganj', 1),
(46, 'Netrakona', 1),
(47, 'Nilphamari', 1),
(48, 'Noakhali', 1),
(49, 'Pabna', 1),
(50, 'Panchagarh', 1),
(51, 'Patuakhali', 1),
(52, 'Pirojpur', 1),
(53, 'Rajbari', 1),
(54, 'Rajshahi', 1),
(55, 'Rangamati', 1),
(56, 'Rangpur', 1),
(57, 'Satkhira', 1),
(58, 'Shariatpur', 1),
(59, 'Sherpur', 1),
(60, 'Sirajganj', 1),
(61, 'Sunamganj', 1),
(62, 'Sylhet', 1),
(63, 'Tangail', 1),
(64, 'Thakurgaon', 1),
(65, 'Tasfir Hossain Suman', 13);

-- --------------------------------------------------------

--
-- Table structure for table `expense_entry`
--

CREATE TABLE `expense_entry` (
  `id` int(4) NOT NULL,
  `expense_name` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `expense_entry_date` date NOT NULL,
  `expense_group_id` int(3) NOT NULL,
  `expense_head_id` int(3) NOT NULL,
  `payment_mode` tinyint(1) DEFAULT '1',
  `cheque_number` varchar(10) NOT NULL,
  `cheque_date` varchar(10) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `bank_acc_number` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `data_entry_user_name` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_entry`
--

INSERT INTO `expense_entry` (`id`, `expense_name`, `date`, `expense_entry_date`, `expense_group_id`, `expense_head_id`, `payment_mode`, `cheque_number`, `cheque_date`, `bank_name`, `bank_acc_number`, `amount`, `data_entry_user_name`, `status`) VALUES
(1, 'Employee Salary Paid', '2016-01-14', '2016-01-14', 3, 1, 1, '', '', '', '', '15000', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_group_entry`
--

CREATE TABLE `expense_group_entry` (
  `id` int(3) NOT NULL,
  `expense_group_entry_code` varchar(50) NOT NULL,
  `expense_group_entry_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_group_entry`
--

INSERT INTO `expense_group_entry` (`id`, `expense_group_entry_code`, `expense_group_entry_name`, `status`) VALUES
(1, 'GEI-0001', 'Hajj Expense', 1),
(2, 'GEI-0003', 'Omra Expenses', 1),
(3, 'GEI-0002', 'Office Exepense', 1),
(4, 'HID-0001', 'Demo One', 1),
(5, 'EGID-0001', 'Tasfir Hossain 343333', 1),
(6, 'EGID-0001', 'Hajj Expense', 1),
(7, 'EGID-0002', 'Omra Expenses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_head_entry`
--

CREATE TABLE `expense_head_entry` (
  `id` int(3) NOT NULL,
  `expense_group_entry_id` varchar(3) NOT NULL,
  `expense_head_entry_code` varchar(50) NOT NULL,
  `expense_head_entry_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_head_entry`
--

INSERT INTO `expense_head_entry` (`id`, `expense_group_entry_id`, `expense_head_entry_code`, `expense_head_entry_name`, `status`) VALUES
(1, '3', 'HID-0001', 'Employee Salary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `haji_information`
--

CREATE TABLE `haji_information` (
  `id` int(3) NOT NULL,
  `haji_id` varchar(8) NOT NULL,
  `haji_omra_type` tinyint(1) NOT NULL DEFAULT '1',
  `haji_name` varchar(150) NOT NULL,
  `haji_passport` varchar(20) NOT NULL,
  `haji_mobile` varchar(15) NOT NULL,
  `haji_address` text NOT NULL,
  `hajj_year` year(4) NOT NULL,
  `commission_agent_id` varchar(3) NOT NULL,
  `commission_amount` varchar(10) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `date_time` datetime NOT NULL,
  `creator_user_id` varchar(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haji_information`
--

INSERT INTO `haji_information` (`id`, `haji_id`, `haji_omra_type`, `haji_name`, `haji_passport`, `haji_mobile`, `haji_address`, `hajj_year`, `commission_agent_id`, `commission_amount`, `total_amount`, `date_time`, `creator_user_id`, `status`) VALUES
(8, 'HID-0001', 1, 'Tasfir Hossain Suman', '4545ED', '0171215458', 'Dhaka Rampura', 2015, '1', '', '', '0000-00-00 00:00:00', '', 1),
(9, 'HID-0002', 1, 'Kofil Uddin', '52DEF', '65466565', 'Dhaka Rampura', 2016, '4', '', '500000', '0000-00-00 00:00:00', '', 1),
(10, 'HID-0003', 1, 'Gias Uddin', '45F54D', '01911198784', 'Malibag', 2015, '4', '', '300000', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `haji_info_old`
--

CREATE TABLE `haji_info_old` (
  `haji_id` int(11) NOT NULL,
  `pilgrim_id` int(11) NOT NULL,
  `pilgrim_type` tinyint(4) NOT NULL,
  `pilgrim_full_name` varchar(255) NOT NULL,
  `pilgrim_name_part_one` varchar(50) NOT NULL,
  `pilgrim_name_part_two` varchar(50) NOT NULL,
  `pilgrim_name_part_three` varchar(50) NOT NULL,
  `pilgrim_name_part_four` varchar(50) NOT NULL,
  `pilgrim_father_or_husband_name` varchar(150) NOT NULL,
  `pilgrim_father_or_husband_type` tinyint(1) DEFAULT NULL,
  `pilgrim_mothers_name` varchar(255) NOT NULL,
  `pilgrim_date_of_birth` varchar(255) NOT NULL,
  `pilgrim_nationality` varchar(100) NOT NULL,
  `pilgrim_marital_status` tinyint(1) DEFAULT NULL,
  `pilgrim_gender` tinyint(1) DEFAULT NULL,
  `pilgrim_educational_qualification` varchar(50) NOT NULL,
  `pilgrim_occupation` varchar(100) NOT NULL,
  `pilgrim_position` varchar(100) NOT NULL,
  `pilgrim_national_id_no` varchar(50) NOT NULL,
  `pilgrim_place_of_birth` varchar(100) NOT NULL,
  `pilgrim_tin_no_number` varchar(12) NOT NULL,
  `pilgrim_tin_no_status` tinyint(1) DEFAULT NULL,
  `pilgrim_how_many_country_traveling` int(3) NOT NULL,
  `pilgrim_traveling_before_status` tinyint(1) DEFAULT NULL,
  `pilgrim_perform_hajj_before` varchar(255) NOT NULL,
  `pilgrim_perform_hajj_before_status` tinyint(1) DEFAULT NULL,
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
  `pilgrim_nominee_status` tinyint(1) DEFAULT NULL,
  `pilgrim_name_of_nominee` varchar(150) NOT NULL,
  `pilgrim_noinee_relationship` varchar(150) NOT NULL,
  `pilgrim_nominee_address` text NOT NULL,
  `pilgrim_family_member_id` varchar(50) NOT NULL,
  `pilgrim_family_member_id_type` tinyint(1) DEFAULT NULL,
  `pilgrim_health_information_of_disease` varchar(30) NOT NULL,
  `pilgrim_health_information_of_medicine` varchar(50) NOT NULL,
  `pilgrim_blood_group` varchar(20) NOT NULL,
  `haji_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haji_info_old`
--

INSERT INTO `haji_info_old` (`haji_id`, `pilgrim_id`, `pilgrim_type`, `pilgrim_full_name`, `pilgrim_name_part_one`, `pilgrim_name_part_two`, `pilgrim_name_part_three`, `pilgrim_name_part_four`, `pilgrim_father_or_husband_name`, `pilgrim_father_or_husband_type`, `pilgrim_mothers_name`, `pilgrim_date_of_birth`, `pilgrim_nationality`, `pilgrim_marital_status`, `pilgrim_gender`, `pilgrim_educational_qualification`, `pilgrim_occupation`, `pilgrim_position`, `pilgrim_national_id_no`, `pilgrim_place_of_birth`, `pilgrim_tin_no_number`, `pilgrim_tin_no_status`, `pilgrim_how_many_country_traveling`, `pilgrim_traveling_before_status`, `pilgrim_perform_hajj_before`, `pilgrim_perform_hajj_before_status`, `pilgrim_identification_mark`, `pilgrim_passport_number`, `pilgrim_passport_type`, `pilgrim_passport_issue_date`, `pilgrim_passport_expire_date`, `pilgrim_place_of_passport_issue`, `pilgrim_permanent_address_village`, `pilgrim_permanent_address_district`, `pilgrim_permanent_address_police_station`, `pilgrim_permanent_address_post_code`, `pilgrim_permanent_address_mobile_no`, `pilgrim_present_address_village`, `pilgrim_present_address_district`, `pilgrim_present_address_police_station`, `pilgrim_presenet_address_post_code`, `pilgrim_present_address_mobile_no`, `pilgrim_close_relative_name`, `pilgrim_close_relative_relation`, `pilgrim_close_relative_mobile_no_one`, `pilgrim_close_relative_mobile_no_two`, `pilgrim_close_relative_email`, `pilgrim_child_name`, `pilgrim_agency_name`, `pilgrim_license_no`, `pilgrim_package_name`, `pilgrim_package_amount`, `pilgrim_package_amount_in_word`, `pilgrim_nominee_status`, `pilgrim_name_of_nominee`, `pilgrim_noinee_relationship`, `pilgrim_nominee_address`, `pilgrim_family_member_id`, `pilgrim_family_member_id_type`, `pilgrim_health_information_of_disease`, `pilgrim_health_information_of_medicine`, `pilgrim_blood_group`, `haji_status`) VALUES
(1, 454545, 1, 'Sanzid Arham', 'Tasfir ', 'Hossain', 'Suman', 'm', 'MD SHOHRAB ALI', 1, 'Mrs Tahmina Begum', '1989-04-17', 'Bangladeshi', 0, 0, '03', 'Job Holder', 'Web Programmer', '512168564646546', 'Jamalpur', '', 0, 3, 0, 'yes', 0, 'Have', '545454', 1, '0018-04-19', '2020-05-30', '01', 'dsfsdf', 16, 17, 1219, '213165', 'sdfsdfs', 16, 0, 1219, '01911198784', 'Tasfir Hossain Suman', 'SELF', '+8801675704139', '+8801675704139', 'ratul1623@gmail.com', 'SADID', 'dfsdfs', '4545454', 'sdfsdfsfd', '333', 'dfsdfsafsdfs', 0, 'Tasfir Hossain Suman', 'sdfsdfsd', 'House#01, Road# 06, Block# C, Banasree, Rampura', 'sdfsadfsd', 0, '', '', '01', 0),
(2, 454545, 1, 'Tasfir Hossain Suman', 'Tasfir ', 'Hossain', 'Suman', 'm', 'MD SHOHRAB ALI', 1, 'Mrs Tahmina Begum', '1989-04-17', 'Bangladeshi', 0, 0, '03', 'Job Holder', 'Web Programmer', '512168564646546', 'Jamalpur', '', 0, 3, 0, 'yes', 0, 'Have', '545454', 1, '0018-04-19', '2020-05-30', '01', 'dsfsdf', 16, 17, 1219, '213165', 'sdfsdfs', 16, 0, 1219, '+8801675704139', 'Tasfir Hossain Suman', 'SELF', '+8801675704139', '+8801675704139', 'ratul1623@gmail.com', 'SADID', 'dfsdfs', '4545454', 'sdfsdfsfd', '333', 'dfsdfsafsdfs', 0, 'Tasfir Hossain Suman', 'sdfsdfsd', 'House#01, Road# 06, Block# C, Banasree, Rampura', 'sdfsadfsd', 0, '', '', '01', 0),
(6, 0, 1, '', '', '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', '', '', '', NULL, 0, NULL, '', NULL, '', '', 0, '', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', '', '', 0),
(7, 0, 1, '', '', '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', '', '', '', NULL, 0, NULL, '', NULL, '', '', 0, '', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '1,5', '', '', 0),
(8, 0, 1, 'Rahim Uddin', '', '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', '', '', '', NULL, 0, NULL, '', NULL, '', '', 0, '', '', '', '', 0, 0, 1219, '01672839609', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '3,4,5,6,7,8,9,10,11,12', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `haji_payment_contact`
--

CREATE TABLE `haji_payment_contact` (
  `id` int(11) NOT NULL,
  `voucher_no` varchar(10) DEFAULT NULL,
  `passport_number` varchar(20) DEFAULT NULL,
  `total_amount` varchar(10) DEFAULT NULL,
  `commission_agent_id` varchar(5) DEFAULT NULL,
  `commission_amount` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income_group`
--

CREATE TABLE `income_group` (
  `id` int(3) NOT NULL,
  `income_group_code` varchar(50) NOT NULL,
  `income_group_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_group`
--

INSERT INTO `income_group` (`id`, `income_group_code`, `income_group_name`, `status`) VALUES
(3, 'IGC-0002', 'Group 3', 1),
(5, 'IGC-0004', 'Group 1', 1),
(7, 'IGC-0005', 'Group 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `income_head`
--

CREATE TABLE `income_head` (
  `id` int(3) NOT NULL,
  `income_group_id` varchar(3) NOT NULL,
  `income_head_code` varchar(50) NOT NULL,
  `income_head_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_head`
--

INSERT INTO `income_head` (`id`, `income_group_id`, `income_head_code`, `income_head_name`, `status`) VALUES
(1, '3', 'HID-0001', 'Office Rent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_information`
--

CREATE TABLE `loan_information` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(150) NOT NULL,
  `permanent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `ocupation` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `national_id_number` varchar(25) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `balance` varchar(20) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_information`
--

INSERT INTO `loan_information` (`id`, `full_name`, `email_address`, `mobile_number`, `permanent_address`, `present_address`, `ocupation`, `company_name`, `company_address`, `national_id_number`, `profile_photo`, `balance`, `status`) VALUES
(28, 'Tasfir Hossain Suman', 'tasfirsuman@gmail.com', '01911198784', 'Jamalpur', '', '', '', '', '', '', '321934', 1),
(29, 'Giash Uddin', 'giashuddin@gmail.com', '', '', '', '', '', '', '', '', '-10000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_paid`
--

CREATE TABLE `loan_paid` (
  `id` int(11) NOT NULL,
  `loan_user_id` varchar(4) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_by` varchar(4) NOT NULL,
  `comments` text NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_paid`
--

INSERT INTO `loan_paid` (`id`, `loan_user_id`, `entry_date`, `entry_by`, `comments`, `amount`, `status`) VALUES
(1, '21', '2016-01-18', '1', 'This is First Payment of Demo', '5000', 1),
(2, '21', '2016-01-18', '1', 'This is Second Transaction ', '9000', 1),
(3, '21', '2016-01-18', '1', 'Just Checking Loan Receive for First Time ', '15000', 1),
(4, '21', '2016-01-19', '1', '', '15000', 1),
(5, '21', '2016-01-19', '1', '', '15000', 1),
(6, '21', '2016-01-19', '1', '', '20500', 1),
(7, '23', '2016-01-19', '1', '', '15000', 1),
(8, '25', '2016-01-19', '1', '', '20500', 1),
(9, '26', '2016-01-19', '1', '', '', 1),
(10, '28', '2016-01-19', '1', '', '20500', 1),
(11, '29', '2016-01-19', '1', 'Loan Give to Giash Uddin', '20000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_receive`
--

CREATE TABLE `loan_receive` (
  `id` int(11) NOT NULL,
  `loan_user_id` varchar(4) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_by` varchar(4) NOT NULL,
  `comments` text NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_receive`
--

INSERT INTO `loan_receive` (`id`, `loan_user_id`, `entry_date`, `entry_by`, `comments`, `amount`, `status`) VALUES
(1, '21', '2016-01-18', '1', 's', '20500', 1),
(2, '21', '2016-01-19', '1', '', '15000', 1),
(3, '24', '2016-01-19', '1', '', '20500', 1),
(4, '28', '2016-01-19', '1', '', '342434', 1),
(5, '29', '2016-01-19', '1', '', '10000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `money_receipt`
--

CREATE TABLE `money_receipt` (
  `id` int(11) NOT NULL,
  `haji_id` varchar(5) NOT NULL,
  `money_receipt_number` varchar(10) DEFAULT NULL,
  `payment_mode` tinyint(1) DEFAULT '1',
  `payment_date` date DEFAULT NULL,
  `chaque_number` varchar(50) DEFAULT NULL,
  `chaque_date` varchar(10) DEFAULT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `payment_head` varchar(3) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_receipt`
--

INSERT INTO `money_receipt` (`id`, `haji_id`, `money_receipt_number`, `payment_mode`, `payment_date`, `chaque_number`, `chaque_date`, `bank_name`, `branch_name`, `amount`, `payment_head`, `status`) VALUES
(1, '10', 'MRH-0001', 1, '2016-01-14', '', '', '', '', '15000', '1', 1),
(2, '9', 'MRH-0002', 1, '2016-01-14', '', '', '', '', '20000', '1', 1),
(3, '9', 'MRH-0003', 1, '2016-01-23', '', '', '', '', '123000', '', 1),
(4, '9', 'MRH-0004', 1, '2016-01-23', '', '', '', '', '85200', '', 1),
(5, '9', 'MRH-0005', 1, '2016-01-23', '', '', '', '', '85200', '', 1),
(6, '9', 'MRH-0006', 1, '2016-01-23', '', '', '', '', '85200', '', 1),
(7, '8', 'MRH-0007', 1, '2016-01-23', '', '', '', '', '78920', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`id`, `district_id`, `name`, `status`) VALUES
(1, 1, 'Agargon', 1),
(2, 1, 'Badda', 1),
(3, 1, 'Bijoynagar', 1),
(4, 1, 'Cantonment', 1),
(5, 1, 'College Gate', 1),
(6, 1, 'Dhaka', 1),
(7, 1, 'Dhanmondi', 1),
(8, 1, 'Firmgate', 1),
(9, 1, 'Fokirapul', 1),
(10, 1, 'Green Road', 1),
(11, 1, 'Kakrail', 1),
(12, 1, 'Kalabagan', 1),
(13, 1, 'Kallyanpur', 1),
(14, 1, 'Karwan Bazar', 1),
(15, 1, 'Khilkhet', 1),
(16, 1, 'Lalmatia', 1),
(17, 1, 'Mirpur', 1),
(18, 1, 'Mogbazar', 1),
(19, 1, 'Mohakhali', 1),
(20, 1, 'Mohammadpur', 1),
(21, 1, 'Motijheel', 1),
(22, 1, 'New Eskaton Road', 1),
(23, 1, 'Pallabi', 1),
(24, 1, 'Panthapath', 1),
(25, 1, 'Purana Paltan', 1),
(26, 1, 'Razarbagh', 1),
(27, 1, 'Shahbagh', 1),
(28, 1, 'Shamoli', 1),
(29, 1, 'Shantinagar', 1),
(30, 1, 'Sher-E-Bangla Nagar', 1),
(31, 1, 'Uttara', 1),
(32, 1, 'Satmasjid Road', 1),
(33, 1, 'Gulshan-2', 1),
(34, 1, 'Mitford Road', 1),
(35, 1, 'Kuril', 1),
(36, 1, 'English Road', 1),
(37, 1, 'Gulshan-1', 1),
(38, 1, 'Rampura', 1),
(41, 1, 'Armanitola', 1),
(42, 1, 'Gandaria', 1),
(43, 1, 'Saidabad', 1),
(44, 1, 'Jatrabari', 1),
(45, 1, 'Doyagong', 1),
(46, 1, 'PostoGhola', 1),
(47, 1, 'Nazrul Islam Saroni', 1),
(48, 1, 'Abul Hasnat Road', 1),
(49, 1, 'Malibagh', 1),
(50, 1, 'Siddeshwari Road', 1),
(51, 1, 'Bashabo', 1),
(52, 1, 'Tejgaon', 1),
(53, 1, 'Mohakhali DOHS', 1),
(54, 1, 'Babubazar', 1),
(55, 1, 'Banani', 1),
(56, 1, 'Baridhara DOHS', 1),
(57, 1, 'Bashabo', 1),
(58, 1, 'Bonosree', 1),
(59, 1, 'Boshundhora', 1),
(60, 1, 'Khilgaon', 1),
(61, 1, 'Madertak', 1),
(62, 1, 'Mitford Road', 1),
(63, 1, 'Sabujbagh', 1),
(64, 1, 'Shajahanpur', 1),
(65, 1, 'Dhamrai', 1),
(66, 1, 'Dohar', 1),
(67, 1, 'Keraniganj', 1),
(68, 1, 'Nawabganj', 1),
(69, 1, 'Savar', 1),
(70, 15, 'Alfadanga', 1),
(71, 15, 'Bhanga', 1),
(72, 15, 'Boalmari', 1),
(73, 15, 'Charbhadrasan', 1),
(74, 15, 'Faridpur Sadar', 1),
(75, 15, 'Madhukhali', 1),
(76, 15, 'Nagarkanda', 1),
(77, 15, 'Sadarpur', 1),
(78, 15, 'Saltha', 1),
(79, 18, 'Gazipur Sadar', 1),
(80, 18, 'Kaliakair', 1),
(81, 18, 'Kaliganj', 1),
(82, 18, 'Kapasia', 1),
(83, 18, 'Sreepur', 1),
(84, 19, 'Gopalganj Sadar', 1),
(85, 19, 'Kashiani', 1),
(86, 19, 'Kotalipara', 1),
(87, 19, 'Muksudpur', 1),
(88, 19, 'Tungipara', 1),
(89, 21, 'Baksiganj', 1),
(90, 21, 'Dewanganj', 1),
(91, 21, 'Islampur', 1),
(92, 21, 'Jamalpur Sadar', 1),
(93, 21, 'Madarganj', 1),
(94, 21, 'Melandaha', 1),
(95, 21, 'Sarishabari', 1),
(96, 28, 'Astagram', 1),
(97, 28, 'Bajitpur', 1),
(98, 28, 'Bhairab', 1),
(99, 28, 'Hossainpur', 1),
(100, 28, 'Itna', 1),
(101, 28, 'Karimganj', 1),
(102, 28, 'Katiadi', 1),
(103, 28, 'Kishoreganj Sadar', 1),
(104, 28, 'Kuliarchar', 1),
(105, 28, 'Mithamain', 1),
(106, 28, 'Nikli', 1),
(107, 28, 'Pakundia', 1),
(108, 28, 'Tarail', 1),
(109, 33, 'Rajoir', 1),
(110, 33, 'Madaripur Sadar', 1),
(111, 33, 'Kalkini', 1),
(112, 33, 'Shibchar', 1),
(113, 35, 'Daulatpur', 1),
(114, 35, 'Ghior', 1),
(115, 35, 'Harirampur', 1),
(116, 35, 'Manikgonj Sadar', 1),
(117, 35, 'Saturia', 1),
(118, 35, 'Shivalaya', 1),
(119, 35, 'Singair', 1),
(120, 38, 'Gazaria', 1),
(121, 38, 'Lohajang', 1),
(122, 38, 'Munshiganj Sadar', 1),
(123, 38, 'Sirajdikhan', 1),
(124, 38, 'Sreenagar', 1),
(125, 38, 'Tongibari', 1),
(126, 39, 'Bhaluka', 1),
(127, 39, 'Dhobaura', 1),
(128, 39, 'Fulbaria', 1),
(129, 39, 'Gaffargaon', 1),
(130, 39, 'Gauripur', 1),
(131, 39, 'Haluaghat', 1),
(132, 39, 'Ishwarganj', 1),
(133, 39, 'Mymensingh Sadar', 1),
(134, 39, 'Muktagachha', 1),
(135, 39, 'Nandail', 1),
(136, 39, 'Phulpur', 1),
(137, 39, 'Trishal', 1),
(138, 39, 'Tara Khanda', 1),
(139, 42, 'Araihazar', 1),
(140, 42, 'Bandar', 1),
(141, 42, 'Narayanganj Sadar', 1),
(142, 42, 'Rupganj', 1),
(143, 42, 'Sonargaon', 1),
(144, 42, 'Fatullah', 1),
(145, 42, 'Siddhirganj', 1),
(146, 46, 'Atpara', 1),
(147, 46, 'Barhatta', 1),
(148, 46, 'Durgapur', 1),
(149, 46, 'Khaliajuri', 1),
(150, 46, 'Kalmakanda', 1),
(151, 46, 'Kendua', 1),
(152, 46, 'Madan', 1),
(153, 46, 'Mohanganj', 1),
(154, 46, 'Netrokona Sadar', 1),
(155, 46, 'Purbadhala', 1),
(156, 53, 'Baliakandi', 1),
(157, 53, 'Goalandaghat', 1),
(158, 53, 'Pangsha', 1),
(159, 53, 'Rajbari Sadar', 1),
(160, 53, 'Kalukhali', 1),
(161, 58, 'Bhedarganj', 1),
(162, 58, 'Damudya', 1),
(163, 58, 'Gosairhat', 1),
(164, 58, 'Naria', 1),
(165, 58, 'Shariatpur Sadar', 1),
(166, 58, 'Zanjira', 1),
(167, 58, 'Shakhipur', 1),
(168, 59, 'Jhenaigati', 1),
(169, 59, 'Nakla', 1),
(170, 59, 'Nalitabari', 1),
(171, 59, 'Sherpur Sadar', 1),
(172, 59, 'Sreebardi', 1),
(173, 63, 'Gopalpur', 1),
(174, 63, 'Basail', 1),
(175, 63, 'Bhuapur', 1),
(176, 63, 'Delduar', 1),
(177, 63, 'Ghatail', 1),
(178, 63, 'Kalihati', 1),
(179, 63, 'Madhupur', 1),
(180, 63, 'Mirzapur', 1),
(181, 63, 'Nagarpur', 1),
(182, 63, 'Sakhipur', 1),
(183, 63, 'Dhanbari', 1),
(184, 63, 'Tangail Sadar', 1),
(185, 43, 'Narsingdi Sadar', 1),
(186, 43, 'Belabo', 1),
(187, 43, 'Monohardi', 1),
(188, 43, 'Palash', 1),
(189, 43, 'Raipura', 1),
(190, 43, 'Shibpur', 1),
(191, 6, 'Adamdighi', 1),
(192, 6, 'Bogra Sadar', 1),
(193, 6, 'Dhunat', 1),
(194, 6, 'Dhupchanchia', 1),
(195, 6, 'Gabtali', 1),
(196, 6, 'Kahaloo', 1),
(197, 6, 'Nandigram', 1),
(198, 6, 'Sariakandi', 1),
(199, 6, 'Sahajanpur', 1),
(200, 6, 'Sherpur', 1),
(201, 6, 'Shibganj', 1),
(202, 6, 'Sonatola', 1),
(203, 25, 'Akkelpur', 1),
(204, 25, 'Joypurhat Sadar', 1),
(205, 25, 'Kalai', 1),
(206, 25, 'Khetlal', 1),
(207, 25, 'Panchbibi', 1),
(208, 40, 'Atrai', 1),
(209, 40, 'Badalgachhi', 1),
(210, 40, 'Manda', 1),
(211, 40, 'Dhamoirhat', 1),
(212, 40, 'Mohadevpur', 1),
(213, 40, 'Naogaon Sadar', 1),
(214, 40, 'Niamatpur', 1),
(215, 40, 'Patnitala', 1),
(216, 40, 'Porsha', 1),
(217, 40, 'Raninagar', 1),
(218, 40, 'Sapahar', 1),
(219, 44, 'Bagatipara', 1),
(220, 44, 'Baraigram', 1),
(221, 44, 'Gurudaspur', 1),
(222, 44, 'Lalpur', 1),
(223, 44, 'Natore Sadar', 1),
(224, 44, 'Singra', 1),
(225, 44, 'Naldanga', 1),
(226, 45, 'Bholahat', 1),
(227, 45, 'Gomastapur', 1),
(228, 45, 'Nachole', 1),
(229, 45, 'Nawabganj Sadar', 1),
(230, 45, 'Shibganj', 1),
(231, 49, 'Atgharia', 1),
(232, 49, 'Bera', 1),
(233, 49, 'Bhangura', 1),
(234, 49, 'Chatmohar', 1),
(235, 49, 'Faridpur', 1),
(236, 49, 'Ishwardi', 1),
(237, 49, 'Pabna Sadar', 1),
(238, 49, 'Santhia', 1),
(239, 49, 'Sujanagar', 1),
(240, 49, 'Ataikula', 1),
(241, 54, 'Bagha', 1),
(242, 54, 'Bagmara', 1),
(243, 54, 'Charghat', 1),
(244, 54, 'Durgapur', 1),
(245, 54, 'Godagari', 1),
(246, 54, 'Mohanpur', 1),
(247, 54, 'Paba', 1),
(248, 54, 'Puthia', 1),
(249, 54, 'Tanore', 1),
(250, 54, 'Boalia Thana', 1),
(251, 54, 'Matihar Thana', 1),
(252, 54, 'Rajpara Thana', 1),
(253, 54, 'Shah Mokdum Thana', 1),
(254, 60, 'Belkuchi', 1),
(255, 60, 'Chauhali', 1),
(256, 60, 'Kamarkhanda', 1),
(257, 60, 'Kazipur', 1),
(258, 60, 'Raiganj', 1),
(259, 60, 'Shahjadpur', 1),
(260, 60, 'Sirajganj Sadar', 1),
(261, 60, 'Tarash', 1),
(262, 60, 'Ullahpara', 1),
(263, 14, 'Birampur', 1),
(264, 14, 'Birganj', 1),
(265, 14, 'Biral', 1),
(266, 14, 'Bochaganj', 1),
(267, 14, 'Chirirbandar', 1),
(268, 14, 'Phulbari', 1),
(269, 14, 'Ghoraghat', 1),
(270, 14, 'Hakimpur', 1),
(271, 14, 'Kaharole', 1),
(272, 14, 'Khansama', 1),
(273, 14, 'Dinajpur Sadar', 1),
(274, 14, 'Nawabganj', 1),
(275, 14, 'Parbatipur', 1),
(276, 17, 'Phulchhari', 1),
(277, 17, 'Gaibandha Sadar', 1),
(278, 17, 'Gobindaganj', 1),
(279, 17, 'Palashbari', 1),
(280, 17, 'Sadullapur', 1),
(281, 17, 'Sughatta', 1),
(282, 17, 'Sundarganj', 1),
(283, 29, 'Bhurungamari', 1),
(284, 29, 'Char Rajibpur', 1),
(285, 29, 'Chilmari', 1),
(286, 29, 'Phulbari', 1),
(287, 29, 'Kurigram Sadar', 1),
(288, 29, 'Nageshwari', 1),
(289, 29, 'Rajarhat', 1),
(290, 29, 'Raomari', 1),
(291, 29, 'Ulipur', 1),
(292, 31, 'Aditmari', 1),
(293, 31, 'Hatibandha', 1),
(294, 31, 'Kaliganj', 1),
(295, 31, 'Lalmonirhat Sadar', 1),
(296, 31, 'Patgram', 1),
(297, 47, 'Dimla', 1),
(298, 47, 'Domar', 1),
(299, 47, 'Jaldhaka', 1),
(300, 47, 'Kishoreganj', 1),
(301, 47, 'Nilphamari Sadar', 1),
(302, 47, 'Saidpur', 1),
(303, 50, 'Atwari', 1),
(304, 50, 'Boda', 1),
(305, 50, 'Debiganj', 1),
(306, 50, 'Panchagarh Sadar', 1),
(307, 50, 'Tetulia', 1),
(308, 56, 'Badarganj', 1),
(309, 56, 'Gangachhara', 1),
(310, 56, 'Kaunia', 1),
(311, 56, 'Rangpur Sadar', 1),
(312, 56, 'Mithapukur', 1),
(313, 56, 'Pirgachha', 1),
(314, 56, 'Pirganj', 1),
(315, 56, 'Taraganj', 1),
(316, 64, 'Baliadangi', 1),
(317, 64, 'Haripur', 1),
(318, 64, 'Pirganj', 1),
(319, 64, 'Ranisankail', 1),
(320, 64, 'Thakurgaon Sadar', 1),
(321, 3, 'Amtali', 1),
(322, 3, 'Bamna', 1),
(323, 3, 'Barguna Sadar', 1),
(324, 3, 'Betagi', 1),
(325, 3, 'Patharghata', 1),
(326, 3, 'Taltoli', 1),
(327, 4, 'Agailjhara', 1),
(328, 4, 'Babuganj', 1),
(329, 4, 'Bakerganj', 1),
(330, 4, 'Banaripara', 1),
(331, 4, 'Gaurnadi', 1),
(332, 4, 'Hizla', 1),
(333, 4, 'Barisal Sadar', 1),
(334, 4, 'Mehendiganj', 1),
(335, 4, 'Muladi', 1),
(336, 4, 'Wazirpur', 1),
(337, 5, 'Bhola Sadar', 1),
(338, 5, 'Burhanuddin', 1),
(339, 5, 'Char Fasson', 1),
(340, 5, 'Daulatkhan', 1),
(341, 5, 'Lalmohan', 1),
(342, 5, 'Manpura', 1),
(343, 5, 'Tazumuddin', 1),
(344, 23, 'Jhalokati Sadar', 1),
(345, 23, 'Kathalia', 1),
(346, 23, 'Nalchity', 1),
(347, 23, 'Rajapur', 1),
(348, 51, 'Bauphal', 1),
(349, 51, 'Dashmina', 1),
(350, 51, 'Galachipa', 1),
(351, 51, 'Kalapara', 1),
(352, 51, 'Mirzaganj', 1),
(353, 51, 'Patuakhali Sadar', 1),
(354, 51, 'Rangabali', 1),
(355, 51, 'Dumki', 1),
(356, 52, 'Bhandaria', 1),
(357, 52, 'Kawkhali', 1),
(358, 52, 'Mathbaria', 1),
(359, 52, 'Nazirpur', 1),
(360, 52, 'Pirojpur Sadar', 1),
(361, 52, 'Nesarabad (Swarupkati)', 1),
(362, 52, 'Zianagor', 1),
(363, 2, 'Ali Kadam', 1),
(364, 2, 'Bandarban Sadar', 1),
(365, 2, 'Lama', 1),
(366, 2, 'Naikhongchhari', 1),
(367, 2, 'Rowangchhari', 1),
(368, 2, 'Ruma', 1),
(369, 2, 'Thanchi', 1),
(370, 7, 'Akhaura', 1),
(371, 7, 'Bancharampur', 1),
(372, 7, 'Brahmanbaria Sadar', 1),
(373, 7, 'Kasba', 1),
(374, 7, 'Nabinagar', 1),
(375, 7, 'Nasirnagar', 1),
(376, 7, 'Sarail', 1),
(377, 7, 'Ashuganj', 1),
(378, 7, 'Bijoynagar', 1),
(379, 8, 'Chandpur Sadar', 1),
(380, 8, 'Faridganj', 1),
(381, 8, 'Haimchar', 1),
(382, 8, 'Haziganj', 1),
(383, 8, 'Kachua', 1),
(384, 8, 'Matlab Dakshin', 1),
(385, 8, 'Matlab Uttar', 1),
(386, 8, 'Shahrasti', 1),
(387, 9, 'Anwara', 1),
(388, 9, 'Banshkhali', 1),
(389, 9, 'Boalkhali', 1),
(390, 9, 'Chandanaish', 1),
(391, 9, 'Fatikchhari', 1),
(392, 9, 'Hathazari', 1),
(393, 9, 'Lohagara', 1),
(394, 9, 'Mirsharai', 1),
(395, 9, 'Patiya', 1),
(396, 9, 'Rangunia', 1),
(397, 9, 'Raozan', 1),
(398, 9, 'Sandwip', 1),
(399, 9, 'Satkania', 1),
(400, 9, 'Sitakunda', 1),
(401, 9, 'Bandor (Chittagong Port) Thana', 1),
(402, 9, 'Chandgaon Thana', 1),
(403, 9, 'Double Morring Thana', 1),
(404, 9, 'Kotwali Thana', 1),
(405, 9, 'Pahartali Thana', 1),
(406, 9, 'Panchlaish Thana', 1),
(407, 11, 'Barura', 1),
(408, 11, 'Brahmanpara', 1),
(409, 11, 'Burichong', 1),
(410, 11, 'Chandina', 1),
(411, 11, 'Chauddagram', 1),
(412, 11, 'Daudkandi', 1),
(413, 11, 'Debidwar', 1),
(414, 11, 'Homna', 1),
(415, 11, 'Laksam', 1),
(416, 11, 'Muradnagar', 1),
(417, 11, 'Nangalkot', 1),
(418, 11, 'Comilla Sadar', 1),
(419, 11, 'Meghna', 1),
(420, 11, 'Titas', 1),
(421, 11, 'Monohargonj', 1),
(422, 11, 'Sadar South', 1),
(423, 12, 'Chakaria', 1),
(424, 12, 'Cox''s Bazar Sadar', 1),
(425, 12, 'Kutubdia', 1),
(426, 12, 'Maheshkhali', 1),
(427, 12, 'Ramu', 1),
(428, 12, 'Teknaf', 1),
(429, 12, 'Ukhia', 1),
(430, 12, 'Pekua', 1),
(431, 16, 'Chhagalnaiya', 1),
(432, 16, 'Daganbhuiyan', 1),
(433, 16, 'Feni Sadar', 1),
(434, 16, 'Parshuram', 1),
(435, 16, 'Sonagazi', 1),
(436, 16, 'Fulgazi', 1),
(437, 26, 'Dighinala', 1),
(438, 26, 'Khagrachhari', 1),
(439, 26, 'Lakshmichhari', 1),
(440, 26, 'Mahalchhari', 1),
(441, 26, 'Manikchhari', 1),
(442, 26, 'Matiranga', 1),
(443, 26, 'Panchhari', 1),
(444, 26, 'Ramgarh', 1),
(445, 31, 'Lakshmipur Sadar', 1),
(446, 31, 'Raipur', 1),
(447, 31, 'Ramganj', 1),
(448, 31, 'Ramgati', 1),
(449, 31, 'Komolnagar', 1),
(450, 48, 'Begumganj', 1),
(451, 48, 'Noakhali Sadar', 1),
(452, 48, 'Chatkhil', 1),
(453, 48, 'Companiganj', 1),
(454, 48, 'Hatiya', 1),
(455, 48, 'Senbagh', 1),
(456, 48, 'Sonaimuri', 1),
(457, 48, 'Subarnachar', 1),
(458, 48, 'Kabirhat', 1),
(459, 55, 'Bagaichhari', 1),
(460, 55, 'Barkal', 1),
(461, 55, 'Kawkhali (Betbunia)', 1),
(462, 55, 'Belaichhari', 1),
(463, 55, 'Kaptai', 1),
(464, 55, 'Juraichhari', 1),
(465, 55, 'Langadu', 1),
(466, 55, 'Naniyachar', 1),
(467, 55, 'Rajasthali', 1),
(468, 55, 'Rangamati Sadar', 1),
(469, 20, 'Ajmiriganj', 1),
(470, 20, 'Bahubal', 1),
(471, 20, 'Baniyachong', 1),
(472, 20, 'Chunarughat', 1),
(473, 20, 'Habiganj Sadar', 1),
(474, 20, 'Lakhai', 1),
(475, 20, 'Madhabpur', 1),
(476, 20, 'Nabiganj', 1),
(477, 37, 'Barlekha', 1),
(478, 37, 'Kamalganj', 1),
(479, 37, 'Kulaura', 1),
(480, 37, 'Moulvibazar Sadar', 1),
(481, 37, 'Rajnagar', 1),
(482, 37, 'Sreemangal', 1),
(483, 37, 'Juri', 1),
(484, 61, 'Bishwamvarpur', 1),
(485, 61, 'Chhatak', 1),
(486, 61, 'Derai', 1),
(487, 61, 'Dharampasha', 1),
(488, 61, 'Dowarabazar', 1),
(489, 61, 'Jagannathpur', 1),
(490, 61, 'Jamalganj', 1),
(491, 61, 'Sullah', 1),
(492, 61, 'Sunamganj Sadar', 1),
(493, 61, 'Tahirpur', 1),
(494, 61, 'South Sunamganj', 1),
(495, 62, 'Balaganj', 1),
(496, 62, 'Beanibazar', 1),
(497, 62, 'Bishwanath', 1),
(498, 62, 'Companigonj', 1),
(499, 62, 'Fenchuganj', 1),
(500, 62, 'Golapganj', 1),
(501, 62, 'Gowainghat', 1),
(502, 62, 'Jaintiapur', 1),
(503, 62, 'Kanaighat', 1),
(504, 62, 'Sylhet Sadar', 1),
(505, 62, 'Zakiganj', 1),
(506, 62, 'South Shurma', 1),
(507, 13, 'Bagerhat Sadar', 1),
(508, 13, 'Chitalmari', 1),
(509, 13, 'Fakirhat', 1),
(510, 13, 'Kachua', 1),
(511, 13, 'Mollahat', 1),
(512, 13, 'Mongla', 1),
(513, 13, 'Morrelganj', 1),
(514, 13, 'Rampal', 1),
(515, 13, 'Sarankhola', 1),
(516, 10, 'Alamdanga', 1),
(517, 10, 'Chuadanga Sadar', 1),
(518, 10, 'Damurhuda', 1),
(519, 10, 'Jibannagar', 1),
(520, 22, 'Abhaynagar', 1),
(521, 22, 'Bagherpara', 1),
(522, 22, 'Chaugachha', 1),
(523, 22, 'Jhikargachha', 1),
(524, 22, 'Keshabpur', 1),
(525, 22, 'Jessore Sadar', 1),
(526, 22, 'Manirampur', 1),
(527, 22, 'Sharsha', 1),
(528, 24, 'Harinakunda', 1),
(529, 24, 'Jhenaidah Sadar', 1),
(530, 24, 'Kaliganj', 1),
(531, 24, 'Kotchandpur', 1),
(532, 24, 'Maheshpur', 1),
(533, 24, 'Shailkupa', 1),
(534, 27, 'Batiaghata', 1),
(535, 27, 'Dacope', 1),
(536, 27, 'Dumuria', 1),
(537, 27, 'Dighalia', 1),
(538, 27, 'Koyra', 1),
(539, 27, 'Paikgachha', 1),
(540, 27, 'Phultala', 1),
(541, 27, 'Rupsha', 1),
(542, 27, 'Terokhada', 1),
(543, 27, 'Daulatpur Thana', 1),
(544, 27, 'Khalishpur Thana', 1),
(545, 27, 'Khan Jahan Ali Thana', 1),
(546, 27, 'Kotwali Thana', 1),
(547, 27, 'Sonadanga Thana', 1),
(548, 27, 'Harintana Thana', 1),
(549, 30, 'Bheramara', 1),
(550, 30, 'Daulatpur', 1),
(551, 30, 'Khoksa', 1),
(552, 30, 'Kumarkhali', 1),
(553, 30, 'Kushtia Sadar', 1),
(554, 30, 'Mirpur', 1),
(555, 30, 'Shekhpara', 1),
(556, 34, 'Magura Sadar', 1),
(557, 34, 'Mohammadpur', 1),
(558, 34, 'Shalikha', 1),
(559, 34, 'Sreepur', 1),
(560, 36, 'Gangni', 1),
(561, 36, 'Meherpur Sadar', 1),
(562, 36, 'Mujibnagar', 1),
(563, 41, 'Kalia', 1),
(564, 41, 'Lohagara', 1),
(565, 41, 'Narail Sadar', 1),
(566, 41, 'Naragati Thana', 1),
(567, 57, 'Assasuni', 1),
(568, 57, 'Debhata', 1),
(569, 57, 'Kalaroa', 1),
(570, 57, 'Kaliganj', 1),
(571, 57, 'Satkhira Sadar', 1),
(572, 57, 'Shyamnagar', 1),
(573, 57, 'Tala', 1),
(574, 57, 'Debhata', 1),
(575, 57, 'Kalaroa', 1),
(576, 57, 'Kaliganj', 1),
(577, 57, 'Satkhira Sadar', 1),
(578, 57, 'Shyamnagar', 1),
(579, 57, 'Tala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `money_receipt_id` varchar(11) NOT NULL,
  `haji_id` varchar(4) NOT NULL,
  `loan_paid_id` varchar(20) NOT NULL,
  `loan_information_id` varchar(4) NOT NULL,
  `loan_receive_id` varchar(4) NOT NULL,
  `expense_id` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `balance_status` tinyint(1) NOT NULL DEFAULT '1',
  `debit` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `balance` varchar(10) NOT NULL,
  `last_transaction_amount` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `money_receipt_id`, `haji_id`, `loan_paid_id`, `loan_information_id`, `loan_receive_id`, `expense_id`, `date`, `balance_status`, `debit`, `credit`, `balance`, `last_transaction_amount`, `status`) VALUES
(1, '1', '10', '', '', '', '', '2016-01-14', 1, '15000', '', '15000', '', 1),
(2, '2', '9', '', '', '', '', '2016-01-14', 1, '20000', '', '35000', '', 1),
(3, '', '', '', '', '', '1', '2016-01-14', 1, '', '15000', '20000', '', 1),
(4, '', '', '1', '', '', '', '2016-01-18', 1, '', '5000', '15000', '', 1),
(5, '', '', '2', '', '', '', '2016-01-18', 1, '', '9000', '6000', '', 1),
(6, '', '', '3', '', '', '', '2016-01-18', 1, '', '15000', '-9000', '', 1),
(7, '', '', '', '', '1', '', '2016-01-18', 1, '20500', '', '11500', '', 1),
(8, '', '', '4', '', '', '', '2016-01-19', 1, '', '15000', '-3500', '', 1),
(9, '', '', '5', '', '', '', '2016-01-19', 1, '', '15000', '-18500', '', 1),
(10, '', '', '6', '', '', '', '2016-01-19', 1, '', '20500', '-39000', '', 1),
(11, '', '', '', '', '2', '', '2016-01-19', 1, '15000', '', '-24000', '', 1),
(12, '', '', '7', '', '', '', '2016-01-19', 1, '', '15000', '-39000', '', 1),
(13, '', '', '', '', '3', '', '2016-01-19', 1, '20500', '', '-18500', '', 1),
(14, '', '', '8', '', '', '', '2016-01-19', 1, '', '20500', '-39000', '', 1),
(15, '', '', '9', '', '', '', '2016-01-19', 1, '', '', '-39000', '', 1),
(16, '', '', '10', '', '', '', '2016-01-19', 1, '', '20500', '-59500', '', 1),
(17, '', '', '', '', '4', '', '2016-01-19', 1, '342434', '', '282934', '', 1),
(18, '', '', '11', '', '', '', '2016-01-19', 1, '', '20000', '262934', '', 1),
(19, '', '', '', '', '5', '', '2016-01-19', 1, '10000', '', '272934', '', 1),
(20, '3', '9', '', '', '', '', '2016-01-23', 1, '123000', '', '395934', '', 1),
(21, '4', '9', '', '', '', '', '2016-01-23', 1, '85200', '', '481134', '', 1),
(22, '6', '9', '', '', '', '', '2016-01-23', 1, '85200', '', '566334', '', 1),
(23, '7', '8', '', '', '', '', '2016-01-23', 1, '78920', '', '645254', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_first_name` varchar(150) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `user_first_name`, `user_last_name`, `phone`, `address`, `profile_picture`, `user_type`, `status`) VALUES
(1, 'admin', '40c076e29f6106a4f4e3c8d5c8c3d2c5', 'tasfirsuman@gmail.com', 'Tasfir Hossain', 'Suman', '01911198784', 'Micron Techno', 'uploads/profile_picture/suman.jpg', 1, 1),
(2, 'micron', 'e10adc3949ba59abbe56e057f20f883e', 'micronhost@gmail.com', 'Micron', 'Techno', '01911198784', 'Dhaka', 'uploads/profile_picture/10.jpg', 1, 1),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'user name', '', '', '', 'uploads/profile_picture/10.jpg', 3, 1),
(4, 'tasfir', '40c076e29f6106a4f4e3c8d5c8c3d2c5', 'tasfirsuman@gmail.com', 'Tasfir Hossain ', 'Suman', '01723230609', 'Banasere', 'uploads/profile_picture/thumbs/4.jpg', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commission_agent`
--
ALTER TABLE `commission_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_entry`
--
ALTER TABLE `expense_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_group_entry`
--
ALTER TABLE `expense_group_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_head_entry`
--
ALTER TABLE `expense_head_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haji_information`
--
ALTER TABLE `haji_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haji_info_old`
--
ALTER TABLE `haji_info_old`
  ADD PRIMARY KEY (`haji_id`);

--
-- Indexes for table `haji_payment_contact`
--
ALTER TABLE `haji_payment_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voucher_no` (`voucher_no`,`passport_number`);

--
-- Indexes for table `income_group`
--
ALTER TABLE `income_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_head`
--
ALTER TABLE `income_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_information`
--
ALTER TABLE `loan_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_paid`
--
ALTER TABLE `loan_paid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_receive`
--
ALTER TABLE `loan_receive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_receipt`
--
ALTER TABLE `money_receipt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `haji_id` (`haji_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `money_receipt_id` (`money_receipt_id`),
  ADD KEY `expense_id` (`expense_id`),
  ADD KEY `loan_id` (`loan_paid_id`),
  ADD KEY `loan_receive_id` (`loan_receive_id`),
  ADD KEY `haji_id` (`haji_id`),
  ADD KEY `loan_information_id` (`loan_information_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commission_agent`
--
ALTER TABLE `commission_agent`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `expense_entry`
--
ALTER TABLE `expense_entry`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expense_group_entry`
--
ALTER TABLE `expense_group_entry`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `expense_head_entry`
--
ALTER TABLE `expense_head_entry`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `haji_information`
--
ALTER TABLE `haji_information`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `haji_info_old`
--
ALTER TABLE `haji_info_old`
  MODIFY `haji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `haji_payment_contact`
--
ALTER TABLE `haji_payment_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income_group`
--
ALTER TABLE `income_group`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `income_head`
--
ALTER TABLE `income_head`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loan_information`
--
ALTER TABLE `loan_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `loan_paid`
--
ALTER TABLE `loan_paid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `loan_receive`
--
ALTER TABLE `loan_receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `money_receipt`
--
ALTER TABLE `money_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=580;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
