-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 07:45 PM
-- Server version: 5.1.46
-- PHP Version: 5.4.36

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdh`
--

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_number` varchar(50) NOT NULL,
  `deal_type` int(11) NOT NULL,
  `deal_title` varchar(200) NOT NULL,
  `basic_info` text NOT NULL,
  `active` int(1) NOT NULL,
  `valid_from` int(11) NOT NULL,
  `valid_to` int(11) NOT NULL,
  `vendor` int(11) NOT NULL,
  `cheap_best` int(1) NOT NULL,
  `home_page` int(1) NOT NULL,
  `what_we_like` text NOT NULL,
  `inclusions` text NOT NULL,
  `fine_print` text NOT NULL,
  `how_to_book` text NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `main_image` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `deal_number`, `deal_type`, `deal_title`, `basic_info`, `active`, `valid_from`, `valid_to`, `vendor`, `cheap_best`, `home_page`, `what_we_like`, `inclusions`, `fine_print`, `how_to_book`, `coupon_code`, `main_image`, `updated_at`, `created_at`) VALUES
(1, 'DEAL1', 15, 'Best Airfares', 'DEAL1', 0, 0, 0, 0, 0, 0, 'DEAL1', 'DEAL1', 'DEAL1', 'DEAL1', 'DEAL1', '', '2014-12-30 00:01:46', '2014-11-18 16:41:21'),
(2, 'DEAL2', 16, 'Best 2 Airfare', 'basic info', 1, 0, 0, 0, 0, 1, 'what we like', 'inclusions', 'fine print', 'how to book', 'NET072', '', '2014-11-18 16:42:59', '2014-11-18 16:42:59'),
(3, 'DEAL11', 17, 'Best Airfares', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '2014-11-18 23:36:54', '2014-11-18 23:36:54'),
(4, 'r34', 17, '324234', '', 0, 1415125800, 0, 0, 0, 0, '', '', '', '', '', '', '2014-11-18 23:42:03', '2014-11-18 23:42:03'),
(5, 'DEAL122', 16, 'Best Airfares', 'ujhj', 0, 1415125800, 1415212200, 0, 1, 0, 'jhjh', 'jhjhjhjhjh', 'jhjhjjhjhjh', '<h1>jhjhjhj</h1>', 'NET07', '', '2014-11-19 23:03:07', '2014-11-19 23:03:07'),
(6, '789689', 15, 'Deala hi deals', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '2014-12-30 00:13:44', '2014-12-30 00:13:44'),
(7, '21312321', 15, 'Best Airfares11111111', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '2014-12-30 00:14:21', '2014-12-30 00:14:21'),
(8, 'asdasd213213', 15, 'asdasd', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '2014-12-30 00:15:20', '2014-12-30 00:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `dealtypes`
--

CREATE TABLE IF NOT EXISTS `dealtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_type` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `dealtypes`
--

INSERT INTO `dealtypes` (`id`, `deal_type`, `updated_at`, `created_at`) VALUES
(15, 'Hotel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Airfare', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Vacation', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'CheapNBest', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deal_props`
--

CREATE TABLE IF NOT EXISTS `deal_props` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `prop_val` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `deal_props`
--

INSERT INTO `deal_props` (`id`, `deal_id`, `prop_id`, `prop_val`) VALUES
(1, 1, 1, 'hotel name11'),
(3, 1, 5, '11-12-2014');

-- --------------------------------------------------------

--
-- Table structure for table `media_files`
--

CREATE TABLE IF NOT EXISTS `media_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL,
  `folder` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `file` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `type` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_files`
--

INSERT INTO `media_files` (`id`, `deal_id`, `folder`, `file`, `type`, `updated_at`, `created_at`) VALUES
(1, 8, 'images', 'Foodvood_Red_on_white_CMYK_300dpi.jpg', 1, '2014-12-30 00:15:20', '2014-12-30 00:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `naija_contact`
--

CREATE TABLE IF NOT EXISTS `naija_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_name` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `naija_contact`
--

INSERT INTO `naija_contact` (`id`, `from_name`, `message`, `status`, `created_at`) VALUES
(2, 'sadasd asdasd', 'sadasd asdasd anshuldhiman83@gmail.com dasd asd asdasd asdasdas 1416486122', 0, '2014-11-20 17:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `propertiesmasters`
--

CREATE TABLE IF NOT EXISTS `propertiesmasters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_type` int(11) NOT NULL,
  `property_name` varchar(500) NOT NULL,
  `property` varchar(100) NOT NULL,
  `required` int(1) NOT NULL,
  `prop_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `propertiesmasters`
--

INSERT INTO `propertiesmasters` (`id`, `deal_type`, `property_name`, `property`, `required`, `prop_type`) VALUES
(1, 15, 'Hotel Name', 'hotel_name1', 0, 2),
(5, 15, 'Hotel Name', 'hotel_name2', 0, 3),
(3, 16, 'Hotel Name', 'hotel_name2', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proptypes`
--

CREATE TABLE IF NOT EXISTS `proptypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `proptypes`
--

INSERT INTO `proptypes` (`id`, `prop`) VALUES
(1, 'text'),
(2, 'textarea'),
(3, 'date');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `other_email` varchar(500) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `pic` varchar(200) NOT NULL,
  `active` int(1) NOT NULL,
  `token` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `other_email`, `mobile`, `address`, `pic`, `active`, `token`, `updated_at`, `created_at`) VALUES
(2, '', 'admin', '$2y$10$/e7r/7K8GGDVzUj4AC.Ky.RP1r6OMDUvQ3ilK8D8IVs2pdX2iWvkK', 'vishu.iitd@gmail.com', '', '', '', '', 0, '', '2014-11-17 19:17:45', '2014-11-17 19:17:45');
