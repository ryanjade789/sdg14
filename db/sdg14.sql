-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2023 at 04:38 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdg14`
--

-- --------------------------------------------------------

--
-- Table structure for table `14.4.1`
--

DROP TABLE IF EXISTS `14.4.1`;
CREATE TABLE IF NOT EXISTS `14.4.1` (
  `yes` enum('yes','no') NOT NULL,
  `total` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`total`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `14.4.2`
--

DROP TABLE IF EXISTS `14.4.2`;
CREATE TABLE IF NOT EXISTS `14.4.2` (
  `total` int NOT NULL AUTO_INCREMENT,
  `yes` enum('yes','no') NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `source` varchar(255) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  PRIMARY KEY (`total`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `14.4.3`
--

DROP TABLE IF EXISTS `14.4.3`;
CREATE TABLE IF NOT EXISTS `14.4.3` (
  `total` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `does` enum('yes','no') NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `source` varchar(255) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  PRIMARY KEY (`total`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `14.5.1`
--

DROP TABLE IF EXISTS `14.5.1`;
CREATE TABLE IF NOT EXISTS `14.5.1` (
  `total` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `does` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`total`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `14.5.5`
--

DROP TABLE IF EXISTS `14.5.5`;
CREATE TABLE IF NOT EXISTS `14.5.5` (
  `total` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `does` varchar(255) NOT NULL,
  PRIMARY KEY (`total`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl4_1`
--

DROP TABLE IF EXISTS `tbl4_1`;
CREATE TABLE IF NOT EXISTS `tbl4_1` (
  `total_research` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `total_citation` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`total_research`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl4_1`
--

INSERT INTO `tbl4_1` (`total_research`, `title`, `author`, `year`, `total_citation`, `source`) VALUES
(1, 'SECRET', 'MYSELF', '2012', 212, 'DWADFASED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_2_1`
--

DROP TABLE IF EXISTS `tbl14_2_1`;
CREATE TABLE IF NOT EXISTS `tbl14_2_1` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_2_2`
--

DROP TABLE IF EXISTS `tbl14_2_2`;
CREATE TABLE IF NOT EXISTS `tbl14_2_2` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl14_2_2`
--

INSERT INTO `tbl14_2_2` (`total_number`, `tnumber`, `title`, `description`, `cost`, `fund`) VALUES
(0, 1, 'dsadasd', 'fsadfsd', 23, 'dadas'),
(0, 1, 'dsadasd', 'fsadfsd', 23, 'dadas'),
(0, 1, 'dsadasd', 'fsadfsd', 23, 'dadas'),
(0, 12, 'eqwewedqw', 'dwqdqw', 23, 'qsdqwqd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_2_3`
--

DROP TABLE IF EXISTS `tbl14_2_3`;
CREATE TABLE IF NOT EXISTS `tbl14_2_3` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_3_1`
--

DROP TABLE IF EXISTS `tbl14_3_1`;
CREATE TABLE IF NOT EXISTS `tbl14_3_1` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_3_3`
--

DROP TABLE IF EXISTS `tbl14_3_3`;
CREATE TABLE IF NOT EXISTS `tbl14_3_3` (
  `total_number` int NOT NULL,
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`tnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_3_4`
--

DROP TABLE IF EXISTS `tbl14_3_4`;
CREATE TABLE IF NOT EXISTS `tbl14_3_4` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`total_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_5_2`
--

DROP TABLE IF EXISTS `tbl14_5_2`;
CREATE TABLE IF NOT EXISTS `tbl14_5_2` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_5_3`
--

DROP TABLE IF EXISTS `tbl14_5_3`;
CREATE TABLE IF NOT EXISTS `tbl14_5_3` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl14_5_4`
--

DROP TABLE IF EXISTS `tbl14_5_4`;
CREATE TABLE IF NOT EXISTS `tbl14_5_4` (
  `total_number` int NOT NULL DEFAULT '0',
  `tnumber` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
