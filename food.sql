-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_comment`
--

CREATE TABLE `food_comment` (
  `id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_comment`
--

INSERT INTO `food_comment` (`id`, `cname`, `com`) VALUES
(18, 'Sourish das', 'yesterday I went to the restaurant and I ordered a mutton biriyani it was jus amazing '),
(19, 'Deep Das', 'The ambiance and the quality of food both are awesome');

-- --------------------------------------------------------

--
-- Table structure for table `food_web`
--

CREATE TABLE `food_web` (
  `id` int(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_web`
--

INSERT INTO `food_web` (`id`, `r_name`, `email`, `pass`) VALUES
(3, 'Deep Das', 'deep@gmail.com', 'deep123'),
(4, 'Ashok Das', 'ashok@gmail.com', 'ash123');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `items`, `price`) VALUES
(1, 'Roti', 4),
(2, 'Plain Paratha', 8),
(3, 'Puri', 6),
(4, 'Plain Naan', 50),
(5, 'Tandori Roti', 20),
(6, 'Mirchi Paratha', 20),
(7, 'Lachha Paratha', 8),
(8, 'Plain Rice', 30),
(9, 'Jeera Rice', 80),
(10, 'Veg Fried Rice', 100),
(11, 'Chicken Fried Rice', 150),
(12, 'Mutton Fried Rice', 190),
(13, 'Egg Fried Rice', 90),
(14, 'Prawn Fried Rice', 110),
(15, 'Schezwan Fried Rice', 130),
(16, 'Chicken Biryani', 130),
(17, 'Mutton Biryani', 170),
(18, 'Butter Naan', 60),
(19, 'Egg biriyani', 100),
(20, 'Prawn Biryani', 120),
(21, 'Paneer Biryani', 140),
(22, 'Lemon Rice', 100),
(23, 'Polao', 140),
(24, 'Ghee Rice', 100),
(25, 'Spicy  Chicken', 130),
(26, 'Dry Chilli Chicken', 140),
(27, 'Gravy Chilli Chicken', 130),
(28, 'Chicken Curry', 140),
(29, 'Chicken  Bharta', 120),
(30, 'Kadai Chicken', 180),
(31, 'Murgh Musallam', 300),
(32, 'Chicken Tikka Masala', 140),
(33, 'Butter Chicken', 190),
(34, 'Chicken Tandoori', 180),
(35, 'Mutton Curry', 220),
(36, 'Mutton Kosa', 200),
(37, 'Egg Curry', 220),
(38, 'Chilli Panner', 210),
(39, 'Panner Butter Masala', 230),
(40, 'Panner Tikka', 180);

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `id` int(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order1` varchar(255) NOT NULL,
  `quantity1` int(255) NOT NULL,
  `order2` varchar(255) NOT NULL,
  `quantity2` int(255) NOT NULL,
  `addresss` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_comment`
--
ALTER TABLE `food_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_web`
--
ALTER TABLE `food_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_comment`
--
ALTER TABLE `food_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `food_web`
--
ALTER TABLE `food_web`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
