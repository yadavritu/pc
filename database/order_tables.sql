-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 07:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('Online','COD') NOT NULL,
  `flat_no` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `distance` int(11) NOT NULL,
  `amount` double(12,2) NOT NULL,
  `shipping_charge` double(12,2) NOT NULL,
  `payment_status` enum('Pending','Fail','Paid') NOT NULL DEFAULT 'Pending',
  `status` enum('Pending','Accepted','Rejected','Delivered','Completed') NOT NULL DEFAULT 'Pending',
  `transaction_id` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type`, `flat_no`, `address`, `landmark`, `zipcode`, `latitude`, `longitude`, `distance`, `amount`, `shipping_charge`, `payment_status`, `status`, `transaction_id`, `created`) VALUES
(1, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 315.27, 14.57, 'Paid', '', '1da5s4d5s45as4d5', '0000-00-00 00:00:00'),
(2, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 300.70, 14.57, 'Fail', '', 'dasda', '2018-04-20 00:28:26'),
(3, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 955.30, 14.57, 'Pending', 'Pending', '', '2018-04-20 02:02:13'),
(4, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 955.30, 14.57, 'Pending', 'Pending', '', '2018-04-20 02:10:42'),
(5, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 955.30, 14.57, 'Pending', 'Pending', '', '2018-04-20 02:10:53'),
(6, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 955.30, 14.57, 'Pending', 'Pending', '', '2018-04-20 02:14:56'),
(7, 6, 'Online', '14', 'D.k. Nagar', 'Near Naher', '394210', '21.180999', '72.864102', 2457, 455.90, 14.57, 'Pending', 'Pending', '', '2018-04-20 02:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(12,2) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_img`, `quantity`) VALUES
(1, 1, 4, 'VEGGIE BURGER', 155.20, ' /uploads/pro_img/download (1).jpg', 1),
(2, 1, 2, 'CHEESE BURGER', 145.50, ' /uploads/pro_img/4Cheeseburger-On-Wooden-Table-ed.jpg', 1),
(3, 2, 4, 'VEGGIE BURGER', 155.20, ' /uploads/pro_img/download (1).jpg', 1),
(4, 2, 2, 'CHEESE BURGER', 145.50, ' /uploads/pro_img/4Cheeseburger-On-Wooden-Table-ed.jpg', 1),
(5, 3, 27, 'OREGANO', 475.30, ' /uploads/pro_img/gi9download (3).jpg', 1),
(6, 3, 30, 'MARGHERITA', 480.00, ' /uploads/pro_img/m5PizzaMargherita_xhm1p.jpg', 1),
(7, 4, 27, 'OREGANO', 475.30, ' /uploads/pro_img/gi9download (3).jpg', 1),
(8, 4, 30, 'MARGHERITA', 480.00, ' /uploads/pro_img/m5PizzaMargherita_xhm1p.jpg', 1),
(9, 5, 27, 'OREGANO', 475.30, ' /uploads/pro_img/gi9download (3).jpg', 1),
(10, 5, 30, 'MARGHERITA', 480.00, ' /uploads/pro_img/m5PizzaMargherita_xhm1p.jpg', 1),
(11, 6, 27, 'OREGANO', 475.30, ' /uploads/pro_img/gi9download (3).jpg', 1),
(12, 6, 30, 'MARGHERITA', 480.00, ' /uploads/pro_img/m5PizzaMargherita_xhm1p.jpg', 1),
(13, 7, 4, 'VEGGIE BURGER', 155.20, ' /uploads/pro_img/download (1).jpg', 2),
(14, 7, 2, 'CHEESE BURGER', 145.50, ' /uploads/pro_img/4Cheeseburger-On-Wooden-Table-ed.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
