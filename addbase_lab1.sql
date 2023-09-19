-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 08:20 PM
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
('I001', 'Flour', '1 kg', '2.50', 'Grains', 500, 'S0001'),
('I002', 'Tomatoes', '1 kg', '3.20', 'Vegetables', 300, 'S0001'),
('I003', 'Chicken', '1 kg', '5.75', 'Meat', 200, 'S0002'),
('I004', 'Cheese', '1 kg', '6.80', 'Dairy', 150, 'S0002'),
('I005', 'Lettuce', '1 kg', '2.30', 'Vegetables', 100, 'S0001'),
('I006', 'Onions', '1 kg', '1.80', 'Vegetables', 400, 'S0001'),
('I007', 'Beef', '1 kg', '7.50', 'Meat', 250, 'S0002'),
('I008', 'Eggs', '1 dozen', '2.00', 'Dairy', 300, 'S0003'),
('I009', 'Rice', '1 kg', '2.80', 'Grains', 350, 'S0001'),
('I010', 'Potatoes', '1 kg', '2.10', 'Vegetables', 200, 'S0001'),
('I011', 'Salmon', '1 kg', '9.50', 'Seafood', 100, 'S0004'),
('I012', 'Olive Oil', '1 liter', '4.50', 'Condiments', 150, 'S0005'),
('I013', 'Spinach', '1 kg', '3.00', 'Vegetables', 120, 'S0001'),
('I014', 'Cucumbers', '1 kg', '2.40', 'Vegetables', 180, 'S0001'),
('I015', 'Pork', '1 kg', '6.25', 'Meat', 220, 'S0002'),
('I016', 'Milk', '1 liter', '2.75', 'Dairy', 400, 'S0003'),
('I017', 'Bread', '1 loaf', '1.50', 'Grains', 300, 'S0001'),
('I018', 'Shrimp', '1 kg', '8.75', 'Seafood', 90, 'S0004'),
('I019', 'Bell Peppers', '1 kg', '3.00', 'Vegetables', 150, 'S0001'),
('I020', 'Cheddar Cheese', '1 kg', '7.00', 'Dairy', 180, 'S0002'),
('I021', 'Avocado', '1 piece', '1.80', 'Fruits', 200, 'S0006'),
('I022', 'Ground Beef', '1 kg', '6.50', 'Meat', 170, 'S0002'),
('I023', 'Yogurt', '1 kg', '3.25', 'Dairy', 250, 'S0003'),
('I024', 'Broccoli', '1 kg', '2.60', 'Vegetables', 120, 'S0001'),
('I025', 'Tofu', '1 kg', '3.75', 'Vegetarian', 100, 'S0007'),
('I026', 'Peas', '1 kg', '2.20', 'Vegetables', 180, 'S0001'),
('I027', 'Turkey', '1 kg', '7.00', 'Meat', 150, 'S0002'),
('I028', 'Sour Cream', '1 tub', '2.80', 'Dairy', 130, 'S0003'),
('I029', 'Carrots', '1 kg', '2.00', 'Vegetables', 250, 'S0001'),
('I030', 'Asparagus', '1 kg', '3.50', 'Vegetables', 100, 'S0001');

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
('I001', 'Pizza Margherita', '8.99', '2023-09-01'),
('I002', 'Spaghetti Bolognese', '10.49', '2023-09-02'),
('I003', 'Chicken Alfredo', '11.99', '2023-09-03'),
('I004', 'Cheeseburger', '9.49', '2023-09-04'),
('I005', 'Caesar Salad', '7.99', '2023-09-05'),
('I006', 'Onion Rings', '5.49', '2023-09-06'),
('I007', 'Beef Tacos', '8.99', '2023-09-07'),
('I008', 'Eggs Benedict', '9.99', '2023-09-08'),
('I009', 'Fried Rice', '7.49', '2023-09-09'),
('I010', 'Mashed Potatoes', '4.99', '2023-09-10'),
('I011', 'Grilled Salmon', '12.99', '2023-09-11'),
('I012', 'Caprese Salad', '6.99', '2023-09-12'),
('I013', 'Spinach Dip', '5.49', '2023-09-13'),
('I014', 'Cucumber Salad', '4.99', '2023-09-14'),
('I015', 'BBQ Pulled Pork', '10.99', '2023-09-15'),
('I016', 'Chocolate Milkshake', '6.49', '2023-09-16'),
('I017', 'Garlic Bread', '3.99', '2023-09-17'),
('I018', 'Shrimp Scampi', '12.49', '2023-09-18'),
('I019', 'Stuffed Peppers', '8.49', '2023-09-19'),
('I020', 'Mac \'n\' Cheese', '7.49', '2023-09-20'),
('I021', 'Avocado Toast', '5.99', '2023-09-21'),
('I022', 'Beef Stir-Fry', '11.99', '2023-09-22'),
('I023', 'Yogurt Parfait', '4.99', '2023-09-23'),
('I024', 'Broccoli Soup', '6.49', '2023-09-24'),
('I025', 'Tofu Stir-Fry', '8.49', '2023-09-25'),
('I026', 'Pea Risotto', '7.99', '2023-09-26'),
('I027', 'Turkey Sandwich', '9.49', '2023-09-27'),
('I028', 'Baked Potato', '5.49', '2023-09-28'),
('I029', 'Carrot Cake', '4.99', '2023-09-29'),
('I030', 'Asparagus Salad', '6.99', '2023-09-30');

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
('I001', 'I003', 200),
('I002', 'I001', 300),
('I002', 'I002', 250),
('I002', 'I006', 100),
('I003', 'I005', 150),
('I003', 'I008', 120),
('I003', 'I009', 100),
('I004', 'I006', 200),
('I005', 'I006', 150),
('I005', 'I008', 100),
('I005', 'I013', 120),
('I006', 'I002', 250),
('I006', 'I006', 100),
('I006', 'I007', 150),
('I007', 'I002', 200),
('I007', 'I003', 150),
('I008', 'I006', 100),
('I008', 'I008', 150),
('I008', 'I012', 100),
('I009', 'I001', 200),
('I009', 'I002', 250),
('I009', 'I003', 100),
('I009', 'I006', 150),
('I010', 'I006', 200),
('I010', 'I009', 150),
('I011', 'I003', 200),
('I011', 'I011', 100),
('I012', 'I002', 250),
('I012', 'I012', 120),
('I013', 'I002', 150),
('I013', 'I013', 100);

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
('M001', 'Family', 'Hearty meal for the whole fami'),
('M002', 'Breakfast', 'Delicious breakfast combo.'),
('M003', 'Burger', 'Ultimate burger experience.'),
('M004', 'Veggie', 'Delightful vegetarian meal.'),
('M005', 'Seafood', 'Fresh and delicious seafood.'),
('M006', 'Salad', 'Healthy assortment of salads.'),
('M007', 'Meat', 'For meaty dish lovers.'),
('M008', 'Pasta', 'Paradise for pasta lovers.'),
('M009', 'Snack', 'Variety of tasty snacks.'),
('M010', 'Sweet', 'Satisfy your sweet tooth.'),
('M011', 'Healthy', 'Nutritious start to your day.'),
('M012', 'Asian', 'Fusion of flavors from Asia.'),
('M013', 'Taco', 'Three delicious taco varieties'),
('M014', 'Classic', 'Classic dishes in one combo.'),
('M015', 'Soup & Sal', 'Warm soup and fresh salad comb'),
('M016', 'Breakfast', 'Deluxe breakfast experience.'),
('M017', 'BBQ', 'Barbecue extravaganza.'),
('M018', 'Quick', 'Quick and delicious bites.'),
('M019', 'Spicy', 'Spicy dishes for spice lovers.'),
('M020', 'Italian', 'Feast of Italian cuisine.'),
('M021', 'Tex-Mex', 'Tex-Mex fiesta on your plate.'),
('M022', 'Pizza', 'Variety of pizzas for the part'),
('M023', 'Sushi', 'Sushi lover\'s sensation.'),
('M024', 'Mediterran', 'Mix of Mediterranean flavors.'),
('M025', 'Gourmet', 'Gourmet dishes for food connoi'),
('M026', 'Lunch', 'Special lunch offerings.'),
('M027', 'Dinner', 'Special dinner selections.'),
('M028', 'Happy Hour', 'Enjoy happy hour with drinks a'),
('M029', 'Satisfying', 'Sides that satisfy your cravin'),
('M030', 'Fresh', 'Fresh start to your meal.');

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
('M001', 'Family Feast', '24.99'),
('I002', 'Spaghetti Bolognese', '10.49'),
('I003', 'Chicken Alfredo', '11.99'),
('M003', 'Burger Delight', '12.99'),
('M004', 'Veggie Delight', '9.99'),
('I005', 'Caesar Salad', '7.99'),
('I017', 'Garlic Bread', '3.99'),
('M005', 'Seafood Special', '15.99'),
('M006', 'Salad Sampler', '9.99'),
('I013', 'Spinach Dip', '5.49'),
('M007', 'Meat Lover\'s Feast', '19.99'),
('I007', 'Beef Tacos', '8.99'),
('I015', 'BBQ Pulled Pork', '10.99'),
('I027', 'Turkey Sandwich', '9.49'),
('M008', 'Pasta Paradise', '14.99'),
('I009', 'Fried Rice', '7.49'),
('I010', 'Mashed Potatoes', '4.99'),
('M009', 'Snack Attack', '11.99'),
('M010', 'Sweet Treats', '8.99'),
('I012', 'Caprese Salad', '6.99'),
('M011', 'Healthy Start', '8.99'),
('I022', 'Beef Stir-Fry', '11.99'),
('I028', 'Sour Cream', '2.80'),
('M012', 'Asian Fusion', '13.99'),
('I024', 'Broccoli Soup', '6.49'),
('I025', 'Tofu Stir-Fry', '8.49'),
('M013', 'Taco Trio', '10.99'),
('I026', 'Pea Risotto', '7.99'),
('M014', 'Classic Combo', '13.99'),
('I029', 'Carrot Cake', '4.99'),
('M015', 'Soup & Salad', '10.99'),
('M016', 'Breakfast Deluxe', '11.99'),
('I030', 'Asparagus Salad', '6.99'),
('M017', 'BBQ Bonanza', '15.99'),
('M018', 'Quick Bites', '9.99'),
('M019', 'Spicy Delights', '12.99'),
('M020', 'Italian Feast', '14.99'),
('M021', 'Tex-Mex Fiesta', '12.99'),
('M022', 'Pizza Party', '18.99'),
('M023', 'Sushi Sensation', '16.99'),
('M024', 'Mediterranean Mix', '13.99'),
('M025', 'Gourmet Gastronomy', '17.99'),
('M026', 'Lunch Special', '10.99'),
('M027', 'Dinner Special', '13.99'),
('M028', 'Happy Hour', '7.99'),
('M029', 'Satisfying Sides', '8.99'),
('M030', 'Fresh Start', '6.99');

