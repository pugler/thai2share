-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 07:53 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thai2share`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0=not set, 1=mail, 2=female',
  `telephone` varchar(20) NOT NULL,
  `identity_number` varchar(13) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `postcode` int(5) NOT NULL,
  `newsletter` tinyint(1) NOT NULL COMMENT '0=notsub,1=sub',
  `status` tinyint(1) NOT NULL COMMENT '0=not verify,1=member,2=admin,99=ban',
  `create_date` datetime NOT NULL,
  `verify_date` datetime NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `email`, `firstname`, `lastname`, `gender`, `telephone`, `identity_number`, `birthday`, `address`, `city`, `province`, `postcode`, `newsletter`, `status`, `create_date`, `verify_date`) VALUES
(9, 'y.apichotbavorn@gmail.com', '3ba7e4fa68febff753c9684b2a1b8356', 'y.apichotbavorn@gmail.com', 'YATI', 'APICHOTBAVORN', 1, '+66810881791', '1839900021577', '1984-12-15', '1 Empire Tower 31st Floor', 'Sathon', 'กรุงเทพมหานคร', 10120, 1, 1, '2016-02-28 11:12:53', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
