-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 01:59 PM
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
-- Database: `hariomphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `parent_category`) VALUES
(7, 'electronics', 0),
(9, 'home products ', 0),
(11, 'retails ', 0),
(12, 'products home', 0),
(13, 'mobiles for students', 0),
(14, 'transportation for people', 0),
(15, '<br /><b>Warning</b>:  Undefined variable $check_edit in <b>C:xammphtdocshariomphpadminproducts_operat.php</b> on line <b>73</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xammphtdocshariomphpadminproducts_oper', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_category`, `image`, `quantity`, `price`, `product_description`) VALUES
(20, ' computer', 0, '2_13-06-24.png', 30, 30000, ''),
(21, ' computer', 0, '2_13-06-24.png', 30, 30000, ''),
(22, ' computer', 0, '2_13-06-24.png', 30, 30000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `address`, `is_admin`) VALUES
(1, 'ravindra', '12345', '', 0),
(2, 'ravindra', '12345', '', 0),
(3, 'superadmin@gmail.com', '123456', '', 1),
(6, 'ravindra', '12345', '', 0),
(7, 'ravindra', '12345', '', 0),
(8, 'ravindra', '12345', '', 0),
(9, 'ravindra', '12345', '', 0),
(10, 'ravindra', '12345', '', 0),
(11, 'ravindra', '12345', '', 0),
(12, 'ravindra', '12345', '', 0),
(13, 'ravindra', '12345', '', 0),
(14, 'ravindra', '12345', '', 0),
(15, 'ravindra', '12345', '', 0),
(16, 'ravindra', '12345', '', 0),
(17, 'ravindra', '12345', '', 0),
(18, 'ravindra', '12345', '', 0),
(20, 'sanwebso', '12345', '', 0),
(21, 'sanwebso', '12345', '', 0),
(22, 'abtechrfepair1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
