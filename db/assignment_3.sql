-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2024 at 03:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` text,
  `address` varchar(255) DEFAULT NULL,
  `author_id` int NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `author_id`, `created_date`, `updated_date`) VALUES
(1, 'paritosh', 'pr@gmail.com', '9888898989', 'model town', 2, '2024-02-07 16:35:32', '2024-02-07 16:35:32'),
(4, 'jgug', 'jg@gmail.com', '9788970987', 'model town', 2, '2024-02-07 17:51:18', '2024-02-07 17:51:18'),
(7, 'taran ', 'ts@gmail.com', '8787878787', 'model tower', 2, '2024-02-07 17:53:46', '2024-02-07 17:53:46'),
(8, 'gurkawal', 'gk@gmail.com', '89898989', 'model town', 2, '2024-02-07 17:54:13', '2024-02-07 17:54:13'),
(9, 'tarun', 'ty@gmail.com', '8788789809', 'model town', 2, '2024-02-07 17:54:52', '2024-02-07 17:54:52'),
(10, 'mandeep', 'ms@gmail.com', '987888789', 'jharkhand', 2, '2024-02-07 17:55:18', '2024-02-07 17:55:18'),
(11, 'pritam', 'pk@gmail.com', '98987998', 'civil lines', 3, '2024-02-07 17:57:41', '2024-02-07 17:57:41'),
(12, 'priya', 'py@gmail.com', '9797987887', 'MM', 3, '2024-02-07 17:58:22', '2024-02-07 17:58:22'),
(13, 'rupesh', 'ry@gmail.com', '7879789099', 'Chak sethwal, Rani ki sarai', 3, '2024-02-07 17:58:51', '2024-02-07 17:58:51'),
(14, 'pintu', 'pk@gmail.com', '98978979', 'kasabad', 3, '2024-02-07 17:59:13', '2024-02-07 17:59:13'),
(15, 'Anku Yadav', 'ankityadavdc@gmail.com', '09140088783', 'Maya nagar colony,Kasabad, Rani ki sarai', 3, '2024-02-07 18:56:07', '2024-02-07 18:56:07'),
(16, 'yuvraj', 'yu@gmail.com', '89779878998', 'HARGOBIND pura', 3, '2024-02-07 21:19:56', '2024-02-07 21:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `phone` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int NOT NULL DEFAULT '1',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_date`, `updated_date`, `is_active`, `image`) VALUES
(1, 'Ankit Yadav', 'ankityadavdc@gmail.com', 'www', '9009009009', '2024-02-06 21:09:03', '2024-02-06 21:09:03', 0, NULL),
(2, 'Amit Yadav', 'amityadav@gmail.com', 'amity', '9140088783', '2024-02-06 21:14:37', '2024-02-06 21:14:37', 1, NULL),
(3, 'tarun', 'ty@gmail.com', '1234', '7888381864', '2024-02-06 21:21:01', '2024-02-06 21:21:01', 1, NULL),
(10, 'Amit Yadav', 'ty@gmail.com', 'jhhjhb', '9140088783', '2024-02-15 14:30:35', '2024-02-15 14:30:35', 1, '1707987635.jpg'),
(11, 'legend', 'officialankit1998@gmail.com', 'oiijoijsi', '9140088783', '2024-02-15 14:33:41', '2024-02-15 14:33:41', 1, '1707987821.jpg'),
(12, 'om kapur', 'officialankit1998@gmail.com', 'iuhiuh', '9140088783', '2024-02-15 14:51:55', '2024-02-15 14:51:55', 1, '1707988915.jpg'),
(13, 'orry', 'officialankit1998@gmail.com', 'ghhjghjgb', '9140088783', '2024-02-15 14:55:34', '2024-02-15 14:55:34', 1, '1707989134.jpg'),
(16, 'Ankit Yadav', 'officialankit1998@gmail.com', 'iuiuui', '900090909', '2024-02-24 17:07:16', '2024-02-24 17:07:16', 1, '1708774636.jpg'),
(17, 'march', 'ms@gmail.com', 'nklfdkf', '8098098000', '2024-02-24 18:06:30', '2024-02-24 18:06:30', 1, '1708778190.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
