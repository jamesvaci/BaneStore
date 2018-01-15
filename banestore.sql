-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 07:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `pr_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product_name`, `product_quantity`, `pr_price`) VALUES
(103, 9, 5, 'ivan', 1, 24000),
(134, 8, 15, 'I am awesome', 1, 11558),
(135, 8, 5, 'ivan', 1, 24000),
(136, 8, 10, 'YouTube', 1, 11558),
(137, 8, 13, 'I am awesome', 1, 55000),
(138, 8, 16, 'Something', 1, 8000),
(204, 1, 13, 'I am awesome', 1, 55000),
(208, 7, 13, 'I am awesome', 1, 55000),
(209, 7, 10, 'YouTube', 1, 11558),
(210, 7, 5, 'ivan', 1, 24000),
(211, 7, 15, 'I am awesome', 1, 11558),
(212, 7, 16, 'Something', 1, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(3) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `pr_desc` varchar(255) NOT NULL,
  `pr_price` int(11) NOT NULL,
  `pr_new_price` int(11) NOT NULL,
  `pr_cat` varchar(255) NOT NULL,
  `pr_pic1` varchar(255) NOT NULL,
  `pr_pic2` varchar(255) NOT NULL,
  `pr_pic3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `pr_desc`, `pr_price`, `pr_new_price`, `pr_cat`, `pr_pic1`, `pr_pic2`, `pr_pic3`) VALUES
(5, 'ivan', 'Well lets start this thing at that', 24000, 0, 'Super nova kupatila', 'milano.JPG', '', ''),
(10, 'YouTube', 'something something something dark side', 11558, 0, 'Prrrrr', 'Abs.JPG', '', ''),
(13, 'I am awesome', 'boobs', 55000, 0, 'meh', '01 - EghCPNr.jpg', '', ''),
(15, 'I am awesome', 'something something something dark side', 11558, 0, 'Something', '01 - KbnLHLo.jpg', '', ''),
(16, 'Something', 'past', 8000, 0, 'Kupatila', '03 - qPJ54mY.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(5) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `city`, `address`, `number`, `phone`, `email`, `password`, `type`) VALUES
(7, 'Antonij', 'Vaci', 'Beograd', 'Jurija gagarina', 55, 652471399, 'antonija.vaci@gmail.com', '$2y$10$lpfkMN2/XgcWH0pvgEgDJOKsHdyS7Icma50huNlZhNUDRS31zbJAO', 'user'),
(8, 'Ivan', 'Vaci', '', '', 0, 0, 'vaci_ivan@yahoo.com', '$2y$10$EKR1.2.AptIl.cBFnHVn3etXwvk/60eiTPoGR9cr2pzSm01FTYPeC', 'admin'),
(9, 'Branko', 'Vaci', 'Subotica', 'Batiska', 34, 655089300, 'branko.vaci@gmail.com', '$2y$10$tcWReAHasH5NqsYw/nEEPurj8Lxz2Dex.vTgA6yV6qQAsY3HOQmdC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
