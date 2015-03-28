-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2015 at 05:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `is_team` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `level`, `sport_id`, `parent_id`, `is_team`, `created_at`, `updated_at`) VALUES
(1, 'South American', 1, 3, 0, 0, '2015-02-21 04:51:44', '2015-02-21 04:51:44'),
(2, 'European', 1, 3, 0, 0, '2015-02-21 04:52:43', '2015-02-21 04:52:43'),
(3, 'African', 1, 3, 0, 0, '2015-02-21 04:53:26', '2015-02-21 04:53:26'),
(4, 'Asian', 1, 3, 0, 0, '2015-02-21 04:53:38', '2015-02-21 04:53:38'),
(5, 'La Liga', 2, 3, 2, 0, '2015-02-21 04:53:53', '2015-02-21 04:53:53'),
(6, 'Premier League', 2, 3, 2, 0, '2015-02-21 04:54:13', '2015-02-21 04:54:13'),
(7, 'Bundesliga', 2, 3, 2, 0, '2015-02-21 04:54:30', '2015-02-21 04:54:30'),
(8, 'Series A', 2, 3, 2, 0, '2015-02-21 04:54:55', '2015-02-21 04:54:55'),
(9, 'Real Madrid', 3, 3, 5, 1, '2015-02-21 06:14:45', '2015-02-21 06:14:45'),
(10, 'Barcelona', 3, 3, 5, 0, '2015-02-21 05:46:53', '2015-02-21 05:46:53'),
(11, 'Ferrari', 1, 4, 0, 1, '2015-02-21 05:58:36', '2015-02-21 05:58:36'),
(12, 'McLaren', 1, 4, 0, 1, '2015-02-21 05:58:49', '2015-02-21 05:58:49'),
(13, 'Mercedes', 1, 4, 0, 1, '2015-02-21 06:00:41', '2015-02-21 06:00:41');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `media_files`
--

INSERT INTO `media_files` (`id`, `deal_id`, `folder`, `file`, `type`, `updated_at`, `created_at`) VALUES
(1, 8, 'images', 'Foodvood_Red_on_white_CMYK_300dpi.jpg', 1, '2014-12-29 18:45:20', '2014-12-29 18:45:20'),
(3, 1, 'images', 'Foodvood_Red_on_white_CMYK_300dpi.jpg', 0, '2014-12-29 20:38:47', '2014-12-29 20:38:47'),
(4, 1, 'images', 'New_file.jpg', 0, '2014-12-29 20:38:51', '2014-12-29 20:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sport` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sport`, `created_at`, `updated_at`) VALUES
(3, 'Football', '2015-02-20 17:53:39', '2015-02-20 17:53:39'),
(4, 'Formula 1', '2015-02-21 05:58:07', '2015-02-21 05:58:07');

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
  `remember_token` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `other_email`, `mobile`, `address`, `pic`, `active`, `remember_token`, `updated_at`, `created_at`) VALUES
(2, '', 'admin', '$2y$10$/e7r/7K8GGDVzUj4AC.Ky.RP1r6OMDUvQ3ilK8D8IVs2pdX2iWvkK', 'vishu.iitd@gmail.com', '', '', '', '', 0, 'A2BYgBDaUP9jCexEpeda8pwCKT6URvkCq30HsMboTZf7xlmA4me7Rsl6DWGY', '2015-02-20 16:56:33', '2014-11-17 13:47:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
