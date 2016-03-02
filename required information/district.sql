-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2015 at 03:38 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abdpot_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jonal_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `jonal_id`, `status`) VALUES
(1, 'Dhaka', 3, 1),
(2, 'Bandarban', 2, 1),
(3, 'Barguna', 12, 1),
(4, 'Barisal', 12, 1),
(5, 'Bhola', 12, 1),
(6, 'Bogra', 20, 1),
(7, 'B.Baria', 11, 1),
(8, 'Chandpur', 14, 1),
(9, 'Chittagong', 1, 1),
(10, 'Chuadanga', 18, 1),
(11, 'Comilla', 14, 1),
(12, 'Cox''s Bazar', 2, 1),
(13, 'Bagerhat', 6, 1),
(14, 'Dinajpur', 21, 1),
(15, 'Faridpur', 7, 1),
(16, 'Feni', 15, 1),
(17, 'Gaibandha', 20, 1),
(18, 'Gazipur', 3, 1),
(19, 'Gopalganj', 6, 1),
(20, 'Habiganj', 9, 1),
(21, 'Jamalpur', 10, 1),
(22, 'Jessore', 20, 1),
(23, 'Jhalokati', 12, 1),
(24, 'Jhenaidah', 18, 1),
(25, 'Joypurhat', 20, 1),
(26, 'Khagrachhari', 2, 1),
(27, 'Khulna', 5, 1),
(28, 'Kishoregonj', 11, 1),
(29, 'Kurigram', 8, 1),
(30, 'Kushtia', 18, 1),
(31, 'Lakshmipur', 15, 1),
(32, 'Lalmonirhat', 8, 1),
(33, 'Madaripur', 7, 1),
(34, 'Magura', 17, 1),
(35, 'Manikganj', 13, 1),
(36, 'Meherpur', 18, 1),
(37, 'Moulvibazar', 9, 1),
(38, 'Munshiganj', 16, 1),
(39, 'Mymensingh', 10, 1),
(40, 'Naogaon', 4, 1),
(41, 'Narail', 17, 1),
(42, 'Narayanganj', 16, 1),
(43, 'Narsingdi', 16, 1),
(44, 'Natore', 4, 1),
(45, 'ChapaiNawabganj', 4, 1),
(46, 'Netrakona', 11, 1),
(47, 'Nilphamari', 21, 1),
(48, 'Noakhali', 15, 1),
(49, 'Pabna', 19, 1),
(50, 'Panchagarh', 21, 1),
(51, 'Patuakhali', 12, 1),
(52, 'Pirojpur', 6, 1),
(53, 'Rajbari', 7, 1),
(54, 'Rajshahi', 4, 1),
(55, 'Rangamati', 2, 1),
(56, 'Rangpur', 10, 1),
(57, 'Satkhira', 5, 1),
(58, 'Shariatpur', 7, 1),
(59, 'Sherpur', 10, 1),
(60, 'Sirajganj', 19, 1),
(61, 'Sunamganj', 9, 1),
(62, 'Sylhet', 9, 1),
(63, 'Tangail', 13, 1),
(64, 'Thakurgaon', 21, 1),
(65, 'Tasfir Hossain Suman', 2, 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
