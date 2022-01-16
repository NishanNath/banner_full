-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 01:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iawd_nishan`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Head` varchar(150) NOT NULL,
  `Detail` text NOT NULL,
  `images_location` varchar(255) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `Head`, `Detail`, `images_location`, `active_status`) VALUES
(1, 'We are Creative Web Stuff ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!', 'upload/banners/1.jpg', 1),
(3, 'We are Creative Web Stuff', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!', 'upload/banners/3.jpg', 1),
(4, 'We are Creative Web Stuff', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!', 'upload/banners/4.jpg', 1),
(5, 'We are Creative Web Stuff', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!', 'upload/banners/5.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
