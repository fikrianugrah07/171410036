-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2019 at 10:36 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_smsgateway`
--

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Number` text CHARACTER SET utf8 NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `is_public` enum('true','false') CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbk`
--


-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text CHARACTER SET utf8 NOT NULL,
  `ID` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `is_public` enum('true','false') CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbk_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_used`
--

CREATE TABLE IF NOT EXISTS `sms_used` (
  `id_sms_used` int(11) NOT NULL,
  `sms_date` date NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `out_sms_count` int(11) NOT NULL,
  `in_sms_count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_used`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(12) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_inbox`
--

CREATE TABLE IF NOT EXISTS `user_inbox` (
  `id_inbox` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `trash` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_outbox`
--

CREATE TABLE IF NOT EXISTS `user_outbox` (
  `id_outbox` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_outbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_setting`
--

CREATE TABLE IF NOT EXISTS `user_setting` (
  `id_user` varchar(11) NOT NULL,
  `theme` varchar(10) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `permanent_delete` enum('true','false') NOT NULL,
  `paging` int(2) NOT NULL DEFAULT '10',
  `bg_image` varchar(50) NOT NULL,
  `delivery_report` enum('true','false') NOT NULL,
  `language` varchar(20) NOT NULL,
  `conversation_sort` enum('true','false') NOT NULL,
  `country_code` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_setting`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
