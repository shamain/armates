-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 02:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `armates`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_name` varchar(200) NOT NULL,
  `app_description` text,
  `scene_file` varchar(400) NOT NULL,
  `client_id` int(11) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`app_id`, `app_name`, `app_description`, `scene_file`, `client_id`, `del_ind`, `added_by`, `added_date`) VALUES
(1, '3D Sri Lanka Map', NULL, '', 1, '1', 1, '2014-10-25 18:30:00'),
(2, 'fdfsd', NULL, '', 1, '1', 1, '2014-10-27 12:01:22'),
(3, 'fdfsd', NULL, '', 1, '1', 1, '2014-10-27 12:02:18'),
(4, 'fdfsd', '                                    sss', 'sc1414737074--330891231- DOC230514-23052014154419.pdf', 1, '1', 1, '2014-10-31 02:01:17'),
(5, 'furniture ', ' furniture  app', '', 1, '1', 1, '2014-10-31 02:53:31'),
(6, 'dsd', ' \r\n                            ds', '', 1, '1', 1, '2014-10-31 02:58:24'),
(7, 's', ' SS\r\n                            ', '', 1, '1', 1, '2014-10-31 02:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_fname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `client_lname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `client_password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `client_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `client_contact` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `client_avatar` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `is_online` enum('Y','N') CHARACTER SET utf8 DEFAULT 'N',
  `del_ind` enum('1','0','2') CHARACTER SET utf8 NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_fname`, `client_lname`, `client_password`, `client_email`, `client_contact`, `client_avatar`, `is_online`, `del_ind`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'Shamain', 'Peiris', 'c4961b067d274050e43e26beb9d7d19c', 'shamaingdd@yahoo.com', NULL, 'default_cover_pic.png', 'Y', '1', 1, '2014-10-31 01:28:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `object_id` int(11) NOT NULL AUTO_INCREMENT,
  `target_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `object_name` varchar(300) NOT NULL,
  `format` varchar(50) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(400) NOT NULL,
  `sofa_model` varchar(200) NOT NULL,
  `item_count` int(11) NOT NULL,
  `comments` text NOT NULL,
  `deliver_date` datetime NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `address`, `sofa_model`, `item_count`, `comments`, `deliver_date`, `del_ind`) VALUES
(1, 'dasdasd', 'fasfsfasf', 0, 'asfsf', '0000-00-00 00:00:00', '1'),
(2, 'dasdasd', 'fasfsfasf', 0, 'asfsf', '1970-01-01 01:00:00', '1'),
(3, 'dasdasd', 'fasfsfasf', 0, 'asfsf', '2014-07-10 00:00:00', '1'),
(4, 'dasdasd', 'fasfsfasf', 10, 'asfsf', '2014-07-10 00:00:00', '1'),
(5, 'dasdasd', 'fasfsfasf', 10, 'asfsf', '2014-07-10 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(200) NOT NULL,
  `max_targets` int(10) NOT NULL,
  `max_objects` int(10) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `max_targets`, `max_objects`, `del_ind`, `added_by`, `added_date`) VALUES
(1, 'czcz', 10, 5, '1', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `target_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `target_name` varchar(300) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`target_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
