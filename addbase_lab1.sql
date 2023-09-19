-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 07:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addbase_lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredientid` char(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `unit` char(10) NOT NULL,
  `unitprice` decimal(5,2) NOT NULL,
  `foodgroup` char(15) NOT NULL,
  `inventory` int(11) NOT NULL,
  `supplierid FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredientid`, `name`, `unit`, `unitprice`, `foodgroup`, `inventory`, `supplierid FK`) VALUES
('2', 'Sugar', '3', '25.00', 'Sweet', 5, '2'),
('3', 'sugar', '4', '25.00', 'sweet', 4, '23');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` char(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `name`, `price`, `dateadded`) VALUES
('', 'Coffee', '25.00', '2023-09-13'),
('5', 'CANE', '35.00', '2023-09-17'),
('0', '', '0.00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `madewith`
--

CREATE TABLE `madewith` (
  `itemid FK` char(5) NOT NULL,
  `ingredientid FK` char(5) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `madewith`
--

INSERT INTO `madewith` (`itemid FK`, `ingredientid FK`, `quantity`) VALUES
('5', '3', 25);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `mealid` char(5) NOT NULL,
  `name` char(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`mealid`, `name`, `description`) VALUES
('1', 'FRUIT TEA', 'tea with rea fruits');

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `menuitemid` char(5) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`menuitemid`, `name`, `price`) VALUES
('4', 'BURGER', '34.00');

-- --------------------------------------------------------

--
-- Table structure for table `partof`
--

CREATE TABLE `partof` (
  `mealid FK` char(5) NOT NULL,
  `itemid FK` char(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partof`
--

INSERT INTO `partof` (`mealid FK`, `itemid FK`, `quantity`, `discount`) VALUES
('1', '5', 34, '0.99');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` char(5) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `rep_fname` varchar(20) NOT NULL,
  `rep_lname` varchar(20) NOT NULL,
  `referred_by (FK)` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierid`, `company_name`, `rep_fname`, `rep_lname`, `referred_by (FK)`) VALUES
('1', 'ABC', 'TRIXIE', 'SORIANO', '1'),
('2', 'def', 'jhenzen', 'jhenzen', '2'),
('3', 'HJK', 'Ken', 'Kene', '3'),
('4', 'lmn', 'angelo', 'angelo', '4'),
('5', 'dex', 'john', 'smith', '5'),
('6', 'efg', 'anne', 'hathaway', '6'),
('7', 'skl', 'jen', 'garcia', '7'),
('8', 'sml', 'chris', 'brown', '8'),
('9', 'abc', 'mark', 'herras', '9'),
('10', 'zyx', 'justin', 'bieber', '10'),
('11', 'std', 'angelo', 'paran', '11'),
('12', 'hij', 'daniel', 'padilla', '12'),
('13', 'lmn', 'samantha', 'chiu', '13'),
('14', 'gps', 'sarah', 'geronimo', '14'),
('15', 'idc', 'francis', 'magalona', '15'),
('16', 'idk', 'cardo', 'dalisay', '16'),
('17', 'qrs', 'juan', 'dela cruz', '17'),
('18', 'pqr', 'rose', 'flores', '18'),
('19', 'hij', 'marrie', 'gil', '19'),
('20', 'ltd', 'mary', 'goround', '20'),
('21', 'nbs', 'jessie', 'jay', '21'),
('22', 'hiq', 'lisa', 'soberano', '22'),
('23', 'its', 'kim', 'jisoo', '23'),
('24', 'ebx', 'nicole', 'mendoza', '24'),
('25', 'des', 'josephine', 'reyes', '25'),
('26', 'dvx', 'kevin', 'tolentino', '26'),
('27', 'fyi', 'michael', 'jackson', '27'),
('28', 'wts', 'ember', 'lim', '28'),
('29', 'fda', 'josh', 'delos santos', '29'),
('30', 'pnp', 'maggie', 'sarap', '30'),
('3', 'ASD', 'TRIXIE ', 'SORIANO', '2'),
('3', 'ASD', 'TRIXIE ', 'SORIANO', '2'),
('1', 'HAKDOG', 'FRANCIS JAY', 'SORIANO', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD KEY `supplierid FK` (`supplierid FK`),
  ADD KEY `ingredientid` (`ingredientid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `madewith`
--
ALTER TABLE `madewith`
  ADD KEY `itemid FK` (`itemid FK`,`ingredientid FK`),
  ADD KEY `ingredientid FK` (`ingredientid FK`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD KEY `mealid` (`mealid`);

--
-- Indexes for table `partof`
--
ALTER TABLE `partof`
  ADD KEY `mealid FK` (`mealid FK`,`itemid FK`),
  ADD KEY `itemid FK` (`itemid FK`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD KEY `referred_by (FK)` (`referred_by (FK)`),
  ADD KEY `supplierid` (`supplierid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`supplierid FK`) REFERENCES `suppliers` (`supplierid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `madewith`
--
ALTER TABLE `madewith`
  ADD CONSTRAINT `madewith_ibfk_1` FOREIGN KEY (`itemid FK`) REFERENCES `items` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `madewith_ibfk_2` FOREIGN KEY (`ingredientid FK`) REFERENCES `ingredients` (`ingredientid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partof`
--
ALTER TABLE `partof`
  ADD CONSTRAINT `partof_ibfk_1` FOREIGN KEY (`mealid FK`) REFERENCES `meals` (`mealid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partof_ibfk_2` FOREIGN KEY (`itemid FK`) REFERENCES `items` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`referred_by (FK)`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
