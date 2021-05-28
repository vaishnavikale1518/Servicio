-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 07:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `username` varchar(120) NOT NULL,
  `category` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `area` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'active/inactive',
  `token` varchar(255) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `category`, `rating`, `area`, `email`, `mobile`, `password`, `cpassword`, `status`, `token`, `image`) VALUES
(1, 'Shruti Furniture', 'Carpenter', 3.4, 'Dubai', 'shruti@gmail.com', '5252525252', '', '', 'active', '', '1.jpg'),
(2, 'Auswalt Washing Centre', 'Car Wash', 4.2, 'Germany', 'auswalt@gmail.com', '8585685478', '', '', 'active', '', '1.jpg'),
(3, 'Akash Plumbing Services', 'Plumber', 3.8, 'Wagholi', 'akash@gmail.com', '0000000000', '', '', 'active', '', '1.jpg'),
(4, 'Teddy Phones', 'Gadgets', 0, 'Dubai', 'teddy@gmail.com', '7878787878', '', '', 'active', '', '1.jpg'),
(5, 'Vaishnavi Supermarket', 'Groceries', 4.5, 'Wagholi', 'vaishnavi@gmail.com', '3333333333', '', '', 'active', '', '1.jpg'),
(6, 'Nikhil Electrical Services', 'Electrician', 0, 'Wagholi', 'nikhil@gmail.com', '1010101010', '', '', 'active', '', '1.jpg'),
(7, 'RG IT Services', 'Others', 0, 'Germany', 'rg@gmail.com', '2222222222', '', '', 'active', '', '1.jpg'),
(8, 'Ace Washing Center And Cares', 'Car Wash', 0, 'Viman Nagar', 'ace@gmail.com', '6549873210', '', '', 'active', '', '1.jpg'),
(9, 'Raju TV And Gadgets', 'Gadgets', 0, 'France', 'raju@gmail.com', '8989898989', '', '', 'active', '', '1.jpg'),
(10, 'Riddhi Furniture', 'Carpenter', 0, 'Dubai', 'riddhi@gmail.com', '3232323232', '', '', 'active', '', '1.jpg'),
(11, 'Sankarshan Plumbers', 'Plumber', 3.2, 'France', 'sankarshan@gmail.com', '1111111111', '', '', 'active', '', '1.jpg'),
(12, 'Shivkumar Vegetables And Fruits', 'Vegetables', 0, 'Viman Nagar', 'shiv@gmail.com', '1234567890', '', '', 'active', '', '1.jpg'),
(13, 'Raj Super Complex', 'Groceries', 0, 'Russia', 'raj@gmail.com', '4545454545', '', '', 'active', '', '1.jpg'),
(14, 'Santosh Electical Services And Fitter', 'Electrician', 0, 'United States', 'santosh@gmail.com', '6666666666', '', '', 'active', '', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
