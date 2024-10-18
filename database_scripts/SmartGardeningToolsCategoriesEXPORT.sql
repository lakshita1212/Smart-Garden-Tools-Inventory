-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 18, 2024 at 01:01 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lm66`
--

-- --------------------------------------------------------

--
-- Table structure for table `SmartGardeningToolsCategories`
--

CREATE TABLE IF NOT EXISTS `SmartGardeningToolsCategories` (
  `ToolCategoryID` int(11) NOT NULL,
  `ToolCategoryCode` varchar(255) NOT NULL,
  `ToolCategoryName` varchar(255) NOT NULL,
  `ToolShelfNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `SmartGardeningToolsCategories`
--

INSERT INTO `SmartGardeningToolsCategories` (`ToolCategoryID`, `ToolCategoryCode`, `ToolCategoryName`, `ToolShelfNumber`, `DateCreated`) VALUES
(100, 'SWS', 'Smart Watering System', 1, '2024-10-15 23:39:42'),
(200, 'SMS', 'Soil Moisture Sensor', 2, '2024-10-15 23:41:15'),
(300, 'APP', 'Automated Plant Pot', 3, '2024-10-15 23:41:46'),
(400, 'SGL', 'Smart Garden Light', 4, '2024-10-15 23:45:35'),
(500, 'WRIC', 'Weather Responsive Irrigation Controller', 5, '2024-10-15 23:47:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SmartGardeningToolsCategories`
--
ALTER TABLE `SmartGardeningToolsCategories`
 ADD PRIMARY KEY (`ToolCategoryID`), ADD UNIQUE KEY `ToolCategoryCode` (`ToolCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