-- --------------------------------------------------------

--
-- Table structure for table `partof`
--

CREATE TABLE `partof` (
  `mealid` char(5) NOT NULL,
  `itemid` char(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partof`
--

INSERT INTO `partof` (`mealid`, `itemid`, `quantity`, `discount`) VALUES
('M0001', 'I0001', 1, '0.10'),
('M001', 'I001', 1, '0.10'),
('M001', 'I002', 2, '0.10'),
('M001', 'I017', 1, '0.10'),
('M002', 'I008', 2, '0.15'),
('M002', 'I024', 1, '0.15'),
('M002', 'I030', 1, '0.15'),
('M003', 'I004', 1, '0.20'),
('M003', 'I009', 1, '0.20'),
('M004', 'I005', 1, '0.15'),
('M004', 'I020', 1, '0.15'),
('M004', 'I026', 1, '0.15'),
('M005', 'I011', 1, '0.10'),
('M005', 'I018', 1, '0.10'),
('M005', 'I025', 1, '0.10'),
('M006', 'I013', 2, '0.10'),
('M006', 'I029', 1, '0.10'),
('M007', 'I007', 1, '0.15'),
('M007', 'I015', 1, '0.15'),
('M007', 'I022', 1, '0.15'),
('M008', 'I002', 2, '0.10'),
('M008', 'I003', 1, '0.10'),
('M008', 'I006', 1, '0.10'),
('M009', 'I014', 1, '0.20'),
('M009', 'I016', 1, '0.20'),
('M009', 'I027', 1, '0.20'),
('M010', 'I012', 2, '0.15'),
('M010', 'I021', 1, '0.15'),
('M011', 'I008', 1, '0.10'),
('M011', 'I014', 1, '0.10'),
('M011', 'I028', 1, '0.10');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` char(5) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `rep_fname` varchar(20) NOT NULL,
  `rep_lname` varchar(20) NOT NULL,
  `referred_by (FK)` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierid`, `company_name`, `rep_fname`, `rep_lname`, `referred_by (FK)`) VALUES
('S0001', 'Fresh Ingredients', 'John', 'Smith', NULL),
('S0002', 'Quality Suppliers', 'Jane', 'Doe', 'S0001'),
('S0003', 'Food Connect', 'Mike', 'Johnson', NULL),
('S0004', 'Best Supplies Inc.', 'Emily', 'Williams', 'S0002'),
('S0005', 'Gourmet Goods', 'Robert', 'Anderson', NULL),
('S0006', 'Farm to Table', 'Sarah', 'Lee', NULL),
('S0007', 'Green Harvest', 'David', 'Martin', 'S0003'),
('S0008', 'Natural Foods Co.', 'Laura', 'Davis', NULL),
('S0009', 'Fresh Foods Ltd.', 'Kevin', 'Wilson', 'S0004'),
('S0010', 'Organic Suppliers', 'Olivia', 'Brown', 'S0005'),
('S0011', 'Premium Ingredients', 'Michael', 'Turner', 'S0006'),
('S0012', 'Quality Foods', 'Sophia', 'Evans', NULL),
('S0013', 'Farm Fresh', 'William', 'Rodriguez', 'S0007'),
('S0014', 'Food Lovers', 'Emma', 'White', 'S0008'),
('S0015', 'Green Farms Inc.', 'Ethan', 'Hall', 'S0009'),
('S0016', 'Top Quality Goods', 'Ava', 'Martinez', 'S0010'),
('S0017', 'Fresh Picks', 'Noah', 'Lewis', 'S0011'),
('S0018', 'Healthy Harvest', 'Mia', 'Scott', NULL),
('S0019', 'Garden Delights', 'James', 'Harris', 'S0012'),
('S0020', 'Eco-Friendly Foods', 'Charlotte', 'King', 'S0013'),
('S0021', 'Nature\'s Bounty', 'Benjamin', 'Adams', 'S0014'),
('S0022', 'Good Eats Inc.', 'Amelia', 'Nelson', 'S0015'),
('S0023', 'Farm Fresh Direct', 'Liam', 'Carter', 'S0016'),
('S0024', 'Prime Suppliers', 'Harper', 'Wright', 'S0017'),
('S0025', 'Fresh and Tasty', 'Jackson', 'Lopez', 'S0018'),
('S0026', 'Quality Produce', 'Abigail', 'Lewis', 'S0019'),
('S0027', 'Gourmet Delights', 'Sebastian', 'Reed', 'S0020'),
('S0028', 'Natural Harvest', 'Sophia', 'Adams', 'S0021'),
('S0029', 'Green Grocers', 'Daniel', 'Cooper', 'S0022'),
('S0030', 'Farm to Fork', 'Olivia', 'Parker', 'S0023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD KEY `ingredientid` (`ingredientid`),
  ADD KEY `supplierid FK` (`supplierid FK`);

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
  ADD KEY `mealid FK` (`mealid`,`itemid`),
  ADD KEY `itemid FK` (`itemid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD KEY `supplierid` (`supplierid`,`referred_by (FK)`),
  ADD KEY `supplier_check` (`referred_by (FK)`);

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
  ADD CONSTRAINT `partof_ibfk_1` FOREIGN KEY (`mealid`) REFERENCES `meals` (`mealid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partof_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `supplier_check` FOREIGN KEY (`referred_by (FK)`) REFERENCES `suppliers` (`supplierid`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
