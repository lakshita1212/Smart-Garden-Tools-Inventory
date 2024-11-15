-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 15, 2024 at 04:50 PM
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
-- Table structure for table `SmartGardeningToolsProducts`
--

CREATE TABLE IF NOT EXISTS `SmartGardeningToolsProducts` (
  `ToolProductID` int(11) NOT NULL,
  `ToolProductCode` varchar(10) NOT NULL,
  `ToolProductName` varchar(255) NOT NULL,
  `ToolProductColor` varchar(255) NOT NULL,
  `ToolDescription` text NOT NULL,
  `ToolCategoryID` int(11) NOT NULL,
  `ToolWholesalePrice` decimal(10,2) NOT NULL,
  `ToolListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `SmartGardeningToolsProducts`
--

INSERT INTO `SmartGardeningToolsProducts` (`ToolProductID`, `ToolProductCode`, `ToolProductName`, `ToolProductColor`, `ToolDescription`, `ToolCategoryID`, `ToolWholesalePrice`, `ToolListPrice`, `DateCreated`) VALUES
(1000, 'WEDIK', 'Wi-Fi Enabled Drip Irrigation Kit', 'Forest Green', 'Control your watering schedules remotely through a mobile app for optimal plant moisture. This system ensures efficient water usage while promoting healthy plant growth.', 100, 79.99, 132.99, '2024-10-15 23:58:31'),
(2000, 'BST', 'Bluetooth Sprinkler Timer', 'Navy Blue', 'Easily customize watering times and durations via smartphone connectivity for tailored plant care. The Bluetooth connectivity allows for real-time adjustments and monitoring of your watering schedule.', 100, 39.99, 69.99, '2024-10-16 00:00:12'),
(3000, 'SMBWS', 'Soil Moisture-Based Watering System', 'Terracotta', 'Automatically activates watering based on real-time soil moisture readings, preventing overwatering. This smart system adapts to your plants'' needs, ensuring they receive just the right amount of water.', 100, 89.99, 149.99, '2024-10-16 00:01:37'),
(4000, 'WSMM', 'Wireless Soil Moisture Meter', 'Sage Green', 'Battery-operated device that provides real-time moisture readings and alerts you via smartphone when it''s time to water. The wireless feature allows for easy placement and relocation in your garden or indoor plant setup.', 200, 24.99, 44.99, '2024-10-16 00:03:53'),
(5000, 'MSSP', 'Multi-Sensor Soil Probe', 'Charcoal Gray', 'Measures moisture, pH, and temperature, offering comprehensive data to ensure optimal plant health. The multi-sensor technology provides a complete picture of your soil conditions for informed gardening decisions.', 200, 34.99, 59.99, '2024-10-16 00:04:49'),
(6000, 'SPSMS', 'Solar-Powered Soil Moisture Sensor', 'Sunflower Yellow', 'Eco-friendly sensor that uses solar energy to monitor soil moisture levels and syncs with a mobile app for easy tracking. Its sustainable design eliminates the need for battery replacements while providing continuous soil monitoring.', 200, 29.99, 49.99, '2024-10-16 00:05:43'),
(7000, 'SWP', 'Self-Watering Planter', 'Slate Blue', 'Stylish pot with an integrated reservoir that automatically waters plants based on their specific needs, ideal for busy plant lovers. The self-watering feature ensures consistent moisture levels, reducing the risk of under or overwatering.', 300, 44.99, 79.99, '2024-10-16 00:07:36'),
(8000, 'SPAC', 'Smart Planter with App Control', 'Pearl White', 'Connects to an app to monitor soil moisture and send reminders for essential care tasks. This smart planter takes the guesswork out of plant care, providing timely notifications for watering, fertilizing, and more.', 300, 54.99, 89.99, '2024-10-16 00:08:26'),
(9000, 'LGLIP', 'LED Grow Light Integrated Pot', 'Matte Black', 'Features built-in LED grow lights that adjust according to the plant''s light requirements, ensuring optimal growth indoors. The integrated lighting system mimics natural sunlight, promoting healthy plant development in any indoor environment.', 300, 69.99, 119.99, '2024-10-16 00:09:28'),
(10000, 'SPLGL', 'Solar-Powered LED Garden Lights', 'Brushed Silver', 'Eco-friendly lights that charge during the day and provide adjustable brightness for nighttime illumination of your garden. These versatile lights create a magical atmosphere while being energy-efficient and cost-effective.', 400, 34.99, 59.99, '2024-10-16 00:11:12'),
(11000, 'MSGPL', 'Motion-Sensor Garden Path Lights', 'Bronze', 'Activate automatically when motion is detected, enhancing safety and ambiance in outdoor spaces. These smart lights provide both security and decorative lighting, illuminating your garden paths only when needed.', 400, 39.99, 69.99, '2024-10-16 00:12:01'),
(12000, 'SRGS', 'Smart RGB Garden Spotlights', 'Glossy Black', 'Color-changing spotlights controlled via a smartphone app, allowing users to customize lighting effects for various occasions. Create the perfect ambiance for outdoor gatherings or highlight specific garden features with ease.', 400, 49.99, 84.99, '2024-10-16 00:13:04'),
(13000, 'SIH', 'Smart Irrigation Hub', 'Mint Green', 'Central unit that connects to multiple irrigation systems, adjusting schedules based on local weather forecasts for efficient watering. This smart hub optimizes water usage across your entire garden, saving resources and promoting plant health.', 500, 79.99, 129.99, '2024-10-16 00:15:05'),
(14000, 'RSA', 'Rain Sensor Attachmen', 'Sky Blue', 'Detects rainfall and pauses watering automatically, conserving water and preventing over-irrigation. This simple yet effective attachment ensures your plants receive natural rainwater when available, reducing unnecessary watering cycles.', 500, 19.99, 34.99, '2024-10-16 00:15:38'),
(15000, 'MACIT', 'Mobile App-Controlled Irrigation Timer', 'Graphite Gray', 'Syncs with weather data to optimize watering schedules based on current conditions and forecasts. This mobile-controlled timer allows for remote adjustments and provides insights into your garden''s watering patterns for improved efficiency.', 500, 59.99, 99.99, '2024-10-16 00:16:03'),
(16000, 'FWP', 'Flora Watch Pro', 'Amethyst Purple', '0', 600, 75.00, 149.99, '2024-11-01 21:16:11'),
(17000, 'DGDL', 'Diamond Garden Lights', 'Clear', '0', 700, 45.00, 50.00, '2024-11-15 16:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SmartGardeningToolsProducts`
--
ALTER TABLE `SmartGardeningToolsProducts`
 ADD PRIMARY KEY (`ToolProductID`), ADD UNIQUE KEY `ToolProductCode` (`ToolProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
