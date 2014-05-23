-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 08:00 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nwpu_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `nwpu_projetct`
--

CREATE TABLE IF NOT EXISTS `nwpu_projetct` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `psid` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '项目相关人员',
  `plid` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '项目相关论文',
  `pzid` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '项目相关专利',
  `prid` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '项目相关软件著作权',
  `brife` varchar(2047) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
