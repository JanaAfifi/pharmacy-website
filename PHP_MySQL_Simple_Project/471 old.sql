-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2022 at 03:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `471`
--

DROP TABLE IF EXISTS appointment;
DROP TABLE IF EXISTS assistant;
DROP TABLE IF EXISTS followup;
DROP TABLE IF EXISTS inventoryorder;
DROP TABLE IF EXISTS inventory_item;
DROP TABLE IF EXISTS manager;
DROP TABLE IF EXISTS pharmacist;
DROP TABLE IF EXISTS employee;
DROP TABLE IF EXISTS patient;
DROP TABLE IF EXISTS patient_allergy;
DROP TABLE IF EXISTS prescription;
DROP TABLE IF EXISTS doctor;
DROP TABLE IF EXISTS delivery;
DROP TABLE IF EXISTS vaccine_record;


-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Type1` varchar(30) NOT NULL,
  `SSN` char(9) NOT NULL,
  `PHN` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Date`, `Time`, `Type1`, `SSN`, `PHN`) VALUES
('0000-00-00', '23:59:00', 'Rachel', '123', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

CREATE TABLE `assistant` (
  `SSN` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`SSN`) VALUES
('123456777');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` varchar(15) NOT NULL,
  `Shipping_date` date DEFAULT NULL,
  `Delivery_date` date NOT NULL,
  `Confirmation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DeliveryID`, `Shipping_date`, `Delivery_date`, `Confirmation`) VALUES
('123', '2022-12-01', '2022-12-02', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `License_number` varchar(15) NOT NULL,
  `SPECIALTY` varchar(20) DEFAULT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Phone_number` varchar(15) DEFAULT NULL,
  `Office_address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`License_number`, `SPECIALTY`, `First_Name`, `Last_Name`, `Phone_number`, `Office_address`) VALUES
('123', 'gi', 'samu', 'khan', '123456', 'uni drive');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `SSN` char(9) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Phone_number` varchar(15) DEFAULT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Job_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`SSN`, `First_Name`, `Last_Name`, `Address`, `Salary`, `Phone_number`, `Username`, `Password`, `Job_type`) VALUES
('123456777', 'Jana', 'Afifi', 'Calgary', '10000.00', '123-456-7891', 'jafifi', '471', 'Assistant'),
('123456788', 'Ammar', 'Elzeftawy', 'Calgary', '10000.00', '123-456-7891', 'aelzeftawy', '471', 'Pharmacist'),
('123456789', 'Rachel', 'Dalton', 'Calgary', '10000.00', '123-456-7891', 'rdalton', '471', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `Date` date NOT NULL,
  `Notes` varchar(100) NOT NULL,
  `SSN` char(9) NOT NULL,
  `PrescriptionID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventoryorder`
--

CREATE TABLE `inventoryorder` (
  `OrderID` varchar(15) NOT NULL,
  `Order_date` date NOT NULL,
  `Delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `inventoryorder`
--

INSERT INTO `inventoryorder` (`OrderID`, `Order_date`, `Delivery_date`) VALUES
('123', '2022-12-01', '2022-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_item`
--

CREATE TABLE `inventory_item` (
  `DIN` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Cost_per_item` decimal(10,2) NOT NULL,
  `Min_allowable` decimal(10,0) NOT NULL,
  `Max_allowable` decimal(10,0) NOT NULL,
  `Info` varchar(100) NOT NULL,
  `Quantity_on_hand` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `inventory_item`
--

INSERT INTO `inventory_item` (`DIN`, `Name`, `Cost_per_item`, `Min_allowable`, `Max_allowable`, `Info`, `Quantity_on_hand`) VALUES
('123', 'medi', '25.00', '1', '17', 'noljg', '25');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `SSN` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`SSN`) VALUES
('123456789');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PHN` char(9) NOT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Phone_number` varchar(15) DEFAULT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PHN`, `Address`, `First_Name`, `Last_Name`, `Phone_number`, `Date_of_birth`) VALUES
('122', 'HJVJVMHV', 'samu', 'GJKJB', '55454', '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `patient_allergy`
--

CREATE TABLE `patient_allergy` (
  `PHN` char(9) NOT NULL,
  `Allergy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `SSN` char(9) NOT NULL,
  `License_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`SSN`, `License_number`) VALUES
('123456788', '12345'),
('123456789', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `PrescriptionID` varchar(15) NOT NULL,
  `Date` date DEFAULT NULL,
  `Workflow_state` varchar(15) DEFAULT NULL,
  `PHN` char(9) NOT NULL,
  `SSN` char(9) NOT NULL,
  `License_number` varchar(15) NOT NULL,
  `DeliveryID` varchar(15) NOT NULL,
  `DIN` varchar(15) NOT NULL,
  `QUANTITY` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_record`
--

CREATE TABLE `vaccine_record` (
  `DIN` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `SSN` char(9) NOT NULL,
  `DoseNumber` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vaccine_record`
--

INSERT INTO `vaccine_record` (`DIN`, `Date`, `SSN`, `DoseNumber`) VALUES
('123', '2022-12-01', '123456788', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Time`),
  ADD UNIQUE KEY `PHN` (`PHN`);

--
-- Indexes for table `assistant`
--
ALTER TABLE `assistant`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`License_number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`Date`),
  ADD UNIQUE KEY `PrescriptionID` (`PrescriptionID`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `inventoryorder`
--
ALTER TABLE `inventoryorder`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `inventory_item`
--
ALTER TABLE `inventory_item`
  ADD PRIMARY KEY (`DIN`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PHN`);

--
-- Indexes for table `patient_allergy`
--
ALTER TABLE `patient_allergy`
  ADD PRIMARY KEY (`PHN`, `Allergy`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`PrescriptionID`),
  ADD KEY `PHN` (`PHN`),
  ADD KEY `SSN` (`SSN`),
  ADD KEY `License_number` (`License_number`),
  ADD KEY `DeliveryID` (`DeliveryID`),
  ADD KEY `DIN` (`DIN`);

--
-- Indexes for table `vaccine_record`
--
ALTER TABLE `vaccine_record`
  ADD KEY `DIN` (`DIN`),
  ADD KEY `SSN` (`SSN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assistant`
--
ALTER TABLE `assistant`
  ADD CONSTRAINT `assistant_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `employee` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followup`
--
ALTER TABLE `followup`
  ADD CONSTRAINT `followup_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `pharmacist` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followup_ibfk_2` FOREIGN KEY (`PrescriptionID`) REFERENCES `prescription` (`PrescriptionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `pharmacist` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_allergy`
--
ALTER TABLE `patient_allergy`
  ADD CONSTRAINT `patient_allergy_ibfk_1` FOREIGN KEY (`PHN`) REFERENCES `patient` (`PHN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `pharmacist_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `employee` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`PHN`) REFERENCES `patient` (`PHN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`SSN`) REFERENCES `pharmacist` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`License_number`) REFERENCES `doctor` (`License_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_4` FOREIGN KEY (`DeliveryID`) REFERENCES `delivery` (`DeliveryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_5` FOREIGN KEY (`DIN`) REFERENCES `inventory_item` (`DIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vaccine_record`
--
ALTER TABLE `vaccine_record`
  ADD CONSTRAINT `vaccine_record_ibfk_1` FOREIGN KEY (`DIN`) REFERENCES `inventory_item` (`DIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaccine_record_ibfk_2` FOREIGN KEY (`SSN`) REFERENCES `pharmacist` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
