-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 12:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ride`
--

CREATE TABLE `tbl_ride` (
  `ride_id` int(100) NOT NULL,
  `ride_date` date NOT NULL,
  `from` varchar(250) NOT NULL,
  `to` varchar(100) NOT NULL,
  `cabtype` varchar(100) NOT NULL,
  `total_distance` varchar(500) NOT NULL,
  `luggage` varchar(250) NOT NULL,
  `total_fare` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ride`
--

INSERT INTO `tbl_ride` (`ride_id`, `ride_date`, `from`, `to`, `cabtype`, `total_distance`, `luggage`, `total_fare`, `status`, `customer_user_id`) VALUES
(14, '2021-01-08', 'Charbagh', 'BBD', 'CedSUV', '30', '19', '915', '2', 2),
(15, '2021-01-08', 'Charbagh', 'Faizabad', 'CedSUV', '100', '9.09', '1793', '2', 2),
(16, '2021-01-08', 'Faizabad', 'Gorakhpur', 'CedMini', '110', '191', '1790', '0', 2),
(17, '2021-02-05', 'Indira Nagar', 'Barabanki', 'CedMini', '50', '19', '915', '0', 2),
(18, '2021-02-08', 'Indra Nagar', 'Faizabad', 'CedSUV', '100', '191', '2093', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `customer_user_id` (`customer_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  MODIFY `ride_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD CONSTRAINT `tbl_ride_ibfk_1` FOREIGN KEY (`customer_user_id`) REFERENCES `tbl_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
