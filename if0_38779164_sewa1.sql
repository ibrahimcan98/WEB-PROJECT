-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.infinityfree.com
-- Generation Time: Apr 18, 2025 at 07:30 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38779164_sewa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DateOfShoot` date NOT NULL,
  `TimeOfShoot` time NOT NULL,
  `TypeOfShoot` varchar(20) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `PhotoID` int(11) NOT NULL,
  `filePath` varchar(255) DEFAULT NULL,
  `AltText` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`PhotoID`, `filePath`, `AltText`) VALUES
(1, './media/Blessing.png', 'Woman of color stretching on the floor'),
(2, './media/DSC01061.png', 'Young man in black coat and black sunglasses'),
(3, './media/Eduard final.png', NULL),
(5, './media/family2.png', NULL),
(6, './media/family3.png', NULL),
(7, './media/family4.png', NULL),
(8, './media/DSC08442.png', NULL),
(9, './media/portrait.png', NULL),
(10, './media/portrait2.png', NULL),
(12, './media/portrait1.png', NULL),
(13, './media/IMG_1490.png', NULL),
(14, './media/IMG_1501.png', NULL),
(16, './media/Nikita-1-2 copy.png', NULL),
(17, './media/DSC08384.png', NULL),
(18, './media/DSC08377.png', NULL),
(19, './media/DSC08383.png', NULL),
(20, './media/DSC08536.png', NULL),
(22, './media/DSC08442.png', NULL),
(23, './media/DSC08385.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Passcode` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ProfileImg` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Username`, `Passcode`, `Email`, `ProfileImg`) VALUES
(0, NULL, NULL, 'user', '$2y$10$KdrczcDJff69YOatQTTTq.nLcbAKWAMRzu7ZQENB5lJ0OoRsp7gtK', 'user@user.com', NULL),
(0, NULL, NULL, 'ibrahim', '$2y$10$FMfo2QGMGXrhtPMniZqUPeNLx4KKYY7.FgNC.js08RNHTr6ttl5y2', 'ibrahim@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
