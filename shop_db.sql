-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 07:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `subject`, `email`, `message`) VALUES
(3, 'user11', 'asd', 'user11@gmail.com', 'qsawdwdwdwdwdwefwefecf'),
(4, 'user10', 'fuck now', 'user10@gmail.com', 'Im werido,,,, I say,fuck now'),
(5, 'user10', 'fuck now', 'user10@gmail.com', 'Im werido,,,, I say,fuck now'),
(6, 'user10', 'dasiniu', 'dasini@gmail.com', 'dasini');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 12, 'S.M.D.Sanka Siriwardhana', '121312435454', 'user10@gmail.com', 'cash on delivery', 'flat no. , 289/2 Thillawala Road,Lunuwila East,Lunuwila, Lunuwila, Sri Lanka - ', ', test p1 (2) ', 30, '05-Nov-2022', 'completed'),
(3, 12, 'S.M.D.Sanka Siriwardhana', '1213', 'sankasiriwardhanadeg@gmail.com', 'cash on delivery', 'flat no. , 289/2 Thillawala Road,Lunuwila East,Lunuwila, Lunuwila, Sri Lanka - ', ', asd (1) , test product 3 (1) , product 8 (1) , test p1 (1) , tg3 (1) ', 5291, '07-Nov-2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category`) VALUES
(13, 'Hoodies', 18, 'Hoodies.jpg', 'Mens'),
(14, 'Jeans', 34, 'Jeans.jpeg', 'Mens'),
(15, 'Men Cap', 9, 'men cap.jpg', 'Mens'),
(16, 'Men casual Shoes', 26, 'Men Casual Shoes.jpg', 'Mens'),
(17, 'Men Jacket', 18, 'Men jacket.jpg', 'Mens'),
(18, 'Men Shirt', 12, 'Men Shirt.jpg', 'Mens'),
(19, 'watch', 80, 'Watch.jpg', 'Mens'),
(20, 'Perfect-Wedding-Suit', 28, 'Perfect-Wedding-Suit.jpg', 'Mens'),
(21, 'Bohemian Dress', 34, 'Bohemian Dress.jpg', 'Womens'),
(22, 'Boho Dress', 23, 'Boho Dress.jpg', 'Womens'),
(23, 'Wedding Dress', 56, 'Wedding Dress.jpg', 'Womens'),
(24, 'women Swimsuit', 14, 'women Swimsuit.jfif', 'Womens'),
(25, 'Girls pants', 12, 'Girls pants.jfif', 'Kids'),
(26, 'Sports Wear', 15, 'Sports Wear.jfif', 'Kids'),
(27, 'Pillows', 8, 'Pillows.jpg', 'Home & Living'),
(28, 'tg1', 15, 'kids sports cloths.jpg', 'Gift Card'),
(29, 'giftcard 2', 600, 'kids t shirt.jpg', 'Gift Card'),
(30, 'tg3', 5000, 'Romper.jfif', 'Gift Card');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'test2', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(3, 'sanka', 'sanka@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'sanka1', 'sanka1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'test6', 'test6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(6, 'test7', 'test7@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(7, 'admin1', 'admin1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 'admin'),
(9, 'admin3', 'admin3@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(10, 'test user1', 'testuser1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 'user'),
(12, 'user10', 'user10@gmail.com', '990d67a9f94696b1abe2dccf06900322', 'user'),
(13, 'admin10', '123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(14, 'user11', 'user11@gmail.com', '03aa1a0b0375b0461c1b8f35b234e67a', 'user'),
(15, 'user20', 'user20fucker@gmail.com', '10880c7f4e4209eeda79711e1ea1723e', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_name` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `psw_confirm` varchar(255) NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
