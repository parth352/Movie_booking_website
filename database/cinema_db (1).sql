-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 03:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieID` int(11) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `bookingEmail` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ORDERID` varchar(255) NOT NULL,
  `DATE-TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieID`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`, `amount`, `ORDERID`, `DATE-TIME`) VALUES
(73, 1, 'vip-hall', '2d', '14-3', '12-00', 'Parth', 'Patel', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime33131777', '2022-04-08 13:44:24'),
(161, 1, 'vip-hall', '2d', '14-3', '12-00', 'Parth', 'Patel', '1234567890', 'abc@gmail.com', 'Paid', 'MVTime56774939', '2022-04-08 13:40:37'),
(164, 1, 'main-hall', '2d', '12-3', '12-00', 'parth', 'patel', '1234567890', 'abc@gmail.com', 'Paid', 'MVTime85745609', '2022-04-08 14:50:46'),
(165, 1, 'main-hall', '2d', '12-3', '12-00', 'parth', 'patel', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime84566741', '2022-04-08 15:04:39'),
(178, 1, 'main-hall', '3d', '12-3', '15-00', 'Parth', 'Patel', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime14086198', '2022-04-08 16:09:19'),
(179, 1, 'vip-hall', '2d', '13-3', '09-00', 'shyama', 'shodha', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime95400401', '2022-04-08 20:38:34'),
(180, 1, 'main-hall', '2d', '13-3', '15-00', 'abc', 'Patel', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime8700409', '2022-04-09 11:03:04'),
(181, 4, 'main-hall', '2d', '13-3', '09-00', 'abc', 'Patel', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime21282372', '2022-04-09 11:15:24'),
(182, 1, 'main-hall', '3d', '12-3', '12-00', 'Viraj', 'Patel', '123456789.', 'abc@gmail.com', 'Not Paid', 'MVTime9606471', '2022-04-09 11:52:07'),
(183, 1, 'main-hall', '3d', '12-3', '12-00', 'Viraj', 'Patel', '123456789.', 'abc@gmail.com', 'Not Paid', 'MVTime8620437', '2022-04-09 11:53:08'),
(184, 1, 'main-hall', '3d', '12-3', '12-00', 'Viraj', 'Patel', '123456789.', 'abc@gmail.com', 'Not Paid', 'MVTime59903831', '2022-04-09 11:53:32'),
(185, 1, 'main-hall', '3d', '12-3', '12-00', 'Viraj', 'Patel', '123456789.', 'abc@gmail.com', 'Not Paid', 'MVTime34499683', '2022-04-09 11:53:49'),
(186, 2, 'main-hall', '3d', '12-3', '12-00', 'Abc', 'xyz', '1234567890', 'abc@gmail.com', 'Not Paid', 'MVTime20969569', '2022-04-09 12:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(5, 'Parth', 'Patel', 'abc@gmail.com', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  `mainhall` int(11) NOT NULL,
  `viphall` int(11) NOT NULL,
  `privatehall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `mainhall`, `viphall`, `privatehall`) VALUES
(1, 'img/kasmir files.jpg', 'Kashmir Files', 'Drama/Historical', 170, '2022-03-11', 'Vivek Agnihotri', 'Anupam Kher', 200, 300, 400),
(2, 'img/bachan pandey.jpg', 'Bachchhan Paandey', 'Action/Comedy', 146, '2022-04-18', 'Farhad Samji', 'Akshay Kumar, Kriti Sanon', 200, 300, 400),
(3, 'img/radhe shyam.jpg', 'Radhe Shyam', 'Romance/Drama', 128, '2022-04-11', 'Radha Krishna Kumar', 'Prabhas', 200, 300, 400),
(4, 'img/rrr.jpg', 'RRR', 'Action/Drama', 186, '2022-04-24', 'SS Rajamouli', 'Ram charan, JR Ntr', 200, 300, 400),
(5, 'img/thor.jpg', 'Thor', 'Adventure/Action', 173, '2022-07-08', 'Taika Waititi', 'Chris Hemsworth', 200, 300, 400),
(6, 'img/matrix.jpg', 'Matrix', 'Sci-fi/Action', 148, '2021-12-22', 'Lana Wachowski', 'Keanu Reeves', 200, 300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, '123', 'john', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `foreign_key_movieID` (`movieID`),
  ADD KEY `foreign_key_ORDERID` (`ORDERID`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `foreign_key_movieID` FOREIGN KEY (`movieID`) REFERENCES `movietable` (`movieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
