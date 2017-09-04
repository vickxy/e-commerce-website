-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2017 at 06:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `p_price` float NOT NULL,
  `p_cod` int(2) NOT NULL,
  `p_about` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_image`, `p_price`, `p_cod`, `p_about`, `type`) VALUES
(1, 'abc', '/assests/image/image1.jpg', 0, 0, '', 'type1'),
(2, 'def', '/assests/image/image2.jpg', 0, 0, '', 'type1'),
(3, 'ghi', '/assests/image/image3.jpg', 0, 0, '', 'type1'),
(4, 'jkl', '/assests/image/image4.jpg', 0, 0, '', 'type2'),
(5, 'mno', '/assests/image/image5.jpg', 0, 0, '', 'type2'),
(6, 'pqr', '/assests/image/image6.jpg', 0, 0, '', 'type2'),
(7, 'stu', '/assests/image/image7.jpg', 0, 0, '', 'type2'),
(8, 'vwx', '/assests/image/image8.jpg', 0, 0, '', 'type3'),
(9, 'yza', '/assests/image/image1.jpg', 0, 0, '', 'type3'),
(10, 'bcd', '/assests/image/image2.jpg', 0, 0, '', 'type3'),
(11, 'efg', '/assests/image/image3.jpg', 0, 0, '', 'type3');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
