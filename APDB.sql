-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2024 at 03:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `APDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Airline`
--

CREATE TABLE `Airline` (
  `Airline_ID` bigint(20) UNSIGNED NOT NULL,
  `Three_digit_code` varchar(3) NOT NULL,
  `AL_name` varchar(100) NOT NULL,
  `AP_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Airline`
--

INSERT INTO `Airline` (`Airline_ID`, `Three_digit_code`, `AL_name`, `AP_name`) VALUES
(11111, '111', 'Flynas', 'Hurghada Airport'),
(12345, '123', 'EgyptAir', 'Borg elarab airport');

-- --------------------------------------------------------

--
-- Table structure for table `Airport`
--

CREATE TABLE `Airport` (
  `City` varchar(15) NOT NULL,
  `AP_name` varchar(100) NOT NULL,
  `Country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Airport`
--

INSERT INTO `Airport` (`City`, `AP_name`, `Country`) VALUES
('Alexandria', 'Borg elarab airport', 'Egypt'),
('Hurghada', 'Hurghada Airport', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `DOB` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cancel`
--

CREATE TABLE `Cancel` (
  `Surcharge` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `SSN` int(14) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Age` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Job_type` int(11) NOT NULL,
  `Fname` int(15) NOT NULL,
  `Lname` int(15) NOT NULL,
  `AP_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Flight`
--

CREATE TABLE `Flight` (
  `Flight_code` varchar(10) NOT NULL,
  `Departure_time` datetime NOT NULL,
  `Departure_AP` varchar(50) NOT NULL,
  `DOF` date NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Duration` time NOT NULL,
  `Arrival_AP` varchar(50) NOT NULL,
  `Arrival_time` datetime NOT NULL,
  `Airline_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Flight`
--

INSERT INTO `Flight` (`Flight_code`, `Departure_time`, `Departure_AP`, `DOF`, `Status`, `Duration`, `Arrival_AP`, `Arrival_time`, `Airline_ID`) VALUES
('AA123', '2023-12-31 12:00:00', 'New York (JFK)', '2023-12-31', 'boarding', '04:00:00', 'Hurghada (HRG)', '2023-12-31 12:00:00', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `Passenger`
--

CREATE TABLE `Passenger` (
  `Passport_No` varchar(9) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Luggage` int(11) DEFAULT NULL,
  `Flight_code` varchar(10) DEFAULT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Passenger`
--

INSERT INTO `Passenger` (`Passport_No`, `Fname`, `Lname`, `Phone`, `Email`, `Luggage`, `Flight_code`, `Password`) VALUES
('A12345678', 'ahmed', 'elshennawy', 1024993554, 'a.elshennawy282@gmail.com', 1, 'AA123', '12345678'),
('E12345678', 'kevin', 'halabi', 112323265, 'kevinHalabi@gmail.com', NULL, NULL, '$2y$10$WFaznN49O.I3CLujVzfFY.PsLMp1y4d4AoTb1OfIblij6izSLIYtK'),
('F12345678', 'mohamed', 'elshennawy', 283748939, 'Medoshenno@gmail.com', NULL, NULL, '$2y$10$fOOkTlkLOjGkIkWIZFayiuCkVH/pCA/J0S9JDhKjVdNv94cAjRFu6');

-- --------------------------------------------------------

--
-- Table structure for table `Ticket`
--

CREATE TABLE `Ticket` (
  `Ticket_No` int(10) NOT NULL,
  `Price` float NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Seat_No` varchar(5) NOT NULL,
  `Passport_No` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Airline`
--
ALTER TABLE `Airline`
  ADD PRIMARY KEY (`Airline_ID`),
  ADD UNIQUE KEY `Airline_ID` (`Airline_ID`),
  ADD KEY `Contains` (`AP_name`);

--
-- Indexes for table `Airport`
--
ALTER TABLE `Airport`
  ADD PRIMARY KEY (`AP_name`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Flight`
--
ALTER TABLE `Flight`
  ADD PRIMARY KEY (`Flight_code`),
  ADD UNIQUE KEY `Airline_ID` (`Airline_ID`);

--
-- Indexes for table `Passenger`
--
ALTER TABLE `Passenger`
  ADD PRIMARY KEY (`Passport_No`),
  ADD KEY `Carries` (`Flight_code`);

--
-- Indexes for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`Ticket_No`),
  ADD KEY `Book` (`Passport_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Airline`
--
ALTER TABLE `Airline`
  MODIFY `Airline_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `Flight`
--
ALTER TABLE `Flight`
  MODIFY `Airline_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Airline`
--
ALTER TABLE `Airline`
  ADD CONSTRAINT `Contains` FOREIGN KEY (`AP_name`) REFERENCES `Airport` (`AP_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Flight`
--
ALTER TABLE `Flight`
  ADD CONSTRAINT `Has` FOREIGN KEY (`Airline_ID`) REFERENCES `Airline` (`Airline_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Passenger`
--
ALTER TABLE `Passenger`
  ADD CONSTRAINT `Carries` FOREIGN KEY (`Flight_code`) REFERENCES `Flight` (`Flight_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD CONSTRAINT `Book` FOREIGN KEY (`Passport_No`) REFERENCES `Passenger` (`Passport_No`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
