-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `beautician` varchar(255) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `date`, `timeslot`, `beautician`, `status`) VALUES
(70, 'pavani', 'p@gmail.com', '2020-06-09', '11:20AM-11:30AM', '', 'Approved'),
(71, 'pavani', 'pavaniwasana22@gmail.com', '2020-07-08', '11:20AM-11:30AM', '', 'Approved'),
(72, 'manori', 'manori@gmail.com', '2020-07-08', '10:20AM-10:30AM', '', 'Approved'),
(73, 'hansika', 'admin@admin.com', '2020-06-10', '11:20AM-11:30AM', '', 'Not Approved'),
(74, 'hansika', 'pavaniwasana22@gmail.com', '2020-06-10', '12:20PM-12:30PM', '', 'Not Approved'),
(75, 'prageeth', 'pp@gmail.com', '2020-06-16', '09:00AM-09:30AM', '', 'Not Approved'),
(76, 'thilina', 't@gmail.com', '2020-06-16', '12:00PM-12:30PM', 'Array', 'Not Approved'),
(77, 'thilina', 't@gmail.com', '2020-06-16', '11:30AM-12:00PM', 'Bags', 'Approved'),
(78, 'thilina', 't@gmail.com', '2020-06-16', '15:00PM-15:30PM', 'Box', 'Approved'),
(79, 'thilina', 't@gmail.com', '2020-06-16', '12:30PM-13:00PM', 'Bottles', 'Not Approved'),
(80, 'thilina', 't@gmail.com', '2020-06-16', '18:00PM-18:30PM', 'Nishie', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL,
  `brand_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `category_id`, `brand_name`, `brand_status`) VALUES
(25, 25, 'Janet', 'active'),
(26, 22, 'Vasline', 'active'),
(27, 26, 'Dreamron', 'active'),
(28, 28, 'Jovees', 'active'),
(29, 20, 'Nature Secrets', 'active'),
(30, 29, 'Janet', 'active'),
(31, 19, 'Himalaya', 'active'),
(32, 27, 'GUCCI', 'active'),
(33, 27, 'Paris', 'active'),
(34, 18, 'Dreamron', 'active'),
(35, 18, 'Keune', 'active'),
(36, 30, 'British Cosmetics', 'active'),
(37, 30, 'Golden Rose', 'active'),
(38, 30, 'MAC', 'active'),
(39, 31, 'Bio Glow', 'active'),
(40, 31, 'CareX', 'active'),
(41, 20, 'Janet', 'active'),
(42, 33, 'Dreamron', 'active'),
(43, 34, 'vasline', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(17, 'Nail Polish', 'active'),
(18, 'Hair Cream', 'active'),
(19, 'Facial Cream', 'active'),
(20, 'Face Cream', 'active'),
(21, 'Moisturizers', 'active'),
(22, 'Body Lotion', 'active'),
(23, 'Hair Gel', 'active'),
(24, 'Hair Pack', 'active'),
(25, 'Body Cream', 'active'),
(26, 'Colour Cosmetics', 'active'),
(27, 'Fragrances', 'active'),
(28, 'Eye Care Products', 'active'),
(29, 'Face Powders', 'active'),
(30, 'Lipstics', 'active'),
(31, 'MakeUp', 'active'),
(32, 'Body Cream', 'active'),
(33, 'gel', 'active'),
(34, 'Body Cream', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE `customer_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`id`, `name`, `username`, `email`, `mobileNo`, `password`, `gender`) VALUES
(54, 'prageeth', 'prageeth', 'p@gmail.com', 1234567890, '4d7418ceaff88beb07368137c2369ecd', 'female'),
(55, 'thilina', 'thilina', 't@gmail.com', 1234567890, '4d7418ceaff88beb07368137c2369ecd', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_order`
--

CREATE TABLE `inventory_order` (
  `inventory_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_order_total` double(10,2) NOT NULL,
  `inventory_order_date` date NOT NULL,
  `inventory_order_name` varchar(255) NOT NULL,
  `inventory_order_address` text NOT NULL,
  `payment_status` enum('cash','credit') NOT NULL,
  `inventory_order_status` varchar(100) NOT NULL,
  `inventory_order_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_order`
--

INSERT INTO `inventory_order` (`inventory_order_id`, `user_id`, `inventory_order_total`, `inventory_order_date`, `inventory_order_name`, `inventory_order_address`, `payment_status`, `inventory_order_status`, `inventory_order_created_date`) VALUES
(30, 1, 980.00, '2020-05-26', 'Hansika', 'Hansika, Galle', 'cash', 'active', '2020-05-26'),
(31, 1, 1960.00, '2020-05-28', 'Chamini', 'Chamini, Ambalantota', 'credit', 'active', '2020-05-26'),
(32, 12, 784.00, '2020-07-08', 'rishan', 'wjfbjhebgjerbgfb', 'credit', 'active', '2020-06-07'),
(33, 1, 180.00, '2020-07-09', 'dewmith', 'asdgduhgasj', 'cash', 'active', '2020-06-07'),
(34, 1, 900.00, '2020-07-05', 'rishan', 'tgyhgj', 'cash', 'active', '2020-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_order_product`
--

CREATE TABLE `inventory_order_product` (
  `inventory_order_product_id` int(11) NOT NULL,
  `inventory_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `tax` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_order_product`
--

INSERT INTO `inventory_order_product` (`inventory_order_product_id`, `inventory_order_id`, `product_id`, `quantity`, `price`, `tax`) VALUES
(84, 30, 27, 5, 200.00, -2.00),
(85, 31, 27, 10, 200.00, -2.00),
(86, 32, 27, 2, 200.00, -2.00),
(87, 32, 27, 2, 200.00, -2.00),
(88, 33, 28, 2, 100.00, -10.00),
(89, 34, 29, 10, 100.00, -10.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_description` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_unit` varchar(150) NOT NULL,
  `product_base_price` double(10,2) NOT NULL,
  `product_tax` decimal(4,2) NOT NULL,
  `product_minimum_order` double(10,2) NOT NULL,
  `product_enter_by` int(11) NOT NULL,
  `product_status` enum('active','inactive') NOT NULL,
  `product_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_description`, `product_quantity`, `product_unit`, `product_base_price`, `product_tax`, `product_minimum_order`, `product_enter_by`, `product_status`, `product_date`) VALUES
(27, 22, 26, 'Whitening Lotion', 'Provides moisture', 10, 'Bottles', 200.00, '-2.00', 0.00, 1, 'active', '2020-05-26'),
(28, 33, 42, 'Hair Gel', 'fbfgndfbb', 100, 'Bottles', 100.00, '-10.00', 0.00, 1, 'active', '2020-06-07'),
(29, 34, 43, 'Saffron Cream', 'tfytfy', 100, 'Bottles', 100.00, '-10.00', 0.00, 1, 'active', '2020-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `photo`, `name`, `email`, `phone`, `role`) VALUES
(10, 'uploads/indt1.jpg', 'Manori', 'manori@gmail.com', '0715678990', 'Main Beautician'),
(11, 'uploads/indt2.jpg', 'Nishie', 'nishie@gmail.com', '0705696136', 'Hair Stylist'),
(12, 'uploads/ser4.jpg', 'nishie', 'nishie@gmail.com', '0716587909', 'beautician'),
(13, 'uploads/', 'g', 'admin@admin.com', '0705696136', 'beautician'),
(14, '', 'p. pavani wasana', 'pavaniwasana22@gmail.com', '0715678990', 'beauticians'),
(15, 'uploads/', 'pavi', 'p@gmail.com', '0715678990', 'hair'),
(16, 'uploads/', 'p. pavani wasana', 'admin@admin.com', '0705696136', 'hair'),
(17, 'uploads/', 'pavani', 'admin@admin.com', '0715678990', 'Main Beautician'),
(19, 'uploads/', 'p. pavani wasana', 'p@gmail.com', '0705696136', 'beautician'),
(20, 'uploads/', 'dfg', 'admin@admin.com', 'gfv', 'gv'),
(21, 'uploads/', 'rdrt', 'p@gmail.com', '0715678990', 'hair'),
(22, 'uploads/', 'pavani', 'p@gmail.com', '0705696136', 'beautician'),
(23, 'uploads/inds3.jpg', 'manori', 'pavaniwasana22@gmail.com', '0715678990', 'beautician'),
(24, 'uploads/', 'pavani', 'pavaniwasana22@gmail.com', '0705696136', 'beautician'),
(25, 'uploads/', 'pavi', 'nishie@gmail.com', '0705696136', 'beautician');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`, `user_type`, `user_status`) VALUES
(1, 'manori@gmail.com', '$2y$10$0Yo2F.EetL3yhB8l6MNvcOH8AYNS0SuXLOoAQr1qXJa3uPASWV0NC', 'Manori Pieris', 'master', 'Active'),
(2, 'hansika@gmail.com', '$2y$10$ExKsoPsKQWsbYMuLH9Fj.O9Yku55guxaUBw17Ka9SVgDGXMti1rUq', 'Hansika', 'user', 'Active'),
(3, 'rosy@gmail.com', '$2y$10$Ta/QuB2I2y4O3hkP1L7L4ubFv.EEupyKAsszAsQRS/GEk0U3UvMlm', 'Rosy', 'user', 'Active'),
(4, 'perera@gmail.com', '$2y$10$2II/.amS5s0DjSwt028RC.uwI16zPKuVtN/jqS4OfMgJFQQctRQWu', 'Nishie Perera', 'user', 'Active'),
(5, 'wasana@gmail.com', '$2y$10$3EPi5o54uqTGi5nY.RJxwusIKfZ7YbmIr/NgBj03KKJbRRiO3sTVi', 'Wasana', 'user', 'Active'),
(6, 'ashini@gmail.com', '$2y$10$csG2SlouG2E92EV.9NEV5O928iPsPcD3vgNfPjh.LH2yG6XlWcZQi', 'Ashini', 'user', 'Active'),
(8, 'roshana@gmail.com', '$2y$10$KB82x.IZPdsnWu2A7hEGBupvpO5e7uBezGrME9Qi74WNIAaGZGOMa', 'Roshana', 'user', 'Inactive'),
(10, 'nishie@gmail.com', '$2y$10$glTRkb8mof4SBoBVXhfUn.EOd3qc0LSLStc2rrvaPQ90GRmx4GVVO', 'Nishie', 'user', 'Active'),
(11, 'p@gmail.com', '$2y$10$pVusHGg6vIN.jlT7EGRoW.se7y.6afAJGlRe4Gd.NCfhIbXq3A6DK', 'pavani', 'user', 'Active'),
(12, 'hansika@gmail.com', '$2y$10$DVaVAJKvQZU9V2iwZnkwiekWM16BMXcNda6nBnYwoNbkaUq6Fs6bK', 'hansika', 'user', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_order`
--
ALTER TABLE `inventory_order`
  ADD PRIMARY KEY (`inventory_order_id`);

--
-- Indexes for table `inventory_order_product`
--
ALTER TABLE `inventory_order_product`
  ADD PRIMARY KEY (`inventory_order_product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customer_register`
--
ALTER TABLE `customer_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `inventory_order`
--
ALTER TABLE `inventory_order`
  MODIFY `inventory_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `inventory_order_product`
--
ALTER TABLE `inventory_order_product`
  MODIFY `inventory_order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
