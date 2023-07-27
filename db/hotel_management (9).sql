-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 09:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `check_in` datetime(6) NOT NULL,
  `check_out` datetime(6) NOT NULL,
  `status` varchar(6) NOT NULL,
  `amount` int(11) NOT NULL,
  `p_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Hilly'),
(2, 'VIP'),
(3, 'City');

-- --------------------------------------------------------

--
-- Table structure for table `comment_n_review`
--

CREATE TABLE `comment_n_review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_n_review`
--

INSERT INTO `comment_n_review` (`id`, `name`, `email`, `picture`, `hotel_id`, `comment`, `rating`, `comment_time`) VALUES
(1, 'sadafdiyar', 'my@gmail.com', '', 29, 'very good great experince', '3', '2022-12-15 23:04:18'),
(2, 'Sitara', 'dsheiosldkm', '', 29, 'well done great hospitility', '4', '2022-12-15 23:16:29'),
(3, 'khushbu', 'vdiwedl', '', 37, 'great am impressed ', '3', '2022-12-16 00:27:12'),
(4, 'summiya', 'my@gmail.com', '', 38, 'very great experince', '3', '2022-12-18 22:29:51'),
(5, 'huma', 'this@gmail.com', '', 37, 'coisckjdb oijas', '2', '2022-12-18 22:39:49'),
(18, 'xyz', 'ssaabbee2078@gmail.com', '', 37, 'impressive', '5', '2022-12-18 23:13:20'),
(19, 'xyz', 'ssaabbee2078@gmail.com', '', 37, 'impressive', '4', '2022-12-18 23:13:52'),
(20, 'Fatima', 'this@gmail.com', '', 39, 'great experince', '3', '2022-12-18 23:14:54'),
(23, 'Ahmad', 'adilkhan12163@gmail.com', '', 27, 'great experience ', '2', '2022-12-19 00:29:55'),
(27, 'Awais', 'diyarsadaf@gmail.com', '', 27, 'nice', '3', '2022-12-19 02:20:26'),
(29, 'Emaan', 'my@gmail.com', '', 39, 'Comment zahid', '2', '2022-12-19 02:48:31'),
(37, 'xyz', 'my@gmail.com', '', 27, 'great services', '4', '2022-12-26 03:32:38'),
(39, 'waqas', 'this@gmail.com', '', 27, 'great', '3', '2022-12-26 03:38:43'),
(40, 'saba', 'ssaabbee2078@gmail.com', '', 29, 'great', '4', '2022-12-26 03:40:30'),
(41, 'Mehmood', 'ssaabbee2078@gmail.com', '', 29, 'nice', '3', '2022-12-26 03:43:31'),
(42, 'Emaan', 'my@gmail.com', '', 39, 'djkhjlsidj', '5', '2022-12-26 22:49:10'),
(43, 'Emaan', 'my@gmail.com', '', 27, 'jdvidm', '3', '2022-12-26 23:06:17'),
(44, 'zarak', 'this@gmail.com', '', 37, 'stunning', '4', '2022-12-26 23:07:59'),
(49, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'cijsvksjeoidkm', '4', '2022-12-27 03:05:04'),
(50, 'sawera', 'this@gmail.com', '', 27, 'great', '1', '2022-12-27 03:12:13'),
(51, 'zahid', 'this@gmail.com', '', 27, 'testing', '1', '2022-12-27 03:14:30'),
(52, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:17:10'),
(53, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:21:34'),
(54, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:22:10'),
(55, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:23:10'),
(56, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:23:47'),
(57, 'Sadaf diyar', 'diyarsadaf@gmail.com', '', 27, 'great', '2.5', '2022-12-27 03:24:44'),
(58, 'Hilal Salarzi', 'hilalahmad14966@gmail.com', '', 39, 'nice hotel\r\n', '4', '2022-12-27 15:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `cnic`, `email`, `contact`, `address`) VALUES
(1, 'Alamdar Ali', 'male', '21484-3432344-5', 'alamdarali@gmail.com', '03093211456', 'Parchinar '),
(2, 'Huda', 'female', '21232-3344576-7', 'huda@gmail.com', '03093211454', 'Peshawar, Pakistan'),
(3, 'Huda', 'other', '21232-3344576-7', 'huda@gmail.com', '03108899100', 'Peshawar, Pakistan'),
(4, 'Umar Zeb', 'male', '21505-342432423-6', 'umarzeb@gmail.com', '44555555555552', 'Arbab Road, University Road, Peshawar'),
(21, 'Asif Khan', 'other', '21505-342432423-6', 'asifkhan@gmail.com', '03024412344', 'Khyber Agency'),
(22, 'abbas khan', 'male', '15306-6222679-7', 'hilalahmad14966@gmail.com', '909090909', 'st5');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `province_id`) VALUES
(2, 'Dir Lower', 1),
(7, 'Dir upper', 1),
(8, 'peshawar', 1),
(9, 'Lahore', 2),
(10, 'Lahore', 2),
(11, 'Lahore', 2),
(12, 'Multan', 2),
(13, 'District at a glance Quetta', 4),
(14, 'swat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `hotel_picture` varchar(255) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `district_id`, `name`, `picture`, `category_id`, `latitude`, `longitude`, `phone`, `address`, `comment`) VALUES
(1, 14, 'legend hotel', 'test cricket.jpg', 1, '232323', '23232323323', '2323323', 'PESHAWAR HAYATABAT', 'great');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `id` int(11) NOT NULL,
  `meeting_room` varchar(255) NOT NULL,
  `free_wifi` varchar(100) NOT NULL,
  `fitness` varchar(100) NOT NULL,
  `car_parking` varchar(100) NOT NULL,
  `swimming_pool` varchar(100) NOT NULL,
  `security` varchar(100) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `hotel_id`) VALUES
(1, 'Business', 27),
(2, 'Economical', 27),
(3, 'Luxury', 29);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(1, 'KPK'),
(2, 'Punjab'),
(3, 'Sindh'),
(4, 'Balochistan');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `contract_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `hotel_id`, `price`, `status`, `contract_id`) VALUES
(1, 'g3', 1, 50000, 'Available', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `signupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `role_id`, `status`, `name`, `username`, `email`, `password`, `contact`, `image`, `address`, `signupdate`) VALUES
(1, 1, 1, 'Hilal Salarzi', 'admin', 'admin@gmail.com', 'admin', '0092 3428890064', '2021-10-14-12-13-48Asset-1@2x.png', 'adress', '2021-08-13'),
(4, 1, 1, 'testing', 'test', 'test@gmail.com', 'admin', '0092 3428890064', '2021-09-07-09-27-06exp.png', 'adress', '2021-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `cnic` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fathername`, `email`, `password`, `address`, `phone`, `cnic`) VALUES
(1, 'Hilal Salarzi', 'ahmad', 'admin@gmail.com', 'admin', 'st5', 334222222, 3434343),
(2, 'shah hassan', 'ahmad', 'admin@gmail.com', 'admin', 'st5', 334222222, 2147483647),
(3, 'qwerwr', 'qwerwerw', 'admin@com.pk', '2525', 'st5', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_n_review`
--
ALTER TABLE `comment_n_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_n_review`
--
ALTER TABLE `comment_n_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
