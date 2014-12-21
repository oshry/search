-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2014 at 10:38 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `pos` int(6) NOT NULL AUTO_INCREMENT,
  `model` varchar(128) NOT NULL,
  `price` varchar(120) NOT NULL,
  `image` varchar(128) NOT NULL,
  `continent` varchar(128) NOT NULL,
  KEY `pos` (`pos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`pos`, `model`, `price`, `image`, `continent`) VALUES
(1, 'Opel Corsa', '70,000', '', 'Europe'),
(2, 'Mitsubishi Lancer', '100,000', '', 'Asia'),
(3, 'Mazda 3', '120,000', '', 'Asia'),
(4, 'Honda Civic', '70,000', '', 'Asia'),
(5, 'Volvo', '180,000', '', 'Europe'),
(6, 'Toyota Corolla', '125,000', '', 'Asia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
